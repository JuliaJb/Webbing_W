<?php $this->layout('layout', ['title' => 'Home']) ?>

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


	<!-- Different Displays Depending on user's role -->

	<?php foreach ($_SESSION['roles'] as $key => $value) : ?>

		<?php if ($value == "France") : ?>
			<div class="row">
				<div class="col-md-12 bloc_grey">
					<h2>Mariage en France</h2>
					<div class="col-md-6">
			  			<h3>Mariage Civil à Saint Germain En Laye</h3>
				  		<p>24 Juin 2017</p>
			        </div>
			        <div class="col-md-6">
			  			<form method="POST">
			                <p>Seriez vous présent le jour de notre mariage en France ? *</p>
			                <input type="radio" name="rsvpFr" value="1"> Oui
			                <input type="radio" name="rsvpFr" value="0"> Non
			                <br>
			                <button id="btnChangeId" class="btn">Valider</button>
			            </form>
			        </div>		
				</div>
			</div>			

		<?php endif ?>

		<?php if ($value == "Maurice") : ?>
			<div class="container">
				<div class="row">
						<h2>Maraige à L'Île Maurice</h2>
						<div class="col-md-6">
				  			<h3>Mariage Religieux à L'île Maurice</h3>
					  		<p>28 Octobre 2017</p>
				        </div>
						<div class="col-md-6">
				  			<form method="POST">
				                <p>Seriez vous présent le jour de notre mariage à l'ile Maurice ? *</p>
				                <input type="radio" name="rsvpMa" value="1"> Oui
				                <input type="radio" name="rsvpMa" value="0"> Non
				                <br>
				                <button id="btnChangeId" class="btn">Valider</button>
				            </form>
				        </div>
				</div>
			</div>
		<?php endif ?>

		<?php if ($value == "Bachelor") : ?>
			<div class="container">
				<div class="row">
						<h2>Infos sur Bachelor</h2>
						<div class="col-md-6">
				  			<h3>L'enterrement de vie de jeune garçon aura lieu</h3>
					  		<p>26 Octobre 2017</p>
				        </div>
						<div class="col-md-6">
				  			<h3>More information about the bachelors party</h3>
				  			<p>More here</p>
				        </div>
				</div>
			</div>
		<?php endif ?>

	<?php endforeach ?>




	<div class="row">
  		<div class="col-md-12 bloc_white">

  			<div class="col-md-6">

	  			<h2>Info1</h2>

	        </div>

	        
	  		<div class="col-md-6">
	  				
	  			<h2>Info2</h2>

	        </div>

  		</div>
	</div>






<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


