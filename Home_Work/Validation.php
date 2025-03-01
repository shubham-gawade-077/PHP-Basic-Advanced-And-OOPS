<?php
$mo_no = $mo_no_Err="";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $mo_no=$_POST['num'];
    if(empty($mo_no))
    {
        $mo_no_Err="mobile number is required";
    }
    else
    {
        $mo_no=test_input($_POST['num']);
        if(!preg_match("/^[0-9]{10}+$/",$mo_no))
        {
            $mo_no_Err="must enter 10 digit";
        }
        else
        {
            echo "this is valid mo.number ";
            echo $mo_no;
        }
    }

}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .err{
            color:red;
        }
    </style>
</head>
<body>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
        <div>
            <label for="num">Enter the mobile number</label>
            <input type="text" name="num">
            <span class="err">*<?php echo $mo_no_Err ?></span>
        </div>
        <input type="submit" name="submit">
    </form>
</body>
</html>