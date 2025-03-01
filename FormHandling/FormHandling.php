<?php
$username = $email = $gender = $comment = $website = "";
$usernameErr = $emailErr = $genderErr = $websiteErr= "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST['username'];
    $email=$_POST['email'];

    if(empty($username))
    {
        $usernameErr="username is required";
    }
    else {
        $username = test_input($_POST['username']);
        // check if name only contains letters and whitespace
        if (!preg_match("/^[a-zA-Z-' ]*$/",$username)) {
          $usernameErr = "Only letters and white space allowed";
        }
    }
    if(empty($email))
    {
        $emailErr="Email is required";
    }
    else {
        $email = test_input($_POST["email"]);
        // check if e-mail address is well-formed
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
          $emailErr = "Invalid email format";
        }
      }
      if (empty($_POST["website"])) {
        $website = "";
      } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
          $websiteErr = "Invalid URL";
        }    
      }
    
      if (empty($_POST["comment"])) {
        $comment = "";
      } else {
        $comment = test_input($_POST["comment"]);
      }
    
      if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
      } else {
        $gender = test_input($_POST["gender"]);
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
        .error{
            color:red;
        }
    </style>
</head>
<body>
    <h2>PHP Form Validation Example</h2>
    <p><span class="error">* required field</span></p>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div>
            <label for="username">Enter username</label>
            <input type="text" name="username" id="username">
            <span class="error">*<?php echo $usernameErr ?></span>
        </div>
        <br>
        <div>
            <label for="email">Enter username</label>
            <input type="text" name="email" id="email">
            <span class="error">*<?php echo $emailErr ?></span>   
        </div>
        <br>
        <div>
             Website: <input type="text" name="website">
            <span class="error"><?php echo $websiteErr;?></span>
        </div>
        <br>
        <div>
            Comment: <textarea name="comment" rows="5" cols="40"></textarea>
        </div>
        <br>
        <div>
            Gender:
            <input type="radio" name="gender" value="female">Female
            <input type="radio" name="gender" value="male">Male
            <input type="radio" name="gender" value="other">Other
            <span class="error">* <?php echo $genderErr;?></span>
        </div>
        <br>
        <button type="submit">Submit</button>
    </form>
</body>
</html>

<?php
echo "<h2>Your Input:</h2>";
echo $username;
echo "<br>";
echo $email;
echo "<br>";

?>