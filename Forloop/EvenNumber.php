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
        <input type="number" name="even">
        <input type="submit"name="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $n=$_POST['even'];
        for($i=2;$i<=$n;$i++)
        {
            if($i%2==0)
            {
            echo"$i<br>";
            }
        }
    }
    ?>
</body>
</html>