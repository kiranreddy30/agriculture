<?php
	// Connect to database
	$servername = "localhost";
	$username = "dbms07";
	$password = "dbms@07";
	$dbname = "dbms07";
	$conn = mysqli_connect($servername, $username, $password, $dbname);
	if (!$conn) {
		die("Connection failed: " . mysqli_connect_error());
	}

	// Create new thread
	if (isset($_POST['title']) && isset($_POST['content'])) {
		$title = $_POST['title'];
		$content = $_POST['content'];
		$sql = "INSERT INTO threads (title, content) VALUES ('$title', '$content')";
		if (mysqli_query($conn, $sql)) {
			echo "Thread created successfully";
		} else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}