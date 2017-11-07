<?php
  session_start();
?>
<html>
<body>
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="main.css"/>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title> Legendary Dungeon </title>
  </head>
  
  <!--MENU-->
  <header>
    <div class= "top">
        <div class="bar white wide padding card">
			<a href="#home" class="bar-item button left" style="margin-top: 10px;" ><b>LD</b> Legendary Dungeon</a>
			
			<div class="right">
				<a href="#news" class="bar-item button" style="margin-top: 10px;" >News</a>
				<a href="#games" class="bar-item button" style="margin-top: 10px;" >Games</a>
				<a href="#login" class="bar-item button" style="margin-top: 10px;" >Login <img style="width: 17px; height: 17px;" src="img/login.png"></a>
    
                 <?php 
				 
				 /* if(isset($_SESSION["user"])){
                  echo "LOG OUT";
                }else{
                  echo "LOG IN"; */
                
                ?> 
			</div>
        </div>
    </div>
  </header>

  <!--Slideshow-->
	<div class="content display-container" style="max-width:1100px; padding: 5%;">
	  <img class="mySlides" src="img/ow.jpg" style="width:100%;">
	  <img class="mySlides" src="img/2-2.png" style="width:100%">
	  <img class="mySlides" src="img/3.jpg" style="width:100%">
	  <div class="center container section large text-white display-bottommiddle" style="width:100%">
		<div class="w3-left hover-text-white" onclick="plusDivs(-1)">&#10094;</div>
		<div class="w3-right hover-text-white" onclick="plusDivs(1)">&#10095;</div>
		<span class="badge demo border w3-transparent hover-orange" onclick="currentDiv(1)"></span>
		<span class="badge demo border w3-transparent hover-orange" onclick="currentDiv(2)"></span>
		<span class="badge demo border w3-transparent hover-orange" onclick="currentDiv(3)"></span>
	  </div>
	</div>

	<script>
		var slideIndex = 1;
		showDivs(slideIndex);

		function plusDivs(n) {
		  showDivs(slideIndex += n);
		}

		function currentDiv(n) {
		  showDivs(slideIndex = n);
		}

		function showDivs(n) {
		  var i;
		  var x = document.getElementsByClassName("mySlides");
		  var dots = document.getElementsByClassName("demo");
		  if (n > x.length) {slideIndex = 1}    
		  if (n < 1) {slideIndex = x.length}
		  for (i = 0; i < x.length; i++) {
			 x[i].style.display = "none";  
		  }
		  for (i = 0; i < dots.length; i++) {
			 dots[i].className = dots[i].className.replace(" w3-orange", "");
		  }
		  x[slideIndex-1].style.display = "block";  
		  dots[slideIndex-1].className += " w3-orange";
		}
	</script>
</body>
</html>