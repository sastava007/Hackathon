<?php

$conn = mysqli_connect("localhost","root","","data_gov");


if(isset($_POST['submit']))
{  
     $Fname = mysqli_real_escape_string($conn, $_POST['district']);
   
    $queries = mysqli_real_escape_string($conn, $_POST['complaint']);
    
    
    if( empty($Fname) || empty($queries)  )
    {
        header("Location: ../water.php?fields=empty");
        exit();
    }
     
           
             else{                   
                   $sql = "INSERT INTO complaint (district,description ) VALUES('$Fname','$queries');";
                    
                   $result=mysqli_query($conn, $sql);
                   if($result)
                    header('Location:water.php#sec3');
                                      
                 exit();
                 }                 
             
            
        
   
    
    
}
    else{
    echo "Unscessful";
    exit();
}
