<?php 
checkAccess();

require '../config.php';

if(isset($_GET['page'])) {
    $page = $_GET['page'];
} else {
    $page = 'home';
}
 


$conn = mysqli_connect($servername, $username, $password, $dbname);



$sql = "SELECT * FROM pagecontent WHERE page = '$page'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();



$content = $row["content"];

if (empty($content)) {
    $content = 'Error, geen content aanwezig!';
}

