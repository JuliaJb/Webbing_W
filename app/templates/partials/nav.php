

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
          
          <!-- Show info according to roles -->
          <?php foreach ($_SESSION['roles'] as $key => $value) : ?>
            <!-- If user both France and Maurice -->
          <?php if ($value == 'Maurice' && $value == 'France') : ?>
            <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Infos <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="/info_maurice">Infos Maurice</a></li>
              <li><a href="/info_france">Infos France</a></li>
            </ul>
          </li>
          
          <!-- If user invited to France -->
          <?php elseif ($value == 'France' && $value != 'Maurice') : ?>
            <li><a href="/info_france">Infos</a></li>
          </ul>
          
          <!-- If user invited to Maurice -->
          <?php elseif ($value == 'Maurice') : ?>
            <li><a href="/info_maurice">Infos</a></li>
          </ul>
          <?php endif ?>
          <?php endforeach ?>


        <!-- Verify that User has Admin access  -->
        <?php $adminkey = array_search('Admin', $_SESSION['roles']) ?>
        <?php $mariekey = array_search('Marie', $_SESSION['roles']) ?>
        <?php if ($adminkey || $mariekey) : ?>
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
      
      <?php if ($adminkey == False && $mariekey == False ) : ?>
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

