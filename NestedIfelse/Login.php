<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Login.php" method="post">
        <label for="uid">Enter user id:</label>
        <input type="text" name="userID" ><br>
        <label for="upass">Enter user password:</label>
        <input type="text" name="userPS" ><br>
        <label for="aid">Enter admin id:</label>
        <input type="text" name="aid" ><br>
        <label for="apass">Enter admin password:</label>
        <input type="text" name="apass" ><br>
        <input type="submit" name="submit">
        </form>

    <?php
        if(isset($_POST['submit']))
        {
            $userId="a";
            $userPass="abc";
            $uid=$_POST["userID"];
            $upass=$_POST["userPS"];

            $adminId="aa";
            $adminPass="abcd";
            $aid=$_POST["aid"];
            $apass=$_POST["apass"];

            if($uid!==$userId && $upass!==$userPass)
            {
               echo"invalid credentials<br>";
            
            }
            else if($uid===$userId && $upass===$userPass){
               echo"login successful<br>";
            }
            else{
                if($uid!==$userId)
                {
                    echo"invalid user id<br>";
                }
                else{
                    echo"invalid password<br>";
                }
            }

            //***************************************************************** */
            if($aid!==$adminId && $apass!==$adminPass)
            {
               echo"invalid credentials<br>";
            
            }
            else if($aid===$adminId && $apass===$adminPass){
               echo"login successful <br>";
            }
            else{
                if($aid!==$adminId)
                {
                    echo"invalid user id <br>";
                }
                else{
                    echo"invalid password"."<br>";
                }
            }
        }
     ?>
</body>
</html>