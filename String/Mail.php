<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        Enter mail :
        <input type="mail"name="mail"><br>
        Enter password :
        <input type="password"name="pass"> <br>
       <input type="submit"name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $mail="abc@gmail.com";
        $pass="12345";
        $m=$_POST['mail'];
        $p=$_POST['pass'];

        if($mail==trim($m))
        {

            if($pass==$p)
            {
                echo"mail and pasword correct"."<br>";
                echo"login successful";
            }
            else        

            {
                echo"mail is correct...password is wrong";
            }
        }
       
        else
        {
            echo"wrong mail";
        }
    }
    ?>
</body>
</html>