<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter number :
        <input type="number" name="num">
        <input type="submit"name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $f=1;
        $n=$_POST['num'];
        for($i=$n;$i>=1;$i--)
        {
          $f=$f*$i;  
        }
        echo$f;
    }
    ?>
</body>
</html>