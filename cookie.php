<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>COOKIE PHP</title>
</head>
<body>
<?php
    // Small file that the webserver stores in the client computer.

    //agruments cookies :
    //name
    //value
    //expire
    //php
    

    setcookie("name","Sreshtha",time()+85400*30);

    print_r($_COOKIE)


?>
</body>
</html>