<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    body{
        background-color:bisque;
    }
    .header{
        align:center;
        color:blue;
    }
    .btnclass{
        color:orangered;
        background-color:darkturquoise;

    }
    label{
        float:left;
    }

    form{
        display:none;
        margin-top:50px;
        margin-left:300px;
    }
    div{
        margin-left:300px;
        padding-top:10px;
        line-height:20pt;
        font-family:serif;
    }
    
    table, th, td {
    border: 1px solid green;
    width:50%;
  
 
}

    </style>
</head>
<body>
<a href="../course.php"><input type="button" name="homebtn" class="btnclass" value="Back"></a><br><br>
<input type="button" value="Computer Intermediate Course" name="btninter" class="btnclass" onclick="comp();">
<br>
<br>
<input type="button" value="Graphic Design" name="btndesign" class="btnclass" onclick="design();">
<form id="formcomputer" name="computername">
<div><h3 class="header">Intermediate Course</h3>
Windows 10<br>
Microsoft Office Word<br>
Microsoft Office Excel<br>
Microsoft Office PowerPoint<br>
Adobe Page Maker 7.0<br>
Nero Burning<br>
Internet e-mail<br>
<table>
<tr>
<td>Fee</td>
<td>:35000Ks</td>
</tr>
</table>
</div>
<div>
ကုမၸဏီ၊ရံုးလုပ္ငန္းမ်ားတြင္အဓိကက်ေသာစာမ်ားစာရင္းဇယားမ်ားျဖည့္သြင္းျခင္း၊<br>
ေၾကာ္ညာစာရြက္မ်ား၊ဖိတ္စာကတ္၊
လိပ္စာကတ္ဖန္တီးျခင္းမ်ားကိုလုပ္ငန္းခြင္တြင္အသံုးခ်ႏုိင္သည္အထိသင္ၾကားေပးပာသည္။
<br>
ကုမၸဏီလုပ္ငန္းမ်ားတြက္ intermediaite course လစဥ္သင္တန္းခြဲမ်ားရွိသည္။
</div>
</form>
<form id="formdesign">
<div><h3 class="header">Design Course</h3>
Using Photoshop (Latest Version)<br>
Image Manipulation<br>
Adobe Illustrator (Latest Version)<br>
Scanning<br>
<table>
<tr>
<td>Fee</td>
<td>:35000Ks</td>
</tr>
</table>
</div>
</form>
<script>
function comp()
{
    var d=document.getElementById("formcomputer").style.display="inline";
    var d=document.getElementById("formdesign").style.display="none";
    
}
function design()
{
    var d=document.getElementById("formdesign").style.display="inline";
    var d=document.getElementById("formcomputer").style.display="none";
}

</script>
</body>
</html>