<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('css') ?>

	<link rel="stylesheet" href="<?= $this->assetUrl('/css/connect.css') ?>">

<?php $this->stop('css') ?>

<?php $this->start('main') ?>

	<div class="container vertical_align">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              	<div class="bloc_login bloc_first_co">

                
	                <h2 class="login_head">Ma première connexion</h2>
	                

	                <form class="form_first_co" method="POST" action="/profil">

	                      <input type="text" class="radius_top" name="prenom" id="inputPrenom" placeholder="Prénom">

	                      <input type="text" class="radius_bottom" name="nom" id="inputNom" placeholder="Nom">

	                      <button type="submit" name="btnContinue" class="btn btn_login">M'inscrire</button>

	                </form>

              	</div> <!-- end bloc_first_co -->
            </div> <!-- end col md 6 -->


            <div class="col-lg-6 col-md-12 col-sm-12 col-xs-12">
              	<div class="bloc_login bloc_connexion">
              
	                <h2 class="login_head">Je suis déjà venu !</h2>
	              

	                <form class="form_login" method="POST" action="/home">

	                      <input type="email" class="radius_top" name="prenom" id="inputPrenom" placeholder="Email">

	                      <input type="password" class="radius_bottom" name="nom" id="inputNom" placeholder="Mot de passe">

	                      <button type="submit" name="btnContinue" class="btn btn_connexion">Me connecter</button>

	                      <div class="forgot_password"><a href="#">Mot de Passe Oublié ?</a></div>

	                </form>
              	</div> <!-- end bloc_connexion -->
            </div> <!-- end col md 6 -->
        </div> <!-- end row -->
    </div> <!-- end container -->

<?php $this->stop('main') ?>

<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/connect.js') ?>"></script>


<?php $this->stop('script') ?>






