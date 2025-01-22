<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        Enter Atm pin :
        <input type="number"name="pin">
        <input type="submit"name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $pin=1234;
        $n=$_POST['pin'];
        $cnt=1;
        do
        {
            if($n==$pin)
            {
                echo"Pin is correct";
            }
          
            else 
            {
                if($cnt<=2)
                {
                echo"wrong pin";
                $cnt++;
                }
               
                else{
                    echo"card blocked";
                }
            }

        }
        while($n==$pin);
    }
    ?>
</body>
</html>