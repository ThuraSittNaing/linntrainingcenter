<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
<style>    

           .mySlides {display:none;}
            h3{
              font-size:25px;
            }
            ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color:#AAAAFF;
            }

            li{
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
            @import "//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css";

            @import "//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css";
            .box > .icon { 
                text-align:center; 
                position:relative; 
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
                font-size: 25px; 
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
                *{box-sizing: border-box;}
                body {font-family: Verdana, sans-serif;}
                /* .mySlides {display: none;} */
                /* img {vertical-align: middle;} */

                /* Slideshow container */
                .slideshow-container { 
                  position: relative;
                  /* margin-left:75px; */
                  width:100%; 
                  /* height:400px; */
                }
                /* .mySlidesfade{
                  width:1000px; 
                  height:400px;
                }
                .mySlidesfade1{
                  width:1000px; 
                  height:400px;
                } */
                /* Caption text */
                .text {
                  color: #f2f2f2;
                  font-size: 15px;
                  padding: 8px 12px;
                  position: absolute;
                  bottom: 8px;
                  width: 100%;
                  text-align: center;
                }

                /* Number text (1/3 etc) */
                .numbertext {
                  color: #f2f2f2;
                  font-size: 12px;
                  padding: 8px 12px;
                  position: absolute;
                  top: 0;
                }

                /* The dots/bullets/indicators */
                .dot {
                  height: 15px;
                  width: 15px;
                  margin: 0 2px;
                  background-color: #bbb;
                  border-radius: 50%;
                  display: inline-block;
                  transition: background-color 0.6s ease;
                }

                /* .active {
                  background-color: #717171;
                } */

                /* Fading animation */
                .fade {
                  -webkit-animation-name: fade;
                  -webkit-animation-duration: 5s;
                  animation-name: fade;
                  animation-duration: 5s;
                }

                @-webkit-keyframes fade {
                  from {opacity: 1} 
                  to {opacity: 1}
                }

                @keyframes fade {
                  from {opacity: 1} 
                  to {opacity: 1}
                }

                /* On smaller screens, decrease text size */
                @media only screen and (max-width: 300px) {
                  .text {font-size: 11px}
                }
                #img{
                  width:100%;
                  /* height:380px; */
                }
               div{
                 margin-top:10px;
                margin-bottom:5px;
               }
              
            
</style>
</head>
<body>
  <div class="container">
    
    <div class="slideshow-container">

      <div class="mySlides fade ">
        <img src="image/HO4.jpg" id="img">
      </div>

      <div class="mySlides fade">
        <img src="image/HO5.jpg" id="img">
      </div>

      <div class="mySlides fade">
        <img src="image/HO4.jpg" id="img">
      </div>

      <div class="mySlides fade">
        <img src="image/HO5.jpg" id="img">
      </div>
      </div>
  <div style="text-align:center">
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span> 
    <span class="dot"></span>
  </div></div>
  <div class="container">
    <!-- <div class="w3-content w3-display-container">
      <img class="mySlides" src="image/HO.jpg" style="width:100%">
      <img class="mySlides" src="image/HO1.jpg" style="width:100%">
      <img class="mySlides" src="image/HO.jpg" style="width:100%">
      <img class="mySlides" src="image/HO1.jpg" style="width:100%">

      <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
      <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
    </div> -->

    <!-- <script>
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
    </script> -->
    <script>
          var slideIndex = 0;
          showSlides();

          function showSlides() {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";  
            }
            slideIndex++;
            if (slideIndex > slides.length) {slideIndex = 1}    
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex-1].style.display = "block";  
            dots[slideIndex-1].className += " active";
            setTimeout(showSlides, 2000); // Change image every 2 seconds
          }
  </script>
        
          <div class="row">
              <div class="col-lg-3 col-xs-12">
            
                <div class="box">							
                <div class="icon">
                <div class="image"><i class="fa fa-soundcloud"><img src="https://img.icons8.com/ios/50/000000/service-filled.png"></i></div>
                <div class="info"><br>
              
                  <h3 class="title">Mobile Service</h3>
                  <p>
                  <h5><ol type="1"><br><br>
                        <li>Software Service</li><br><br>
                        <li>Hardware Service</li><br><br><br><br>
                      </ol></h5>
                  </p>
                  <a  href="home/mobile.php" style="color:#000000;"><h6> More Info</h6></a>

                </div>
                </div>
                </div>
                <div class="space"></div>
                </div> 	 


          <div class="col-lg-3 col-xs-12">
          
                <div class="box">							
                <div class="icon">
                <div class="image"><i class="fa fa-soundcloud"><img src="https://img.icons8.com/ios/50/000000/service-filled.png"></i></div>
                <div class="info"><br>
            
                <h3 class="title">Printer Service</h3>
                <p>
                <p>
                <h5><ol type="1"><br><br>
                 <li>Laser Printer Service</li><br><br>
                 <li>Ink-Jet Printer Service</li><br><br>
                 <li>Dot-Matrix Printer Service </li><br><br>
                 <li>All in one printer Service</li>
               </ol></h5>
                </p>
                </p>
                <a  href="home/printer.php" style="color:#000000;"><h6> More Info</h6></a>
    
          <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                </div>
                </div>
                </div>
                </div>
                <div class="space"></div>
                </div> 	 


          <div class="col-lg-3 col-xs-12">
          
            <div class="box">							
            <div class="icon">
              <div class="image"><i class="fa fa-soundcloud"><img src="https://img.icons8.com/ios/50/000000/service-filled.png"></i></div>
              <div class="info"><br>
            
                <h3 class="title">System Service</h3>
                <p>
                <h5><ol type="1"><br><br>
                 <li>Software Service</li><br><br>
                 <li>Hardware Service</li><br><br><br><br>
               </ol></h5>
                </p>
                <a  href="home/system.php" style="color:#000000;"><h6> More Info</h6></a>
      
          <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          
          </div>
          </div>
          </div>
          </div>
          <div class="space"></div>
          </div> 


          <div class="col-lg-3 col-xs-12">
          <div class="box">    						
          <div class="icon">
          <div class="image"><i class="fa fa-soundcloud"><img src="https://img.icons8.com/ios/50/000000/service-filled.png"></i></div>
          <div class="info"><br>
            
              <h3 class="title">Internet Service</h3>
              <p>
               <h5><ol type="1"><br><br>
                 <li>Wireless Service</li><br><br>
                 <li>FTTX Service</li><br><br>
                 <li>Prepaid Card</li><br><br>
               </ol></h5>
              </p>
              <a  target="_blank" href="http://mm-link.net/our-services/" style="color:#000000;"><h6> More Info</h6></a>
              <!-- <link rel="parent" href="http://mm-link.net/our-services/" target="_blank" > -->
     
          <div class="modal fade" id="primary" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          </div>
          </div>
          </div>
          </div>
          <div class="space"></div>
          </div> 
          </div></div>		    
          
          <div class="container">
              <div class="row">
              <div class="col-lg-1"></div>
              <div class="col-lg-3 ">
                      <center>
                      <div class="card bg-info  col-xs-12"><br>
                      <img src="https://img.icons8.com/ios/50/000000/place-marker.png">
                      <!-- <img src="image/location1.jpg" alt="location" style="width:30px; height:30px;" > -->
                      အမွတ္(၁၄/၅၈၅)၊ေပါင္းေလာင္း(၄)လမ္း၊ပ်ဥ္းမနားျမို့။ <br>
                      <!-- <img src="image/phone.jpg" alt="location" style="width:30px; height:30px;" > -->
                      ၀၆၇-၂၂၈၈၄၊၂၃၈၈၄၊၂၄၈၈၄။<br><br> 
                      </div><br>
                      </center>
                </div>
             
                <div class="col-lg-3">
                      <center>
                      <div class="card bg-info  col-xs-12" ><br>
                      <img src="https://img.icons8.com/ios/50/000000/place-marker.png">
                      <!-- <img src="image/location1.jpg" alt="location" style="width:30px; height:30px;" > -->
                      အမွတ္(၁၁/၇)၊ <br> ဗိုလ္ခ်ုပ္လမ္း၊ပ်ဥ္းမနားျမို့။ <br>
                      ၀၆၇-၂၄၄၈၈၊၂၆၈၈၄<br><br>
                      </div><br>
                      </center>
                </div>

                <div class="col-lg-3 ">
                      <center>
                      <div class="card bg-info  col-xs-12"><br>
                      <img src="https://img.icons8.com/ios/50/000000/place-marker.png">
                      <!-- <img src="image/phone.jpg" alt="location" style="width:30px; height:30px;" > -->
                      အမွတ္(၁၁၇)၊သေျပကုန္း <br> ရပ္ကြက္၊ေနျပည္ေတာ္။ <br>
                      ၀၆၇-၂၂၈၈၄၊၂၃၈၈၄၊၂၄၈၈၄။ <br><br>
                      </div><br><br>
                      </center>
                </div>                                                                                                                                                                                                                                                                                                                                               
              </div>
          </div>
</body>
</html>

