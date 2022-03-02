# CSE330 Simple File Sharing Site
:t-rex: Tiffany Chen-489997-chentiffany

:sauropod: Jeanette Smith-488151-jsmith4040

Creative portion
>My partner and I worked on two additions to the file sharing site for the creative portion of the project. First, while we have our original three users in the users.txt file, we made it possible to both add and delete users who can access an “account” on the file sharing site. Our second creative element is an attached date and time serving as metadata for the user. After the user uploads a file and navigates back to the User Page, the date and file appears adjacent to the respective file name. 

Link to site: http://ec2-3-86-103-173.compute-1.amazonaws.com/~jsmith/module2-group-488151-489997/loginPage.php

Login credentials: jsmith, tchen, tsproull, or you can create your own account!

Much of the code for PHP working parts was adapted from the [CSS330 PHP Wiki](https://classes.engineering.wustl.edu/cse330/index.php?title=PHP). Parts that we implemented code from the CSE330 Wiki was with the reading of a file line by line, uploading a file, viewing a file, logging in, and redirecting to a new page. Functions that were implemented throughout the project that were not found on the CSE330 Wiki were sourced from the [php manual](https://www.php.net/manual/en/funcref.php). These include unlink(), is_dir(), glob(), is_file(), array_diff(), scandir(), date(), filemtime(), file_put_contents(), and ob_clean().