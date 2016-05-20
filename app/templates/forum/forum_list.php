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
			<label for="forum_search"><h3>Quel sujet cherchez-vous?</h3></label>
			<input type="text" name="forum_search" id="forum_search">
			<button name="btn_search">Rechercher</button>
		</form>
	</div>
	
		<ol class="breadcrumb">
			<li><a href="/home">Home</a></li>
			<li><a href="/forum">Forum</a></li>
			<li class="active">Categorie</li>
		</ol>
	

	<?php  include '../app/templates/partials/nav_forum.php'; ?>


	<?php if (!empty($result)) : ?>
	<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	
					<?php foreach ($result as $key => $value) : ?>
						<div class="forum_list">
							<a href="/forum/detail/<?= $value['id']?>"><h2 class="profile_head"> <?= $value['titre'] ?> </h2></a>
							<p> <?= $value['titre'] ?> </p>
							<p> <?= $value['message'] ?> </p>
							<p> <?= $value['date_publication'] ?> </p>
							<p> <?= $value['category'] ?> </p>
		              	</div> 

					<?php endforeach ; ?>
	                
	                      
            </div> <!-- end col md 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
	<?php endif; ?>

	<?php if (!empty($filtered)) : ?>
	<div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	
					<?php foreach ($filtered as $key => $value) : ?>
						<div class="forum_list">
							<a href="/forum/detail/<?= $value['id']?>"><h2 class="profile_head"> <?= $value['titre'] ?> </h2></a>
							<p> <?= $value['titre'] ?> </p>
							<p> <?= $value['message'] ?> </p>
							<p> <?= $value['date_publication'] ?> </p>
							<p> <?= $value['category'] ?> </p>
		              	</div>

					<?php endforeach ; ?>
	                
	                      
            </div> <!-- end col md 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
	<?php endif; ?>


<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


