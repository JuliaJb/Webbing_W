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

	<h1>Publiez sur le Forum</h1>

	<div class="container vertical_align">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	<div class="bloc_profile">

	                <h2 class="profile_head">Nouveau Sujet</h2>
	                
	                <form id="changeProfile" method="POST">
	                    
	                  
						<div class=<?php if (!empty($errors)) { echo "errors";} ?>>

		                    <p><?php if(isset($errors['title'])) { echo $errors['title'];} ?></p>
		                    <p><?php if(isset($errors['content'])) { echo $errors['content'];} ?></p>
		                </div>

	                    <label for="inp_title">Titre</label>
	                    <input type="text" class="form-control" name="inp_title" placeholder="Un titre" id="inp_title">
	                    
	                    <label for="inp_content">Contenu</label>
	                    <input type="text" class="form-control" name="inp_content" placeholder="Le contenu" id="inp_content">

	                    <button name="btn_f_create" id="btn_f_create" class="btn tb-margin-buffer">Creer</button>


	                </form>
                
              	</div> <!-- end bloc_profile -->
            </div> <!-- end col md 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->




<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


