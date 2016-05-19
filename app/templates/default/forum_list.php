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
			<li><a href="/home">Home</a></li>
			<li><a href="/forum">Forum</a></li>
			<li class="active">Categorie</li>
		</ol>

	<div class="container">
		<div class="jumbotron">
			<h2>Bienvenu au Forum de Marcus et Ginette</h2>
			<a href="/forum/create" class="btn btn-default btn-lg new_post">
			  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nouveau Sujet
			</a>
		</div>
	</div>

	<div class="container">
		<h2>Les Catégories</h2>
		<ul class="nav nav-tabs">
			<li role="presentation" class="active"><a href="#">Tous</a></li>
			<li role="presentation"><a href="forum/france">France</a></li>
			<li role="presentation"><a href="forum/maurice">Maurice</a></li>
			<li role="presentation"><a href="forum/bachelorette">Bachelorette</a></li>
			<li role="presentation"><a href="forum/bachelor">Bachelor</a></li>
			<li role="presentation"><a href="forum/surprise">Surpise</a></li>
		</ul>
	</div>

	<pre>
		<?php print_r($result)?>
	</pre>

	<pre>
		<?php print_r($filtered)?>
	</pre>

	<?php if (!empty($result)) : ?>
	<div class="container vertical_align">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	
					<?php foreach ($result as $key => $value) : ?>
						<div class="forum_list">
							<a href="forum/detail/<?= $value['id']?>"><h2 class="profile_head"> <?= $value['titre'] ?> </h2></a>
							<p> <?= $value['titre'] ?> </p>
							<p> <?= $value['message'] ?> </p>
							<p> <?= $value['date_publication'] ?> </p>
							<p> <?= $value['category'] ?> </p>
		              	</div> <!-- end bloc_profile -->

					<?php endforeach ; ?>
	                
	                      
            </div> <!-- end col md 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
	<?php endif; ?>

	<?php if (!empty($filtered)) : ?>
	<div class="container vertical_align">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	
					<?php foreach ($filtered as $key => $value) : ?>
						<div class="forum_list">
							<?= $key['title']." and ".$key['message'] ?>
		              	</div> <!-- end bloc_profile -->

					<?php endforeach ; ?>
	                
	                      
            </div> <!-- end col md 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->
	<?php endif; ?>


<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


