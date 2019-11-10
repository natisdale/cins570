<?php
// get connection to database
require_once('secure/mysqli_connect.php');

// create query
$query = "SELECT id,name,bio,nationality,gender,birthYear,deathYear,wiki,ulan FROM artist LIMIT 10";

// Get a response from the database by sending the connection and the query
$response = @mysqli_query($dbc, $query);

// If the query executed properly proceed
if ($response){
	echo '<table align="left" cellspacing="5" cellpadding="8">
	<tr>
		<td align="left"><b>ID</b></td>
		<td align="left"><b>Name</b></td>
		<td align="left"><b>Bio</b></td>
		<td align="left"><b>Nationality</b></td>
		<td align="left"><b>Gender</b></td>
		<td align="left"><b>Birth Year</b></td>
		<td align="left"><b>Death Year</b></td>
		<td align="left"><b>Wiki</b></td>
		<td align="left"><b>Ulan</b></td>
	</tr>';
	while ($row = mysqli_fetch_array($response)){
	echo '<tr>
		<td align="left">' . $row['id'] . '</td>
		<td align="left">' . $row['name'] . '</td>
		<td align="left">' . $row['bio'] . '</td>
		<td align="left">' . $row['nationality'] . '</td>
		<td align="left">' . $row['gender'] . '</td>
		<td align="left">' . $row['birthYear'] . '</td>
		<td align="left">' . $row['deathYear'] . '</td>
		<td align="left">' . $row['wiki'] . '</td>
		<td align="left">' . $row['ulan'] . '</td>
		</tr>';
	}
	echo '</table>';
} else {
	echo "Could not issue database query<br />";
	echo mysqli_error($dbc);
}
// Close connection to the database
mysqli_close($dbc);
?>