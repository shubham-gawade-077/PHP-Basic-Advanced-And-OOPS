<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="alphabet.php" method="post">
        <label for="char">Enter character</label>
        <input type="text" name="char"><br>
        <input type="submit" name="submit" value="submit">
    </form>
    </body>
    </html>

    <?php
    if(isset($_POST['submit']))
    {
    $ch=$_POST['char'];
    if(($ch>='A'&& $ch<='Z')||($ch>='a'&& $ch<='z'))
    {
        echo"character is alphabet";
    }
    else{
        echo"character is not alphabet";
    }
    }
    ?>

