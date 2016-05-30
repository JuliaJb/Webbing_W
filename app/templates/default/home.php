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
					<h2>Leur mariage</h2>
				</div>
			</div>
		</div>
		<div class="square">
			<img class="img_square" src="/assets/img/save_the_date.png" alt="RSVP">
		</div>
	</div> <!-- Fin container_header -->
	


	<!-- Different Displays Depending on user's role -->


		<?php if ($france) : ?>
			<div class="row bloc_home">
		  		<div class="container bloc_white">
			  		<div class="col-md-6">
			  			<h2><a href="/info_france">Mariage Civil à Saint Germain En Laye</a></h2>
				  		<p>24 Juin 2017</p>
				  		<a class="btn_lien_infos" href="/info_france">Plus d'infos</a>
				  		<a class="btn_lien_forum" href="/forum/france">Forum France</a>
				  		<form class="form_home" method="POST">
			                <p>Serez-vous présent le jour de notre mariage en France ?</p>
			                <input type="radio" name="rsvpFr" value="1" <?= (isset($profil['rsvpFr']) && $profil['rsvpFr'] == "1")? "checked": " " ?>> Oui
		                    <input type="radio" name="rsvpFr" value="0" <?= (isset($profil['rsvpFr']) && $profil['rsvpFr'] == "0")? "checked": " " ?>> Non
			                <button name="valid_home_Fr" class="btn btn_form_darkBlue">Valider</button>
			            </form>
			        </div>
		  			<div class="col-md-6 align_right">
			  			<a href="/info_france"><img src="/assets/img/stgermain3.jpg" alt="saint germain" width="400px"></a>
			        </div>
		  		</div>
			</div>		
		<?php endif ?>
		

		<?php if ($maurice) : ?>
			<div class="row bloc_home">
		  		<div class="container bloc_white">
		  			<div class="col-md-6 align_left">
			  			<a href="/info_maurice"><img src="/assets/img/maurice5.jpg" alt="maurice" width="400px"></a>
			        </div>		       
			  		<div class="col-md-6">			  				
			  			<a href="/info_maurice">
			  				<h2>Mariage Religieux à L'île Maurice</h2>
			  			</a>
				  		<p>28 Octobre 2017</p>
				  		<a class="btn_lien_infos" href="/info_maurice">Plus d'infos</a>
				  		<a class="btn_lien_forum" href="/forum/maurice">Forum Maurice</a>
				  		<form class="form_home" method="POST">
			                <p>Serez-vous présent le jour de notre mariage à l'ile Maurice ? *</p>
			                <input type="radio" name="rsvpMa" value="1" <?= (isset($profil['rsvpMa']) && $profil['rsvpMa'] == "1")? "checked": " " ?>> Oui
		                    <input type="radio" name="rsvpMa" value="0" <?= (isset($profil['rsvpMa']) && $profil['rsvpMa'] == "0")? "checked": " " ?>> Non
			                <button name="valid_home_Ma" class="btn btn_form_darkBlue">Valider</button>
			            </form>
			        </div>
		  		</div>
			</div>
		<?php endif ?>

		<?php if ($bachelor) : ?>
			<div class="row bloc_home">
		  		<div class="container bloc_white">
			  		<div class="col-md-6">
			  			<h2>L'enterrement de vie de garçon</h2>
				  		<p>20 Mai 2017</p>
				  		<p>Proposez des idées d'activité sur le forum</p>
				  		<a class="btn_lien_forum" href="/forum/bachelor">Forum Bachelor</a>
			        </div>
		  			<div class="col-md-6 align_right">
			  			<img src="/assets/img/evg.jpg" alt="saint germain" width="400px">
			        </div>
		  		</div>
			</div>	
		<?php endif ?>

		<?php if ($bachelorette) : ?>
			<div class="row bloc_home">
		  		<div class="container bloc_white">
		  			<div class="col-md-6 align_left">
			  			<img src="/assets/img/evjf.jpg" alt="saint germain" width="400px">
			        </div>
			  		<div class="col-md-6">
			  			<h2>L'enterrement de vie de jeune fille</h2>
				  		<p>20 Mai 2017</p>
				  		<p>Proposez des idées d'activité sur le forum</p>
				  		<a class="btn_lien_forum" href="/forum/bachelorette">Forum Bachelorette</a>
			        </div>
		  		</div>
			</div>	
		<?php endif ?>






	



<?php $this->stop('main') ?>

<?php 
$this->start('footer');

	include '../app/templates/partials/footer.php';

$this->stop('footer');
?>

	
	
<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


