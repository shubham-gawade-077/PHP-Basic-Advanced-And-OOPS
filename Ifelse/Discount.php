<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="amount">Enter amount</label>
        <input type="number" name="amt"><br>
        <input type="submit" name="submit" >
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $amt=$_POST['amt'];

        if($amt<10000)
        {
            echo"no discount ";
        }
        else if($amt>=10000 && $amt<=20000)
        {
            $disc=$amt*0.005;
            $total=$amt-$disc;
            echo"disc=$disc "." amount=$amt "." total=$total";
        }
        else if($amt>=20000 && $amt<=50000)
        {
            $disc=$amt*0.007;
            $total=$amt-$disc;
            echo"disc=$disc "." amount=$amt "." total=$total";
        }
        else{
            $disc=$amt*0.010;
            $total=$amt-$disc;
            echo"disc=$disc "." amount=$amt "." total=$total";
        }
    }
    ?>
</body>
</html>