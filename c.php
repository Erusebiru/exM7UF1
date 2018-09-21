<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$d = new DateTime();
		$tipus_de_d = gettype( $d );
		$classe_de_d = get_class( $d );
		echo "La variable \$d 
    		conté el valor " . $d->format( "Y/m/d") .
    		" i és del tipus $tipus_de_d
    		<br>$classe_de_d";
	?>
</body>	
</html>