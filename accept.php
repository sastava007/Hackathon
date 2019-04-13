<?php  
session_start();
$conn = mysqli_connect("localhost","root","","data_gov");

$id=intval($_GET['id']);
$query=mysqli_query($conn,"UPDATE complaint SET status=1 WHERE id= '".$id."' ");
if($query)
header('Location: admin.php');

?>