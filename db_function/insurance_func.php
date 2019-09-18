<?php
function getAllInsurance() {
    $link = new PDO("mysql:host=localhost; dbname=prakpw220191", 'root', "");
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "SELECT * FROM insurance ORDER BY id";
    $result = $link->query($query);
    return $result;}

function addInsurance($id){
    $link = new PDO("mysql:host=localhost; dbname=prakpw220191", 'root', "");
    $link->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
    $link->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $link->beginTransaction();
    $query = "INSERT INTO insurance(id) VALUES (?)";
    $statement = $link->prepare($query);
    $statement->bindParam(1, $id,PDO::PARAM_STR);
    if ($statement->execute()){
        $link->commit();
    }
    else{
        $link->rollBack();
    }
    $link = null;

}
?>