<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
    Enter a:
    <input type="number" name="a"><br>
    Enter b:
    <input type="number" name="b"><br>
    Enter c:
    <input type="number" name="c"><br>
    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
       if($a>$b)
       {
        if($a>$c)
        {
            echo"$a is max";
        }
        else {
        echo"$c is max";
        }
       }
       else{
        if($b>$c)
        {
            echo"$b is max";
        }
        else{
            echo"$c is max";
        }
       }
    }
    ?>
</body>
</html>