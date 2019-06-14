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


<a href="../course.php"><input type="button" name="homebtn"class="btnclass" value="Back"></a><br><br>
<input type="button" value="English Course" name="btninter" class="btnclass" onclick="comp();">
<br>
<br>
<input type="button" value=" Chinese Course" name="btndesign" class="btnclass" onclick="design();">
<form id="formenglish" name="english">
<div><h3 class="header"> English Language Course</h3>
Basic English <br>
<table>
<tr>
<td>Fee</td>
<td>:35000Ks</td>
</tr>
</table>
</div>
<div>
အဂၤလိပ္စာ အေျခခံမွစျပီးသင္ၾကားေပးမည္။
<br>
4 Skill သင္ၾကားေပးသည္။

<br>

</div>
</form>
<form id="formchinese">
<div><h3 class="header">Chinese Course</h3>
နိုင္ငံတကာသံုးတရုတ္စာကို လုပ္ငန္းခြင္တြင္အသံုးခ်နုိင္သည့္အထိသင္ၾကားေပးသည္။<br><br>
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
    var d=document.getElementById("formenglish").style.display="inline";
    var d=document.getElementById("formchinese").style.display="none";
}
function design()
{
    var d=document.getElementById("formchinese").style.display="inline";
    var d=document.getElementById("formenglish").style.display="none";
}


</script>
</body>
</html>