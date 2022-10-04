<?php
include("connect.php");

$name = "";
$number = "";
$url = "";


$display = '<section id="entries">';

//get results from database
$sql='SELECT * FROM track';
$stmt = $conn->prepare($sql);
$stmt->execute();

//list songs
while ($row = $stmt->fetch()) {
    if ($row['track_name']!='') {
	$display .= ' <p class="message">' . $row['track_number'] . ' is: ';
	$display .= '<a href="PlayTrack.php?TrackId='.$row['track_id'].'"><strong> ' .  $row['track_name'] . ' </strong><a> :</p>';
	$display .= ' <p class="message">' . $row['track_artist'] . '</p>';

	/*$display .= ' <audio controls>';
	$display .= '		  <source src="' . $row['track_url'] . '" type="audio/mpeg">';
	$display .= '		Your browser does not support the audio element.';
	$display .= '		</audio>';*/

	$display .= ' <hr>';
    }
}

// add to $display
$display .= '</section>';

?><!DOCTYPE html>
<head>
	<title>Spotify Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="Default.css">
</head>
<body>
	<header>
	  <h2>My First Website</h2>
	</header>

	<?php include('Navigation.php');?>
	<section>

	 
	 
		<h1>Player</h1>
		<?php
            echo $display;
        ?>
		

		 
	</section>

	<footer>
	  <p>Footer</p>
	</footer>

</body>
</html>
