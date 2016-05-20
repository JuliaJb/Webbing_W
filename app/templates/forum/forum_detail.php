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

	<?php include '../app/templates/partials/search_forum.php'; 
		  include '../app/templates/partials/breadcrumb.php';
	?>


	
	
	
	<div class="container">
		<div class="col-lg-10 forum_list">

			<div class="forum_title">
				<h1><?= $post['titre'] ?></h1>
			</div>
			<div class="row">
				<div class="col-lg-7 col-md-7 border-right">
					<p> <?= $post['message'] ?> </p>
				</div>
				<div class="col-lg-3 col-md-3">
					<p>Message publié par : Prenom NOM
					<br>Le : <?= $post['date_publication'] ?> </p>
				</div>
			</div>
			
			<a href="#reply_form" class="a_reply btn btn-primary right">Répondre</a>
			
		</div>		
	</div>



	<?php if (!empty($reponses)) : ?>         	
		<?php foreach ($reponses as $key => $value) : ?>
		<div class="container">
			<div class="col-lg-10 forum_list">
				<div class="row">
					<div class="col-lg-7 col-md-7 border-right">
						<p><?= $value['message'] ?></p>
					</div>
					<div class="col-lg-3 col-md-3">
						<p>Message publié par : <?= $value['id_user'] ?></p>
						<p>Le : <?= $value['date_pub'] ?></p>
					</div>
				</div>
			</div>
		</div>
		<?php endforeach ; ?>                	                      
	<?php endif; ?>


	<div class="container">
		<div class="col-lg-10 forum_list">
			
			<h2 id="reply_form">Répondre : </h2>		
	
			<form method="POST">
	             
               <!-- Affichage Errors -->
				<div class=<?php if (!empty($r_errors)) { echo "errors";} ?>>
                    <p><?php if(isset($r_errors['content'])) { echo $r_errors['content'];} ?></p>
                </div>
                
                <label for="inp_content">Réponse</label>
                <input type="text" class="form-control" name="inp_content" placeholder="Rédigez votre réponse ici" id="inp_content">

                <button name="btn_f_reply" id="btn_f_reply" class="a_reply btn btn-primary">Répondre</button>

            </form>

		</div>
	</div>




<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


