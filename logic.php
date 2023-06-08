<?php
$password = $_GET['password'] ?? false;
$chars_numbers = $_GET['chars-numbers'] ?? false;
$chars_letters = $_GET['chars-letters'] ?? false;
$chars_symbols = $_GET['chars-symbols'] ?? false;

if ($password) {

	if (is_numeric($password)) {
		$is_password_valid = true;
		$message = 'La password di' . ' ' . $password . ' ' . 'caratteri è stata generata' ;
	} else {
		$is_password_valid = false;
		$message = 'Email non valida. Inserirne un\'altra';
	}
};


function random_password_letters($password) {
	$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$pass = array(); 
	$alphaLength = strlen($alphabet) - 1; 
	
	for ($i = 0; $i < $password; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $alphabet[$n];
	}
	return implode($pass); 
	
};

function random_password_numbers($password) {
	$numbers = '1234567890';
	$pass = array(); 
	$alphaLength = strlen($numbers) - 1; 
	
	for ($i = 0; $i < $password; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $numbers[$n];
	}
	return implode($pass); 
	
}

function random_password_symbols($password) {
	$symbols= '!@#$%^&';
	$pass = array(); 
	$alphaLength = strlen($symbols) - 1; 
	
	for ($i = 0; $i < $password; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $symbols[$n];
	}
	return implode($pass); 
	
};

function random_password_symbols_and_numbers($password) {
	$symbols= '!@#$%^&1234567890';
	$pass = array(); 
	$alphaLength = strlen($symbols) - 1; 
	
	for ($i = 0; $i < $password; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $symbols[$n];
	}
	return implode($pass); 
	
};

function random_password_numbers_and_letters($password) {
	$symbols= '1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$pass = array(); 
	$alphaLength = strlen($symbols) - 1; 
	
	for ($i = 0; $i < $password; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $symbols[$n];
	}
	return implode($pass); 
	
};

function random_password_symbols_and_letters($password) {
	$symbols= '@#$%^&abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
	$pass = array(); 
	$alphaLength = strlen($symbols) - 1; 
	
	for ($i = 0; $i < $password; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $symbols[$n];
	}
	return implode($pass); 
	
};

function random_password_all($password) {
	$symbols= '@#$%^&abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
	$pass = array(); 
	$alphaLength = strlen($symbols) - 1; 
	
	for ($i = 0; $i < $password; $i++) {
		$n = rand(0, $alphaLength);
		$pass[] = $symbols[$n];
	}
	return implode($pass); 
	
};


