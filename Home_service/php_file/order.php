<?php
     session_start();
     if(!isset($_SESSION['id']))
     {
         echo "Hello...";
         header('location:../demo/newlog.php');
     }
      ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
  <div class="table-responsive">
    <table class="table table-striped table-success " >
      <tr><th colspan="4" class="text-center">Orders</th></tr>
      <tr><th>Name</th><th>Address</th><th>Pin-code</th><th>Orderd-service</th>
    <?php
extract($_POST);
// if (isset($b))
// {
  
   $link= mysqli_connect(hostname:"localhost",username:"root",password:"",database:"ict_project");
   $qry="select * from orders where trim(username)='$_SESSION[username]'";
    // echo"$qry";
    $resultset= mysqli_query($link,$qry);
 $c= mysqli_num_rows($resultset);
 if($c!=0)
 {
//  echo $c;
 
//    mysqli_close($link);
  while($row=mysqli_fetch_row($resultset))
   echo "<tr><td>$row[1]</td><td>$row[3]</td><td>$row[4]</td><td>$row[5]</td></tr>";
 }
 else
 {
 echo'<h1> No Orders Yet</h1>';
 }
  mysqli_close($link);
// }
?>
</table>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>