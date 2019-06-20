<!DOCTYPE html>
<html>
<title>course</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
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

             {
            float: left;
            border-right:0px solid #bbb;
            }

            :last-child {
            border-right: none;
            }

             a {
            display: block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            }

             a:hover {
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
            @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css"

            @import "//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css";
            .box > .icon { 
                text-align: 
                center; 
                position: 
                relative; 
                }
            .box > .icon > .image { 
                position: relative; 
                z-index: 2; 
                margin: auto; 
                width: 88px; 
                height: 88px; 
                border: 8px solid white; 
                line-height: 88px; 
                border-radius: 50%; 
                background: #428bca; 
                vertical-align: middle; 
                }
            .box > .icon > .image > i { 
                font-size: 36px !important; 
                color: #fff !important; 
                }
            .box > .icon:hover > .image > i { 
                color: white !important; 
                }
            .box > .icon > .info { 
                margin-top: -24px; 
                background: rgba(0, 0, 0, 0.04); 
                border: 1px solid #e0e0e0; 
                padding: 15px 0 10px 0; 
                }
            .box > .icon > .info > h3.title { 
                font-family: sans-serif !important; 
                font-size: 16px; 
                color: #222; 
                font-weight: 500; 
                }
            .box > .icon > .info > p { 
                font-family: sans-serif !important; 
                font-size: 13px; 
                color: #666; 
                line-height: 1.5em; 
                margin: 20px;
                }
            .box > .icon:hover > .info > h3.title, .box > .icon:hover > .info > p, .box > .icon:hover > .info > .more > a { 
                color: #222; 
                }
            .box > .icon > .info > .more a { 
                font-family: sans-serif !important; 
                font-size: 12px; 
                color: #222; 
                line-height: 12px; 
                text-transform: uppercase; 
                text-decoration: none; 
                }
            .box > .icon:hover > .info > .more > a { 
                color: #fff; 
                padding: 6px 8px; 
                background-color: #63B76C; 
                }
            .box .space { 
                height: 30px; 
                }

            .modal-header-primary {
                color:#fff;
                padding:9px 15px;
                border-bottom:1px solid #eee;
                background-color: #428bca;
                -webkit-border-top-left-radius: 5px;
                -webkit-border-top-right-radius: 5px;
                -moz-border-radius-topleft: 5px;
                -moz-border-radius-topright: 5px;
                border-top-left-radius: 5px;
                border-top-right-radius: 5px;
            }

            
</style>
</head>
<body>
  <br><br>
  <div class="container">
  <div class="w3-content w3-display-container">
    <img class="mySlides" src="image/HO.jpg" style="width:100%">
    <img class="mySlides" src="image/HO1.jpg" style="width:100%">
    <img class="mySlides" src="image/HO.jpg" style="width:100%">
    <img class="mySlides" src="image/HO1.jpg" style="width:100%">

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

  <br><br>
        
          <div class="row">
              <div class="col-md-3 col-xs-4">
            
                <div class="box">							
                <div class="icon">
                <div class="image"><i class="fa fa-soundcloud"><img src=""></i></div>
                <div class="info"><br>
              
                  <h2 class="title">Window Traning</h2>
                  <p>
                    Office,Page Maker,.....
                  </p>
                  <a  href="course/computer.php" style="color:#000000;"><h6> More Detail</h6></a>

                </div>
                </div>
                </div>
                <div class="space"></div>
                </div> 	    
          <div class="col-md-3 col-xs-4">
          
                <div class="box">							
                <div class="icon">
                <div class="image"><i class="fa fa-soundcloud"><img src=""></i></div>
                <div class="info"><br>
            
                <h2 class="title">Mobile Traning</h2>
                <p>
                  Android,Apple....
                </p>
                <a  href="course/mobile.php" style="color:#000000;"><h6> More Detail</h6></a>
    
          <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                </div>
                </div>
                </div>
                </div>
                <div class="space"></div>
                </div> 	    
          <div class="col-md-3 col-xs-4">
          
            <div class="box">							
            <div class="icon">
              <div class="image"><i class="fa fa-soundcloud"><img src=""></i></div>
              <div class="info"><br>
            
                <h2 class="title">Language Traning</h2>
                <p>
                  English,Chinese...
                </p>
                <a  href="course/language.php" style="color:#000000;"><h6> More About</h6></a>
      
          <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          
          </div>
          </div>
          </div>
          </div>
          <div class="space"></div>
          </div> 
          <div class="col-md-3 col-xs-4">
          
          <div class="box">    						
          <div class="icon">
          <div class="image"><i class="fa fa-soundcloud"><img src=""></i></div>
          <div class="info"><br>
            
              <h2 class="title">Kids Traning</h2>
              <p>
               Word,...
              </p>
              <a  href="course/kid.php" style="color:#000000;"><h6> More About</h6></a>
     
          <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          </div>
          </div>
          </div>
          </div>
          <div class="space"></div>
          </div> 
          </div></div>		    
          <br><br><br>
          <div class="row" style="margin-left:300px;">
                                                                                                                                                                                                                                                                                                                                         
    </div>

</body>
</html>


 