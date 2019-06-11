<!DOCTYPE html>
<html>
<title>course</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<style>
.mySlides {display:none;}
table {
  border-collapse: collapse;
  width:120%;
  margin-left:0px;
  
}
form{
    margin-left:190px;
    padding-top:20px;
}
.container{
  margin-left:150px;
}
div{
  float:left;
}
.w3-display-right{position:relative;top:50%;margin-left:-45px}


</style>
<body>
<table>
<tr>
<td>
<div class="w3-content w3-display-container">
  <img class="mySlides" src="course/image/HO.jpg"style="width:50%;height:400px">
  <img class="mySlides" src="course/image/HO1.jpg" style="width:50%;height:400px">
  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
</td>

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
  x[slideIndex-1].style.display = "inline";  
}

</script>
<td>
<div>
<form class="container">
  <div class="card" style="width:200px">
    <img class="card-img-top" src="course/image/HO.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Mobile Software Traning</h5>
      <a href="course/mobile.php" class="btn btn-primary stretched-link">More Detail</a>
    </div>
  </div>
</form>
<form class="container">

  <div class="card" style="width:200px">
    <img class="card-img-top" src="course/image/HO1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Computer Traning</h5>
      <a href="course/computer.php" class="btn btn-primary stretched-link">More Detail</a>
    </div>
  </div>
  </form>
  </div>
  <div>
<form class="container">

<div class="card" style="width:200px">
    <img class="card-img-top" src="course/image/HO1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Mobile Traning</h5>
      <a href="course/computer.php" class="btn btn-primary stretched-link">More Detail</a>
    </div>
  </div>
</form>
<form class="container">
  
  <div class="card" style="width:200px">
    <img class="card-img-top" src="course/image/HO1.jpg" alt="Card image" style="width:100%">
    <div class="card-body">
      <h5 class="card-title">Kids Traning</h5>
      <a href="course/computer.php" class="btn btn-primary stretched-link">More Detail</a>
    </div>
  </div>
</form>
</div>
</div>
</div>
</td>
</tr>
</table>
</body>
</html>


