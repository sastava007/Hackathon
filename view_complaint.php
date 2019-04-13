<?php 

$conn = mysqli_connect("localhost","root","","data_gov");
$query="SELECT district, description FROM complaint ORDER BY district ASC";
$result=mysqli_query($conn,$query);

while ($row = $result->fetch_assoc())
{
    echo $row['district']."      ".$row['description']."<br>";	
}




 ?>