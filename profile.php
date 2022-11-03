<?php
// database connection code
if(isset($_POST['txtAge']))
{

$con = mysqli_connect('localhost', 'root', '','db_form');


$id = $_POST['id'];
$txtAge = $_POST['txtAge'];
$txtDOB = $_POST['txtDOB'];
$txtContact = $_POST['txtContact'];


$sql = "UPDATE `form` SET Age=$txtAge,DOB='$txtDOB',contact=$txtContact WHERE Id=$id";

 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo json_encode(true);
}
}
else
{
	//echo "Are you a genuine visitor?";
	echo json_encode(false);
	
}
?>