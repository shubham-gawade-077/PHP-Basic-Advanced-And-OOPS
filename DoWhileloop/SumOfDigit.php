<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        Enter the number :
        <input type="number"name="num">
        <input type="submit"name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $sum=0;
        $n=$_POST['num'];
        do
        {
            $n1=$n%10;
            $n=$n/10;
            $sum=$sum+$n1;
        }
        while($n>0);
        echo"sum of digit = ".$sum;
    }
    ?>
</body>
</html>