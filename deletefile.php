<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete PHP</title>
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
    <?php
    session_start();
    $filename = (string)$_GET['filename'];
    $username = (string)$_SESSION['user'];
    $full_path = sprintf("/srv/module2_secure/%s/%s", $username, $filename);
    if (file_exists($full_path)) {
        unlink($full_path);
        header("Location: mainPage.php");
    } else {
        printf("Error while deleting %s", htmlentities($filename));
    }
    ?>
</body>

</html>