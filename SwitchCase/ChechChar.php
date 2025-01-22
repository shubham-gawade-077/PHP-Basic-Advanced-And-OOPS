<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
        Enter character or digit :
        <input type="text"name="char">
        <input type="submit"name="submit">
    </form>
    <?php
    if(isset($_POST['submit']))
    {
        $ch=$_POST['char'];
        if($ch>='a'&& $ch<='z')
        {
            $ch=1;
            
        }
        else if($ch>='A'&& $ch<='Z')
        {
            $ch=2;

        }
        else if($ch>='1'&& $ch<='9')
        {
            $ch=3;

        }
        switch($ch)
        {
            case 1:
                echo"lowecase character";
                break;
            case 2:
                echo"uppercase character";
                break;
            case 3:
                echo"It is digit";
                break;
                default:
                echo"Special character";
        }
    }
    ?>
</body>
</html>