<?php
	
	$w_routes = array(
		['GET|POST', '/', 'Login#login', 'login'],
		['GET', '/home', 'Default#home', 'home'],
		['GET|POST', '/profil', 'Login#profil', 'profil'],
		['GET|POST', '/mon_profil', 'Login#mon_profil', 'mon_profil'],
		['GET|POST', '/photo', 'Photo#photo', 'photo'],
		['GET', '/deconnexion', 'Default#deconnexion', 'deconnexion'],
		['GET', '/info_maurice', 'Default#info_maurice', 'info_maurice'],
		['GET', '/info_france', 'Default#info_france', 'info_france'],
		['GET|POST', '/forum/create', 'Forum#post_create', 'forum_create'],
		['GET', '/forum', 'Forum#post_list', 'forum'],
		['GET', '/forum/[a:cat]', 'Forum#post_filter', 'filter'],
		['GET|POST', '/forum/detail/[:id]', 'Forum#post_detail', 'forum_detail'],

		// Admin
		['GET|POST', '/admin', 'Admin#admin', 'admin'],
		['GET|POST', '/admin/statistiques', 'Admin#statistiques', 'statistiques'],
		['GET|POST', '/admin/contact_invites', 'Admin#contact_invites', 'contact_invites'],
		['GET|POST', '/admin/liste_invites', 'Admin#liste_invites', 'liste_invites'],
		['GET|POST', '/admin/maurice', 'Admin#maurice', 'maurice'],
		['GET|POST', '/admin/france', 'Admin#france', 'france'],
		['GET|POST', '/admin/profil_invites', 'Admin#profil_invites', 'profil_invites'],
		['GET|POST', '/admin/info_une', 'Admin#info_une', 'info_une'],
		['GET|POST', '/admin/ajout_invite', 'Admin#ajout_invite', 'ajout_invite'],


	);