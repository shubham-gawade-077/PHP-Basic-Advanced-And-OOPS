<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Balance.php" method="post">
        <label for="balance">Enter balance</label>
        <input type="number" name="bal"><br>
        <label for="withdraw">Enter withdraw amount</label>
        <input type="number" name="withd"><br>
        <input type="submit" name="submit" >
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $bal=$_POST['bal'];
        $withd=$_POST['withd'];

        if($withd>$bal)
        {
            echo"insuffisient balance";
        }
        else{
            echo"balance = ".($bal-$withd);
        }
    }
    ?>
</body>
</html>