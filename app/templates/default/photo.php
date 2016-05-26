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

	<div class="row">

		<form class="form_photo" method="POST" enctype="multipart/form-data">

			<div class="input-file-container">
				<input class="input-file" id="my-file" type="file" name="photo">
				<label for="my-file" class="input-file-trigger" tabindex="0">Ma photo</label>
			</div>
			<p class="file-return"></p>

			<div class=<?php if (!empty($erreurPhoto)) { echo "errors";} ?>>

				<?php if (!empty($erreurPhoto)): ;?>

					<?php foreach ($erreurPhoto as $key => $value): ?>

                		<p><?php echo $erreurPhoto[$key]; ?></p>

                	<?php endforeach; ?>
                
                <?php endif; ?>
            </div>

	        <button type="submit" name="poster" class="btn">Poster</button>

	    </form>



    </div>



    <div class="row">

	    <?php foreach ($result as $key => $value): ?>

	    	<div class="col-md-3 picture_frame">
		
				<img class="photo" src="/assets/photo/<?php echo $result[$key]['finalname']; ?>" alt="photo" width="200px">

				<p class="name_poster">Posté par <?= $_SESSION['firstname']." ".$_SESSION['lastname']; ?></p>

			</div>

		<?php endforeach; ?>
    	

    </div>

</div>




<?php $this->stop('main') ?>


<?php $this->start('script') ?>

	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>
	<script src="<?= $this->assetUrl('/js/photo.js') ?>"></script>


<?php $this->stop('script') ?>


