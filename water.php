<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    >
    <link rel="stylesheet" type="text/css" href="water.css">
  <script src="home.js"></script> 
   
    <title>Water</title>
</head>
<body>       
        
        <div id="content-wrap">
          
            <div id="navbar">
               <a href="#sec1"> <img src="images/data_gov.png"
                alt="LOGO" 
                 width="100px" height="65px"></a>
                <div class="Navbar">
                  
                    <ul class="Navbar">               
                        <li><a href="login.php" >OFFICER's LOGIN</a></li>
                        <li><a href="water.php" >POLLUTION CONTROL</a></li>
                        <li><a href="#sec4" >NEW IDEA</a></li>
                        <li><a href="#sec3">WINNERS</a></li>  
                        <!-- <li><a href="#sec2">AIM</a></li> -->
                        <li><a href="home.php">HOME</a></li>
                    </ul>
                 </div> 
                                 <div class="Navbar-small"></div>   
         </div>
        <section id="sec1" >

                
<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/poll4.jpeg" style="margin-left: 20%;width:60%;height:60vh;">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/poll8.jpg" style="margin-left: 20%;width:60%;height:60vh;" >
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/poll6.jpg" style="margin-left: 20%;width:60%;height:60vh;" >
  
</div>

</div>
<br>

<div id="dots" style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 4000); // Change image every 2 seconds
}
</script> 
                
          </section>
          <!-- <section id="sec2" >
                
               <div class="box1">    
                                                        
                       <p>Section2 <br>
                           POLLUTION POLLUTIONPOLLU TIONPOLLU TIONPOLLUTION POLLUTION 
                           POLLUTION POLLUTION 
                           POLLUTION POLLUTIONPOLLU TIONPOLLU TIONPOLLUTION POLLUTION 
                           POLLUTION POLLUTION 
                           POLLUTION POLLUTIONPOLLU TIONPOLLU TIONPOLLUTION POLLUTION 
                           POLLUTION POLLUTION 
                           POLLUTION POLLUTIONPOLLU TIONPOLLU TIONPOLLUTION POLLUTION 
                           POLLUTION POLLUTION 
                           POLLUTION POLLUTIONPOLLU TIONPOLLU TIONPOLLUTION POLLUTION 
                           POLLUTION POLLUTION 
                           POLLUTION POLLUTIONPOLLU TIONPOLLU TIONPOLLUTION POLLUTION 
                           POLLUTION POLLUTION 
                           POLLUTION POLLUTIONPOLLU TIONPOLLU TIONPOLLUTION POLLUTION 
                           POLLUTION POLLUTION                  
       
                       </p>                           
                  </div>
              
                
          </section> -->
            <div class="gotop">
                  <button onclick="topFunction()" id="myBtn" 
                  title="Go to top"><i class="fas fa-arrow-up"></i></button>
                </div>
          <section id="sec3" class="sect3">
           
            
              <button id="b1" onclick="myFunction()">View Complaints</button>
              

              <div id="myDIV">
                <?php  

                    $conn = mysqli_connect("localhost","root","","data_gov");

                            $query="SELECT district, description FROM complaint WHERE status=0 ORDER BY id DESC";
                                  $result=mysqli_query($conn,$query);

                                  /*echo "<table>
                                        <tr><th>District</th><th>Description</th></tr>" ;*/


                    echo "<div class='compl_view'>";
                          while ($row=mysqli_fetch_assoc($result))
                                  {
                                   echo"<div class='row' style='padding:1vw;'><b>District: </b>". $row['district']."<br><p><b>Problem:</b>".$row['description']."<br><br></p></div><br>";                     
                                  }
                                                  
                          echo "</div>";

               ?>
              </div>

  <script>
            function myFunction1() {
              var x = document.getElementById("myDIV");
              
              if (x.style.display === "block") {
                x.style.display = "none";
                
              } else {
                x.style.display = "block";
                
              }
            }
            </script>
              
             



            <script>
            function myFunction() {
              var x = document.getElementById("myDIV");
              if (x.style.display === "block") {
                x.style.display = "none";
              } else {
                x.style.display = "block";
              }
            }
            </script>

            <div class="formC">
              <h1>NEW COMPLAINT</h1>
                  <form action="submit_complaint.php" method="POST">                   
                    <label for="district">Select District</label>
                    <select id="district" name="district">
                      <option value="A">A</option>
                      <option value="B">B</option>
                      <option value="C">C</option>
                      <option value="D">D</option>
                    </select><br><br>
                    <label for ="queries" >Enter your Complaints here</label>
                    <textarea id="comp" name="complaint" placeholder="Enter your Complaints " required></textarea>
                         <br><br>
                <input type="submit" name="submit" value="Submit">
              </form>   
            </div>
            </section>
        
        </div>

              <section id="sec4" >
                              <div class="box2">    
                                                                      
                                  <p> <br>
                                      Have a new Idea that could help in improvement of the 
                                      existing government activities??
                                      Suggest and if it is accepted you can earn some money..                
                  
                                  </p>                           
                             </div>
                              <div class="formC">
                                  <form action="submit_newidea.php" method="POST">                     
                                      <h1>New Idea!!</h1>
                                    <label for="district">Select District</label>
                                    <select id="district" name="district">
                                      <?php 
                                        $conn = mysqli_connect("localhost","root","","data_gov");
                                        $query=mysqli_query($conn,"SELECT DISTINCT district FROM complaint");
                                        while($row=mysqli_fetch_assoc($query))
                                        {
                                          echo "<option value='".$row['district']."'>".$row['district']."</option>";
                                        }

                                      ?>
                                      <!-- <option value="A">A</option>
                                      <option value="B">B</option>
                                      <option value="C">C</option>
                                      <option value="D">D</option> -->
                                    </select><br><br>
                                    <label for="name">Enter your Name</label>
                                    <input type="text" name="name" id="name" placeholder="Enter your name" required><br>
                                    <label for="title">Enter your Title</label>
                                    <input type="text" name="title" id="title" placeholder="Enter your title" required><br>

                                    <label for="email">Enter your email</label>
                                    <input type="email" name="email" id="comp1" placeholder="Enter your email" required><br>
                                    <label for ="queries" >Drop Your Idea Here</label>
                                          <textarea id="comp" name="idea" placeholder="Drop Your Idea here" required></textarea>
                                             <br><br>
                                    <input type="submit" value="Submit" name="submit">
                                  </form>   
                                </div>
                 </section>






</body>
</html>