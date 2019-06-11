<!DOCTYPE html>
<html>
<title>course</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
table {
  border-collapse: collapse;
  width:84%;
  margin-left:0px;
  
}

table, th, td {
  border: 1px solid black;
  
 
}
td{
    padding-top:30px;
    padding-bottom:30px;
    text-align:center;
}
form{
    margin-left:190px;
    padding-top:20px;
}

</style>
<body>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="course/image/HO.jpg"style="width:100%;height:400px">
  <img class="mySlides" src="course/image/HO1.jpg" style="width:100%;height:400px">
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
<form method="post">
<table>
<tr>
<div class="tdclass">
<td>
<label>Computer Traning</label>
<a href="course/computer.php"><input type="button"name="computerdetail" id="btnid" value="More Detail"></a>
</td>
</div>
<td>
<label>Mobile Software Traning </label>
<a href="course/mobile.php"><input type="button" name="mobiledetail" id="btnid" value="More Detail"></a>
</td>
</tr>
<tr>
<td>
<label>Language Traning</label>
<a href="course/language.php"><input type="button"name="languagedetail" id="btnid" value="More Detail"></a>
</td>
<td>
<label>Kids Computer Traning</label>
<a href="course/kid.php"><input type="button"name="kidsdetail" id="btnid"value="More Detail"></a>
</td>
</tr>
</table>

</form>


</body>
</html>
