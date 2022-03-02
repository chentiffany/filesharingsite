<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>

    <link rel="stylesheet" href="mystyle.css">

</head>

<body>
    <?php
    session_start();
    $username = $_SESSION['user'];
    echo "Logged in as: ";
    printf("%s", htmlentities($username));
    ?>
    <form enctype="multipart/form-data" action="uploader.php" method="POST">
        <p>
            <input type="hidden" name="MAX_FILE_SIZE" value="20000000" />
            <label for="uploadfile_input">Choose a file to upload:</label> <input name="uploadedfile" type="file" id="uploadfile_input" />
            <input type="submit" value="Upload File" />
        </p>
    </form>
    <?php
    $dir = sprintf("/srv/module2_secure/%s", $username);
    $directoryFiles = array_diff(scandir($dir), array('.', '..'));
    echo "<p><b>Uploaded Files:</b></p>";
    echo "\n";
    foreach ($directoryFiles as $index => $filename) {
        echo "<b>".$filename."</b>";
        $file_dir = sprintf("/srv/module2_secure/%s/%s", $username, $filename);
        echo " uploaded on: " . date ("m-d-Y H:i:s", filemtime($file_dir));
        echo "\t";
    ?>
        <a href="viewfile.php?filename=<?php echo $filename; ?>">View</a> 
        <a href="deletefile.php?filename=<?php echo $filename; ?>">Delete</a>
    <?php
        echo "<br>";
    }
    ?>
    <br>
    <a href="loginPage.php">Log Out</a>
</body>

</html>