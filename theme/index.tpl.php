<!doctype html>
<html lang='<?=$lang?>'>
<head>
<meta charset='utf-8'/>
<title><?=getTitle($title)?></title>

<?php if(isset($favicon)): ?>
	<link rel='shortcut icon' href='favicon.ico'/>
<?php endif; ?>
<!-- Load the page style-->
<?php foreach($stylesheets as $val): ?>
<link rel='stylesheet' type='text/css' href='<?=$val?>'/>
<?php endforeach; ?>

<!-- Modernizer for featuers -->
<script scr='<?= $modernizer?>'></script>
</head>
<body>

  <div id='wrapper'>
    <div id='header'><?=$header?></div>
    <div id='menu'><?=getNavbar($swan['menu'])?></div>
    <div id='main'><?=$main?></div>
    <div id='footer'><?=$footer?></div>
  </div>

  
<!-- Google Analytics, to log visitors -->
<?php if(isset($google_analytics)): ?>
<script>
  var _gaq=[['_setAccount','<?=$google_analytics?>'],['_trackPageview']];
  (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
  g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
  s.parentNode.insertBefore(g,s)}(document,'script'));
</script>
<?php endif; ?>
</body>
</html>