<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <label for="a">Enter a</label>
    <input type="number" name="num1"><br>

    <label for="b">Enter b</label>
    <input type="number" name="num2">
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $a=$_POST['num1'];
        $b=$_POST['num2'];
        echo"before swapping a=$a b=$b"."<br>";
        $a=$a*$b;
        $b=$a/$b;
        $a=$a/$b;
        echo"after swapping  a=$a b=$b";
    }
    ?>
</body>
</html>