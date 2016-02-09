<?php 
require '/config/config.php';

$page = isset($_GET['page'])?$_GET['page']:'home';

$conn = mysqli_connect($servername, $username, $password, $dbname);

$sql = "SELECT * FROM pagecontent WHERE page = '$page'";
$result = $conn->query($sql);

$row = $result->fetch_assoc();

$content = $row["content"];

if (empty($content)) {
    $content = 'Error, er is geen content aanwezig!';
} else {
}


 ?>