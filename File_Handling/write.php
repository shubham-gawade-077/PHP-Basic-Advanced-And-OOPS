<?php
// $file_name="abc.txt";
// $content="This is abc file";
// $file= fopen($file_name,"w") or die("enable to create file");
// fwrite($file,$content);
// fclose($file);
// echo "FILE CREATED";

if(isset($_POST['filename']))
{
$file_name=$_POST['filename'];
$content=$_POST['content'];
$file= fopen($file_name,"w") or die("enable to create file");
fwrite($file,$content);
fclose($file);
echo "FILE CREATED";
}
?>
<form action="" method="post">
    <input type="text" name="filename" placeholder="enter file name">
    <br><br>
    <textarea name="content" placeholder="Write something"></textarea>
    <br><br>
    <button name="submit">submit</button>
</form>