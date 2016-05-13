<?php $this->layout('layout', ['title' => 'login']) ?>

<?php $this->start('main') ?>

	<div class="container vertical_align">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
              	<div class="bloc_profile">

	                <h2 class="profile_head">VOTRE PROFIL</h2>
	                
	                <form action="/home" id="changeProfile" method="POST">
	                    
	                    <p>Toutes les informations suivantes pourront être modifiées ultèrieurement.</p>
	                  
	                    <input class="radius_top" type="text" name="prenom" placeholder="Prénom">
	                    <input class="radius_bottom" type="text" name="nom" placeholder="Nom">
	                    <input class="radius_top" type="email" name="email" placeholder="Email *">
	                    <input class="radius_bottom" type="password" name="password" placeholder="Mot de Passe *">
	           
	                  
	                    <p>Seriez vous présent le jour de notre mariage en France ? *</p>
	                    <input type="radio" name="rsvpFr" value="1"> Oui
	                    <input type="radio" name="rsvpFr" value="0"> Non

	                    <p>Seriez vous présent le jour de notre mariage à l'ile Maurice ? *</p>
	                    <input type="radio" name="rsvpMa" value="1"> Oui
	                    <input type="radio" name="rsvpMa" value="0"> Non
	   
	                  
	                    <p>Avez-vous ou votre(vos) enfant(s), des allergies alimentaires ou un régime alimentaire spécifique? *</p>
	                    <input type="radio" name="regime" value="1"> Oui
	                    <input type="radio" name="regime" value="0"> Non

	                    <textarea name="aliment_specs" id="" cols="100" placeholder="Si oui, de quel type ?"></textarea>


	                    <p>Venez-vous accompagné d'enfants ? *</p>
	                    <input type="radio" name="enfants" value="0"> Oui
	                    <input type="radio" name="enfants" value="1"> Non
	                    <textarea name="enfants" cols="100" placeholder="Pouvez-vous nous indiquer son(leur) prénom ?"></textarea>

	                    <p><span class="glyphicon glyphicon-headphones" aria-hidden="true"></span> Aidez-nous à faire notre playlist en nous disant ce que vous aimez :</p>
	                    <textarea name="musique" cols="100" placeholder="Un artiste, un album, un titre, tout ce qui vous vient :)"></textarea>

	                    <button name="btnCreateProfile" id="btnChangeId" class="btn btn_profile">Valider</button>


	                </form>
                
              	</div> <!-- end bloc_profile -->
            </div> <!-- end col md 12 -->
        </div> <!-- end row -->
    </div> <!-- end container -->

<?php $this->stop('main') ?>






