<?php
/**
 * Config-file for Anax. Change settings here to affect installation.
 *
 */
 
/**
 * Set the error reporting.
 *
 */
error_reporting(-1);              // Report all type of errors
ini_set('display_errors', 1);     // Display all errors 
ini_set('output_buffering', 0);   // Do not buffer outputs, write directly
 
 
/**
 * Define Swan paths.
 *
 */
define('SWAN_INSTALL_PATH', __DIR__ . '/..');
define('SWAN_THEME_PATH', SWAN_INSTALL_PATH . '/theme/render.php');



 
/**
 * Include bootstrapping functions.
 *
 */
include(SWAN_INSTALL_PATH . '/src/bootstrap.php');
 
 
/**
 * Start the session.
 *
 */
session_name(preg_replace('/[^a-z\d]/i', '', __DIR__));
session_start();
 
 
/**
 * Create the Swan variable.
 *
 */
$swan = array();
 

 /**
 * Theme related settings.
 *
 */
$aswan['stylesheet'] = 'css/style.css';
$swan['favicon']    = 'favicon.ico';

// this array to include multi stylesheet
$swan['stylesheets'] = array('css/style.css');
 
/**
 * Site wide settings.
 *
 */
$swan['lang']         = 'sv';
$swan['title_append'] = ' | OOPHP Kurs';


$swan['header'] = <<<EOD
<img class='sitelogo' src='img/shireenyusur.png' alt='Logo'/> 
<span class='siteslogan'>OOPHP Kurs-webbutveckling med PHP</span>
EOD;


$swan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos | 
<a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> |
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

$swan['menu'] =array(

	'class' => 'navbar', 

	 'items' => array( 

	 	'Hem'=>array('text' => 'Hem' , 'url' => 'index.php',  'title' =>'XXX'),

	 	'redovisning' => array('text' =>'Redovisning', 'url' => 'report.php' , 'title' => 'Redovisning'),

	 	'kallkod' => array('text' =>'Källkod', 'url' => 'source.php' , 'title' => 'Se källkod'),

	 	),

	
	'callback_selected' => function($url) { 

    	if(basename($_SERVER['SCRIPT_FILENAME']) == $url) {
      		
      		return true;
    	}

  	}


);

