<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Mobile</title>
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
            .header{
                    background:#FFFFFF;
                    max-width: 100%;
                    }
            b{
                        color:#999900;
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

            /* .flip-box-front {
            background-color: #bbb;
            color: black;
            } */

            /* .flip-box-back {
            background-image: url("image/mobile1.jpg");
            transform: rotateX(180deg);
            } */
    </style>
</head>
<body>

<div class="header">
    <img src="../image/linnlogo.jpg" width="100px" height="90px">
    <b>Linn It Solution Co.,Ltd.</b>
    <ul>
		  <li><a class="active" href="../index.php">Home</a></li>
		  <li><a class="active" href="../course.php">Course</a></li>
		  <li><a class="active" href="../news.php">News</a></li>
		  <li style="float:right"><a class="active" href="../login.php">Login</a></li>
		  <li style="float:right"><a class="active" href="../register.php">Register</a></li>
	</ul>
</div><br>
 <h1 style="color:#751B08"><center>System Service</center></h1><br>
 <h4 style="color:#751B08; margin-left:40px;" >Software Service</h4><br><br>
 <div class="row" style="margin-left:80px;">
        <div class="col-lg-6">
            <ol style="color:#555">
                <li>Microsoft Office installation</li><br>
                <li>Microsoft Window installation</li><br>
                <li>Network Unlock</li><br>
                <li>Application Install</li><br>
                <li>Myanmar Font Installation</li><br>
            <ol>
        </div>
       
        <div class="flip-box col-lg-6">
        <!-- <div class="flip-box-inner">
            <div class="flip-box-front "> -->
            <img src="../image/mobile3.jpg"  width="500px" height="300px">
            </div>
            <!-- <div class="flip-box-back">
            <img src="../image/mobile2.jpg"  width="400px" height="300px">
            </div> -->
        <!-- </div>
        </div> -->
 </div>  <br><br><br><br><br>      


<h4 style="color:#751B08; margin-left:40px;">Hardware Service</h4><br><br><br>
    <div class="row" style="margin-left:80px;">
    
        <div class="flip-box col-lg-2" >
        <!-- <div class="flip-box-inner">
            <div class="flip-box-front"> -->
            <img src="../image/mobile5.jpg"  width="500px" height="300px">
            </div>
            <!-- <div class="flip-box-back">
            <img src="../image/mobile4.jpg" width="400px" height="300px">
            </div> -->
        <!-- </div>
        </div> -->
        <div class="col-lg-4">
        </div>
        <div class="col-lg-6">
        <ol style="color:#555"><br><br>
               <li>Touch Pad Service</li><br>
               <li>Water Damage Service</li><br>
               <li>Battery Service</li><br>
               <li>Motherboard Service</li><br>
               <li>LCD Service</li><br>
               <li>Keyboard Service</li><br>
               
        <ol>
     </div>
</div><br><br><br><br><br><br><br>
<?php include("../footer/footer.html");?>
</body>
</html>