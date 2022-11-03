<?php
// database connection code
if(isset($_POST['txtUsername']))
{

$con = mysqli_connect('localhost', 'root', '','db_form');


$txtUsername = $_POST['txtUsername'];
$txtPasswd = $_POST['txtPasswd'];
$txtRePasswd = $_POST['txtRePasswd'];


$sql = "INSERT INTO `form` (`Id`, `Username`, `Passwd`, `RePasswd`) VALUES ('0', '$txtUsername', '$txtPasswd', '$txtRePasswd')";


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