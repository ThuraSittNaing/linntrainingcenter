<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="../css/response.css">
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
       overflow:scroll;
        height:900px;
    }

form{
    margin-top:50px;
}
.header{
    color:green;

}
form  td{
  margin-left:40px;
  text-align:center;
}
div{
  margin-right:30px;
}
table{
  width:100%;
}
.table1{
    border-bottom: 1px solid #000;
}

</style>
</head>
<body>
<?php include("../header/courseheader.html");?>
<form>
<table class="table1"><tr>
<td><div><h4 class="header"> English Language Course</h4>
<img src="../image/eng.jpg"></div> 
<br><br>
</td>
<td>
<div>
Basic English <br>
အဂၤလိပ္စာ အေျခခံမွစျပီးသင္ၾကားေပးမည္။
<br>
4 Skill သင္ၾကားေပးသည္။အေရး၊အဖတ္၊အေျပာမ်ားကို
<br>ရိုးရွင္းလြယ္ကူေသာနည္းျဖင့္ေလ့က်င့္ေပးည္။
<br>
</td>
<td>Fee:50000Ks<br>
Dduration:3Months</td>
</tr>
</table>
</form>
<form>
<table><tr>
<td><h4 class="header">Chinese Course</h4><img src="../image/chinese.jpg"></td>
<td>
<div>
နိုင္ငံတကာသံုးတရုတ္စာကို လုပ္ငန္းခြင္တြင္<br>
အသံုးခ်နုိင္သည့္အထိသင္ၾကားေပးသည္။<br>
အေရး၊အဖတ္၊အေျပာမ်ားကို
<br>ရိုးရွင္းလြယ္ကူေသာနည္းျဖင့္ေလ့က်င့္ေပးည္။<br> 
level1,level2,level3 ေလ့လာနိုင္သည္။
</td>
<td>Fee:60000Ks</td>
</tr>
</table>
</form>
<hr>
<?php include("../footer/footer.html");?>
</body>
</html>