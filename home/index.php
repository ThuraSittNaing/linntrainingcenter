<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>    

           .mySlides {display:none;}

            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color:#AAAAFF;
            }

            li {
            float: left;
            border-right:0px solid #bbb;
            }

            li:last-child {
            border-right: none;
            }

            li a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

            li a:hover {
            background-color:#CCCCFF;
            
            }
            #mySidenav a {
                position: absolute;
                left: -50px;
                transition: 0.3s;
                padding: 20px;
                width: 100px;
                text-decoration: none;
                font-size: 20px;
                color: white;
                border-radius: 0 5px 5px 0;
            }

</style>
</head>
<body>
<?php include("../header/header.html");?>
<ul>
  <li><a class="active" href="#">Home</a></li>
  <li><a class="active" href="#">Course</a></li>
  <li><a class="active" href="#">News</a></li>
  <li style="float:right"><a class="active" href="Login/login.php">Login</a></li>
  <li style="float:right"><a class="active" href="Register/register.php">Register</a></li>
</ul><br><br>
<h2 class="w3-center">Linn IT Solution Co.,Ltd.</h2>
<div class="container">
<div class="w3-content w3-display-container">
  <img class="mySlides" src="../image/HO.jpg" style="width:100%">
  <img class="mySlides" src="../image/HO1.jpg" style="width:100%">
  <img class="mySlides" src="../image/HO.jpg" style="width:100%">
  <img class="mySlides" src="../image/HO1.jpg" style="width:100%">

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>

<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
</div>
<br><br>
    <div style="margin-left:100px;">
        
    <img src="../image/location.jpg" alt="location" style="width:30px; height:30px;" >
    အမွတ္(၁၄/၅၈၅)၊ေပါင္းေလာင္း(၄)လမ္း၊ပ်ဥ္းမနားျမို့။ <br><br>
    <img src="../image/phone.jpg" alt="location" style="width:30px; height:30px;" >
    ၀၆၇-၂၂၈၈၄၊၂၃၈၈၄၊၂၄၈၈၄။<br><br>
    </div>

   <?php include("../footer/footer.html");?>
</body>
</html>
