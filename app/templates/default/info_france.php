<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('css') ?>

	<link rel="stylesheet" href="<?= $this->assetUrl('/css/main.css') ?>">

<?php $this->stop('css') ?>

<?php 

$this->start('nav');

	include '../app/templates/partials/nav.php';

$this->stop('nav');

?>



<?php $this->start('main') ?>


	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
		    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		    <li data-target="#myCarousel" data-slide-to="1"></li>
		    <li data-target="#myCarousel" data-slide-to="2"></li>
		    <li data-target="#myCarousel" data-slide-to="3"></li>
		</ol>

  
	  	<div class="carousel-inner" role="listbox">

		    <div class="item active">
		      <img src="/assets/img/saintgermain.jpeg" alt="Saint Germain En Laye">
		    </div>

		    <div class="item">
		      <img src="/assets/img/saintgermain.jpeg" alt="Saint Germain En Laye">
		    </div>

		    <div class="item">
		      <img src="/assets/img/saintgermain.jpeg" alt="Saint Germain En Laye">
		    </div>

		    <div class="item">
		      <img src="/assets/img/saintgermain.jpeg" alt="Saint Germain En Laye">
		    </div>

	  	</div>

  
	  	<a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
	    	<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
	    	<span class="sr-only">Previous</span>
	  	</a>
	  	<a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
	    	<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
	    	<span class="sr-only">Next</span>
	  	</a>

	</div> <!-- end of myCarousel -->

	<div class="row">
  		<div class="col-md-12 bloc_grey">
	        
	  		<h3>Bienvenue à Saint Germain En Laye</h3>

  		</div>
	</div>
	
	<div class="row">
  		<div class="col-md-12 bloc_white">

  			<h2>Planning</h2>

  		</div>
	</div>

	<div class="row">
  		<div class="col-md-12 bloc_grey">
	        
	  		<h2>La jolie mairie de Saint Germain En Laye</h2>

  		</div>
	</div>

	<div class="row">
  		<div class="col-md-12 bloc_white">

  			<h2>L'incroyable lieu de la réception</h2>

  		</div>
	</div>




<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


