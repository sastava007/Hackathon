<!DOCTYPE html>
<html>
<head>
	<title>LOGIN</title>
	<style type="text/css">
		body{
			background-color: #f3f3f3;
		}
		.formC
{
    
    border: 1px solid #45a049;
    padding: 1%;
    float: right;
    width: 35%;
    box-sizing: border-box;
    margin-right: 30%;
    margin-top: 13%;
    box-shadow:2px 5px 10px rgba(161, 161, 161, 0.5);
}

input[type=text], input[type=email], select {
    float: right;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 5px;
    /* display: inline-block; */
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
  }
   input[type=password]{
    float: right;
    width: 100%;
    padding: 12px 20px;
    margin: 8px 5px;
    /* display: inline-block; */
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
   }
  
  input[type=submit] {
      float: right;
    width: 100%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    font-size: 15px;
    border-radius: 4px;
    cursor: pointer;
  }

  
  input[type=submit]:hover {
    background-color: #45a049;
  }
	</style>
</head>
<body>
		<div class="formC">
                    <form action="admin_login.php" method="POST">                     
                        <h1>Officer's Login!!</h1>
                      <label for="district">Select District</label>
                      <select id="district" name="district">
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="C">C</option>
                        <option value="D">D</option>
                      </select><br><br>
                      <!-- <label for="ID">Enter your ID</label>
                      <input type="text" name="ID" id="comp1" 
                      placeholder="Enter your ID"><br> -->
                      <label for ="password" >Enter your password</label>
                      <input type="password" name="password" id="comp1" 
                      placeholder="Enter your password"><br>    
                               <br><br>
                      <input type="submit" value="Submit" name="submit">
                    </form>   
                  </div>
</body>
</html>