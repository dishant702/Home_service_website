<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>
<body>
 
<form method="post" enctype="multipart/form-data">
    <label>Title</label>
    <input type="text" name="title">
    <label>File Upload</label>
    <input type="File" name="file">
    <input type="submit" name="submit">
 
 
</form>
 
</body>
</html>

 
 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <div class="container">
        <table border="1px" align="center" bgcolor="grey">
            <form name="form_data"method="post" enctype="multipart/form-data">
            <tr> <td align="center">login</td></tr>
            <tr><td>user</td><td><input type="text"></td>></tr>
            <tr><td>upload file</td><td><input type="file" name="upload"></td></tr>
            <tr><td><input type="submit" name="sub"></td></tr>
            </form>
        </table>
    </div>
</head>
<body>
    

<?php
$img_path="";
if (isset($_POST["sub"]))
{
//     // var_dump($_FILES["upload"]);
//     echo"file name", $_FILES["upload"]["name"];
//     echo"file size", $_FILES["upload"]["size"];
    echo"file type", $_FILES["upload"]["type"];
//     echo"file temp name", $_FILES["upload"]["error"];
//     echo"error", $_FILES["upload"]["error"];
//     var_dump($_SERVER["DOCUMENT_ROOT"]);
//     var_dump($_SERVER["PHP_SELF"]);

// C:\xampp\htdocs\demo\uploadfile
// }



if($_FILES["upload"]["error"]==0)
  
{
    $allow=array("jpg"."jpeg","gif","png");
    $s=$_FILES["upload"]["name"];
    $a=explode(".",$s);
    $ext=end($a);
   if( in_array($ext,$allow))
{
    $tmp=$_FILES["upload"]["tmp_name"];
    $final=$_SERVER["DOCUMENT_ROOT"]."/demo/uploadfile/".$_FILES["upload"]["name"];
    echo "$final";
    move_uploaded_file($tmp,$final);
    $img_path="uploadfile/".$_FILES["upload"]["name"];
    echo"done";

}
  else
{
    echo"error";
}
}
else
echo"error";
}
?>
<img src="<?php echo"$img_path"?>">

</body>
</html>