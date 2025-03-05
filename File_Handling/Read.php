<?php
// $file_name="abc.txt";
// $file=fopen($file_name,"r") or die("fail to read file");
// echo fread($file,filesize($file_name));
// fclose($file);

if(isset($_FILES['filename']))
{
$file_name=$_FILES['filename']['tmp_name'];
$file=fopen($file_name,"r") or die("fail to read file");
echo fread($file,filesize($file_name));
fclose($file);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="filename">
    <br><br>
    <button name="read">Read file</button>
</form>