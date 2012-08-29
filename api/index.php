<?php

	require_once 'Slim/Slim.php';
	require_once 'idiorm.php';
	
	ORM::configure('mysql:host=108.171.172.251;dbname=parenting_nuggets');
	ORM::configure('username', 'fbdev');
	ORM::configure('password', 'Movement456');
	
	$app = new Slim();
	
	// POLL FUNCTIONS
	
	// update the poll numbers
	$app->post('/poll/:num', function($num) {
		
		$row = ORM::for_table('poll')->find_one($num);
		$row->count++;
		$row->save();
		
		// get all the rows
		$rows = ORM::for_table('poll')->find_many();
		
		// make a json array of the results
		$results = array();
		
		foreach($rows as $row) {
			$results[] = $row->count;
		}
		
		echo json_encode($results);
		
	});
	
	// get the poll numbers
	$app->get('/poll', function() {
		
		// get all the rows
		$rows = ORM::for_table('poll')->find_many();
		
		// make a json array of the results
		$results = array();
		
		foreach($rows as $row) {
			$results[] = $row->count;
		}
		
		echo json_encode($results);
		
	});
	
	// SIGNUP FUNCTIONS
	
	// add a new email
	$app->post('/signup', function() use($app) {
		
		try {
		
			$email = $app->request()->params('email');
			$dob = $app->request()->params('dob');
			$now = $app->request()->params('now');
			
			$row = ORM::for_table('emails')->create();
			$row->email = $email;
			$row->dob = $dob;
			$row->entered_on = $now;
			$row->save();
			
			echo 'success';
			
		} catch (Exception $e) {
		
			echo 'fail: ' . $e;
			
		}
		
	});
	
	$app->run();