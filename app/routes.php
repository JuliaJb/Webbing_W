<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Login#login', 'login'],
		['GET', '/home', 'Default#home', 'home'],
		['GET|POST', '/profil', 'Login#profil', 'profil'],
		['GET', '/photo', 'Default#photo', 'photo'],
		['GET', '/infos', 'Default#infos', 'infos'],
		['GET', '/deconnexion', 'Default#deconnexion', 'deconnexion'],

		//Routes Adriana :
		['GET|POST', '/forum/create', 'Forum#post_create', 'forum_create'],
		['GET', '/forum', 'Forum#post_list', 'forum'],
		['GET', '/forum/detail/[:id]', 'Forum#post_detail', 'forum_detail'],

	);