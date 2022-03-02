
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
$username = (string)$_GET['username'];
$full_path = sprintf("/srv/module2_secure/%s", $username);
if (is_dir($full_path)) {
    $list_files = glob($full_path . '/*');
    foreach($list_files as $each_file){
        if(is_file($each_file)){
            unlink($each_file);
        }
    }
    rmdir ($full_path);
    echo "User Deleted: ";
    printf("%s", htmlentities($username));
    echo "<br>";
    echo "<a href=\"loginPage.php\">Back to Login</a>";
} else {
    printf("%s", htmlentities($username));
    echo " does not exist";
    echo "<br>";
    echo "<a href=\"loginPage.php\">Back to Login</a>";
}
?> 
</body>
</html>

