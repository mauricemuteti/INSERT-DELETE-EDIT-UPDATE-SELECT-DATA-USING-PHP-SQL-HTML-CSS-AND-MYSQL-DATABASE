<?php
include("db.php");


$getid = $_GET['deleteid'];

$sel = "DELETE FROM `insertdeleteedittable` WHERE `id` = '$getid'"; 
$qry = mysqli_query($connect, $sel);

if($qry) {
	header("location: insertdeleteedit.php");
}


?>