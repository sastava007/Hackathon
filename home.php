<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1,user-scalable=no"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" 
    integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf"
     crossorigin="anonymous">
    <style type="text/css">
      html{
    scroll-behavior: smooth; 
}
body{
    font-family: sans-serif;
    padding: 0;
    margin: 0;
    height: 100vh;
}

section{
    /* width: 100%; */
    height: 100vh;
    justify-content: center;
    align-items: center;
}

section:nth-child(even)
{
    
    z-index: 90;
    background: #dadff8;
}

section:nth-child(odd)
{
        background: white;
        /* box-shadow: 10px 10px 10px red; */
}
/* #sec1{
    margin-top: -20px;
} */
section:before{
    content: attr(data-text);
    color: #262626;
    font-size: 100px;
    text-transform: uppercase;
    justify-content: center;
    align-items: center;
}
#sec5,#sec4,#sec3,#sec2,#sec1 p{
    text-align: center;
    justify-content: center;
}
 #navbar{
     /* margin-top: -100px; */
    padding: 2px;
    box-sizing: border-box;
    height: 55px;
    background: rgb(161, 102, 149);
    background-image: linear-gradient(to left, rgb(65, 65, 245) , rgb(163, 64, 163), rgb(177, 100, 177));
    box-shadow: 1px 5px 10px rgb(189, 179, 179);
    z-index: 1;
    width: 100%;
    position: fixed;
    overflow: hidden;
}
#navbar img{
    margin-left: 10%;
    float: left;
}
#navbar li{
    /* text-decoration: none; */
    list-style: none;
    padding-right: 2%;
    float: right;
    position: relative;
} 
.Navbar li a{ 
    color: white;
    text-decoration: none;
    position: relative;
} 
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.formC
{
    
    border: 1px solid #45a049;
    padding: 1%;
    float: right;
    width: 35%;
    box-sizing: border-box;
    margin-right: 3%;
    margin-top: 3%;
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

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0px 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}
.analytics h2{
  margin-left: -15px;
  /* background-image: url('images/style1.png') no-repeat; */
  /* position: absolute; */

  padding: 5px 5px 5px 25px;
  width: 37%;
  text-align: left;
  background: #f7df08;
  font-size: 20px;

}
#dropdownMenuButton{
  border: none;
  font-weight: bold;
  margin-left: -15px;
  margin-top: 22px;
  padding: 5px 5px 5px 25px;
  width: 37%;
  text-align: left;
  background: #f7df08;
  font-size: 20px;
}
.analytics{
    text-align-last: left;
  float: left;
  background: rgba(253, 251, 251, 0.993);
  box-shadow: 2px 4px 6px rgba(161, 161, 161, 0.5);
  border: 1px solid blue;
  height: 29%;
  position: relative;
  margin-left: 4%;
  width: 30%;
}
.analytics p{

  font-weight: bold;
    margin-left: 2%;
   font-family: 'Lucida Sans', 'Lucida Sans Regular',
    'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    
  }
  .box1 h1{
    /*font-family: Ubuntu;*/
    font-size: 40px;
  }
  .box1 p{
    text-align: justify;
    font-size: 25px;
    font-family: Ubuntu;
  }

  .analytics1 h2{
  margin-left: -15px;
  z-index: 2;
  /*position: rel
  ;*/
  /* background-image: url('images/style1.png') no-repeat; */
  /* position: absolute; */
  padding: 5px 5px 5px 25px;
  width: 57%;
  text-align: left;
  background: #f7df08;
  font-size: 20px;
  /*position: fixed;*/
}
.analytics1{
  float: right;
    text-align-last: left;
  margin-right: 3%;
  background: rgba(253, 251, 251, 0.993);
  box-shadow: 2px 4px 6px rgba(161, 161, 161, 0.5);
  border: 1px solid blue;
  height: 29%;
  position: relative;
  margin-left: 4%;
  width: 30%;
  overflow: auto; 
}
.analytics1 p{
  font-weight: bold;
    margin-left: 2%;
   font-family: 'Lucida Sans', 'Lucida Sans Regular',
    'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;    
  }

.dd{
  background-color: #E3E4FA;
  color: black;
}


.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}


.box1{
  box-sizing: border-box;
  padding: 0.5%;
  position: absolute;
   border: 1px solid #a6f8a6; 
  margin-left: 15%;
  margin-top: 100px;
  background: rgba(252, 250, 250, 0.253);
  width: 70%;
  height: 70%;    
  box-shadow:0px 2px 5px rgba(161, 161, 161, 0.5);

/*   opacity: 0;*/
 overflow-y: auto;
}
.box1:hover{  
/*   opacity: 1;*/
    border: none;
    box-shadow:0px 5px 15px rgba(161, 161, 161, 0.5);
}
 #myBtn {
    display: none;
    position: fixed;
    bottom: 20px;
    right: 30px;
    z-index: 99;
    font-size: 18px;
    border: none;
    outline: none;
    background-color: red;
    color: white;
    cursor: pointer;
    padding: 15px;
    border-radius: 4px;
  }
  
  #myBtn:hover {
    background-color: #555;
  } 

#sec2{
    /* background: blue; */
    background-size: cover;
        
}
.toggle{
  width: 100%;
  padding: 10px 20px;
  background:#001f44;
  text-align: right;
  box-sizing: border-box;
  color: transparent;
  font-size: 0px;
  display: none;
}
@media(max-width: 768px)
{   /* CORE STYLES */
:root {
  --primary-color: rgba(13, 110, 139, 0.75);
  --overlay-color: rgba(24, 39, 51 , 0.85);
  --menu-speed: 0.75s;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Roboto', sans-serif;
  line-height: 1.4;
}

.container {
  max-width: 960px;
  margin: auto;
  overflow: hidden;
  padding: 0 3rem;
}

.showcase {
  background: transparent;
  color: #fff;
  height: 100vh;
  position: relative;
}

.showcase:before {
  content: '';
  background: url('https://images.pexels.com/photos/533923/pexels-photo-533923.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260') no-repeat center center/cover;
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
}

.showcase .showcase-inner {
  display: flex;
  flex-direction: column;
  align-items: center;
  justify-content: center;
  text-align: center;
  height: 100%;
}

.showcase h1 {
  font-size: 4rem;
}

.showcase p {
  font-size: 1.3rem;
}

.btn {
  display: inline-block;
  border: none;
  background: transparent;
  color: #fff;
  padding: 0.75rem 1.5rem;
  margin-top: 1rem;
  transition: opacity 1s ease-in-out;
  text-decoration: none;
}

.btn:hover {
  opacity: 0.7;
}

/* MENU STYLES */
.menu-wrap {
  position: fixed;
  top: 0;
  right: 0;
  z-index: 1;
}

.menu-wrap .toggler {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 2;
  cursor: pointer;
  width: 50px;
  height: 50px;
  opacity: 0;
  float: right;
}

.menu-wrap .hamburger {
  position: absolute;
  top: 0;
  right: 0;
  z-index: 1;
  width: 60px;
  height: 60px;
  padding: 1rem;
  background: transparent;
  display: flex;
  align-items: center;
  justify-content: center;
}

/* Hamburger Line */
.menu-wrap .hamburger > div {
  position: relative;
  flex: none;
  width: 100%;
  height: 2px;
  background: #fff;
  display: flex;
  align-items: center;
  justify-content: center;
  transition: all 0.4s ease;
}

/* Hamburger Lines - Top & Bottom */
.menu-wrap .hamburger > div::before,
.menu-wrap .hamburger > div::after {
  content: '';
  position: absolute;
  z-index: 1;
  top: -10px;
  width: 100%;
  height: 2px;
  background: inherit;

}

/* Moves Line Down */
.menu-wrap .hamburger > div::after {
  top: 10px;
}

/* Toggler Animation */
.menu-wrap .toggler:checked + .hamburger > div {
  transform: rotate(135deg);
}

/* Turns Lines Into X */
.menu-wrap .toggler:checked + .hamburger > div:before,
.menu-wrap .toggler:checked + .hamburger > div:after {
  top: 0;
  transform: rotate(90deg);
}

/* Rotate On Hover When Checked */
.menu-wrap .toggler:checked:hover + .hamburger > div {
  transform: rotate(225deg);
}

/* Show Menu */
.menu-wrap .toggler:checked ~ .menu {
  visibility: visible;
}

.menu-wrap .toggler:checked ~ .menu > div {
  transform: scale(1);
  transition-duration: var(--menu-speed);
}

.menu-wrap .toggler:checked ~ .menu > div > div {
  opacity: 1;
  transition:  opacity 0.4s ease 0.4s;
}

.menu-wrap .menu {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  visibility: hidden;
  overflow: hidden;
  display: flex;
  align-items: center;
  justify-content: center;
}

.menu-wrap .menu > div {
  background: var(--overlay-color);
  border-radius: 50%;
  width: 200vw;
  height: 200vw;
  display: flex;
  flex: none;
  align-items: center;
  justify-content: center;
  transform: scale(0);
  transition: all 0.4s ease;
}

.menu-wrap .menu > div > div {
  text-align: center;
  max-width: 90vw;
  max-height: 100vh;
  opacity: 0;
  transition: opacity 0.4s ease;
}
/*contents*/
.menu-wrap .menu > div > div > ul > li {
  list-style: none;
  color: #fff;
  font-size: 1.5rem;
  padding: 1rem;
}

.menu-wrap .menu > div > div > ul > li > a {
  color: inherit;
  text-decoration: none;
  transition: color 0.4s ease;
}
.uleft li{
  
   align-items:center;
  justify-content:center;
  text-align:center;
  float:center;
}
.uleft li{
  display: run-in;
}
  .toggle
  {
    display: block;
  }

ul{
  width: 100%;
}
.navbar ul li
{
  display: block;
  text-align: center
}
}
/******************/
 /* unvisited link */
ul a:link {
  color: white;
}

/* visited link */
ul a:visited {
  color: white;
}

/* mouse over link */
ul a:hover {
  color: #98F5FF;
}

/* selected link */
ul a:active {
  color: yellow;
} 
#logo{
  margin-top: -10px;
}
/*************/

#b1{ 
  margin-top:80px;
  margin-left: 25%; 
  font-size: 20px;
  color: white;
  width: 11vw;
  height: 3vw;
  background-image: linear-gradient(to right, #4CAF50, #45a049, #4CAF50);
border : 1px solid green; 
border-radius: 5%;
cursor: pointer;
position: absolute;
 }
#b1:hover{
      background-image: linear-gradient(to right, #45a049, #4CAF50, #45a049);
}
.myDiv{
    float: left;
    display: none;
}
#myDIV {

  margin-left: 5%;
  width: 75%;
  height: 75vh;
  padding: 20px 0;
  text-align: center;
  /*border:1px solid red;*/
  /*background-color: yellow;*/
  margin-top: 100px;
  float: left;
  display: block;
}
#myDIV1 {
  height: 75vh;
  width: 50%;
  padding: 50px 0;
  text-align: center;
  background-color: lightblue;
  margin-top: 20px;
  float: left;
      display: block;

}
.compl_view{
  /*border-color: red;*/
  box-shadow: -5px -8px 15px rgba(161, 161, 161, 0.5);
  height: 75vh  ;
  overflow: auto;
  text-align: left;
}
.compl_view:hover{
  box-shadow: 8px 10px 15px rgba(161, 161, 161, 0.5) ;                                   
}
.row5{
  background-color: #B7CEEC;
  color: black;
}
.w1{
  justify-content: center;
  padding-top: 5vw;
  
}
.box1{
  background-color: #E9CFEC;
}


    </style>
  <script src="home.js"></script> 
   
    <title>HOME</title>
    <link rel="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>       
        
        <div id="content-wrap">
          
            <div id="navbar">
              <a href="#sec1"> <img src="images/data_gov.png"
                 alt="LOGO" id="logo"
                  width="95px" height="70px"></a>
                  <div class="toggle">
                    <i class="fa fa-bars" aria-hidden="true"></i> <div class="menu-wrap">
    <input type="checkbox" class="toggler">
    <div class="hamburger"><div></div></div>
    <div class="menu">
      <div>
        <div>
          <ul class="uleft">
                        <li><a href="#sec1">  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp; &nbsp;&nbsp;&nbsp;HOME&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a></li>
                        <li><a href="#sec2"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; AIM&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>
                        <li><a href="#sec3"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;  &nbsp; WINNERS &nbsp;  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a></li>  
                        <li><a href="water.php" target="blank">WATER CONSERVATION</a></li>
                        <li><a href="#">POLLUTION CONTROL</a></li>
                       
          </ul>
        </div>
      </div>
    </div>
  </div>

  <header class="showcase">
    <div class="container showcase-inner">
      <h1>
        





      </h1>
     
      <a href="#" class="btn">Read More</a>
    </div>
  </header>

                  </div>

                 <div class="Navbar">
                  
                    <ul class="Navbar">               
                        <li><a href="login.php" ">OFFICER's LOGIN</a></li>
                        <li><a href="water.php" target="blank">WATER CONSERVATION</a></li>
                        <li><a href="#sec3">WINNERS</a></li>  
                        <li><a href="#sec2">AIM</a></li>
                        <li><a href="#sec1">HOME</a></li>
                    </ul>
                 </div> 
                 <div class="Navbar-small"></div>   
         </div>
        <section id="sec1" >
                
<div class="slideshow-container">

    <div class="mySlides fade">
      <div class="numbertext">1 / 3</div>
      <img src="images/1.jpeg" style="width:100%;height: 60vh;">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">2 / 3</div>
      <img src="images/2.jpeg" style="width:100%;height: 60vh;">
    </div>
    
    <div class="mySlides fade">
      <div class="numbertext">3 / 3</div>
      <img src="images/3.jpeg" style="width:100%;height: 60vh;">
    </div>
    
    </div>
    <br>
    
    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>
    <div class="analytics">
        <!-- <img src="images/style1.png" alt=""> -->
        <?php
            $conn=mysqli_connect("localhost","root","","data_gov");
            $query=mysqli_query($conn,"SELECT COUNT(*) AS total FROM complaint");
            $num=mysqli_fetch_assoc($query);
            $query1=mysqli_query($conn,"SELECT COUNT(*) AS solved FROM complaint WHERE status ='1' ");
            $num1=mysqli_fetch_assoc($query1);

            


        ?>

        <h2>Analytics</h2>
        <p><i class="fab fa-buffer" style="size: 29px;"></i> Total Complaints Registered: <?php echo $num['total']; ?> </p>
        <p><i class="fas fa-recycle" style="size: 20px;"></i> Total Resolved: <?php echo $num1['solved']; ?></p>
        <p><i class="fas fa-stopwatch" style="size: 20px;"></i> Pending:   <?php $num3=$num['total']-$num1['solved']; echo $num3; ?></p>
      </div>

      <div class="analytics1">
        <!-- <img src="images/style1.png" alt=""> -->
        <!-- <h2>Selected Ideas</h2> -->
                
                <?php
        if(isset($_GET['notf'])){
          $n_id=$_GET['notf'];

        $db=mysqli_connect("localhost","root","","data_gov");
        
        $p="UPDATE ideas SET status='2' where id='$n_id'";
        $data=mysqli_query($db,$p);
        // header("location:home.php#sec1");

        }



        ?>


        <?php
        $db=mysqli_connect("localhost","root","","data_gov");
        $d="SELECT * FROM ideas ORDER BY id DESC";

        $new_d="SELECT * FROM ideas where status='1' ORDER BY id DESC";
        $data=mysqli_query($db,$d);

        $new_data=mysqli_query($db,$new_d);
        $count=mysqli_num_rows($new_data);
        ?>

          <div class="dropdown text-lowercase">
          <button class="btn btn-secondary dropdown-toggle bg-dark" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
           Selected Ideas<?php if($count>0){echo "(".$count.")";}?>
          </button>
          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <ul>
            <?php
            foreach($data as $value){?>
              <?php
              if($value['status']=='1'){
                $id=$value['id'];
                ?>
               <li> <a class="dropdown-item alert-warning" href="?notf=<?php echo $value['id'];?>"><?php echo "<div class='dd'>".$value['title']."</div>";?></a></li>
              <?php
              }
             else if($value['status']!='0'){
             ?>
             <li><a class="dropdown-item" href="#"><?php echo "<div class='notif' style='color:black;'>".$value['title']."</div>";?></a></li>
             <?php
              }
          }
              ?>
          </ul>
          </div>
        </div>






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
          <section id="sec2" >
                
               <div class="box1">    
                                                        
                       <h1>AIM </h1><br>
                         <p>  It is a platform for supporting Open Data initiative of Government of India. The portal is intended to be used by Government of India Ministries/ Departments their organizations to publish datasets, innvative ideas and services collected by them for public use. It's main aim is to increase transparency in the functioning of Government and also open avenues for many more innovative ideas to solve the problems of society.  <br><br><br>
                         This portal is a single-point access to datasets, documents, services, tools and applications published by ministries, departments and organisations of the Government of India. It combines and expands the best features of India government's 

       
                       </p>                           
                  </div>
              
                <div class="gotop">
                  <button onclick="topFunction()" id="myBtn" 
                  title="Go to top"><i class="fas fa-arrow-up"></i></button>
                </div>
          </section>
          <section id="sec3" >
               
             <h1 class="w1"> Winners</h1>

              <div id="myDIV">
                <?php  

                    $conn = mysqli_connect("localhost","root","","data_gov");

                            $query="SELECT name,email,title,idea FROM ideas WHERE status=1 or status=2 ORDER BY id desc";
                                  $result=mysqli_query($conn,$query);

                                  /*echo "<table>
                                        <tr><th>District</th><th>Description</th></tr>" ;*/


                    echo "<div class='compl_view'>";
                          while ($row=mysqli_fetch_assoc($result))
                                  {
                                   echo"<div class='row5' style='padding:1vw;'><b>Name: </b>". $row['name']."<br><p><b>Title:</b>".$row['title']."<br><br>Idea: ".$row['idea']."<br></p></div><br>";                     
                                  }
                                                  
                          echo "</div>";

               ?>
              </div>

 
                
             



 
        
       
       

</body>
</html>