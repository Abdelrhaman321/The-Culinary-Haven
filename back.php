
<?php 
require_once 'sa.php';
$conn = mysqli_connect("localhost", "root", "", "data food1");

echo "<pre>";
print_r($_POST);
echo "</pre>";

$name = $_POST["name"];

$phone = $_POST["phone"];

$person = $_POST["person"];

$gender = $_POST["gender"];

$time = $_POST["time"];

$message = $_POST["message"];

$query = "INSERT INTO mo (name, phone, person, gender, time, message)
 VALUES('$name', '$phone', '$person', '$gender', '$time', '$message')";
mysqli_query($conn, $query);

echo

"";
?>