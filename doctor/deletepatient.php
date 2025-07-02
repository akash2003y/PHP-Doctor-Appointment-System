<?php
include_once '../assets/conn/dbconnect.php';
// Get the variables.
$Patientid = $_POST['ic'];
// echo $appid;

$delete = mysqli_query($con,"DELETE FROM patient WHERE Patientid=$Patientid");
// if(isset($delete)) {
//    echo "YES";
// } else {
//    echo "NO";
// }



?>

