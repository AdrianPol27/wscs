<?php

	include('layout/header.php');
	include('db/connector.php');
	include('models/global-facade.php');
	include('models/user-facade.php');

	$globalFacade = new GlobalFacade;
	$userFacade = new UserFacade;

	$userId = 0;

	// If user is not signed in
	$globalFacade->isSignedIn($userId);

?>