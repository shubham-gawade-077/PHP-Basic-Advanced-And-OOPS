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
        $div=0;
        $n=$_POST['num'];
        $i=2;
        while($i<$n/2)
        {
            if($n%$i==0)
            {
                $div=1;
                break;
            }
            $i++;
        }
        if($div==0)
        {
            echo"prime number";
        }
       else{
        echo"not prime number";
       }
    }
    ?>


</body>
</html>