<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Printer</title>
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
            font-size: 15px;
            color:#751B08;
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
            font-size: 15px;
            }

            li a:hover {
            background-color:#CCCCFF;
            }
            li{
                font-size: 15px;
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
            .header{
                    background:#FFFFFF;
                    max-width: 100% 
                    }
            b{
                        color:#999900;
                        font-size: 15px;
                    }
            .w3-content{
                        max-width: 100% !important;
                    }
            body{
            font-family: Arial, Helvetica, sans-serif;
            }

            .flip-box {
            background-image: url("image/mobile1.jpg");
            width: 0px;
            height: 100px;
            perspective: 1000px;
            }

            .flip-box-inner {
            position: relative;
            width: 100%;
            height: 100%;
            text-align: center;
            transition: transform 0.8s;
            transform-style: preserve-3d;
            }

            .flip-box:hover .flip-box-inner {
            transform: rotateX(180deg);
            }

            /* .flip-box-front, .flip-box-back {
            position: fixed;
            width: 0px;
            height: 100px;;
            backface-visibility: hidden;
            } */

            .flip-box-front {
            background-color: #bbb;
            color: black;
            }
            h3{
                font-size:25px;
            }
            h5{
                font-size:18px;
            }
            /* .flip-box-back {
            background-image: url("image/mobile1.jpg");
            transform: rotateX(180deg);
            } */
            /* .container{
                margin-top:30px;
                 margin-bottom:20px;
            } */
            
            .container{
                margin-top:15px;
                 margin-bottom:200px;
            }
            .row{
                margin-top:30px;
                 margin-bottom:120px;
            }
    </style>
</head>
<body>
<div class="header col-xs-12">
    <img src="../image/linnlogo.jpg" width="100px" height="90px">
    <b>Linn It Solution Co.,Ltd.</b>
    <ul>
		  <li><a class="active" href="../index.php">Home</a></li>
		  <li><a class="active" href="../course.php">Course</a></li>
          <li><a class="active" href="../news.php">News</a></li>
          <li><a class="active" href="../contact.php">Contact</a></li>
          <!-- <li><a class="active" href="../about.php">About</a></li> -->
		  <!-- <li style="float:right"><a class="active" href="../login.php">Login</a></li> -->
		  
	</ul>
</div>
<div class="container ">
 <h3 style="color:#751B08; margin-bottom:30px;"><center>Printer Service</center></h3>
 <h5 style="color:#751B08;">Laser Printer Service</h5>
 <div class="row">
        <div class="flip-box col-lg-6 col-xs-12">
        <!-- <div class="flip-box-inner">
            <div class="flip-box-front "> -->
            <img src="../image/printer1.jpg"  width="330px" height="200px">
        </div>
            <!-- <div class="flip-box-back">
            <img src="../image/mobile2.jpg"  width="400px" height="300px">
            </div> -->
        <!-- </div>
        </div> -->
 </div>   
 
<h5 style="color:#751B08;">Ink-Jet Printer Service</h5>
    <div class="row">
    
        <div class="flip-box col-lg-6 col-sm-12">
        <!-- <div class="flip-box-inner">
            <div class="flip-box-front"> -->
            <img src="../image/printer2.jpg"  width="330px" height="200px">
        </div>
            <!-- <div class="flip-box-back">
            <img src="../image/mobile4.jpg" width="400px" height="300px">
            </div> -->
        <!-- </div>
        </div> -->
        <!-- <div class="col-lg-3 col-xs-12">
        </div> -->
    </div>


    <h5 style="color:#751B08;">Dot Matrix Printer Service</h5>
       <div class="row">
        <div class="flip-box col-lg-6 col-xs-12">
        <!-- <div class="flip-box-inner">
            <div class="flip-box-front "> -->
            <img src="../image/printer3.jpg"  width="330px" height="200px">
        </div>
            <!-- <div class="flip-box-back">
            <img src="../image/mobile2.jpg"  width="400px" height="300px">
            </div> -->
        <!-- </div>
        </div> -->
        </div>
 
<h5 style="color:#751B08;">All in one Printer Service</h5><br>
   
        <div class="flip-box col-lg-6 col-sm-12">
        <!-- <div class="flip-box-inner">
            <div class="flip-box-front"> -->
            <img src="../image/printer4.jpg"  width="330px" height="200px">
        </div>
            <!-- <div class="flip-box-back">
            <img src="../image/mobile4.jpg" width="400px" height="300px">
            </div> -->
        <!-- </div>
        </div> -->
        <!-- <div class="col-lg-3 col-xs-12">
        </div> -->
    </div>
</div>
<?php include("../footer/footer.html");?>
</body>
</html>