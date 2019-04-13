<?php
$conn = mysqli_connect("localhost","root","","data_gov");
if(isset($_POST['submit']))
{
	$district=$_POST['district'];
	$password=$_POST['password'];
	$query="SELECT * FROM admin_details WHERE district='".$district."' AND  password = '".$password."' ";
	$sql=mysqli_query($conn,$query);
	if(mysqli_num_rows($sql)!=0)
	{
		session_start();
         $_SESSION["logged_in"] = true; 
         $_SESSION["district"] = $district; 
		header('Location:admin.php');
	}
	
}

?>