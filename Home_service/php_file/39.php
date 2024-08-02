<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Payment Submission</title>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
    background-color: #f2f2f2;
  }
  .container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    text-align: center;
  }
  form {
    margin-top: 20px;
  }
  label {
    display: block;
    margin-bottom: 5px;
    font-weight: bold;
  }
  input[type="text"],
  input[type="tel"],
  input[type="file"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
  }
  button[type="submit"] {
    background-color: #007bff;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }
  .qr-code {
    margin-top: 20px;
  }
</style>
</head>
<body>
<div class="container">
  <h1>Payment Submission</h1>
  <form   method="post" enctype="multipart/form-data">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    <br>
    <label for="phone">Phone No.:</label>
    <input type="tel" id="phone" name="phone" pattern="[0-9]{10}" required>
    <br>
    <div class="qr-code">
        <!-- Replace this with your QR code image or generation logic -->
        <img src="your_qr_code.png" alt="QR Code" width="150">
      </div>
      <br>
    <label for="screenshot">Payment Screenshot:</label>
    <input type="file" id="screenshot" name="screenshot" accept="image/*" required>
    <br>
    <input type="submit" name="s">Submit Payment</button>
  </form>
</div>
</body>
</html>
<?php

 
extract($_POST);
if(isset($s))
{
    $imgpath = uploadfun();
    $qry = "update tab_data set profilepic_url='$imgpath' where roll_no= $roll_no";

    $r = mysqli_query($link,$qry);
     if ($r)
    {
    echo "Image uploaded ";
    }
}
?>
 