<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<link rel="stylesheet" href="mystyle.css">
</head>

<body>
<?php
	session_start();

	// Get the filename and make sure it is valid
	$filename = basename($_FILES['uploadedfile']['name']);
	if( !preg_match('/^[\w_\.\-]+$/', $filename) ){
		echo "Invalid filename";
		exit;
	}


	// Get the username and make sure it is valid
	$username = $_SESSION['user'];
	if( !preg_match('/^[\w_\-]+$/', $username) ){
		echo "Invalid username";
		exit;
	}

	$full_path = sprintf("/srv/module2_secure/%s/%s", $username, $filename);

	if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $full_path) ){
		header("Location: upload_success.html");
		exit;
	}
	else{
		header("Location: upload_failure.html");
		exit;
	}
	?>
</body>

</html>