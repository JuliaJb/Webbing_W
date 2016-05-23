<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('css') ?>

	<link rel="stylesheet" href="<?= $this->assetUrl('/css/main.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('/css/plan.css') ?>">

<?php $this->stop('css') ?>

<?php 

$this->start('nav');

	include '../app/templates/partials/nav.php';

$this->stop('nav');

?>




<?php $this->start('main') ?>

	<div class="col-md-4">
		<section id="guestList">	
		</section>
	</div>


	<div class="col-md-8">

		<section class="table" id="tableOne">
			<article class="droppable"><p>1</p></article>
			<article class="droppable"><p>2</p></article>
			<article class="droppable"><p>3</p></article>
			<article class="droppable"><p>4</p></article>
			<article class="droppable"><p>5</p></article>
			<article class="droppable"><p>6</p></article>
			<article class="droppable"><p>7</p></article>
			<article class="droppable"><p>8</p></article>
		</section>

		<section class="table">
			<article class="droppable"><p>9</p></article>
			<article class="droppable"><p>10</p></article>
			<article class="droppable"><p>11</p></article>
			<article class="droppable"><p>12</p></article>
			<article class="droppable"><p>13</p></article>
			<article class="droppable"><p>14</p></article>
			<article class="droppable"><p>15</p></article>
			<article class="droppable"><p>16</p></article>
		</section>

	
	</div>

	<form>
		<button>Valider le plan de table</button>
	</form>

	

	<p>Valider et imprimer le plan de table en <a href="#">cliquant ici</a></p>






<?php $this->stop('main') ?>



<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/plan.js') ?>"></script>


<?php $this->stop('script') ?>
