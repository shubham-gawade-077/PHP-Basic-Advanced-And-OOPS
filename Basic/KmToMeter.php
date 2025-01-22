<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter kilo meter:
    <input type="number" name="km"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $km=$_POST['km'];
        $m=$km*1000;
        echo"kilo meter=$km"."<br>";
        echo"meter=$m";
    }
    ?>
</body>
</html>