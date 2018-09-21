<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php
		$i = 12;
		$e = 12.1;
		$o = True;
		$u = "Hola";
		$tipus_de_i = gettype( $i );
		$tipus_de_e = gettype( $e );
		$tipus_de_o = gettype( $o );
		$tipus_de_u = gettype( $u );
		echo "La variable \$i 
	    	conté el valor $i 
	    	i és del tipus $tipus_de_i<br>";
	    echo "La variable \$e con valor $e es un $tipus_de_e<br>";
	    echo "La variable \$u con valor $u es un $tipus_de_u<br>";
	    echo "La variable \$o con valor $o es un $tipus_de_o";
	?>
</body>
</html>