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

         

           <br><br>
           <div class="features container">
                <h1 style="font-weight: bold;color:black; text-align:center;font: size 50px;">AGRICULTURAL KNOWLEDGE AREAS</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                   
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/schemes/RWM.jpg " alt="PM kisan" width="350px" height="200px">
                          </p>
                          <div class="card-body">
                          <h4>
                              <a href="RWM.php">Rain Water Management</a>
                         </h4>
                                
                          </div>
                     </div>
                     <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/schemes/SAWM.jpg" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                          <h4>
                              <a href="SAWM.php">Soil And Water Management</a>
                              </h4>
                               
                          </div>
                    </div>
                      <div class="card">
                          <p class="aligncenter">
                               <img class="card-img-top image" src="../Images/schemes/CACS.jpg" alt="Card image cap" width="250px" height="200px">
                          </p>
                          <div class="card-body">
                              <h4><a href="CACS.php">Crops and Croping Systems</a></h4>
                               
                          </div>
                     </div> 
                      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                   
                   <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/PADM.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                              <h4>
                              <a href="PADM.php">Plant and Disease Management</a>
                              </h4>
                               
                        </div>
                   </div>
                   <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/NYD.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                        <h4><a href="NYD.php">Natural Yarns and Dyes</a></h4>

                          
                        </div>
                   </div>
                    <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/WBK.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                              <h4><a href="WBK.php">Wheather Based Knowledge</a></h4>
                               
                        </div>
                   </div> 
                    
              </div>
              <div> <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                   
                   <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/MTAP.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                              <h4>
                              <a href="scheme4.php"> Market Trends and Pricing</a>
                              </h4>
                               
                        </div>
                   </div>
                   <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/Yhermal.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                        <h4><a href="scheme5.php">Thermal Efficiency</a></h4>

                         
                        </div>
                   </div>
                    <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/GASS.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                              <h4><a href="scheme6.php">Grains and Seed Storage</a></h4>
                               
                        </div>
                   </div> 
                    
              </div>
              <div> 
                    
               </div><div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                   
                   <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/CR.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                              <h4>
                              <a href="scheme4.php">Crop Rotation and Rotation planning</a>
                              </h4>
                               
                        </div>
                   </div>
                   <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/FI.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                        <h4><a href="scheme5.php">Farm Implements</a></h4>

                         
                        </div>
                   </div>
                    <div class="card">
                        <p class="aligncenter">
                             <img class="card-img-top image" src="../Images/schemes/HC.jpg" alt="Card image cap" width="250px" height="200px">
                        </p>
                        <div class="card-body">
                              <h4><a href="scheme6.php"> Horticulture Crops</a></h4>
                               
                        </div>
                   </div> 
                    
              </div>
              <div> 
                    
               </div>
                    
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