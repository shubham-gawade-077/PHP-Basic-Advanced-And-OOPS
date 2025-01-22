<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="num">Enter the number</label>
        <input type="number" name="num"><br><br>
        <input type="submit" name="submit" value="submit">
    </form>

    <?php
    if(isset($_POST['submit']))
    {
    $num=$_POST['num'];
    if($num>0)
    {
        echo"positive";
    }
    else if($num<0)
    {
        echo"negative";
    }
    else {
        echo"zero";
    }
    
}
    ?>
</body>
</html>