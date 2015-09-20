<?php 
/**
 * This is a Anax pagecontroller.
 *
 */
// Include the essential config-file which also creates the $anax variable with its defaults.
include(__DIR__.'/config.php'); 


// Do it and store it all in variables in the Anax container.
$swan['title'] = "Redovising";

$swan['header'] = <<<EOD
<img class='sitelogo' src='img/shireenyusur.png' alt='Logo'/> 
<span class='siteslogan'>OOPHP Kurs-webbutveckling med PHP</span>
EOD;

$swan['main'] = <<<EOD

<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["me-1.jpg"]'>
<img src='img/me/me-1.jpg' width='900px' height='180px' alt='Me'/>
</div>


<article class="content justify">
<h1>Redovisning av kursmomenten</h1>

<h2>Kmom01: Kom igång med Objektorienterad PHP</h2>
<p>
Denna här uppgift var varken lätt eller svårt,  ganska lagom.  Jag har lärt mig att använda mindre HTML-kod medan 
mer om embedded PHP av stil med General Standard Markup Language (GSML). 
Utvecklingsmiljön jag har använt Netbeans som editor, och det hjälpte mig att visa både "code assistance" och "code errors".  
Jag gick igenom guiden “20 steg för att komma igång PHP” för att komma ihåg hur objektet & array är fungera när vi ropa en funktion eller skapa en instance objektet.
Det är alltid bra att gå igenom vad jag lärde mig i HTMLPHP kurs, känner mig mer självsäker. 
</p>
<p>
Den webbsida utvecklade jag som en första uppgift i PHP Object-oriented programming kurs.
Jag har bestämt att bygga en enkel design som jag tycker om, så jag kan efter 
utveckla den till en Portfolio som visar mitt kunskaper och färdigheter från den här kurs.
Därför jag vill fokusera nu på funktioner, objekt, och array  som inbäddade i webbmall. 

På början, det var lite krångligt att förstår hur ANAX byggde, men sedan blir den mycket intressant att gå igenom koden som Mikeal Roos har skrivit.
Strukturen I Anax kändes väldigt tydlig och organiserade på sätt kan man följa så helt enkel . 
Jag faktiskt döpte min webbmall till "Swan" som jag tyckte om mycket.
Sedan, jag byggde upp sidan från grunden för att förstå målet av tre komponenter (src,  tema,  webroot) som model viewer controller (MVC).
Därför jag har gjort Swan som en modell lik Anax. 
</p>
<p>
Jag hoppade over JavaScript för plugin ska fungera i huvud meny för att visa gallery. 
Dessutom, jag har fått några problem när inkludera source.php fil, men tillslut, jag hittade en lösning.  
I alla fall, problemet var inte så seriös. </p>



</article>

EOD;

$swan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos | 
<a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> |
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;


// Finally, leave it all to the rendering phase of Anax.
include(SWAN_THEME_PATH);
