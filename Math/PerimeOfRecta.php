<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
     Enter length:  
    <input type="number" name="length"><br>

     Enter bredth:  
    <input type="number" name="bredth"><br>

    <input type="submit" name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $l=$_POST['length'];
        $b=$_POST['bredth'];
        $peri=2*($l+$b);
        echo"perimeter=$peri";
       
    }
    ?>
</body>
</html>