<?php
	if (isset($_POST['submit'])){
		// list form data
		echo ("<h1>RAW</h1>\n");
		echo ("ID: " . trim($_POST['id']) . "<br />\n");
		echo ("Name: " . trim($_POST['name']) . "<br />\n");
		echo ("Bio: " . trim($_POST['bio']) . "<br />\n");
		echo ("Nationality: " . trim($_POST['nationality']) . "<br />\n");
		echo ("Gender: " . trim($_POST['gender']) . "<br />\n");
		echo ("Birth Year: " . trim($_POST["birth"]) . "<br />\n");
		echo ("Death Year: " . trim($_POST["death"]) . "<br />\n");
		echo ("wiki: " . trim($_POST['wiki']) . "<br />\n");
		echo ("ulan: " . trim($_POST['ulan']) . "<br />\n");
		// get connection to database
		require_once('secure/mysqli_connect.php');
		// create query
		$query = "INSERT INTO artist (id,name,bio,nationality,gender,birthYear,deathYear,wiki,ulan) VALUES (?,?,?,?,?,?,?,?,?)";
		// prepare statement
		$stmt = mysqli_prepare($dbc,$query);
		// bind parameters
		mysqli_stmt_bind_param($stmt,'sssssssss',$id,$name,$bio,$nat,$gen,$birth,$death,$wiki,$ulan);
		// assign data to variables
		$id=trim($_POST['id']);
		$name=trim($_POST['name']);
		$bio=trim($_POST['bio']);
		$nat=trim($_POST['nationality']);
		$gen=trim($_POST['gender']);
		$birth=trim($_POST['birth']);
		$death=trim($_POST['death']);
		$wiki=trim($_POST['wiki']);
		$ulan=trim($_POST['ulan']);
		// print variables
		printf("<h1>VARIABLES</h1>");
		printf("<p>Artist ID: %s</p>",$id);
		printf("<p>Artist Name: %s</p>",$name);
		printf("<p>Biography: %s</p>",$bio);
		printf("<p>Nationality: %s</p>",$nat);
		printf("<p>Gender: %s</p>",$gen);
		printf("<p>Birth Year: %s</p>",$birth);
		printf("<p>Death Year: %s</p>",$death);
		printf("<p>wiki: %s</p>",$wiki);
		printf("<p>ulan: %s</p>",$ulan);
		// execute SQL statement
		mysqli_stmt_execute($stmt);
		// show number of records added; netagive indicates error
		echo ("<h1>RESULT</h1>\n");
		printf("%d Row added.\n", mysqli_affected_rows($dbc));
		// Close connection to the database
		mysqli_close($dbc);
	}

?>