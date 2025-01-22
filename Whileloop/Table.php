<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action=""method="post">
    Enter number :
    <input type="number"name="num">
    <input type="submit"name="submit">
</form>
    <?php
    if(isset($_POST['submit']))
    {
        $n=$_POST['num'];
        $i=1;
        while($i<=10)
        {
            echo $n."*".$i."=".$n*$i."<br>";
            $i++;
        }
    }
    ?>
</body>
</html>