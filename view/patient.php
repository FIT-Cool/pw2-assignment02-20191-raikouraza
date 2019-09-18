<?php
$submitted = filter_input(INPUT_POST, 'btnSubmit');
if (isset($submitted)) {
    $med_record_number = filter_input(INPUT_POST, 'txtMedRec');
    $citizen_id_number= filter_input(INPUT_POST, 'txtCitizenIdNumber');
    $name = filter_input(INPUT_POST, 'txtName');
    $address = filter_input(INPUT_POST, 'txtAddress');
    $birth_place = filter_input(INPUT_POST, 'txtBirthPlace');
    $birth_date = filter_input(INPUT_POST, 'txtBirth_Date');
    $insurance_id = filter_input(INPUT_POST, 'txtInsurance_id');
    addPatient($med_record_number,$citizen_id_number,$name,$address,$birth_place,$birth_date,$insurance_id);
}
?>

<br>
<br>
<br>
<form action="" method="POST">
    <table>
        <tr>
            <td>New Medical Record Number:</td>
            <td><input type="text" name="txtMedRec" autofocus required placeholder="B-0000...."><br></td>
        </tr>
        <tr>
            <td>New Citizen Id Number :</td>
            <td><input type="text" name="txtCitizenIdNumber" autofocus required placeholder="1234567890122"><br></td>

        </tr>
        <tr>
            <td>New Name :</td>
            <td><input type="text" name="txtName" autofocus required placeholder="Atta Halilintar"><br></td>
        </tr>
        <tr>
            <td>New Address :</td>
            <td><input type="text" name="txtAddress" autofocus required placeholder="Jl....."><br></td>
        </tr>
        <tr>
            <td>New Birth Place :</td>
            <td><input type="text" name="txtBirthPlace" autofocus required placeholder="Birth Place"><br></td>
        </tr>
        <tr>
            <td>New Birth Date :</td>
            <td>
                <input type="date" name="txtBirth_Date" value="<?php echo date('Y-m-d'); ?>" />
                <br/></td>
        </tr>
        <tr>
            <td>Insurance Id :</td>
            <td><input type="number" name="txtInsurance_id" autofocus required placeholder="B-00000...."><br></td>

        </tr>
        <tr>
            <td></td>
            <td>
            <td><input type="submit" name="btnSubmit"></td>
            </td>
        </tr>

    </table>
</form>


<table id="myTable">
    <thead>
    <tr>
        <th>Medical Record Number</th>
        <th>Citizen id number</th>
        <th>Name</th>
        <th>Address</th>
        <th>Birth Place</th>
        <th>Birth Date</th>
        <th>Insurance Id</th>
    </tr>

    </thead>
    <tbody>
    <?php
    $patients = getAllPatient();
    foreach ($patients as $patient) {
        echo '<tr>';
        echo '<td>' . $patient['med_record_number'] . '</td>';
        echo '<td>' . $patient['citizen_id_number'] . '</td>';
        echo '<td>' . $patient['name'] . '</td>';
        echo '<td>' . $patient['address'] . '</td>';
        echo '<td>' . $patient['birth_place'] . '</td>';
        echo '<td>' . $patient['birth_date'] . '</td>';
        echo '<td>' . $patient['insurance_id'] . '</td>';
        echo '</tr>';
    }

    ?>
    </tbody>
</table>
