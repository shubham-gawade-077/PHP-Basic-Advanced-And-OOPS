<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="number">Enter number of vaccine</label>
        <input type="number" name="num"><br>
        <input type="submit" name="submit" >
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $num=$_POST['num'];

        if($num==2)
        {
            echo"eligible for interview";
        }
        else if($num>2)
        {
            echo"only 2 vaccines are there";
        }
        else{
            echo"not eligible for interview";
        }
    }
    ?>
</body>
</html>