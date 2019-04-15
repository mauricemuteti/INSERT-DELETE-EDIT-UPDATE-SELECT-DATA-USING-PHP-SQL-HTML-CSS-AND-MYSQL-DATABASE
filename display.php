<?php
include("db.php");




?>

<!DOCTYPE html>
<html>
<head>
	<title></title>

	<style type="text/css">
table {
	border:1px solid black;
	border-collapse: collapse;
}

td{
	border:1px solid black;
	padding: 10px;
}
	</style>

</head>
<body>
<table>

<tr>

<?php
$sel = "SELECT * FROM `insertdeleteedittable` ";
$qrydisplay = mysqli_query($connect, $sel);
while($row = mysqli_fetch_array($qrydisplay)){
	$id  =  $row['id'];
	$firstname  =  $row['firstname'];
	$lastname  =  $row['lastname'];
	$email  =  $row['email'];

	echo "<tr><td>".$id."</td><td>".$firstname."</td><td>".$lastname."</td><td>".$email."</td><td><a href='edit.php?edit=$id' >Edit</a></td><td><a href='delete.php?deleteid=$id' >Delete</a></td></tr>";


}

?>

</tr>
</table>
</body>
</html>