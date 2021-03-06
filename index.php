<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <meta name=description content="">
    <meta name=viewport content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Varela+Round" rel="stylesheet">
    <script src="js/jquery-3.1.1.min.js"></script>
    <script>
       $(document).ready(function(){
         $("a").on('click', function(event) {
      if (this.hash !== "") {
      event.preventDefault();
      var hash = this.hash;
      $('html, body ,section').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
        window.location.hash = hash;
      });
    }
  });
});
</script>
	<title>Web Based Polling System</title>
	<style type="text/css">
	    body, html, .main {
    height: 100%;
}

section {
    min-height: 100%;
}
		h1{
			font-family: 'Josefin Sans', sans-serif;
			letter-spacing: 10px;
			font-size: 50px;
		}
		p{
			font-family: 'Josefin Sans', sans-serif;
		}
		.navbar-default{
			padding: 2%;
			background-color: white;
			border: none;
		}
		.navbar-default .navbar-brand{
			letter-spacing: 5px;
			font-size: 23px;
			font-family: 'Varela Round', sans-serif;
		}
		.navbar-default .navbar-nav li > a{
			font-size: 18px;
			letter-spacing: 5px;
			font-family: 'Varela Round', sans-serif;
		}
		.caption p{
			font-size: 20px;
			font-family: 'Varela Round', sans-serif;
		}
		.table{
			font-size: 20px;
			font-family: 'Varela Round', sans-serif;
		}
	</style>
</head>
<body id="home" style="background: url('images/bg.jpg');background-size: cover;background-attachment: fixed;background-position: center;">
   <nav class="navbar navbar-default navbar-fixed-top">
  <div class="navbar-header">
  	<button class="navbar-toggle collapsed" data-toggle="collapse" data-target=#nav>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  		<span class="icon-bar"></span>
  	</button>
  	<a href="" class="navbar-brand animated fadeInLeft">W.B.P.S</a>
  </div>
  <div class="collapse navbar-collapse" id="nav">
  <div class="container">
      <ul class="nav navbar-nav navbar-right animated fadeInRight">
          <li><a href="#home">Home</a></li><!--
       --><li><a href="#features">Features</a></li><!--
       --><li><a href="#about">Tentang</a></li>
      </ul>
  </div>
  </div>
  </nav>
<div class="main">
  <section>
  <br><br><br><br><br><br><br><br>
  <div class="container" style="padding: 3%;">
  	<h1 align="center" class="animated zoomInDown">Welcome To Web Based Polling System</h1><br>
  	<center><a class="btn btn-lg btn-default animated zoomInDown" style="font-size: 20px;padding: 2%;letter-spacing: 10px;" href="beranda.php">Get Started</a></center>
  </div>
  </section>
</div>


  <section id="features" style="background-color:white;">
  <br><br><br><br><br><br>
  <div class="container-fluid">
  	<div class="row">
  	<div class="col-md-4">
     <div class="thumbnail wow fadeInLeft">
     <img src="images/devices.png" class="img-responsive" alt="">
        <div class="caption">
         <h1 align="center">Responsive</h1>
         <p>Tampilan Website Yang Responsive Membuat Web Ini Bisa diakses dengan perangkat apa saja</p>
        </div>
     </div>
     </div>
     <div class="col-md-4">
     <div class="thumbnail wow fadeInUp">
     <img src="images/smile.png" class="img-responsive" style="height: 275px;" alt="">
        <div class="caption">
         <h1 align="center">Comfortable</h1>
         <p>Tampilan Yang Simple dan Terkesan Minimalis membuat web ini menjadi banyak disukai oleh banyak orang</p>
        </div>
     </div>
     </div>
     <div class="col-md-4">
     <div class="thumbnail wow fadeInRight">
     <img src="images/like.png" class="img-responsive" style="height: 275px;" alt="">
        <div class="caption">
         <h1 align="center">Easy To Use</h1>
         <p>Web Ini memberikan opsi - opsi mudah bagi para pengguna sehingga mereka tidak kesulitan dalam menggunakannya</p>
        </div>
     </div>
     </div>
  	</div>
   </div>
  </section>

	<section id="about" style="background-color:white;">
		<br><br><br><br><br>
		<div class="container">
        <div class="row">
        <div class="col-md-6">
        <h1 class="wow slideInLeft">Tentang Web Ini</h1>
        <table class="table">
        	<tr class="wow slideInRight">
        		<td><strong>Project Name</strong></td>
        		<td>:</td>
        		<td>Web Based Polling System</td>
        	</tr>
        	<tr class="wow slideInLeft">
        		<td><strong>Maded By</strong></td>
        		<td>:</td>
        		<td>Team Z</td>
        	</tr>
        	<tr class="wow slideInRight">
        		<td><strong>Release Date</strong></td>
        		<td>:</td>
        		<td>23-03-2017</td>
        	</tr>
        	<tr class="wow slideInLeft">
        		<td><strong>Programming Language</strong></td>
        		<td>:</td>
        		<td>PHP , HTML , CSS , Javascript , MySQL</td>
        	</tr>
        	<tr class="wow slideInRight">
        		<td><strong>Description</strong></td>
        		<td>:</td>
        		<td>Web Based Polling System memudahkan para pengguna dalam melakukan suatu kegiatan pengundian atau penghitungan suara secara sistematis dan aman</td>
        	</tr>
        </table>
        </div>
            <div class="col-md-offset-9">
        	<h1 align="center" class="wow slideInRight">Creator :</h1><br>
        	<div class="row">
        		<div class="col-md-6">
        		<div class="row wow zoomInLeft">
                 <center>
                 	<a href="images/dika.jpg" data-lightbox="image-1">
                 		<img src="images/dika.jpg" height="100" width="100" class="img-circle">
                 	</a>
                 	<p><strong>Mahardika</strong></p>
                 </center>
                </div>
                <div class="row wow zoomInLeft">
                 <center>
                 	<a href="images/nadia.jpg" data-lightbox="image-1">
                 		<img src="images/nadia.jpg" height="100" width="100" class="img-circle">
                 	</a>
                 	<p><strong>Nadia</strong></p>
                 </center>
                </div>
        		</div>
        		<div class="col-md-6">
        		<div class="row wow zoomInRight">
                 <center>
                 	<a href="images/bela.jpg" data-lightbox="image-1">
                 		<img src="images/bela.jpg" height="100" width="100" class="img-circle">
                 	</a>
                 	<p><strong>Bella</strong></p>
                 </center>
                </div>
                <div class="row wow zoomInRight">
                 <center>
                 	<a href="images/yofan.jpg" data-lightbox="image-1">
                 		<img src="images/yofan.jpg" height="100" width="100" class="img-circle">
                 	</a>
                 	<p><strong>Yofandi</strong></p>
                 </center>
                </div>
        		</div>
        	</div>
        	</div>
         </div>
        </div>
	</section>
   <nav style="padding: 1%;font-size: 25px;">
        <div class="container">
        <div class="navbar-footer navbar-inverse" style="background-color: #fff">
                <p align="center" style="font-family: 'Varela Round', sans-serif ;letter-spacing: 10px;">Copyright 2017 || Powered by : Team-Z</p>
        </div>    
        </div>
    </nav>
  <script src="js/wow.js"></script>
   <script type="text/javascript">
     new WOW().init();
   </script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-3.1.1.min.js"></script>
  <script src="js/lightbox.js"></script>
</body>
</html>