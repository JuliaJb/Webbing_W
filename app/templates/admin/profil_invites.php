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
    
        <ol class="breadcrumb">
            <li><a href="/home">Home</a></li>
            <li><a href="/forum">Forum</a></li>
            <li class="active">Categorie</li>
        </ol>

    <div class="container">
        <div class="jumbotron">
            <h2>Bienvenu sur l'admin de Marcus et Ginette</h2>
            <a href="/forum/create" class="btn btn-default btn-lg new_post">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nouvel invité
            </a>
            <a href="/forum/create" class="btn btn-default btn-lg new_post">
              <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Modification invité
            </a>
        </div>
    </div>

<?php include '../app/templates/partials/categorie_admin.php'; ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                
                    
                <div class="forum_list">
                    <h2>Quel profil souhaitez-vous modifier ?</h2>
                    <form id="adminNames" method="POST">

                        <label>Prénom</label>
                        <select id="firstname" name="firstname">
                            <option value="" disabled selected>-- selectionnez le prénom --</option>

                            <?php foreach ($invites as $key => $value) { ?>

                                <option value="<?= $invites[$key]['firstname']; ?>"><?= $invites[$key]['firstname']; ?>

                            <?php  } ?>

                        </select>


                        <label>Nom</label>
                        <select id="lastname" name="lastname">
                            <option value="" disabled selected>-- selectionnez le nom --</option>

                            <?php foreach ($invites as $key => $value) { ?>

                                <option class="<?= $invites[$key]['firstname']; ?>" value="<?= $invites[$key]['lastname']; ?>"><?= $invites[$key]['lastname']; ?>

                            <?php  } ?>

                        </select>

                        <button name="btnAdminNames" id="btnAdminNames" class="btn">OK !</button>

                    </form>

                    <p><?= (isset($message))? $message:"" ?></p>
                        
                    <form class="<?= $isvisible ?>" id="adminProfile" method="POST">
                        

                        <div class=<?php if ( isset($errors['prenom']) || isset($errors['nom']) ) { echo "errorsProfil";} ?>>

                            <p><?php if(isset($errors['prenom'])) { echo $errors['prenom'];} ?></p>
                            <p><?php if(isset($errors['nom'])) { echo $errors['nom'];} ?></p>
                        </div>

                        <input type="hidden" name="id" value="<?php if(isset($profil['id'])) { echo $profil['id'];} ?>">

                        <input type="email" name="email" placeholder="Email *" value="<?php if(isset($profil['email'])) { echo $profil['email'];} ?>">

                        <input type="password" name="password" placeholder="Mot de Passe *" value="<?php if(isset($profil['password'])) { echo $profil['password'];} ?>">

                        <div class=<?php if ( isset($errors['password']) || isset($errors['email']) ) { echo "errorsProfil";} ?>>

                            <p><?php if(isset($errors['password'])) { echo $errors['password'];} ?></p>
                            <p><?php if(isset($errors['email'])) { echo $errors['email'];} ?></p>
                        </div>
               
                      
                        <p>Sera t-il(elle) présent le 24 juin en France ? *</p>
                        <input type="radio" name="rsvpFr" value="1" <?= (isset($profil['rsvpFr']) && $profil['rsvpFr'] == "1")? "checked": " " ?>> Oui
                        <input type="radio" name="rsvpFr" value="0" <?= (isset($profil['rsvpFr']) && $profil['rsvpFr'] == "0")? "checked": " " ?>> Non

                        <div class=<?php if (isset($errors['rsvpFr'])) { echo "errorsProfil";} ?>>
                            <p><?php if(isset($errors['rsvpFr'])) { echo $errors['rsvpFr'];} ?></p>
                        </div>

                        <p>Sera t-il(elle) présent le 28 octobre à L'île Maurice ? *</p>
                        <input type="radio" name="rsvpMa" value="1" <?= (isset($profil['rsvpMa']) && $profil['rsvpMa'] == "1")? "checked": " " ?>> Oui
                        <input type="radio" name="rsvpMa" value="0" <?= (isset($profil['rsvpMa']) && $profil['rsvpMa'] == "0")? "checked": " " ?>> Non

                        <div class=<?php if (isset($errors['rsvpMa'])) { echo "errorsProfil";} ?>>
                            <p><?php if(isset($errors['rsvpMa'])) { echo $errors['rsvpMa'];} ?></p>
                        </div>
       
                      
                        <p>A-t-il(elle) des allergies ou restrictions alimentaires ? *</p>
                        <input type="radio" name="regime" value="1" <?= (isset($profil['diet']) && $profil['diet'] == "1")? "checked": " " ?>> Oui
                        <input type="radio" name="regime" value="0" <?= (isset($profil['diet']) && $profil['diet'] == "0")? "checked": " " ?>> Non

                        <div class=<?php if (isset($errors['regime'])) { echo "errorsProfil";} ?>>
                            <p><?php if(isset($errors['regime'])) { echo $errors['regime'];} ?></p>
                        </div>

                        <textarea name="aliment_specs" id="" cols="100" placeholder="Si oui, de quel type ?"><?= (isset($profil['aliments']))? $profil['aliments']:"" ?></textarea>

                        <div class=<?php if (isset($errors['aliment_specs'])) { echo "errorsProfil";} ?>>
                            <p><?php if(isset($errors['aliment_specs'])) { echo $errors['aliment_specs'];} ?></p>
                        </div>


                        <p>Vient-il(elle) accompagné(e) d'enfants ? *</p>
                        <input type="radio" name="enfants" value="1" <?= (isset($profil['children']) && $profil['children'] == "1")? "checked": " " ?>> Oui
                        <input type="radio" name="enfants" value="0" <?= (isset($profil['children']) && $profil['children'] == "0")? "checked": " " ?>> Non

                        <div class=<?php if (isset($errors['enfants'])) { echo "errorsProfil";} ?>>
                            <p><?php if(isset($errors['enfants'])) { echo $errors['enfants'];} ?></p>
                        </div>

                        <textarea name="enfants_name" cols="100" placeholder="Pouvez-vous nous indiquer son(leur) prénom ?"></textarea>

                        <div class=<?php if (isset($errors['enfants_name'])) { echo "errorsProfil";} ?>>
                            <p><?php if(isset($errors['enfants_name'])) { echo $errors['enfants_name'];} ?></p>
                        </div>


                        <button name="btnAdminProfile" id="btnChangeId" class="btn">Enregistrer les modifications</button>


                    </form>
                </div>   <!-- end of forum_list -->     
                          
            </div>
        </div> 
    </div> 



<?php $this->stop('main') ?>

<?php $this->start('script') ?>


    <script src="<?= $this->assetUrl('/js/admin.js') ?>"></script>


<?php $this->stop('script') ?>

