<?php
session_start();
include("actions/connection.php");
if(!$_SESSION['logged']){
header("location: signin.html");
}

$user_id = $_SESSION['id'];
$sql = "SELECT * FROM client_tbl WHERE id = '$user_id'";
$res= mysqli_query($con,$sql);
$user = mysqli_fetch_assoc($res);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="/css/registration_style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <title>Dashboard | Pampered Pets</title>
  </head>
  <body style="background-color:#EEEEEE;">
    

  <div class="w3-sidebar w3-bar-block w3-card w3-animate-left" style="display: none;"  id="mySidebar">
    <div style="background-color: #0099ff; color:white;">
    <br>
    <button class="w3-bar-item w3-button w3-large" style="text-align: right;"
    onclick="w3_close()"> &times; </button><br>

    <div class="text-center">
    <i class="fa fa-user" style="font-size: 30px;"></i>
    <p><b><?php echo($user['first_name']." ".$user['last_name']); ?></b></p>
    </div>
  </div>
    <a href="userdash.php" class="w3-bar-item w3-button">Dashboard</a>
    <a href="#" class="w3-bar-item w3-button">Administrators</a>
    <a href="#" class="w3-bar-item w3-button">Logout</a>
  </div>

  <div id="main">

  <div class="nav" style="width: 100%; height:55px; background-color: #0099ff;">
    <button id="openNav" class="w3-button  w3-xlarge" onclick="w3_open()" style="color:white">&#9776;</button>
    <div class="w3-container">
  
    </div>
  </div>

  <br>
  <div class="w3-container">


  
    <div class="row">

      <div class="col-md-4">
        <div class="text-center">
          <div class="dashmenu" style="background-color: white;"></div>
        </div>
      </div>

      <div class="col-md-4">
          <div class="text-center">
            <div class="dashmenu" style="background-color: white; height:30vh;"></div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="text-center">
            <div class="dashmenu" style="background-color: white; height:30vh;"></div>
          </div>
      </div>

    </div>
      <br>
    <div class="row">

      <div class="col-md-4">
        <div class="text-center">
          <div class="dashmenu" style="background-color: white; height:30vh;"></div>
        </div>
      </div>

      <div class="col-md-4">
          <div class="text-center">
            <div class="dashmenu" style="background-color: white; height:30vh;"></div>
          </div>
      </div>

      <div class="col-md-4">
          <div class="text-center">
            <div class="dashmenu" style="background-color: white; height:30vh;"></div>
          </div>
      </div>

    </div>



  </div>





<script>
function w3_open() {
 
  var x = window.matchMedia("(max-width: 600px)");
  if(x.matches){
    document.getElementById("main").style.marginLeft = "40%";
  document.getElementById("mySidebar").style.width = "40%";
  }
  else{
    document.getElementById("main").style.marginLeft = "15%";
  document.getElementById("mySidebar").style.width = "15%";
  }
  document.getElementById("mySidebar").style.display = "block";
  document.getElementById("openNav").style.display = 'none';
  

  
}

function w3_close() {
  document.getElementById("main").style.marginLeft = "0%";
  document.getElementById("mySidebar").style.display = "none";
  document.getElementById("openNav").style.display = "inline-block";
}
</script>

<style>
  @media screen and (max-width: 600px) {
   .w3-sidebar{
       width: 40%;
   }
  }
</style>


  </body>
</html>