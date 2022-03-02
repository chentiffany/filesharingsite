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
//creating directory for new user in /srv/module2_secure
session_start();
$new_username = (string)$_GET['new_username'];
$full_path = sprintf("/srv/module2_secure/%s", $new_username);
if (is_dir($full_path)) {
    printf("%s", htmlentities($new_username));
    echo " already exists";
    echo "<br>";
    echo "<a href=\"loginPage.php\">Back to Login</a>";
} else {
    mkdir($full_path);
    echo "New User Created: ";
    printf("%s", htmlentities($new_username));
    echo "<br>";
    echo "<a href=\"loginPage.php\">Back to Login</a>";


    //adding user to the users.txt document
    $file = "/srv/module2_secure/users/users.txt";
    file_put_contents($file, "\n".$new_username."\n", FILE_APPEND);
}
?>
</body>
</html>

