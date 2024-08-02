 
<?php

session_start();
if(!isset($_SESSION['id']))
{
    echo "Hello...";
    header('location:newlog.php');
}

extract($_POST);
if(isset($done))
{

session_unset();
session_destroy();
header("location:project.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a6f6ded435.js" crossorigin="anonymous"></script>
    <title>Document</title>
    <style type="text/css">
     
     
    </style>
</head>
<body>
<form method=post>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"style=" font-size:21px" >
    <a class="navbar-brand" href="#" style="">Maiow.online</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="color: ;">
      <ul class="navbar-nav ml-auto" >
        <li class="nav-item active">
          <a class="nav-link" href="project.php">Home <span class="sr-only">(current)</span></a>
        </li>


              
       
   <?php   if(isset($_SESSION['username'])){
      echo'  <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> My Profile ',
        
          '</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">','Hello  ',$_SESSION["username"],'</a>
            <a class="dropdown-item" href="order.php">My orders</a>
            <div class="dropdown-divider"></div>
           <a class="dropdown-item" href="#">Contact Us</a></div></li>';
   }

    ?>
        <?php
        
        if(!isset($_SESSION['username'])){
          echo' <li class="nav-item">
          <a class="nav-link" href="newlog.php">Login</a>  
          </li>
          <li class="nav-item">
            <a class="nav-link" href="singup.php">sing</a>  
            </li>';
        }
        else{
         echo' <li class="nav-item">
        
          <input type=submit name="done" class="btn btn-outline-light" value=signout>
          </li>';
          
//  extract($_POST);
// if(isset($done))
// {
//   session_unset();
//   session_destroy();
//   header("location:login.php");
// }
        }
   ?>
  
    
           
       
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#">Disabled</a>
        </li> -->
      </ul>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
      </form>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-6" style="margin-top:200px;text-align: center;"><span class="alert alert-danger" style="font-weight: bolder;font-size:32px;font-style:italic;">HOUSE-CLEANING
                                                                      
            </span></div >
            <div style="margin-top:150px; text-align: center;"class="col"><span class alert alert-danger></span><img src="download (3).jpeg" class="img-fluid img-thumbnail"></div>
        </div>
    </div>
    <section>
      <div style="margin-top: 120px;text-align: center;">  
   <span style="text-align:center; font-family:elephant;font-size: 19px;font-weight:bolder;"><h5>Why to choose us</h5></span></div>
   <div class="container-fluid"style="margin-top:80px; text-align: center;">
    
<div class="row" >
  <div class="col-md-2">
<p class="alert alert-success">Easy to use</p>
</div>
<div class="col-md-2">
<p class="alert alert-info cs">low cost</p>
</div>
<div class="col-md-4">
<p class="alert alert-warning cs">our experienced technicians</p>
</div>
<div class="col-md-2">
<p class="alert alert-info cs">full support</p>
</div>
<div class="col-md-2">
<p class="alert alert-success cs">warranty</p>
</div>
</div>
   </div>
   </div> 
    </section>
    <!-- <div class="container"style="margin-top:200px;">
      <h6>Prices</h6>
      <table border="1px" align="center" width="400px">
        <tr><th>prices</th></tr>
        <tr><td>tap repair</td><td>50</td></tr>
        <tr><td>lekage</td><td>79</td></tr>
        <tr><td>bath fitting</td><td>159</td></tr>
        <tr><td>bath fitting</td><td>99</td></tr>
        <tr><td>minnor fittings</td><td>99</td></tr>
        <tr><td>main line filter</td><td>199</td></tr>
        <tr><td>bath fitting</td><td>99</td></tr>
        <tr><td>motor repair</td><td>139</td></tr>
        <tr><td>motor replacement</td><td>199</td></tr>
        <tr><td>water-cooler installatin</td><td>499</td></tr>
        <tr><td>bathroom drain blockage</td><td>139</td></tr>
        <tr><td>shower-installation(ceiling)</td><td>179</td></tr>
        <tr><td>shower-installation(wall)</td><td>129</td></tr>

      </table>
    </div>
    <section> -->
      <!-- <div class="btn-group">
        <button type="button" class="btn btn-danger">tap</button>
        <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="sr-only">lekage</span>
        </button>
        <div class="dropdown-menu">
          <a class="dropdown-item" >price(99 Rs)</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Separated link</a>
        </div>
      </div>

      <div>
        <div class="btn-group">
          <button type="button" class="btn btn-danger">Action</button>
          <button type="button" class="btn btn-danger dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
          </div>
        </div> -->
        <div class="container-fluid">
<div style="margin-top: 400px;">
  <h1 style="text-align: center;">Prices and Services</h1>
  <div class="row" style="margin-top: 50px;">
    <div class="col-sm-6" >
  <ul class="list-group">
  <li class="list-group-item d-flex justify-content-between align-items-center">
     Kitchen
      <span class="badge badge-primary badge-pill">Rs-460</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
     Room-cleaning
      <span class="badge badge-primary badge-pill">Rs-200</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
    Full-2bhk-flat-cleaning
      <span class="badge badge-primary badge-pill">Rs-500</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      Full-3bhk-flat-cleaning
      <span class="badge badge-primary badge-pill">Rs-700</span>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        Garden-cleaning
        <span class="badge badge-primary badge-pill">Rs-500</span>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          Roof-cleaning
          <span class="badge badge-primary badge-pill">On-Inspection</span>
    </li>
    <!-- <li class="list-group-item d-flex justify-content-between align-items-center">
      
      <span class="badge badge-primary badge-pill">1</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
LIGHTS

  <span class="badge badge-primary badge-pill">1</span>
</li>
<li class="list-group-item d-flex justify-content-between align-items-center">
  MICROWAVE
  
    <span class="badge badge-primary badge-pill">1</span>
  </li>
  <li class="list-group-item d-flex justify-content-between align-items-center">
    MIXER-GRINDER
    
      <span class="badge badge-primary badge-pill">1</span>
    </li>
    <li class="list-group-item d-flex justify-content-between align-items-center">
      REFRIGERETOR
      
        <span class="badge badge-primary badge-pill">1</span>
      </li>
      <li class="list-group-item d-flex justify-content-between align-items-center">
        RO-PURIFIER
        
          <span class="badge badge-primary badge-pill">1</span>
        </li>
        <li class="list-group-item d-flex justify-content-between align-items-center">
          SWITCH BOARDS
          
            <span class="badge badge-primary badge-pill">1</span>
          </li>
          <li class="list-group-item d-flex justify-content-between align-items-center">
            WASHING MACHINE
            
              <span class="badge badge-primary badge-pill">1</span>
            </li> -->
                                          
  </ul>
  
</div>  
  
<div class="col-sm-6" style="margin-left:; text-align: justify ; ">           
  <div style="text-align: center; font-size:42px;">
     <h5 style="font-style:chiller;font-size: 32px;">Service</h5> 
  </div>
  <p style="text-align: justify; font-style:oblique;">
  Cleaning of appliances, chandelier & terrace
Removal of shelves objects (except kitchen) and reorganization
Wet wiping of wall & ceiling
</p>

</div>

      </div>
      </div>
  
      </section>
    <div class="container-fluid">
    <div style="margin-top:200px; text-align:center;">
       <h4>Faq</h4>
       <div id="accordion" style="margin-top:80px;">
        <div class="row">
          <div class="col">
        <div class="card">
          <div class="card-header" id="headingOne">
            <h5 class="mb-0">
              <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                Collapsible Group Item #1
              </button>
            </h5>
          </div>
      
          <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingTwo">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                Collapsible Group Item #2
              </button>
            </h5>
          </div>
          <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
        <div class="card">
          <div class="card-header" id="headingThree">
            <h5 class="mb-0">
              <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Collapsible Group Item #3
              </button>
            </h5>
          </div>
          <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
            <div class="card-body">
              Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
            </div>
          </div>
        </div>
      </div>
      <div class="col">
        <div id="accordion">
          <div class="card">
            <div class="card-header" id="headingOne">
              <h5 class="mb-0">
                <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  Collapsible Group Item #1
                </button>
              </h5>
            </div>
        
            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingTwo">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                  Collapsible Group Item #2
                </button>
              </h5>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
          <div class="card">
            <div class="card-header" id="headingThree">
              <h5 class="mb-0">
                <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                  Collapsible Group Item #3
                </button>
              </h5>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
              <div class="card-body">
                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
    </div>
    </div>
    </div>
    <div>
   
      <a href="buynownew.php?id=2"><button  class="btn btn-warning fixed-bottom  mx-auto d-block" style="width: 25%; height: 6%; border-radius: 20px;">explore</button></a>
    </div>
    
    <!-- <div class="row">
    <div class="col">
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
      
      
       <a href="#"  class="list-group-item list-group-item-action list-group-item-primary">This is a primary list group item </a>
       <a href="#" class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary list group item</a>
       <a href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success list group item</a>
        <a href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>             
        <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>               
        <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a>                  
        <a href="#" class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</a>                       
        <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a>                        
      </div>                 
      </div>                     
   <div class="col">
     <div class="list-group">
            
        <a  href="#" class="list-group-item list-group-item-action">Dapibus ac facilisis in</a>
        <a  href="#" class="list-group-item list-group-item-action list-group-item-primary">This is a primary list    group item </a>
            <a  href="#" class="list-group-item list-group-item-action list-group-item-secondary">This is a secondary  list group item</a>
            <a  href="#" class="list-group-item list-group-item-action list-group-item-success">This is a success  list group item</a>
            <a  href="#" class="list-group-item list-group-item-action list-group-item-danger">This is a danger list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-warning">This is a warning list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-info">This is a info list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-light">This is a light list group item</a>
            <a href="#" class="list-group-item list-group-item-action list-group-item-dark">This is a dark list group item</a>
           </div>

      </div>
      </div>
     -->

     <section>
      <!-- Remove the container if you want to extend the Footer to full width. -->
<!-- <div class="container-fluid my-5">

  <footer class="bg-primary text-center text-lg-start text-white">
    < Grid container -->
   
<!-- End of .container -->
<!-- Remove the container if you want to extend the Footer to full width. -->
<div class="container-fluid my-5">
  <!-- Footer -->
  <footer
          class="text-center text-lg-start text-white"
          style="background-color: #010101"
          >
    <!-- Grid container -->
    <div class="container p-4 pb-0">
      <!-- Section: Links -->
      <section class="">
        <!--Grid row-->
        <div class="row">
          <!-- Grid column -->
          <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">
              Maiow
            </h6>
            <p>
            maiow services is comprised of professional experts to serve you with various ODS services for commercial and residential spaces. Our extensive team provides on-demand services, including home cleaning, plumbing, carpentry, sofa cleaning, electricians, painting, deep cleaning, and pest control. Furthermore, our add-on services are Rental and Realty. We Buy/Sell/Rent for people to serve them with hassle-free and experienced service.
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
            <p>
              <a class="text-white">Home-Cleaning</a>
            </p>
            <p>
              <a class="text-white">Plumbing</a>
            </p>
            <p>
              <a class="text-white">Electrical Repair</a>
            </p>
            <p>
              <a class="text-white">Disnfection</a>
            </p>
            <p>
              <a class="text-white">Wooden-Furnitures</a>
            </p>
            <p>
              <a class="text-white">Painting</a>
            </p>
          </div>
          <!-- Grid column -->

          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <hr class="w-100 clearfix d-md-none" />

          <!-- Grid column -->
          <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
            <p><i class="fas fa-home mr-3"></i> UP,</p>
            <p><i class="fas fa-envelope mr-3"></i>   Aadisingh367@outlook.com</p> <p><i class="fas fa-envelope mr-3"></i> aryansharma2508a@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +91 8303944611</p>
            <p><i class="fas fa-phone mr-3"></i> +91 8887119957</p>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
            <h6 class="text-uppercase mb-4 font-weight-bold">Follow us</h6>

            <!-- Facebook -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #3b5998"
               href="#!"
               role="button"
               ><i class="fab fa-facebook-f"></i
              ></a>

            <!-- Twitter -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #55acee"
               href="#!"
               role="button"
               ><i class="fab fa-twitter"></i
              ></a>

            <!-- Google -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #dd4b39"
               href="#!"
               role="button"
               ><i class="fab fa-google"></i
              ></a>

            <!-- Instagram -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #ac2bac"
               href="#!"
               role="button"
               ><i class="fab fa-instagram"></i
              ></a>

            <!-- Linkedin -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #0082ca"
               href="#!"
               role="button"
               ><i class="fab fa-linkedin-in"></i
              ></a>
            <!-- Github -->
            <a
               class="btn btn-primary btn-floating m-1"
               style="background-color: #100f0f"
               href="#!"
               role="button"
               ><i class="fab fa-github"></i
              ></a>
          </div>
        </div>
        <!--Grid row-->
      </section>
      <!-- Section: Links -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
 
    <!-- Copyright -->
  </footer>
  <!-- Footer -->
</div>
<!-- End of .container -->
      
     </section>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>