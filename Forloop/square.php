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
        <input type="number" name="square">
        <input type="submit"name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $n=$_POST['square'];
        for($i=1;$i<=$n;$i++)
        {
            echo $i."=".$i*$i."<br>";
        }
    }
    ?>
</body>
</html>