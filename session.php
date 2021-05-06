<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SESSION PHP</title>
</head>
<body>
<?php
    // Good to use for sensitive info.
    // Sessioon exists as long as the browser is open.
    session_start();


    //storing info

    $_SESSION['name'] = "Sreshtha";
    echo "Hello" . $_SESSION['name'];


    session_destroy();

?>
</body>
</html>