<?php

return array(

	'app_name'   => 'Gorilla',
	'app_slogan' => 'a microblogging platform',

	/*
	|--------------------------------------------------------------------------
	| Common
	|--------------------------------------------------------------------------
	*/
	'actions' => array(
		'create' => 'Crea',
		'update' => 'Modifica',
		'delete' => 'Elimina',
		'logout' => 'Logout',
		'save'   => 'Salva',
		'back'   => 'Torna indietro',
	),

	'questions' => array(
		'confirm' => 'Sei sicuro di voler procedere ?',
	),

	'messages' => array(
		'confirm' => 'Operazione completata con successo',
	),

	/*
	|--------------------------------------------------------------------------
	| Authentication
	|--------------------------------------------------------------------------
	*/
	'auth' => array(
		// Login
		'login' => array(
			'title' => 'Login',

			'fields' => array(
				'username' => 'Username',
				'password' => 'Password',
				'remember' => 'Ricordami',
			),

			'actions' => array(
				'login'  => 'Accedi',
				'forgot' => 'Hai perso la password ?',
			),

			'msg' => array(
				'failed' => 'Utente o password errati',
			),
		),

		// Forgot password
		'forgot' => array(
			'title' => 'Recupero password',

			'fields' => array(
				'email' => 'Inserisci il tuo indirizzo Email',
			),

			'actions' => array(
				'login'  => 'Torna al Login',
				'forgot' => 'Recupera password',
			),

			'msg' => array(
				'failed' => 'Utente o password errati',
			),
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Posts
	|--------------------------------------------------------------------------
	*/
	'posts' => array(
		'title' => 'Posts',
		'sing'  => 'post',
		'plur'  => 'posts',
	),

	/*
	|--------------------------------------------------------------------------
	| Users
	|--------------------------------------------------------------------------
	*/
	'users' => array(
		'title' => 'Utenti',
		'sing'  => 'utente',
		'plur'  => 'utenti',

		'fields' => array(
			'email'                 => 'Email',
			'username'              => 'Username',
			'password'              => 'Password',
			'password_confirmation' => 'Conferma Password',
			'enabled'               => 'Abilitato',
		),
	),

	/*
	|--------------------------------------------------------------------------
	| Users
	|--------------------------------------------------------------------------
	*/
	'settings' => array(
		'title' => 'Impostazioni',
		'sing'  => 'impostazioni',
		'plur'  => 'impostazione',
	),

);