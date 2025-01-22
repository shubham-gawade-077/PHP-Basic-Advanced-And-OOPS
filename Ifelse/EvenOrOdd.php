<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="number">Enter number</label>
        <input type="number" name="num"><br>
        <input type="submit" name="submit" >
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $num=$_POST['num'];

        if($num%2==0)
        {
            echo"even number";
        }
        else{
            echo"Odd number";
        }
    }
    ?>
</body>
</html>