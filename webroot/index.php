<?php
include ( __DIR__.'/config.php');






$swan['title'] = "Hem";


$swan['header'] = <<<EOD
<img class='sitelogo' src='img/shireenyusur.png' alt='Logo'/> 
<span class='siteslogan'>OOPHP Kurs-webbutveckling med PHP</span>
EOD;

$swan['main'] = <<<EOD

<div id="slideshow" class='slideshow' data-host="" data-path="img/me/" data-images='["me-1.jpg"]'>
<img src='img/me/me-1.jpg' width='900px' height='180px' alt='Me'/>
</div>

<article  class="content justify">
	<header class="top-header">
		<h1>Om mig själv</h1>
	</header>
	
	<figure class="right top">
      <img alt="Bild på Shireen Y." src="img/me.jpg" width="199" height="234">
      <figcaption>
        <p>Bild:Selfi</p>
      </figcaption>
    </figure>
	

	<p> Hej! Mitt namn är Shireen Yusur och läser jag den senaste tekniken av
				utveckling databasdrivna webbplatser och webbapplikationer på
				Blekinge Tekniska Högskola. 
				Jag har en stor passion för 'Webbutveckling' och jag tycker mycket att jobba på dina linje. 
				</p>

	 	<p>Som person är jag ambitiös,flexiblare analytisk förmåga. Aktiv
				och social är mina bästa egenskaper. På fritid lyssnar jag på
				klassisk musik eller läser en bok. Min nya hobby är att odla som
				blommor eller grönsaker. När jag får tid över tycker jag att öva
				webbutveckling eller utveckla i ytterligare programmeringsspråk som
				Java och Erlang. Nu vill jag utveckla min egen webbplats på
				profession sätt efter avslutad denna kursen.</p>
			<p>/Shireen</p>
 </article>


EOD;



$swan['footer'] = <<<EOD
<footer><span class='sitefooter'>Copyright (c) Mikael Roos | 
<a href='https://github.com/mosbth/Anax-base'>Anax på GitHub</a> |
<a href='http://validator.w3.org/unicorn/check?ucn_uri=referer&amp;ucn_task=conformance'>Unicorn</a></span></footer>
EOD;

// the page controller hand over to the THEME management file
include(SWAN_THEME_PATH);

