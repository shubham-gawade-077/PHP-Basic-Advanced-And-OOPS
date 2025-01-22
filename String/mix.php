<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action=""method="post">
    Enter string :
    <input type="text"name="text"><br>
    Select :<br>
    <input type="radio"name="option"value="1">Uppercase <br>
    <input type="radio"name="option"value="2">lowercase <br>
    <input type="radio"name="option"value="3">trim <br>
    <input type="radio"name="option"value="4">words 1st letter capital <br>
    <input type="radio"name="option"value="5">strings 1st letter capital <br><br>

    <input type="submit"name="submit"><br>
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $str=$_POST['text'];
        $s=$_POST['option'];
        switch($s)
        {
            case 1:
                echo strtoupper($str);
                break;
            case 2:
                echo strtolower($str);
                break;
            case 3:
                echo trim($str);
                break;
            case 4:
                echo ucwords($str);
                break;
            case 5:
                echo ucfirst($str);
                break;
                default:
                echo "plz choose one of them";

        }
    }
    ?>
</body>
</html>