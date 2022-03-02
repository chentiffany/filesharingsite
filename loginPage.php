<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple File Sharing Site</title>
    <link rel="stylesheet" href="mystyle.css">
</head>
<body>
    <h1>Welcome!</h1> <br>
        <form name="Login" action="login.php" method="get">
            Username: <input type="text" placeholder="Enter Username" id = "user" name="user" />
            <input type="submit" value="Log in"/>
        </form>
        <br>
    <h3> Manage Users </h3> <br>
        <form name="NewUser" action="newuser.php" method="get">
            Add User: <input type="text" placeholder="Enter Username" id = "new_username" name="new_username"/>
            <input type="submit" value="Add"/>
        </form>
        <br>
        <form name="DeleteUser" action="deleteuser.php" method="get">
            Delete User: <input type="text" placeholder="Enter Username" id = "username" name="username"/>
            <input type="submit" value="Delete"/>
        </form>
        <br>
    <p> 
        <img src="https://mckelveyengineeringfaculty.imgix.net/Todd_Sproull.jpg?w=325&h=250&auto=format&q=65&fit=facearea&facepad=3" alt="todd" />
    </p>
</body>
</html>