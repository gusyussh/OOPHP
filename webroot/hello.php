<?php 


/*
*	Page Controller
*/

include ( __DIR__.'/config.php');


$swan['title'] = "Hello";

$swan['header'] = <<<EOD
<img class='sitelogo' src='img/shireenyusur.png' alt='Logo'/> 
<span class='siteslogan'>OOPHP Kurs-webbutveckling med PHP</span>
EOD;

$swan['main'] = <<<EOD
<h1> Hej! Mitt namn är Shireen Yusur</h1>
<p> Och jag är en Software Engineer</p>
EOD;


$swan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos | 
<a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> |
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

// the page controller hand over to the THEME management file
include(SWAN_THEME_PATH);