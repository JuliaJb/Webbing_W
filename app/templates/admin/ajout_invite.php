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

<?php include '../app/templates/partials/categorie_admin.php'; ?>


    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="forum_list">
                        
                    <form id="addGuest" method="POST">
                        

                        <input type="text" name="firstname" placeholder="Prénom *">

                        <input type="text" name="lastname" placeholder="Nom *">
                      
                        <p>Invité au mariage en France ? *</p>
                        <input type="radio" name="invitFr" value="1"> Oui
                        <input type="radio" name="invitFr" value="0"> Non

                        <p>Invité uniquement au vin d'honneur ? *</p>
                        <input type="radio" name="invitVin" value="1"> Oui
                        <input type="radio" name="invitVin" value="0"> Non


                        <p>Invité au mariage à l'ile Maurice ? *</p>
                        <input type="radio" name="invitMa" value="1"> Oui
                        <input type="radio" name="invitMa" value="0"> Non


                        <button name="btnAddGuest" id="btnChangeId" class="btn">Ajouter l'invité</button>


                    </form>

                </div>   <!-- end of forum_list -->              
            </div>
        </div> 
    </div> 



<?php $this->stop('main') ?>

<?php $this->start('script') ?>


    <script src="<?= $this->assetUrl('/js/admin.js') ?>"></script>


<?php $this->stop('script') ?>

