<?php 
require 'setup.php';


$username1 = $_POST['user'];
$password1 = $_POST['password'];


require 'config.php';

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM user WHERE name='$username1' AND password='$password1' ";
$result = $conn->query($sql);

$row_cnt = mysqli_num_rows($result);



if($row_cnt === 0){
	header("Location: login.php");
}
else{
	setAccess($username1);
	header('Location: admin/index.php');
}



 ?>

