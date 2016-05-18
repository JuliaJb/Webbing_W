<?php $this->layout('layout', ['title' => 'Forum']) ?>

<?php $this->start('css') ?>

	<link rel="stylesheet" href="<?= $this->assetUrl('/css/main.css') ?>">

<?php $this->stop('css') ?>

<?php 

$this->start('nav');

	include '../app/templates/partials/nav.php';

$this->stop('nav');

?>



<?php $this->start('main') ?>

	<h1>Le Forum</h1>

	<div class="container">
		<div class="row">
		
			<div class="col-lg-10">
				<h1> <?= $result['titre'] ?> </h1>

				<p> <?= $result['message'] ?> </p>

				<p> <?= $result['date_publication'] ?> </p>

			</div>
		</div>
	</div>




<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


