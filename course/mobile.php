
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
.text{
    size:20px;
}

    </style>
</head>
<body>

<div>
<a href="../course.php"><input type="button" name="homebtn"class="btnclass" value="Back"></a>
<br>
<br>
<input type="button" value="IOs Cuurse" name="btnios" class="btnclass" onclick="design();">
<br>
<br>
<input type="button" value="Android Course" name="btnandroid" class="btnclass" onclick="comp();">

</div>
<form id="formandroid"> 
<div class=text><h3 class="header">Android Course</h3>
Smartphone Repairs<br>
Basic Electronics Declassified:<br>
Tools and Test Equipments<br>
Schematic Diagrams<br>
Soldering, Soldering,Soldering<br>
Application OfSolderindg In Cell Phone Repair<br>
Integrated Circuits<br>
<table>
<tr>
<td>Fee</td>
<td>:35000Ks</td>
</tr>
</table>
</div>
<div>
Android မိုဘိုင္းနွင့္ပတ္သတ္ေသာစက္ပစၥည္းဆိုင္ရာ ခ်ို့ယြင္းခ်က္မ်ားျပင္ဆင္ျခင္း၊<br>
Electronic အေျခခံမွစျပီး ဖုန္းတစ္လံုးအတြင္းမွာပါ၀င္တ့ဲ component <br>
converter filter တစ္ခုခ်င္းစီ၏အလုပ္လုပ္ပံု ျပင္ဆင္ပံုအပာအ၀င္<br>
Android mobile အသစ္တစ္စံုလန္းတပ္ဆင္နိုင္သည္အထိသင္ျကားေပးမည္ျဖစ္သည္<br>
</div>
</form>
<form id="formios">
<div><h3 class="header">IOs Course</h3>
Create Apple Id<br>
iTune ,iTool,Moborobo using<br>
Fireware Restoring ,update and Downloadupgrade<br>
<table>
<tr>
<td>Fee</td>
<td>:150000Ks</td>
</tr>
</table>
</div>
<div>
 Apple မိုဘိုင္းနွင့္ပတ္သတ္ေသာစက္ပစၥည္းဆိုင္ရာ ခ်ို့ယြင္းခ်က္မ်ားျပင္ဆင္ျခင္း၊<br>
Electronic အေျခခံမွစျပီး ဖုန္းတစ္လံုးအတြင္းမွာပါ၀င္တ့ဲ component <br>
converter filter တစ္ခုခ်င္းစီ၏အလုပ္လုပ္ပံု ျပင္ဆင္ပံုအပာအ၀င္<br>
Apple mobile အသစ္တစ္စံုလန္းတပ္ဆင္နိုင္သည္အထိသင္ျကားေပးမည္ျဖစ္သည္<br>
</div>
</form>
<script>
function comp()
{
    var d=document.getElementById("formandroid").style.display="inline";
    var d=document.getElementById("formios").style.display="none";
    
}
function design()
{
    var d=document.getElementById("formios").style.display="inline";
    var d=document.getElementById("formandroid").style.display="none";
}

</script>
</body>
</html>