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

<div class="container">

	<form class="form_photo" method="POST" enctype="multipart/form-data">

        <input type="text" name="prenom" placeholder="Prénom">

        <input type="text" name="nom" placeholder="Nom">

        <input type="hidden" name="MAX_FILE_SIZE" value="1048576" />
        <input type="file" name="photo">

        <button type="submit" name="poster" class="btn">Poster</button>

    </form>

</div>




<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


