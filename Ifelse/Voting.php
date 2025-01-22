<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="age">Enter age</label>
        <input type="number" name="age"><br>
        <input type="submit" name="submit" >
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $age=$_POST['age'];
        if($age>=18)
        {
            echo"Eligible for vote ";
        }
        else if($age<=0)
        {
            echo"enter valid age";
        }
        else{
            echo"not eligible for vote ";
        }
    }
    ?>
</body>
</html>