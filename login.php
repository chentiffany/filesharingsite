<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="mystyle.css">
</head>

<body>
    <?php
    session_start();
    if ((string)$_GET['user'] == "") {
        echo "You must enter a user to log in!";
        echo "<br>";
        echo "<a href=\"loginPage.php\">Back to Login</a>";
    } else {
        $user = (string)$_GET['user'];
        $_SESSION['user'] = (string) $_GET['user'];
        $userExists = FALSE;

        $h = fopen("/srv/module2_secure/users/users.txt", "r");
        $full_path = sprintf("/srv/module2_secure/%s", $user);

        if (is_dir($full_path)) {
            $linenum = 1;
            while (!feof($h)) {
                if (trim(fgets($h)) == $_SESSION['user']) {
                    $userExists = TRUE;
                } else {
                    $linenum++;
                }
            }
            fclose($h);

            if ($userExists) {
                header("Location: mainPage.php");
                exit;
            } else {
                session_destroy();
                echo "Invalid user";
            }
        } else {
            printf("%s", htmlentities($user));
            echo " does not exist";
            echo "<br>";
            echo "<a href=\"loginPage.php\">Back to Login</a>";
        }
    }
    ?>
</body>

</html>