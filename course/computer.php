<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <title>Document</title>
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
body{
        overflow-y:scroll;       
    }
.flip-box-front {
            background-color: #bbb;
            color: black;
            }
.flip-box:hover .flip-box-inner {
            transform: rotateX(180deg);
            }
            img{
                margin-top:5px;
            }
    .header{
             background:#FFFFFF;
    }
    b{
        color:#999900;
    }
    .w3-content{
    	max-width: 100% !important;
    }
    div{
        margin-top:10px;
    }
</style>
</head>
<body>
<div class="header col-xs-12">
    <img src="../image/linnlogo.jpg" width="100px" height="90px" position="fixed" margin-left:10px;>
    <b>Linn It Solution Co.,Ltd.</b>
    <ul>
		  <li><a class="active" href="../index.php">Home</a></li>
		  <li><a class="active" href="../course.php">Course</a></li>
          <li><a class="active" href="../news.php">News</a></li>
          <li><a class="active" href="contact.php">Contact</a></li>
	</ul>
</div>
<div class="container">
<div class="row">
<div class="flip-box col-lg-4 col-sm-12">
<h4 class="header">Intermediate Course</h4>
<img src="../image/com.jpg"></div> 
<div class="col-lg-4 col-sm-12">
Windows 10<br>
Microsoft Office Word<br>
Microsoft Office Excel<br>
Microsoft Office PowerPoint<br>
Adobe Page Maker 7.0<br>
Nero Burning<br>
Internet e-mail<br></p>
ကုမၸဏီ၊ရံုးလုပ္ငန္းမ်ားတြင္အဓိကက်ေသာစာမ်ားစာရင္းဇယားမ်ားျဖည့္သြင္းျခင္း၊<br>
ေၾကာ္ညာစာရြက္မ်ား၊ဖိတ္စာကတ္၊
လိပ္စာကတ္ဖန္တီးျခင္းမ်ားကိုလုပ္ငန္းခြင္တြင္
<br>အသံုးခ်ႏုိင္သည္အထိသင္ၾကားေပးပာသည္။
<br>
ကုမၸဏီလုပ္ငန္းမ်ားတြက္ intermediaite course လစဥ္သင္တန္းခြဲမ်ားရွိသည္။
</div><br><br>
<div class="flip-box col-lg-4 col-sm-12">
   Duration:3 Months<br>
   Fees:30000Ks
</div><br><br>
</div>
<hr>
<div class="row">
<div class="flip-box col-lg-4 col-sm-12"><h4 class="header">Design Course</h4>
<img src="../image/design.jpg"></div><br><br>
<div class="col-lg-4 col-sm-12">
Adobe Photoshop (Latest Version)<br>
Adobe Illustrator (Latest Version)<br>
Scanning<br>
ဓာတ္ပံုျပုျပင္ျခင္း၊ဆိုင္းဘုတ္ႏွင့္ေျကာ္ျငာဒီဇိုင္းမ်ားဖန္တီးျခင္း၊<br>
logodesign မ်ားေရးဆြဲျခင္းတို့ကို <br>sample designမ်ားျဖင့္စနစ္တက်သင္ျကားေပးပါမည္။
<br>
မိမိသင္ယူလိုေသာအခ်ိန္ကို ေရြးခ်ယ္သင္ယူႏိုင္ျပီး<br>
 တစ္ဦးခ်င္းလည္း အထူးသင္ျကားေပးသည္။
</div>
<div class="flip-box col-lg-4 col-sm-12">Duration:3 Months</div>
</div>
</div>
<?php include("../footer/footer.html");?>
</body>
</html>