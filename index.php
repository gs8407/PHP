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
?>

    <h2>JSON:</h2>
<?php
$json = file_get_contents( "http://jsonplaceholder.typicode.com/posts" );
$data = json_decode($json);

echo "<style>div {background: whitesmoke; padding: 15px; border-bottom: 1px solid grey;}</style>";

foreach($data as $single){
	echo  "<div>" . "<h3 style='text-transform: uppercase;'>" . $single->title . "</h3>" . "<p style='text-transform: capitalize'>" . $single->body . "</p> </div>";
}
