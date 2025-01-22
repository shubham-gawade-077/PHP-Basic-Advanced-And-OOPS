<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="atm">Enter atm pin</label>
        <input type="number" name="pin"><br><br>
        <input type="submit" name="submit" >
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $pin=$_POST['pin'];
        if($pin==1234)
        {
            echo"correct";
        }
        else if($pin<1000 && $pin>0)
        {
            echo"pin must be 4 digit";
        }
        else if($pin<0)
        {
            echo"pin must be positive";
        }
        else{
            echo"incorrect";
        }
    } 
    ?>
</body>
</html>