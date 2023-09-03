<!doctype>
<html lang="ru">
    <head>
        <meta charset="utf-8">
        <title>HomeWork2</title>
    </head>
    <body>
    <?php
        if(key_exists("name", $_GET)){
            $name = $_GET["name"];
            $age = $_GET["age"];
            if($age < 18)
                echo "$name, sorry, but registration on this site is from 18 years old";
            else
                echo "$name, thank you for registering!";

        }
    ?>
    <br>
    <?php
    echo "Hello!"
    ?>
    <br/>
    <form action="index.php" method="get">
        <input type="text" placeholder="Your name" name="name">
        <input type="text" placeholder="Your age" name="age">
        <input type="submit" value="Register">
    </form>
    </body>
</html>

