<?php  
session_start();
$conn = mysqli_connect("localhost","root","","data_gov");

$id=intval($_GET['id']);
$query=mysqli_query($conn,"DELETE FROM complaint WHERE id='".$id."'  ");
if($query)
header('Location: admin.php');

?>