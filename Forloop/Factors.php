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
        $n=$_POST['num'];
        for($i=2;$i<=$n/2;$i++)
        {
            if($n%$i==0)
            {
            echo"$i<br>";
            }
        }
    }
    ?>
</body>
</html>