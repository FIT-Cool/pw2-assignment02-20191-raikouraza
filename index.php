<?php
include_once 'db_function/patient_func.php';
include_once 'db_function/insurance_func.php';
?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="view/maincss.css">
    <link rel="stylesheet" type="text/css" href="view/datatables.min.css">
    <script src="view/datatables.js"> </script>

    <title>Rumah Sakit</title>
    <meta name="author" content="Arief(1772049)">
    <meta name="description" content="PHP Navigation and PHP Data Object(PDO)"
</head>
<br>
<body>
<div class="page">
    <header>
        <h2>Rumah Sakit</h2>
    </header>
    <nav>
        <ul id="mainMenu">
            <li><a href="?menu=hm">Home</a></li>
            <li><a href="?menu=at">About</a></li>
            <li><a href="?menu=ir">Insurance</a></li>
            <li><a href="?menu=pt">Patient</a></li>
        </ul>
    </nav>
    <main>
        <?php
        $targetMenu = filter_input(INPUT_GET, 'menu');
        switch ($targetMenu) {
            case 'hm':
                include_once 'view/home.php';
                break;
            case 'at':
                include_once 'view/about.php';
                break;
            case 'ir':
                include_once 'view/insurance.php';
                break;
            case 'pt':
                include_once 'view/patient.php';
                break;
            default:
                include_once 'view/home.php';
        }
        ?>
    </main>
</div>
<footer>
    Arief Kurniawan 2 &copy;2019
</footer>
</body>
<script>
    $(document).ready( function () {
        $('#myTable').DataTable();
    } );
</script>


</html>