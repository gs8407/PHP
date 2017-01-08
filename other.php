<?php
for ( $a = 0; $a <= 20; $a ++ ) {
	echo "Broj je: " . $a . "<br>";
}
?>
	<h2>Sledeće:</h2>
<?php
$modeli = array( "500", "500L", "Tipo Sedan", "Tipo HB", "Tipo SW", "Punto", "Panda" );
foreach ( $modeli as $model ) {
	echo $model . "<br>";
};
