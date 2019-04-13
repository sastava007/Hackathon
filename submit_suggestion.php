<?php

$conn = mysqli_connect("localhost","root","","data_gov");


if(isset($_POST['submit']))
{  
     $district = mysqli_real_escape_string($conn, $_POST['district']);
     $c_id=mysqli_real_escape_string($conn, $_POST['c_id']);
        $email=mysqli_real_escape_string($conn, $_POST['email']);
    $suggestion = mysqli_real_escape_string($conn, $_POST['suggestion']);
    
    
    if( empty($email)  )
    {
        header("Location: water.php?fields=empty");
        exit();
    }
     
           
             else{                   
                   $sql = "INSERT INTO suggestions(c_id,district,email,suggestion) VALUES('$cid','$district',$email','$suggestion');";
                    
                   $result=mysqli_query($conn, $sql);
                   if($result)
                    header("Location:water.php#sec3");
                                      
                 exit();
                 }                 
             
            
        
   
    
    
}
else
{
    echo "Unscessful";
    exit();
}
