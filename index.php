<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <title>harjutus-2 - PHP põhitõed</title>
</head>

<body>
    <h1>See dokument on minu esimene katsetus PHP-ga</h1>
	<?php 
	  echo "Tere!" . " Ja tere veel!" ?>
	<p>Lõik</p>
	<h2>Lõik</h2>
	<?php 
	  echo 5 + 5
     // no comment	?>
	 
	 <p>Muutujad:</p>
	<?php 
	  $one = "I'm a string";
	  $two = 16;
	  $three = false; 
	  $what = 3;
	  
	  echo $what + $two;
	  echo $one; ?>
	  
</body>
</html>