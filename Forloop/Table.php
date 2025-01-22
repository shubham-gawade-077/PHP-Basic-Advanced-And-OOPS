<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Enter the number
        <input type="number" name="num">
        <input type="submit" name="submit">
    </form>

    <?php 
    if(isset($_POST['submit']))
    {
    $n=$_POST['num'];
    echo "<table border='1'cellspacing='1'cellpadding='10'>";
    echo "<tr>";
    for($a=1;$a<=10;$a++)
    {
            echo"<th>$a</th>";
        }
        echo"</tr>";
        for($b=1;$b<=10;$b++)
        {
            echo"<tr>";
        echo "<td>".($n*$b)."</td";
        }
         echo"</tr>";
        
       echo" </table>";
}
    ?>
</body>
</html>