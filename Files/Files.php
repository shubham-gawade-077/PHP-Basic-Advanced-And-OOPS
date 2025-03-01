<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="fileUpload">Upload File:</label>
        <input type="file" name="fileUpload" value="fileUpload"><br>
        <input type="submit" name="Upload">
    </form>
</body>
</html>

<?php
if(isset($_POST['Upload']))
{
$file=$_FILES['fileUpload'];
print_r($file);
}
?>
