<?php
$link = mysqli_connect("localhost", "root", "", "viv");
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error()); }
 // Attempt insert query execution
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$sql = "INSERT INTO contacts (Name, Email, Subject, Message) VALUES ('$name', '$email', '$subject','$message')";
if(mysqli_query($link, $sql)){
    echo "<script>alert('Message Sending Success')</script>";
    header("Location: index.html");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>
