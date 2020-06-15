<?php
error_reporting(E_ALL);
include ("config.php");
session_start();
?>
<?php
	include 'header.php';
?>

	<main class="col-12 bg-secondary">
		<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		  <ol class="carousel-indicators">
		    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
		    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
		  </ol>
		  <div class="carousel-inner">
		    <div class="carousel-item active position-relative" style="height:500px;">
		    	<div class="position-absolute col-12" style="top:150px;">
		    		<p class="text-center text-light" style="font-size: 45px;">Welcome From Digitalfarmers</p>
		    		<a href="login.php" class="btn-primary d-block text-center m-auto pb-1 rounded" style="width: 90px;">Invest Now</a>
		    	</div>
		    </div>
		    <div class="carousel-item position-relative" style="height:500px">
		    	<div class="position-absolute col-12" style="top:150px;">
		    		<p class="text-center text-light" style="font-size: 45px;">Better Chance For You</p>
		    		<a href="login.php" class="btn-primary d-block text-center m-auto pb-1 rounded" style="width: 90px;" >Invest Now</a>
		    	</div>
		    </div>
		    <div class="carousel-item position-relative" style="height:500px">
		    	<div class="position-absolute col-12" style="top:150px;">
		    		<p class="text-center text-light" style="font-size: 45px;">Get Interest With Invest</p>
		    		<a href="login.php" class="btn-primary d-block text-center m-auto pb-1 rounded" style="width: 90px;" >Invest Now</a>
		    	</div>
		    </div>
		  </div>
		  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="sr-only">Previous</span>
		  </a>
		  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="sr-only">Next</span>
		  </a>
		</div>
		<div class="card border-none rounded-0">
			<div class="card-body">
				<h2 class="card-title text-center col-7 m-auto">We connect you and farmers as a bridge. Reduce poor and improve rich. Start invest today get reward tomorrow.</h2>
			</div>
		</div>
		<div class="col-12">
			<div class="col-4 float-left">
				
			</div>
		</div>
	</main>
<?php
	include 'footer.php';
?>