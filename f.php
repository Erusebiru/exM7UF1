<?php
	$m = array( "Alibaba" => "y los quarenta ladrones",
	            "Harry Potter" => "y el cáliz de fuego");

	//afegim un element més
	$m["Aníbal"] = "El caníbal";

	//pitem el contingut de l'array
	foreach( $m as $clau=>$valor) {
	    echo "El valor de [$clau] és [$valor] <br>";
	}

?>

<?php
	$jugadors_de_lacrosse = array( "Billy Bitter", "Chris Bocklet", "Jeremy Boltus" );
	$jugadors_de_pilota_vasca = array( "Iñaki" );
	$esports = array();
	$esports["Lacrosse"] = $jugadors_de_lacrosse;
	$esports["Pilota Vasca"] = $jugadors_de_pilota_vasca;

	foreach( $esports as $esport => $jugadors ) {
	    echo "Els meu jugadors preferits de $esport són ";
	    foreach( $jugadors as $jugador){
	    	echo " ",$jugador;
	    }
	    echo "<br>";
	}
?>