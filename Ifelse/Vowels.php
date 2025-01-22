<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        <label for="char">Enter character</label>
        <input type="text" name="char"><br>
        <input type="submit" name="submit" >
    </form>

    <?php
    if(isset($_POST['submit']))
    {
        $char=$_POST['char'];
        if($char=='A'||$char=='a'||$char=='E'||$char=='e'||$char=='I'||
        $char=='i'||$char=='O'||$char=='o'||$char=='U'||$char=='u')
        {
            echo"vowels";
        }
        
        else{
            echo"not vowels";
        }
    }
    ?>
</body>
</html>