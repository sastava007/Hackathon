<?php  
session_start();
$conn = mysqli_connect("localhost","root","","data_gov");

$id=intval($_GET['id']);
$email=$_GET['email'];

$query=mysqli_query($conn,"DELETE FROM ideas WHERE id='".$id."'  ");
if($query)
header('Location: admin.php');

?>