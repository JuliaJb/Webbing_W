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
                    <h2>Quelques Stats sur le mariage à l'île Maurice</h2>
                    <div class="stats">
                            <div class="stat">
                                <div class="circle">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>  
                                <p><?= $nbInvites['count'] ?> invités</p>
                            </div>

                            <div class="stat">
                                <div class="circle">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>  
                                <p><?= $yesGuestCountMaurice['count'] ?> Oui</p>
                            </div>

                            <div class="stat">
                                <div class="circle">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </div>  
                                <p><?= $noGuestCountMaurice['count'] ?> Non</p>
                            </div>

                        </div>
                    </div>

                    <div class="forum_list">
                    <h2>Quelques Stats sur le mariage en France</h2>
                    <div class="stats">
                            <div class="stat">
                                <div class="circle">
                                    <i class="fa fa-user" aria-hidden="true"></i>
                                </div>  
                                <p><?= $nbInvites['count'] ?> invités</p>
                            </div>

                            <div class="stat">
                                <div class="circle">
                                    <i class="fa fa-check" aria-hidden="true"></i>
                                </div>  
                                <p><?= $yesGuestCountFrance['count'] ?> Oui</p>
                            </div>

                            <div class="stat">
                                <div class="circle">
                                    <i class="fa fa-close" aria-hidden="true"></i>
                                </div>  
                                <p><?= $noGuestCountFrance['count'] ?> Non</p>
                            </div>

                        </div>
                    </div>
                    
                          
            </div>
        </div> 
    </div> 



    


<?php $this->stop('main') ?>



