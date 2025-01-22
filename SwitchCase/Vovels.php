<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter character:
        <input type="text" name="char">
        <input type="submit" name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $ch=$_POST['char'];
        switch($ch)
        {
            case 'a':case'e':case 'i':case 'o':case 'u':
                echo"$ch is ovel";
                break;

                default:
                echo"$ch is not ovel";
        }
    }
    ?>
</body>
</html>