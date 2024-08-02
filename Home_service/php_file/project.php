<?php session_start();
 extract($_POST);
 if(isset($done))
 {
   session_unset();
   session_destroy();
   header("location:project.php");
 }
 ?>
<!-- // session_start();
// if(!isset($_SESSION['id']))
// {
//     echo "Hello...";
//     header('location:../demo/newlog.php');
// } -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a6f6ded435.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Pacifico&family=Playfair+Display:ital@1&display=swap" rel="stylesheet">
      <title>Document</title>
      <style type="text/css">
          
         * {               padding:0;
                           margin:0;
                           text-decoration: none;
                           list-style: none;
                           box-sizing: border-box;
                           font-family: 'Playfair Display', serif;
                           font-family: 'Pacifico', cursive;
                           /* font-family: 'Playfair Display', serif; */
                           /* font-family: 'Pacifico', cursive;
font-family: 'Playfair Display', serif; */
font-family: 'Prompt', sans-serif;
          }
          body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
}

 
          /* body{
              font-family: montserrat;
              background-color: #fbf7f7;
  
          }
          nav{
              background-color:black;
              height: 80px;
              width:100%;
              padding: 0;
  
          }
  
          .logo{
              color:rgb(255, 255, 255);
              font-size:35px;
              line-height :80px;
              padding:0 100px;
              font-weight:800;
  
  
          }
          ul{
              float:right;
              margin-right: 20px;
          }
          li
  
          {
              display:inline-block;
              line-height:80px;
              margin:0 5px;
              
              
          }
  
          nav ul li a{
              color:white;
              font-size:17px;
              text-transform:uppercase;
              padding:7px 13px;
              border-radius: 5px;
          }
          a.active,a:hover{
              background:gold;
              transition: .9s;
  
          }
          .checkbn{
              font-size:30px;
              color:rgb(253, 250, 250);
              float:right;
              line-height:80px;
              margin-right:40px;
              cursor: pointer;
              display: none;
  
          }
          #check{
  
          }
  @media(max-width:925px){
      span.logo{
          font-size: 30px;
          padding-left:50px;
          color: aquamarine;
  
      }
      nav ul li a{
          font-size:16px;
          
      }
  }
  
  @media(max-width:858px){
      .checkbn{
          display: block;
      .app{
        text-align: center;
        margin-left: 20px;
    }
      }
    
      @media(max-width:858px){
      .img1{
   */
  
/* @media screen and (max-width: 850px) {
  .row.primary {
    grid-template-columns: 1fr;
    padding: 10px;

  }
.app{
  text-align: center;
  margin-left: -180px;
}
.img1{
  margin-left:-129px;
}
.upcomings{
  margin-left:-117px;
  padding: 0;

}
.up{
  margin-left:100px;

}
.test{
  margin-left:50px;             
}
.aut{
  margin
} */


      </style>
        
    
    <title>Document</title>
</head>
<body>
  <form method=post>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"style=" font-size:21px" >
    <a class="navbar-brand" href="#" style="">maiow</a>
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
            <a class="nav-link" href="singup.php">sign-up</a>  
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

  <!-- <nav>
    <input type ="checkbox" id="check">
    <label for="check" class="checkbn">
        <i class="fa-solid fa-bars"></i>


    </label>
    <span class="logo">company</span>
    <ul>
        <li  class="active"><a  class="active" href=#>home</a></li>
        <li><a href=#>home</a></li>
        <li><a href=#>home</a></li>
        <li><a href=#>home</a></li>
        
    </ul>
  </nav> -->
  <section>
<div class="container" style="margin-top: 110px;">
    <div id="demo" class="carousel slide" data-ride="carousel" data-interval="4000">
      <div class="carousel-inner">
  <div class="carousel-item active">
      <img src="download (1).jpeg" class="img-fluid" style="border-radius: 20px;width:100%;height:527px">
      <div class="carousel-caption">
          <h3> Trusted and Reliable:</h3>
          <p> 
We are a trusted and reliable home service company.</p>
      </div>
  </div>
  <div class="carousel-item">
      <img src="download (3).jpeg" class="img-fluid" width="1100px"style="border-radius:40px;width:100%;height:527px">
     <div class="carousel-caption"><h3>  Timely Service:</h3>
      <p>We value your time and strive to provide prompt and efficient service.</p>
  </div>
  </div>
  <div class="carousel-item">
      <img src="10-Must-Have-Appliances-for-Easy-Kitchen-Chores.jpg" class="img-fluid"style="border-radius: 20px;width:100%;height:527px">
      <div class="carousel-caption">
          <h3> Transparent and Competitive Pricing:</h3>
          <p> 
          We offer transparent and competitive pricing with no hidden costs..</p>
      </div>
      </div>
  
  <ul class="carousel-indicators">
      <li data-target="#demo" data-slide-to="0" class="active"></li>
      <li data-target="#demo" data-slide-to="1"></li>
      <li data-target="#demo" data-slide-to="2" ></li>
      
  </ul>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
      <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
      <span class="carousel-control-next-icon"></span>
  </a>
  </div>
  </div>
    </div>
    </section>
    <a href="redirect-page.html" class="banner-link">
    <div class="banner">
      <!-- <img src="banner-image.jpg" alt="Banner Image" class="banner-image">
      <div class="banner-content"> -->
        <!-- <h2>Special Offer</h2>
        <p>Click here for amazing deals!</p> -->

    <!-- <section style="margin-top: 190px;">
      <div class="container">
          <div class="row">
              <div class="col-md-4 img1"><img src="man-husband-cleaning-house-helping-his-wife_85869-8314.jpg" width=200px height=200px style="margin-left: 190px;"><span class="see"><br>application reapair<br></span></div>
              <div class="col-md-4 img1"><img src="images (1).jpeg" width="200px" height="200px" style="margin-left: 190px;"><span class="see" style="margin-left:200px;"><br>reapair<br></span></div>
              <div class="col-md-4 img1"><img src="images.jpeg" width="200px" height="200px" style="margin-left:190px;"><span class="see"><br>apllication reapair<br></span></div>
            </div>
              <div class="row">
              <div class="col-md-4 img1"><img src="download.jpeg" width="200px" height="200px" style="margin-left:190px;"><span class="see"><br>apllication reapair<br></span></div>
              <div class="col-md-4 img1"><img src="download (1).jpeg" width="200px" height="200px" style="margin-left:190px";><span class="see"><br>reapair<br></span></div>
              <div class="col-md-4 img1"><img src="10-Must-Have-Appliances-for-Easy-Kitchen-Chores.jpg" width="200px" height="200px" style="margin-left:190px"><br><span class="see">apllication reapair</span></div>
              <div class="col-md-4">apllication reapair</div>
              <div class="col-md-4">apllication reapair</div> -->
          <!-- </div>
      </div> -->
      <section>
        <div class="container">
        <h5 style="margin-top: 80px; text-align: center; text-shadow:1px; text-decoration:underline; font-weight: 700; font-size:32px;"> our services</h5><hr color="black" width="50%" class=" d-block mx-auto" height="5px">
        
      
      
        <div style=" margin-top: 70px;">
        <div class="row">
          <div class="col-md-4" style="text-align: center;">
         <a href="elc.php">  <img src="home-appliance-repair.jpg" class="img-fluid rounded-circle  d-block mx-auto" style="height: 200px; width:200px"><br><span class="">Home Electronics Repairs</span> </a>
          </div>
         <div class="col-md-4" style="text-align: center;">
         <a href="tap.php"><img src="images.jpeg" class="img-fluid rounded-circle  d-block mx-auto" style="height: 200px; width:200px"><br><span class="">Plumbing</span> </a>
           </div>
           <div class="col-md-4" style="text-align: center;">
           <a href="disin.php">  <img src="download (3).jpeg" class="img-fluid rounded-circle  d-block mx-auto" style="height: 200px; width:200px"><br><span class="">Disnfection</span> </a>
           </div>
         
        </div>
        </div>
      
        <div class="container-fluid" style="margin-top: 20px;">
        <!-- <div style="margin-left:270px ;"> -->
        <div class="row">
          <div class="col-md-4" style="text-align: center;">
          <a href="home.php"><img src="man-husband-cleaning-house-helping-his-wife_85869-8314.jpg" class="img-fluid rounded-circle  d-block mx-auto" style="height: 200px; width:200px"><br><span class="text-align:center">Home-Cleaning</span> </a>
           </div>
           <div class="col-md-4 "style="text-align: center;">
           <a href="paint.php"> <img src="home.jpeg" class="img-fluid rounded-circle  d-block mx-auto" style="height: 200px; width:200px"><br><span class="">Painting</span> </a>
           </div>
           <div class="col-md-4" style="text-align: center;">
            <a href="wood.php"><img src="download (2).jpeg" class="img-fluid rounded-circle  d-block mx-auto" style="height: 200px; width:200px"><br><span class="">Carpentry</span> </a>
           </div>
            <!-- <div class="col-sm ">
            <img src="images.jpeg" width="200px"  height="200px" class="rounded-circle img-fluid img1" style="height:200px;"><span class="app"><br>One of three columns</span>
            </div>
            <div class="col-sm ">
            <img src="download (2).jpeg" width="200px" ,height="200px" class="rounded-circle img-fluid img1"style="height:200px;"><span class="app"><br> One of three columns</span>
            </div> -->
          <!-- </div> -->
          </div>
      </div>
    </section>
      <section style="margin-top: 140px;">
        <h5 align="center" style="font-weight: 700; font-size:32px;">UPCOMINGS</h5><hr color="" width="50%" class="mx-auto d-block ">
      </section>
      <section>
        <!-- <section style="margin-top:175px;"> 
        <div class="card-deck">color
            <div class="card">
              <img class="card-img-top" src="spa.jpeg" alt="Card image cap" style="width: 650px;height: 500px;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="home.jpeg" alt="Card image cap" style="width:200px;height: 200px;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="disinfecting-home_155003-9129.avif" alt="Card image cap" style="width:200px;height: 200px;">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
              </div>
              <div class="card-footer">
                <small class="text-muted">Last updated 3 mins ago</small>
              </div>
            </div>
          </div>
          
      </section>
     -->
      <section>
      <div class="container-fluid">
        <div style="margin-top: 101px;" >
          <div class="row" style="text-align: center;">
            <div class="col-md-3" style="text-align: center;">
        <img src="spa.jpeg" class="img-fluid rounded  d-block mx-auto" style="margin-left:; width: 200px; height:200px;"><br><P class="test";>Spa</P>
        </div>
        <div class="col-md-3" >
        <img src="AdobeStock_119263043.jpeg" class="rounded img-fluid mx-auto d-block" style="margin-left:  ; width:200px; height:200px;"><br><P class="test" >Pest-Contol</P></div>
        <div class="col-md-3">
        <img src="int.jpeg" class=" rounded img-fluid  mx-auto d-block" style="margin-left: ;width: 200px; height:200px;"><br><P class="test">Home-Interior</p></div>
        <div class="col-md-3">
        <img src="OIP (3).jpeg" class="rounded img-fluid d-block mx-auto " style="margin-left: ;width: 200px; height:200px;"><br><P class="test">Rent-service</p></div>
        </div>
        </div>
     </section> 

     <section style="margin-top:200px">
        <h4 align="center" style="font-size: 32px;font-weight: 700; text-transform: uppercase;">WHY TO CHOOSE US</h4>
     </section><hr color="black" width="90%" class="mx-auto d-block">

     <section style="margin-top: 100px;">
        <div class="container-fluid" class="">
        <div class="card-columns">
        <div class="card text-white bg-primary mb-3" >
            <div class="card-header"></div>
            <div class="card-header">Wide Range of Services</div>
            <div class="card-body">
              <h5 class="card-title">Relax for variety</h5>
              <p class="card-text">Wide Range of Services:   Whether it's plumbing, electrical work, cleaning, maintenance, or any other related service, customers can rely on our company to handle various home service needs efficiently and effectively..</p>
            </div>
          </div>
          <div class="card text-white bg-secondary mb-3" >
            <div class="card-header">Qualified and Skilled Professionals: </div>
            <div class="card-body">
              <h5 class="card-title">Relax for professionals</h5>
              <p class="card-text">Qualified and Skilled Professionals:  Our company employs are trained and experienced professionals who are capable of delivering top-notch service.  </p>
            </div>
          </div>
          <div class="card text-white bg-success mb-3" >
            <div class="card-header">Competitive Pricing and Transparent Pricing Model</div>
            <div class="card-body">
              <h5 class="card-title">Relax for price</h5>
              <p class="card-text">Competitive Pricing and Transparent Pricing Model: Our company offers competitive pricing in the home services market.Our pricing is transparent, with no hidden fees or surprises. </p>
            </div>
          </div>
          <div class="card text-white bg-danger mb-3" >
            <div class="card-header">Trust and Security:</div>
            <div class="card-body">
              <h5 class="card-title">Relax for trust</h5>
              <p class="card-text">Trust and Security:   All our technicians undergo comprehensive background checks and rigorous training before joining our team. We prioritize safety and security, ensuring that our employees are trustworthy individuals with the necessary skills to perform their jobs effectively.</p>
            </div>
          </div>
          <div class="card text-white bg-warning mb-3" >
            <div class="card-header">Transparent and Honest Communication:</div>
            <div class="card-body">
              <h5 class="card-title">Relax for transparency</h5>
              <p class="card-text"> Transparent and Honest Communication:  We commit to transparent and honest communication with customers.  We provide clear and detailed information about the services, pricing, and any necessary repairs or replacements, you have all the information you need to make informed decisions.</p>
            </div>
          </div>
          <div class="card text-white bg-info mb-3" >
            <div class="card-header">Guarantee or Warranty: </div>
            <div class="card-body">
              <h5 class="card-title">Relax for warranty</h5>
              <p class="card-text">Guarantee or Warranty:  .  If you are not satisfied with the quality of work or any issues arise after the service is completed, we will take the necessary steps to address and resolve them.</p>
            </div>
          </div>
          </div>
          </div>
          </section>
          <section style="margin-top: 130px;">
            <h5 align="center" style="font-weight:700; font-size:32px;text-transform: uppercase;">how we work</h5><hr class=" mx-auto d-block "width="90%" color="black">
            <div class="container" style="margin-top: 140px;">
              <img src="Process Roadmap Diagram Infographic Graph.png" width="1100px" height="500px" class="img-fluid">
            </div>
          </section>
          <section>
            <br>
            <br>
            <br>
            <br>
          </section>
          <section>
            <!-- <div class="container-fluid">
            <footer>
                <div class="row primary">
                  <div class="column about">
                
                  <h3>Foolish Developer</h3>
                
                   <p>
                      Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae,
                      voluptatem corporis error non,
                  </p>
                
                  <div class="social">
                    <i class="fa-brands fa-facebook-square"></i>
                    <i class="fa-brands fa-instagram-square"></i>
                    <i class="fa-brands fa-twitter-square"></i>
                    <i class="fa-brands fa-youtube-square"></i>
                    <i class="fa-brands fa-whatsapp-square"></i>
                  </div>
                </div>
                
                <div class="column links">
                <h3>Some Links</h3>
                
                 <ul class="head">
                
                  <li class="fa">
                   <a href="#faq">F.A.Q</a>
                  </li>
                  <li>
                   <a href="#cookies-policy">Cookies Policy</a>
                  </li>
                  <li>
                   <a href="#terms-of-services">Terms Of Service</a>
                  </li>
                  <li>
                   <a href="#support">Support</a>
                  </li>
                 </ul>
                
                </div>
                
                
                <div class="column links">
                  <h3>Some Links</h3>
                   <ul>
                    <li>
                     <a href="#faq">F.A.Q</a>
                    </li>
                    <li>
                     <a href="#cookies-policy">Cookies Policy</a>
                    </li>
                    <li>
                    <a href="#terms-of-services">Terms Of Service</a>
                    </li>
                    <li>
                    <a href="#support">Support</a>
                    </li>
                  </ul>
                </div>
                
                <div class="column subscribe">
                 <h3>Newsletter</h3>
                  <div>
                   <input type="email" placeholder="Your email id here" />
                   <button>Subscribe</button>
                  </div>
                
                </div>
                
                </div>
                
                <div class="row copyright">
                  <div class="footer-menu">
                
                  <a href="">Home</a>
                  <a href="">About</a>
                  <a href="">Contact</a>
                  <a href="">Blog</a>
                  <a href="">Social</a>
                
                  </div>
                   <p>Copyright &copy; 2021 Foolish Developer</p>
                </div>
                </footer>
                </div>
                
                
          </section> --> 
          
          <!-- <div class="card bg-light mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Light card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div>
          <div class="card text-white bg-dark mb-3" style="max-width: 18rem;">
            <div class="card-header">Header</div>
            <div class="card-body">
              <h5 class="card-title">Dark card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
            </div>
          </div> -->
          <!-- </div>
     </section> -->
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
            maiow services are comprised of professional experts to serve you with various ODS services for commercial and residential spaces. Our extensive team provides on-demand services, including home cleaning, plumbing, carpentry, sofa cleaning, electricians, painting, deep cleaning, and pest control. Furthermore, our add-on services are Rental and Realty. We Buy/Sell/Rent for people to serve them with hassle-free and experienced service.
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
            <p><i class="fas fa-envelope mr-1"></i>Aadisingh367@outlook.com</p>
             <p><i class="fas fa-envelope mr-1"></i>aryansharma2508a@gmail.com</p>
            <p><i class="fas fa-phone mr-3"></i> +91 8303944611</p>
            <p><i class="fas fa-phone mr-3"></i> +918887119957</p>
            
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
      </form>
     </section>
                      



<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
