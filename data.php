<?php
require 'connection.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <meta charset="UTF-8">
	<title>taxarj</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
	<link rel="stylesheet" href="styles.css">
</head>
  <style>
/* گريداي ب ديزايني په يجي فه */

  @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	font-family: 'Ubuntu', sans-serif;
	text-decoration: none;
	box-sizing: border-box;
	list-style: none;
}

body{
	background: #f7f7f7;
	color: #545454;
}

.navbar{
	width: 100%;
	height: 60px;
	background: #090f1b;
	position: fixed;
	top: 0;
	left: 0;
	padding: 0 25px;
}

.navbar .inner_navbar{
	display: flex;
	align-items: center;
	justify-content: space-between;
	width: 100%;
	height: 100%;
}

.navbar .hamburger{
	display: none;
}

.navbar .logo a{
	font-weight: 700;
	font-size: 24px;
	letter-spacing: 3px;
	color: #fff;
}

.navbar .logo a span{
	color: Orange;
}

.navbar .menu ul{
	display: flex;
}

.navbar .menu ul li a{
	width: 120px;
	margin-right: 10px;
	display: block;
	text-align: center;
	padding: 10px;
	border-radius: 25px;
	color: #fff;
	text-transform: uppercase;
	font-size: 14px;
	letter-spacing: 2px;
	transition: all 0.2s ease;
}

.navbar .menu ul li:last-child a{
	margin-right: 0;	
}

.navbar .menu ul li a:hover,
.navbar .menu ul li a.active{
	background: Orange;
}

@media (max-width: 992px){
	.navbar{
		height: 100px;
		padding: 12px;
	}
	.navbar .inner_navbar{
		flex-direction: column;
	}
	.main_container{
		margin-top: 100px;
	}
}

@media (max-width: 728px){
	.navbar{
		height: 60px;
	}
	.navbar .inner_navbar{
		flex-direction: row;
	}
	.main_container{
		margin-top: 60px;
	}
	.navbar .menu ul{
		position: absolute;
		top: 60px;
		left: 0;
		display: block;
		background: #090f1b;
		width: 100%;
	}
	.navbar .menu ul li{
		padding: 10px;
	}
	.navbar .menu ul li a{
		width: 100%;
		padding: 12px;
	}
	.navbar .hamburger{
		display: block;
		position: absolute;
		top: 15px;
		right: 25px;
		font-size: 24px;
		color: #fff;
		cursor: pointer;
		transition: all 0.2s ease;
	}
	.navbar .hamburger:hover{
		color: Orange;
	}
	.navbar .menu{
		display: none;
	}
	.navbar .menu.active{
		display: block;
	}
	.main_container .content .item_wrap{
		width: 100%;
	}
}
  width: 100%;
  text-align: center;
}

/* گريداي ب سلايدي وينافه */


* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
  margin-top: 10px;
  
}

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
  display: none;
  transition: background-color 0.5s ease;
}

.active {
  background-color: #717171;
}

/* Fading animation */
.fade {
  animation-name: fade;
  animation-duration: 1.5s;
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
.chap{
  text-align: center;
  font-size: 25px;
}

footer {
text-align: center;
padding: 3px;
background-color: black;
color: white;
position: fixed;
bottom: 0;
width: 100%;
margin: 0
}
.img1{
  text-align: center;
}
body{
  text-align: center;
}
.img1 {
     width: 22%;
     height: 450px;
     display: inline-block;
     box-shadow: 1px 1px 10px orangered;
     border-radius: 10px; 
     margin: 10px;
     text-align: center;
     
    }
.card img{
  width: 100%;
  height: 450px;
}

@media screen and (max-width: 1024px) {
  .img1{
     width: 30%;
     height: 350px;
}
.card img{
  width: 100%;
  height: 350px;
}

.chap{
  text-align: center;
  font-size: 20px;
}

}
@media screen and (max-width: 660px) {
  .img1{
     width: 42%;
     height: 250px;
}
.chap{
  text-align: center;
  font-size: 12px;
}
.card img{
  width: 100%;
  height: 250px;
}

}

</style>
  <body>
    
     
      <?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>
      
     
        


       



    
   


      <?php endforeach; ?>
    </table>
    <br>
    <a style="display:none;" href="../uploadimagefile">Upload Image File</a>


    <div>
    <footer>
    <h3>TEL:07508443134</h3>
    <p>NOMBER one laser © 2019</p>
</footer>

<br><br>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D9%84%D9%88%D9%83%D9%88.JPEG" style="width:100%">
</div>

<div class="mySlides fade">
	  <div class="numbertext">2 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D8%AA%D8%AE%D8%B1%D8%AC.JPEG" style="width:100%">
  
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D8%B1%D8%B3%D8%AA%D9%83.JPEG" style="width:100%">
  
</div>
<div class="mySlides fade">
  <div class="numbertext">4 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D8%AA%D9%8A%D8%B4%D9%8A%D8%B1%D8%AA.JPEG" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">5 / 6</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D9%84%D9%88%D8%AD%D8%A9.JPEG" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">6 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D8%AF%D9%88%D9%85%D9%8A%D9%86.JPEG" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">7 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D9%84%D9%88%D8%AD%D8%A9%20%D9%85%D8%AD%D9%81%D9%8A%D8%B1.JPEG" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">8 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D8%AF%D9%8A%D9%83%D9%88%D8%B1.JPEG" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">9 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D8%A8%D9%8A%D9%83%20%D9%88%20%D8%B2%D8%A7%D9%81%D8%A7.JPEG" style="width:100%">
</div>
<div class="mySlides fade">
  <div class="numbertext">10 / 10</div>
  <img src="https://archive.org/download/20220926_20220926_1450/%D8%AC%D8%A7%D9%86%D8%AA%D8%A9.JPEG" style="width:100%">
</div>

</div>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
 <span class="dot"></span>
 <span class="dot"></span> <span class="dot"></span>
  <span class="dot"></span>
</div>
<div class="chap">
    <h1>دروستكرنا هه مي كارين تخرجي</h1>
    <br>

</div>

<?php
      $i = 1;
      $rows = mysqli_query($conn, "SELECT * FROM tb_upload ORDER BY id DESC")
      ?>

      <?php foreach ($rows as $row) : ?>

        
        <div class="img1">
  <div class="card">
    <img   src="img/<?php   echo $row["image"]; ?>" title="<?php echo $row['image']; ?>">
  </div>
  </div>

      <?php endforeach; ?>


<br><br><br><br><br>
<div class="wrapper">
	<div class="navbar">
		<div class="inner_navbar">
			<div class="logo">
				<a href="https://number1laser.blogspot.com/">Number<span>One</span></a>
			</div>
			<div class="menu">
				<ul>
					<li><a href="https://number1laser.blogspot.com/" class="active">Laser</a></li>
					<li><a href="https://numberone222.blogspot.com/">flower</a></li>
					
				</ul>
			</div>
		</div>
		<div class="hamburger">
			<i class="fas fa-bars"></i>
		</div>
	</div>



 
<script>
let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
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

<script>
	var hamburger = document.querySelector(".hamburger");
	var menu = document.querySelector(".menu");

	hamburger.addEventListener("click", function(){
		menu.classList.toggle("active");
	})
</script>


  </body>
</html>
