<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Login#login', 'login'],
		['GET', '/home', 'Default#home', 'home'],
		['GET|POST', '/profil', 'Login#profil', 'profil'],
		['GET', '/forum', 'Default#forum', 'forum'],
		['GET|POST', '/forum/create', 'Forum#post_create', 'forum_create'],
		['GET', '/photo', 'Default#photo', 'photo'],
		['GET', '/infos', 'Default#infos', 'infos'],
		['GET', '/deconnexion', 'Default#deconnexion', 'deconnexion'],

	);