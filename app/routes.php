<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Login#login', 'login'],
		['GET', '/home', 'Default#home', 'home'],
		['GET|POST', '/profil', 'Login#profil', 'profil'],
		['GET|POST', '/mon_profil', 'Login#mon_profil', 'mon_profil'],
		['GET', '/forum', 'Default#forum', 'forum'],
		['GET|POST', '/photo', 'Photo#photo', 'photo'],
		['GET', '/deconnexion', 'Default#deconnexion', 'deconnexion'],
		['GET', '/info_maurice', 'Default#info_maurice', 'info_maurice'],
		['GET', '/info_france', 'Default#info_france', 'info_france'],

	);