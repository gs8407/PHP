<?php
$json = file_get_contents( "http://jsonplaceholder.typicode.com/posts" );
$data = json_decode( $json );

echo "<h2>JSON:</h2>";
echo "<style>div {background: whitesmoke; padding: 15px; border-bottom: 1px solid grey;}</style>";

foreach ( $data as $single ) {
	echo "<div>" . "<h3 style='text-transform: uppercase;'>" . $single->title . "</h3>" . "<p style='text-transform: capitalize'>" . $single->body . "</p> </div>";
}
