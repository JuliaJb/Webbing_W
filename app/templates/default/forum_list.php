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

	<div class="col-lg-12" id="forum_searchbar">
		<form action="" method="POST">
			<label for="forum_search"></label>
			<input type="text" name="forum_search" id="forum_search">
			<button name="btn_search">Rechercher</button>
		</form>
	</div>

	<h1>Le Forum</h1>

	<div class="container">
		<div class="row">
			<a href="/forum/create"> Créer Un Nouveau Sujet</a>
		</div>
	</div>

	<div class="container vertical_align">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	

					<?php foreach ($result as $key => $value) : ?>
						<div class="forum_list">
							<a href="forum/detail/<?= $value['id']?>"><h2 class="profile_head"> <?= $value['titre'] ?> </h2></a>
							<p> <?= $value['titre'] ?> </p>
							<p> <?= $value['message'] ?> </p>
							<p> <?= $value['date_publication'] ?> </p>
		              	</div> <!-- end bloc_profile -->

					<?php endforeach ; ?>

	                

	                <div class="forum_post">
	                	<p>Content of post here</p>
	                </div>
	                
	                      
            </div> <!-- end col md 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->




<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


