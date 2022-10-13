<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>My first PHP page</h1>

    <?php 
    //This is a single-line comment to remember that variables are case-sensitive
    
    /* 
    This is a multiple-line comment to remember that variables 
    are case sensitive, but keywords aren't
    */
    $color= "red";
    echo "My car is " . $color . "<br>";
    echo "My house is " . $COLOR . "<br>";
    echo "My boat is " . $coLOR . "<br>";
    ?>
</body>
</html>