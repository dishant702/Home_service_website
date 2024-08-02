<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscription Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 50px auto;
            padding: 20px;
            background-color: #f4f4f4;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        .subscription-form label {
            font-weight: bold;
        }

        .subscription-form input[type="text"],
        .subscription-form input[type="tel"],
        .subscription-form input[type="file"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .subscription-form .qr-code {
            margin-top: 20px;
        }

        .subscription-form img {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Subscribe Now</h2>
        <form class="subscription-form"   method="post" enctype="multipart/form-data">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="phone">Phone No.:</label>
            <input type="tel" id="phone" name="phone" required>
            <label for="image">Upload Image:</label>
            <input type="file" id="image" name="image" accept="image/*" required>
            <input type="submit"  name="sub">
        </form>

        <div class="qr-code">
            <h3>Your QR Code:</h3>
            <img src="your-qr-code-image-url.png" alt="Your QR Code">
            <p>Your Phone No.: <span id="qrPhone"></span></p>
        </div>
    </div>

    <!-- <script>
        // Display user's phone number on the QR code section
        document.getElementById('qrPhone').textContent = document.getElementById('phone').value;
    </script> -->
</body>
</html>

<?php
$img_path="";
if (isset($_POST["sub"]))
{
//     // var_dump($_FILES["upload"]);
//     echo"file name", $_FILES["upload"]["name"];
//     echo"file size", $_FILES["upload"]["size"];
    echo"file type", $_FILES["image"]["type"];
//     echo"file temp name", $_FILES["upload"]["error"];
//     echo"error", $_FILES["upload"]["error"];
//     var_dump($_SERVER["DOCUMENT_ROOT"]);
//     var_dump($_SERVER["PHP_SELF"]);

// C:\xampp\htdocs\demo\uploadfile
// }



if($_FILES["image"]["error"]==0)
  
{
    $allow=array("jpg"."jpeg","gif","png");
    $s=$_FILES["image"]["name"];
    $a=explode(".",$s);
    $ext=end($a);
   if( in_array($ext,$allow))
{
    $tmp=$_FILES["image"]["tmp_name"];
    $final=$_SERVER["DOCUMENT_ROOT"]."/demo/uploadfile/".$_FILES["image"]["name"];
    echo "$final";
    move_uploaded_file($tmp,$final);
    $img_path="uploadfile/".$_FILES["image"]["name"];
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
