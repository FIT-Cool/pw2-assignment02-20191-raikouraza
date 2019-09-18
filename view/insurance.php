<?php
$submitted = filter_input(INPUT_POST,'btnSubmit');
if(isset($submitted)){
    $id = filter_input(INPUT_POST,'txtInsurance');
    addInsurance($id);
}
?>

<form action="" method="POST">
    <table>
        <tr>
            <td></td>
            <td></td>
        </tr>
    </table>
</form>

<form action="" method="POST">
    <table>
        <tr>
            <td>New Insurance:</td>
            <td><input type="text"  name="txtInsurance" autofocus required placeholder="Masukan Nomor id Asuransi"><br></td>
            <td><input type="submit" name="btnSubmit"></td>
        </tr>
    </table>
</form>

<table id="myTable">
    <thead>
    <tr>
        <th>ID</th>
        <th>Name</th>
    </tr>

    </thead>
    <tbody>
    <?php
    $insurances = getAllInsurance();
    foreach($insurances as $insurance){
        echo '<tr>';
        echo '<td>'.$insurance['id'].'</td>';
        echo '<td>'.$insurance['name_class'].'</td>';
        echo'</tr>';
    }
    ?>
    </tbody>
</table>