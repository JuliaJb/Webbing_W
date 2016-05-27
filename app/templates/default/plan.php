<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('css') ?>

	<link rel="stylesheet" href="<?= $this->assetUrl('/css/main.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('/css/plan.css') ?>">

<?php $this->stop('css') ?>

<?php 

$this->start('nav');

	include '../app/templates/partials/nav.php';

$this->stop('nav');


if(isset($json)){

	var_dump($json);
}


?>




<?php $this->start('main') ?>

	<div class="col-md-4">
		<section id="guestList">	
		</section>
	</div>


	<div class="col-md-8 plan_table">

		<div class="col-md-4">

			<section id="table1" class="table">

				<?php for ($i=1; $i <= 8; $i++) : ?>

				<article class="droppable" data-value="<?= $i ?>"><span class="placeNumber"><?= $i ?></span></article>
				
				<?php endfor; ?>

			</section>

			<section id="table2" class="table">

				<?php for ($i=9; $i <= 16; $i++) : ?>

				<article class="droppable" data-value="<?= $i ?>"><span class="placeNumber"><?= $i ?></span></article>
				
				<?php endfor; ?>
				
			</section>

			<section id="table3" class="table">

				<?php for ($i=17; $i <= 24; $i++) : ?>

				<article class="droppable" data-value="<?= $i ?>"><span class="placeNumber"><?= $i ?></span></article>
				
				<?php endfor; ?>
				
			</section>

			<section id="table4" class="table">

				<?php for ($i=25; $i <= 32; $i++) : ?>

				<article class="droppable" data-value="<?= $i ?>"><span class="placeNumber"><?= $i ?></span></article>
				
				<?php endfor; ?>
				
			</section>


		</div>


		<div class="col-md-4">

			<section id="table5" class="table">

				<?php for ($i=33; $i <= 40; $i++) : ?>

				<article class="droppable" data-value="<?= $i ?>"><span class="placeNumber"><?= $i ?></span></article>
				
				<?php endfor; ?>
				
			</section>


			<section id="table6" class="table">

				<?php for ($i=41; $i <= 48; $i++) : ?>

				<article class="droppable" data-value="<?= $i ?>"><span class="placeNumber"><?= $i ?></span></article>
				
				<?php endfor; ?>
				
			</section>

			<section id="table7" class="table">

				<?php for ($i=49; $i <= 56; $i++) : ?>

				<article class="droppable" data-value="<?= $i ?>"><span class="placeNumber"><?= $i ?></span></article>
				
				<?php endfor; ?>
				
			</section>

			<section id="table8" class="table">

				<?php for ($i=57; $i <= 64; $i++) : ?>

				<article class="droppable" data-value="<?= $i ?>"><span class="placeNumber"><?= $i ?></span></article>
				
				<?php endfor; ?>
				
			</section>
			
			

		</div>

		<button name="actualiser" id="actualiser" class="btn btn_form_blue">Actualiser le plan de table</button>

		<br>
		<br>

		<button name="valider" id="valider" class="btn btn_form_darkBlue">Valider le plan de table</button>
	
	</div>







<?php $this->stop('main') ?>



<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/plan.js') ?>"></script>


<?php $this->stop('script') ?>
