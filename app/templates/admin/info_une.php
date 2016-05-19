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
                    <h2>Liste de vos invités</h2>
                    <table class="table table-hover">

                        <tr class="grey">
                            <th>Nom</th>
                            <th>Prenom</th>
                        </tr>

                        <?php foreach ($users as $key => $value) { ?>

                        <tr class="danger">
                            <td><?= $users[$key]['nom']; ?></td>
                            <td><?= $users[$key]['prenom']; ?></td>
                        </tr>
                        <tr class="infos_invite">
                            <td><?= $users[$key]['mail']; ?><br>aliments : <?= $users[$key]['aliments']; ?></td>
                            <td>enfant : <?= $users[$key]['enfant']; ?><br>rsvp : <?= $users[$key]['rsvp']; ?></td>
                        </tr>

                        <?php  } ?>

                    </table>
                </div>   <!-- end of forum_list -->     
                          
            </div>
        </div> 
    </div> 



<?php $this->stop('main') ?>


<?php $this->start('script') ?>


    <script src="<?= $this->assetUrl('/js/main.js') ?>"></script>


<?php $this->stop('script') ?>


