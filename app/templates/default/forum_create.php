<?php $this->layout('layout', ['title' => 'Forum']) ?>

<?php $this->start('css') ?>

	<link rel="stylesheet" href="<?= $this->assetUrl('/css/main.css') ?>">
	<link rel="stylesheet" href="<?= $this->assetUrl('/css/forum.css') ?>">

<?php $this->stop('css') ?>

<?php 

$this->start('nav');

	include '../app/templates/partials/nav.php';

$this->stop('nav');

?>



<?php $this->start('main') ?>

	<div id="forum_searchbar">
		<form action="" method="POST">
			<label for="forum_search">Quelle discussion cherchez-vous?</label>
			<input type="text" name="forum_search" id="forum_search">
			<button name="btn_search">Rechercher</button>
		</form>
	</div>
	
	<ol class="breadcrumb">
		<li><a href="/">Home</a></li>
		<li><a href="/forum">Forum</a></li>
		<li class="active">Categorie</li>
	</ol>

	<div class="container">
		<div class="jumbotron">
			<h1>Publiez sur le Forum</h1>
		</div>
	</div>

	<div class="container vertical_align">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	<div class="bloc_profile">

	                <h2 class="profile_head">Nouveau Sujet</h2>
	                
	                <form id="changeProfile" method="POST">
	                    
	                  
						<div class=<?php if (!empty($errors)) { echo "errors";} ?>>

		                    <p><?php if(isset($errors['title'])) { echo $errors['title'];} ?></p>
		                    <p><?php if(isset($errors['content'])) { echo $errors['content'];} ?></p>
		                    <p><?php if(isset($errors['category'])) { echo $errors['category'];} ?></p>
		                </div>

	                    <label for="inp_title">Titre</label>
	                    <input type="text" class="form-control" name="inp_title" placeholder="Un titre" id="inp_title">
	                    
	                    <label for="inp_content">Contenu</label>
	                    <input type="text" class="form-control" name="inp_content" placeholder="Le contenu" id="inp_content">

						<label for="sel_category">Catégorie</label>
	                    <select class="form-control" name="inp_category" id="sel_category">
						  <option value="France">France</option>
						  <option value="Maurice">Maurice</option>
						  <option value="Bachelor">Bachelor</option>
						  <option value="Bachelorette">Bachelorette</option>
						  <option value="Surprise">Surprise</option>
						</select>



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


