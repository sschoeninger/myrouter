<?php



	$autoload = function($class){
		
		//include($class.'.php'); // this code is for windows installation

		include(str_replace('\\', '/', $class . '.php')); //this code is for linux installation
	};

	spl_autoload_register($autoload);


	$myController = new \myController();

	Router::get('/',function() {
		echo '<h2>I am index</h2>';
	});

	Router::get('/?',function($par) {
		echo '<h2>I write what do you say in: </h2><h1>'.$par[1].'</h1>';
	});


	Router::get('/home/?',function($par) {
		echo '<h2>I write what do you say next home: </h2><h1>'.$par[2].'</h1>';
	});

	Router::get('/controller',function() use ($myController){
		$myController->index();
	});



?>