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


	<div class="col-md-8">

		<section class="table">

			<article class="droppable"><span class="placeNumber">1</span></article>
			<article class="droppable"><span class="placeNumber">2</span></article>
			<article class="droppable"><span class="placeNumber">3</span></article>
			<article class="droppable"><span class="placeNumber">4</span></article>
			<article class="droppable"><span class="placeNumber">5</span></article>
			<article class="droppable"><span class="placeNumber">6</span></article>
			<article class="droppable"><span class="placeNumber">7</span></article>
			<article class="droppable"><span class="placeNumber">8</span></article>
			
		</section>

		<section class="table">

			<article class="droppable"><span class="placeNumber">9</span></article>
			<article class="droppable"><span class="placeNumber">10</span></article>
			<article class="droppable"><span class="placeNumber">11</span></article>
			<article class="droppable"><span class="placeNumber">12</span></article>
			<article class="droppable"><span class="placeNumber">13</span></article>
			<article class="droppable"><span class="placeNumber">14</span></article>
			<article class="droppable"><span class="placeNumber">15</span></article>
			<article class="droppable"><span class="placeNumber">16</span></article>
			
		</section>

		<section class="table">

			<article class="droppable"><span class="placeNumber">17</span></article>
			<article class="droppable"><span class="placeNumber">18</span></article>
			<article class="droppable"><span class="placeNumber">19</span></article>
			<article class="droppable"><span class="placeNumber">20</span></article>
			<article class="droppable"><span class="placeNumber">21</span></article>
			<article class="droppable"><span class="placeNumber">22</span></article>
			<article class="droppable"><span class="placeNumber">23</span></article>
			<article class="droppable"><span class="placeNumber">24</span></article>
			
		</section>

		<section class="table">

			<article class="droppable"><span class="placeNumber">25</span></article>
			<article class="droppable"><span class="placeNumber">26</span></article>
			<article class="droppable"><span class="placeNumber">27</span></article>
			<article class="droppable"><span class="placeNumber">28</span></article>
			<article class="droppable"><span class="placeNumber">29</span></article>
			<article class="droppable"><span class="placeNumber">30</span></article>
			<article class="droppable"><span class="placeNumber">31</span></article>
			<article class="droppable"><span class="placeNumber">32</span></article>
			
		</section>

	
	</div>

		<button name="valider" class="valider">Valider le plan de table</button>


	

	<p>Valider et imprimer le plan de table en <a href="#">cliquant ici</a></p>






<?php $this->stop('main') ?>



<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/plan.js') ?>"></script>


<?php $this->stop('script') ?>
