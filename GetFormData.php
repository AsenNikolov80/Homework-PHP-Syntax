<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Get Form Data</title>
        <style>
            input[type='text'],input[type='radio'],label{
                display: block;
                margin-bottom: 5px;
            }
            input[type='radio']{
                display: inline;
            }
        </style>
    </head>
    <body>
        <form method="GET" action="<?= $_SERVER['PHP_SELF'] ?>">
            <input name="name" type="text" placeholder="Name..."/>
            <input name="age" type="text" placeholder="Age..."/>
            <label><input type="radio" name="radio" value="male"/>Male</label>
            <label><input type="radio" name="radio" value="female"/>Female</label>
            <input type="submit" value="Submit" name="submit"/>
        </form>
        <?php
        if (isset($_GET['submit'])) {
            $name = $_GET['name'];
            $age = $_GET['age'];
            $sex = $_GET['radio'];
            echo 'My name is '.$name.'. I am '.$age.' years old. I am '.$sex.'.';
        }
        ?>

    </body>
</html>
