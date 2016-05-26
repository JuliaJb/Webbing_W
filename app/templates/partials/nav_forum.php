	<div class="container">
		<div class="jumbotron">
			<h2>Bienvenu sur le Forum de Marcus et Ginette</h2>
			<a href="/forum/create" class="btn btn-default btn-lg new_post">
			  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Nouveau Sujet
			</a>
		</div>
	</div>

	<!-- Forum Nav depending on Roles -->
	<div class="container">
		<h2>Les Catégories</h2>
		<?php $key = array_search('Admin', $_SESSION['roles']) ?>
		<?php if($key) : ?>
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="/forum/france">France</a></li>
				<li role="presentation"><a href="/forum/maurice">Maurice</a></li>
				<li role="presentation"><a href="/forum/bachelorette">Bachelorette</a></li>
				<li role="presentation"><a href="/forum/bachelor">Bachelor</a></li>
			</ul>
		<?php else : ?>
			<ul class="nav nav-tabs">
				<li role="presentation"><a href="/forum/surprise">Surprise</a></li>
			<?php foreach ($_SESSION['roles'] as $key => $value) : ?>
				<li role="presentation"><a href="/forum/<?= $value ?>"><?= $value ?></a></li>		
			<?php endforeach ; ?>
			</ul>
		<?php endif ?>
	</div>
