<?php
	// DB Verbindung
	$con = mysql_connect('host','user','pw');
	mysql_select_db('database_name', $con);



	$hiphop = mysql_query('SELECT * FROM musiksammlung WHERE genre LIKE \'hip_hop\' ORDER BY artist, jahr desc');
	$punk = mysql_query('SELECT * FROM musiksammlung WHERE genre LIKE \'punk\' ORDER BY artist, jahr desc');
	$elektro = mysql_query('SELECT * FROM musiksammlung WHERE genre LIKE \'elektro\' ORDER BY artist, jahr desc');
	$metal = mysql_query('SELECT * FROM musiksammlung WHERE genre LIKE \'metal\' ORDER BY artist, jahr desc');
	$alternative = mysql_query('SELECT * FROM musiksammlung WHERE genre LIKE \'alternative\' ORDER BY artist, jahr desc');
	$all = mysql_query('SELECT * FROM musiksammlung');
?>
<h1 class="genre-name">Hip Hop</h1>
<?php
	while($row = mysql_fetch_array($hiphop)) {
		echo '<div class="album-container">'."\n";
		echo '<img src="http://musik.kevingimbel.de/img/'.$row['genre'].'/'.$row['artist_short'].'/'. $row['album_short'] .'.jpeg" class="album-cover" />'."\n";
		echo '<div class="album-meta"><h1 class="album">'. $row['album_name'] . '</h1> <h2 class="artist">von ' . $row['artist'].'</h2></div>'."\n";
		echo '</div>'."\n"; //album-container
		echo "\n";
	}
?>



<h1 class="genre-name">Punk</h1>
<?php
	while($row = mysql_fetch_array($punk)) {
		echo '<div class="album-container">'."\n";
		echo '<img src="http://musik.kevingimbel.de/img/'.$row['genre'].'/'.$row['artist_short'].'/'. $row['album_short'] .'.jpeg" class="album-cover" />'."\n";
		echo '<div class="album-meta"><h1 class="album">'. $row['album_name'] . '</h1> <h2 class="artist">von ' . $row['artist'].'</h2></div>'."\n";
		echo '</div>'."\n"; //album-container
		echo "\n";
	}
?>




<h1 class="genre-name">Electro</h1>
<?php
	while($row = mysql_fetch_array($elektro)) {
		echo '<div class="album-container">'."\n";
		echo '<img src="http://musik.kevingimbel.de/img/'.$row['genre'].'/'.$row['artist_short'].'/'. $row['album_short'] .'.jpeg" class="album-cover" />'."\n";
		echo '<div class="album-meta"><h1 class="album">'. $row['album_name'] . '</h1> <h2 class="artist">von ' . $row['artist'].' ' . $row['feat'].'</h2></div>'."\n";
		echo '</div>'."\n"; //album-container
		echo "\n";
	}
?>




<h1 class="genre-name">Metal</h1>
<?php
	while($row = mysql_fetch_array($metal)) {
		echo '<div class="album-container">'."\n";
		echo '<img src="http://musik.kevingimbel.de/img/'.$row['genre'].'/'.$row['artist_short'].'/'. $row['album_short'] .'.jpeg" class="album-cover" />'."\n";
		echo '<div class="album-meta"><h1 class="album">'. $row['album_name'] . '</h1> <h2 class="artist">von ' . $row['artist'].' ' . $row['feat'].'</h2></div>'."\n";
		echo '</div>'."\n"; //album-container
		echo "\n";
	}
?>




<h1 class="genre-name">Alternative</h1>
<?php
	while($row = mysql_fetch_array($alternative)) {
		echo '<div class="album-container">'."\n";
		echo '<img src="http://musik.kevingimbel.de/img/'.$row['genre'].'/'.$row['artist_short'].'/'. $row['album_short'] .'.jpeg" class="album-cover" />'."\n";
		echo '<div class="album-meta"><h1 class="album">'. $row['album_name'] . '</h1> <h2 class="artist">von ' . $row['artist'].' ' . $row['feat'].'</h2></div>'."\n";
		echo '</div>'."\n"; //album-container
		echo "\n";
	}
?>