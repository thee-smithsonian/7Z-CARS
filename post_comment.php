<?php 

$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "7zcars_db";

$connection = mysqli_connect($server_name,$db_username,$db_password,$db_name);

if(!$connection){
    // failed to connect
    die("Failed to connect");
}
echo('successful');

// capture form variables
$name = $_POST['name'];  
$phone = $_POST['phone'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT INTO `form`(`name`, `phone`, `email`, `subject`, `message`) VALUES ('".$name."','".$phone."','".$email."','".$subject."','".$message."')";

if (!$connection->query($sql)){
    // echo "error failed";
    die("error failed");  
} 

header("location: ./contact.html");

?>