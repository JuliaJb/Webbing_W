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

	<div class="container_header">
		<div class="bloc_prez_header">
			<div class="triangle">
				
				<div class="header_title">
					<h1>Marcus &amp; Ginette</h1>
					<h2>Leur mariages</h2>
				</div>

			</div>
		</div>

		<div class="square">
			
			<img class="img_square" src="/assets/img/save_the_date.png" alt="RSVP">

		</div>
	</div> <!-- Fin container_header -->
	


	<!-- Different Displays Depending on user's role -->

	<?php foreach ($_SESSION['roles'] as $key => $value) : ?>

		<?php if ($value == "France") : ?>
			<div class="row">
		  		<div class="container bloc_white">

			  		<div class="col-md-6">
			  				
			  			<h2>Mariage Civil à Saint Germain En Laye</h2>
				  		<p>24 Juin 2017</p>

				  		<form class="form_home" method="POST">

			                <p>Seriez vous présent le jour de notre mariage en France ?</p>
			                <input type="radio" name="rsvpFr" value="1" <?= (isset($profil['rsvpFr']) && $profil['rsvpFr'] == "1")? "checked": " " ?>> Oui
		                    <input type="radio" name="rsvpFr" value="0" <?= (isset($profil['rsvpFr']) && $profil['rsvpFr'] == "0")? "checked": " " ?>> Non
			                <br>
			                <button name="valid_home_Fr" class="btn btn_form_blue">Valider</button>
			            </form>

			        </div>

		  			<div class="col-md-6 align_right">

			  			<img src="/assets/img/stgermain3.jpg" alt="saint germain" width="400px">

			        </div>

			        

		  		</div>
			</div>		

		<?php endif ?>
		

		<?php if ($value == "Maurice") : ?>
			<div class="row">
		  		<div class="container bloc_white">

		  			<div class="col-md-6 align_left">

			  			<img src="/assets/img/maurice5.jpg" alt="maurice" width="400px">

			        </div>
			        
			  		<div class="col-md-6">
			  				
			  			<h2>Mariage Religieux à L'île Maurice</h2>
				  		<p>28 Octobre 2017</p>

				  		<form class="form_home" method="POST">

			                <p>Seriez vous présent le jour de notre mariage à l'ile Maurice ? *</p>
			                <input type="radio" name="rsvpMa" value="1" <?= (isset($profil['rsvpMa']) && $profil['rsvpMa'] == "1")? "checked": " " ?>> Oui
		                    <input type="radio" name="rsvpMa" value="0" <?= (isset($profil['rsvpMa']) && $profil['rsvpMa'] == "0")? "checked": " " ?>> Non
			                <br>
			                <button name="valid_home_Ma" class="btn btn_form_darkBlue">Valider</button>
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






	



<?php $this->stop('main') ?>

<?php 
$this->start('footer');

	include '../app/templates/partials/footer.php';

$this->stop('footer');
?>

	
	
<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


