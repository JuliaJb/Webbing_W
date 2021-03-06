<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('css') ?>

	<link rel="stylesheet" href="<?= $this->assetUrl('/css/connect.css') ?>">

<?php $this->stop('css') ?>

<?php $this->start('main') ?>


	<div class="container vertical_align">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	<div class="bloc_profile">

	                <h2 class="profile_head">VOTRE PROFIL</h2>
	                
	                <form id="changeProfile" method="POST">
	                    
	                    <p>Toutes les informations suivantes pourront être modifiées ultèrieurement.</p>
	                  
	                    <input class="radius_top" type="text" name="prenom" value="<?php echo $_SESSION["firstname"];?>" placeholder="Prénom">
	                    
	                    <input class="radius_bottom" type="text" name="nom" value="<?php echo $_SESSION["lastname"]; ?>" placeholder="Nom">

	                    <div class=<?php if ( isset($errors['prenom']) || isset($errors['nom']) ) { echo "errorsProfil";} ?>>

		                    <p><?php if(isset($errors['prenom'])) { echo $errors['prenom'];} ?></p>
		                    <p><?php if(isset($errors['nom'])) { echo $errors['nom'];} ?></p>
		                </div>

	                    <input class="radius_top" type="email" name="email" placeholder="Email *">

	                    <input class="radius_bottom" type="password" name="password" placeholder="Mot de Passe *">

	                    <div class=<?php if ( isset($errors['password']) || isset($errors['email']) ) { echo "errorsProfil";} ?>>

		                    <p><?php if(isset($errors['password'])) { echo $errors['password'];} ?></p>
		                    <p><?php if(isset($errors['email'])) { echo $errors['email'];} ?></p>
		                </div>
	           
	                  
	                    <p>Seriez vous présent le jour de notre mariage en France ? *</p>
	                    <input type="radio" name="rsvpFr" value="1"> Oui
	                    <input type="radio" name="rsvpFr" value="0"> Non

	                    <div class=<?php if (isset($errors['rsvpFr'])) { echo "errorsProfil";} ?>>
		                    <p><?php if(isset($errors['rsvpFr'])) { echo $errors['rsvpFr'];} ?></p>
		                </div>

	                    <p>Seriez vous présent le jour de notre mariage à l'ile Maurice ? *</p>
	                    <input type="radio" name="rsvpMa" value="1"> Oui
	                    <input type="radio" name="rsvpMa" value="0"> Non

	                    <div class=<?php if (isset($errors['rsvpMa'])) { echo "errorsProfil";} ?>>
		                    <p><?php if(isset($errors['rsvpMa'])) { echo $errors['rsvpMa'];} ?></p>
		                </div>
	   
	                  
	                    <p>Avez-vous ou votre(vos) enfant(s), des allergies alimentaires ou un régime alimentaire spécifique ? *</p>
	                    <input type="radio" name="regime" value="1"> Oui
	                    <input type="radio" name="regime" value="0"> Non

	                    <div class=<?php if (isset($errors['regime'])) { echo "errorsProfil";} ?>>
		                    <p><?php if(isset($errors['regime'])) { echo $errors['regime'];} ?></p>
		                </div>

	                    <textarea name="aliment_specs" id="" cols="100" placeholder="Si oui, de quel type ?"></textarea>

	                    <div class=<?php if (isset($errors['aliment_specs'])) { echo "errorsProfil";} ?>>
		                    <p><?php if(isset($errors['aliment_specs'])) { echo $errors['aliment_specs'];} ?></p>
		                </div>


	                    <p>Venez-vous accompagné d'enfant(s) ? *</p>
	                    <input type="radio" name="enfants" value="1"> Oui
	                    <input type="radio" name="enfants" value="0"> Non

	                    <div class=<?php if (isset($errors['enfants'])) { echo "errorsProfil";} ?>>
		                    <p><?php if(isset($errors['enfants'])) { echo $errors['enfants'];} ?></p>
		                </div>

	                    <textarea name="enfants_name" cols="100" placeholder="Pouvez-vous nous indiquer son(leur) prénom ?"></textarea>

	                    <div class=<?php if (isset($errors['enfants_name'])) { echo "errorsProfil";} ?>>
		                    <p><?php if(isset($errors['enfants_name'])) { echo $errors['enfants_name'];} ?></p>
		                </div>

	                    <p><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> Aidez-nous à faire notre playlist en nous disant ce que vous aimez :</p>
	                    <textarea name="musique" cols="100" placeholder="Un artiste, un album, un titre, tout ce qui vous vient :)"></textarea>

	                    <button name="btnCreateProfile" id="btnChangeId" class="btn btn_profile">Valider</button>


	                </form>
                
              	</div> <!-- end bloc_profile -->
            </div> <!-- end col md 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->

<?php $this->stop('main') ?>


<?php $this->start('script') ?>


	<script src="<?= $this->assetUrl('/js/connect.js') ?>"></script>


<?php $this->stop('script') ?>






