<?php
session_start();
if(!isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == false)
	header('Location:home.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css" href="admin.css">
</head>
<body>
	<a href="Logout.php"><button id="logout">LOGOUT</button></a>
	<img src="images/data_gov.png" style="width: 25%;margin-left: 40%;height: 250px;" />
		<?php
$conn = mysqli_connect("localhost","root","","data_gov");
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true)
{
	$district=$_SESSION["district"];
	$query="SELECT * FROM admin_details WHERE district=  '".$district."' ";
	$result=mysqli_query($conn,$query);

		while ($row=mysqli_fetch_assoc($result))
		{											
			echo "<div class='details'><h1>Details</h1><h3>District: ".$row['district']."</h3><h3>Name: ".$row['name']."</h3><h3>Email: ".$row['email']."</h3></div>";

		}

		echo "<b><h1 id='p1' >Pending Complaints</h1><br>";
		$query1="SELECT id,district,description FROM complaint WHERE status=0 AND district='".$district."'  ";
		$result1=mysqli_query($conn,$query1);

		echo "<div class='compl_view'>";

				while($row = mysqli_fetch_assoc($result1))
				{
				
			 	echo"<br><div class='row' style='padding:1vw;'><h3><b><br><b>District: </b>". $row['district']."</h3><p><h3><b>Problem:</b>".$row['description']."</h3><a href='accept.php?id=".$row['id']."'><button class='button1'>Accept</button></a>    <a href='reject.php?id=".$row['id']."'><button class='button2'>Reject</button></a> <br></p></div><br><br>";
			                                                      
				}
		echo "</div>";
		$result2=mysqli_query($conn,"SELECT id,title,idea,email FROM ideas WHERE status=0 AND district='".$district."'  ");
		echo "<b><h1 id='pending'>New Ideas</h1><br>";

		echo "<div class='idea_view'>";
		while($row1 = mysqli_fetch_assoc($result2))
				{
				
			 	echo"<br><div class='row1' style='padding:1vw;'><h3><b><br><b>Title: </b>". $row1['title']."</h3><p><h3><b>Idea:</b>".$row1['idea']."</h3><a href='accept_idea.php?id=".$row1['id']."&&email=".$row1['email']." '><button class='button1'>Accept</button></a>    <a href='reject_idea.php?id=".$row1['id']."&&email=".$row1['email']." '><button class='button2'>Reject</button></a> <br></p></div><br><br>";
			                                                      
				}
		echo "</div>";




}
?>
</body>
</html>