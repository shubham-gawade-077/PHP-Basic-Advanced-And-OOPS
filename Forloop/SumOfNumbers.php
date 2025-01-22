<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter last number 
        <input type="number" name="num">
        <input type="submit"name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $sum=0;
        $n=$_POST['num'];
        for($i=1;$i<=$n;$i++)
        {
           $sum=$sum+$i;
        }
        echo$sum;
    }
    ?>
</body>
</html>