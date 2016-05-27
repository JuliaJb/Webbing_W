<?php 
$franceKey = array_search('France', $_SESSION['roles']) ;
$mauriceKey = array_search('Maurice', $_SESSION['roles']) ;
$adminKey = array_search('Admin', $_SESSION['roles']) ; 
$marieKey = array_search('Marie', $_SESSION['roles'])  ; 

if (is_int($marieKey)) {
  $marie = true;
}
if (is_int($adminKey)) {
  $admin = true;
}
if (is_int($franceKey)) {
  $france = true;
}
if (is_int($mauriceKey)) {
  $maurice = true;
}
?>

<nav class="navbar navbar-default">
  <div class="container">
    <div class="container-fluid">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/home">Marcus & Ginette</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li><a href="/home"><i class="fa fa-home" aria-hidden="true"></i> Home</a></li>
          <li><a href="/forum/<?= $_SESSION['roles'][0]?>">Forum</a></li>
          <li><a href="/photo">Photo</a></li>    
          <?php if ($france && $maurice) : ?>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Infos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/info_maurice">Infos Maurice</a></li>
              <li><a href="/info_france">Infos France</a></li>
            </ul>
          </li>
          </ul>
          <?php endif ?>
          
          <?php if ($france && !$maurice) : ?>
            <li><a href="/info_france">Infos</a></li>
          </ul>
          <?php endif ?>
          
          <?php if ($maurice && !$france) : ?>
            <li><a href="/info_maurice">Infos</a></li>
          </ul>
          </div>
          <?php endif ?>
          


      <?php if ($admin or $marie) : ?>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bonjour <?php echo $_SESSION['firstname'] ?> <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="/mon_profil">Mon profil</a></li>
            <li><a href="/deconnexion">Deconnexion</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="/admin">Admin</a></li>
            <li><a href="/plan">Plan de table</a></li>
          </ul>
        </li>
      </ul>
      <?php endif ?>
      
      <?php if (!$admin  && !$marie ) : ?>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Bonjour <?php echo $_SESSION['firstname'] ?> <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/mon_profil">Mon profil</a></li>
              <li><a href="/deconnexion">Deconnexion</a></li>
            </ul>
          </li>
        </ul>
      <?php endif ?>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </div>
</nav>