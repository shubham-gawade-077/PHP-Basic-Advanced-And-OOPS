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
        $cnt=1;
        $n=$_POST['num'];
        while($n>9)
        {
            $n1=$n%10;
            $n=$n/10;
            $cnt++;
        }
        echo"number of digit = ".$cnt;
    }
    ?>


</body>
</html>