<?php
$m = array( "Alibaba" => "y los quarenta ladrones",
            "Harry Potter" => "y el cáliz de fuego");

//afegim un element més
$m["Aníbal"] = "El caníbal";

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br><br>");

print_r(array_keys($m)); //printamos las keys

//Accedim a un element (mostrem només un element)
print( $m["<br>Alibaba"]);
print( "<br><br>");

//Esborrem un element
unset( $m["Harry Potter"]);

//mostrem *tot* el contingut de l'array
print_r($m);
print( "<br>");
?>