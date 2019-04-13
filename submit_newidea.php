<?php  

$conn = mysqli_connect("localhost","root","","data_gov");
if(isset($_POST['submit']))
{
	$district=$_POST['district'];
	$email=$_POST['email'];
	$idea=nl2br($_POST['idea']);
	$title=$_POST['title'];
	$name=$_POST['name'];

	$query="INSERT INTO ideas (district,name,email,idea,title) VALUES ('$district','$name','$email','$idea','$title')";
	$sql=mysqli_query($conn,$query);
	if($sql)
		header('Location:water.php');

}
else
echo "blank";




?>