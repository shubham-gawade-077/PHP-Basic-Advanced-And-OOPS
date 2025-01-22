<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="a">Enter a</label>
        <input type="number" name="a"><br>
        <label for="b">Enter b</label>
        <input type="number" name="b"><br>
        <label for="c">Enter c</label>
        <input type="number" name="c"><br>
        <input type="submit" name="submit" >
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];

        if(($a*$a)+($b*$b)==($c*$c)||($b*$b)+($c*$c)==($a*$a)|| ($c*$c)+($a*$a)==($b*$b))
        
        {
            echo"Right angle triangle";
        }
        else if(($a==$b) && ($b==$c))
        {
            echo"equilateral triangle";
        }
        else if($a==$b ||$b==$c ||$c==$a)
        {
            echo"isosceles";
        }
        else if($a!=$b && $b==$c && $c!=$a)
        {
            echo"sceles";
        }
        else{
            echo"no triangle";
        }
    }
    ?>
</body>
</html>