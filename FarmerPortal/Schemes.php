<?php
     include("../Functions/functions.php");
     ?>

 <!DOCTYPE html>

 <html>

 <head>
      <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">

      <title>Farmer Homepage</title>
       
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
      <link rel="stylesheet" href="style.css">
      <script src="../portal_files/jquery.min.js.download"></script>
      <script src="../portal_files/popper.min.js.download"></script>
      <script src="../portal_files/bootstrap.min.js.download"></script>

 </head>

 <body  style="backgroung-color:grey">
 
      <body>

           <nav class="navbar navbar-expand-xl ">
                 
                <div class=" flex-row-reverse left ">

                     <div class="p-2">
                       
                </div> 
                     </div>
                  
                     <a class="float-left" href="#">
                          <img src="img/AgroVision.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px; width:150px;">
                     </a>
                </div>
                <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
                </button>
                 
                
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                     <div class="proicon">

                          <?php
                              if (!isset($_SESSION['phonenumber'])) {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '></div></a>";
                              }
                              ?>
                     </div>

                     <div class="list-group moblists">

                          <?php
                              if (isset($_SESSION['phonenumber'])) {

                                   echo "<a href='FarmerProfile.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Profile</a>";
                                   echo "<a href='Transactions.php' class='list-group-item list-group-item-action' style='background-color:#292b2c;text-align:center;color:goldenrod'>Orders</a>";
                                   echo "<a href='logout.php' class='list-group-item list-group-item-action ' style='background-color:#292b2c;text-align:center;color:goldenrod'>Logout</a>";
                              } else {
                                   echo "<a href='../auth/FarmerLogin.php'> <div class='text-success  logins '>Login</div></a>";
                              }
                              ?>
                          <div class='loginz' style="text-align:center;">
                               <?php getFarmerUsername(); ?>
                          </div>
                     </div>
                </div>
 
                <div class=" flex-row-reverse right ">
                     <div class="p-2 cart">
                           
                        
                     </div>
                     <div class="dropdown p-2 settings ">
                          <button class="btn  dropdown-toggle text-success" style="margin-top:-20px;" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                               Settings
                          </button>
                          <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                               <?php
                                   if (isset($_SESSION['phonenumber'])) {
                                        echo "<a href='FarmerProfile.php' class='dropdown-item' style='padding-right:-20px;'>Profile</a>";
                                        echo "<a href='Transactions.php' class='dropdown-item' style='padding-right:-20px;'>Orders</a>";
                                        echo "<a href='logout.php' class='dropdown-item' style='padding-right:-20px;'>Logout</a>";
                                   } else {
                                        echo "<a href='../auth/FarmerLogin.php'> <div class='dropdown-item' style='padding-right:-20px;'>Login</div></a>";
                                   }
                                   ?>
                          </div>
                     </div>
                </div>
           </nav>
           <br>
           <div class="row" style="text-align:center;">
                <div class="col-md-2 col-sm-12">
                     <a href="farmerHomepage.php" id="navbar"><label>Home</label></a>
                </div>
                <div class="col-md-2 col-sm-12">
                     <a href="MyProducts.php" id="navbar"><label>My Products</label></a>
                </div>
                <div class="col-md-2 col-sm-12">
                     <a href="Transactions.php" id="navbar"><label>My Transactions</label></a>
                </div>
                <div class="col-md-2 col-sm-12">
                    <a href="Schemes.php" id="navbar"><label>Schemes</label></a>
                </div>
                <div class="col-md-2 col-sm-12">
                    <a href="Model.php" id="navbar"><label>ML Models</label></a>
                </div>
                <div class="col-md-2 col-sm-12">
                     <a href="CallCenter.php" id="navbar"><label>Call Centers </label></a>
                </div>
           </div>
           <hr>

           <div class="container caros" style="background-color:grey">
                <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                     <div class="carousel-inner">
                          <div class="carousel-item active">
                               <img class="d-block w-100 resizing" src="../Images/schemes/main.webp" alt="First slide">
                          </div>
                          
                          <div class="carousel-item">
                               <img class="d-block w-100 resizing" src="../Images/schemes/pmkis.jpg" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                               <img class="d-block w-100 resizing" src="../Images/schemes/pmsc.jpg" alt="Third slide">
                          </div>

                     </div>
                     <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                     </a>
                     <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                     </a>
                </div>
           </div>

           <br><br>
           <div class="features container">
                <h1 style="font-weight: bold;color:black; text-align:center;font: size 50px;">GOVERNMENT SCHEMES</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                   
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/schemes/PM KISAN.jpg " alt="PM kisan" width="350px" height="200px">
                          </p>
                          <div class="card-body">
                          <h4>
                              <a href="scheme1.php">Pradhan Mantri Kisan Samman Nidhi (PM-KISAN)</a>
                         </h4>
                               <p>
                                   PM Kisan is a Central Sector scheme with 100% funding from
                                   Government of India.
                              </p>
                          </div>
                     </div>
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/schemes/PM Mandhan.jpg" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                          <h4>
                              <a href="scheme2.php">Pradhan Mantri Kisan MaanDhan Yojana (PM-KMY)</a>
                              </h4>
                              <p>
                              Discover the Pradhan Mantri Kisan MaanDhan Yojana (PM-KMY), a
                              revolutionary scheme empowering farmers with financial
                              security and dignity in their golden years.
                              </p>
                          </div>
                    </div>
                      <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/schemes/PMFBY.jpg" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                              <h4><a href="scheme3.php">Pradhan Mantri Fasal Bima Yojana (PMFBY)</a></h4>
                              <p>
                              Pradhan Mantri Fasal Bima Yojana (PMFBY) is the government
                              sponsored crop insurance scheme that integrates multiple
                              stakeholders on a single platform.
                              </p>
                          </div>
                     </div> 
                      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                   
                   <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/MISS.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                              <h4>
                              <a href="scheme4.php">Modified Interest Subvention Scheme(MISS)</a>
                              </h4>
                              <p>
                              Government of India launched Modified Interest Subvention
                              Scheme (MISS), a Central Sector Scheme, in the year 2006-07
                              with a view to provide short term Agri-loans availed by
                              farmers through KCC for their working capital requirements at
                              concessional rate of interest.
                              </p>
                        </div>
                   </div>
                   <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/NAMODRONE.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                        <h4><a href="scheme5.php">Namo Drone Didi</a></h4>

                         <p>
                         Under the initiative, rural women are trained to become drone
                         pilots for agricultural purposes.
                         </p>
                        </div>
                   </div>
                    <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/AIF.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                              <h4><a href="scheme6.php">Agriculture Infrastructure Fund(AIF)</a></h4>
                              <p>
                              Convergence with all schemes of central or state government.
                              Online single window facility in collaboration with
                              participating lending institutions.
                              </p>
                        </div>
                   </div> 
                    
              </div>
              <div> 
                    
               </div>
           </div>
            
           <br> <br>
           <section id="footer" class="myfooter">
           <div class="container">
                     
                     <div class="row">
                          <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
                               <ul class="list-unstyled list-inline social text-center">
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-google-plus"></i></a></li>
                                    <li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
                               </ul>
                          </div>

                     </div>
                     <div class="row">
                         <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                              <p> Team Technova</p>
                              
                              <p>AgroVision</p>
                              <p class="h6"> All copy right Reserved.</p>
                         </div>
                         </hr>
                    </div>
                </div>
           </section>
 </body>

 </html>