<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FILEPUT PHP</title>
</head>
<body>
<?php

$myFile = fopen("uploads/file.txt","w");

$txt = "My name is Sreshtha";

fwrite($myFile,$txt);

$txt = "I'm 20 years old.";
fwrite($myFile,$txt);


fclose($myFile);

echo $myFile;
?>



<form action="fileput.php" method="post">
    <input type ="text" name="age">
    <input type="submit" name = "submit">
</form>
</body>
</html>