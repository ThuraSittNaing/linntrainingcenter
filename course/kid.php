<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="../css/response.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
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
            font-size:15px;
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
        height:700px;
    }

form{
    margin-top:50px;
}
.header{
    color:green;

}
table{
    width:80%;

}
</style>
</head>
<body>
<?php include("../header/courseheader.html");?>
<div class="conteainer">
<form>
<center><table>
<tr>
<td><div><h4 class="header">Kid Course</h4><img src="../image/kid.jpg"></div></td>
<td><div>
Microsoft Office Word<br>
Microsoft Office Excel<br>
Microsoft Office PowerPoint<br>
အေျခခံရုံးသံုး software အမ်ိုးမ်ိုးသံုးနိုင္ေအာင္သင္ေပးသည္။<br>
</td>
<td>Fee:35000Ks</td>
</tr>
</table></center>
</form>
</div>
<hr>
<?php include("../footer/footer.html");?>
</body>
</html>