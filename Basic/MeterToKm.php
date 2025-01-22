<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter meter:
    <input type="number" name="meter"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $m=$_POST['meter'];
        $km=$m/1000;
        echo"meter=$m"."<br>";
        echo"kilo meter=$km";
    }
    ?>
</body>
</html>