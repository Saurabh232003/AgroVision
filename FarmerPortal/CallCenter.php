<?php
     include("../Functions/functions.php");
?>

<!DOCTYPE html>

<html>

<head>
     <meta http-equiv="Content-Type" content="text/html; charset=windows-1252">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">

     <title>Contact Us - AgroVision</title>
     <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
     <script src="https://kit.fontawesome.com/c587fc1763.js" crossorigin="anonymous"></script>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

     <link rel="stylesheet" href="../portal_files/bootstrap.min.css">
     <link rel="stylesheet" href="style.css">
     <script src="../portal_files/jquery.min.js.download"></script>
     <script src="../portal_files/popper.min.js.download"></script>
     <script src="../portal_files/bootstrap.min.js.download"></script>
</head>

<body>
     <nav class="navbar navbar-expand-xl">
          <div class="flex-row-reverse left">
               <div class="p-2">
               </div>
               <a class="float-left" href="farmerHomepage.php">
               <img src="img/AgroVision.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px; width:150px;">
               </a>
          </div>
          <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
               <span class="navbar-toggler-icon"><i class="fas fa-bars p-1" style="color:green;font-size:20px;"></i></span>
          </button>
          <a class="float-left" href="farmerHomepage.php">
               <img src="img/AgroVision.png" class="float-left mr-2 moblogo" alt="Logo" style="height:50px; width:150px;">
               </a>
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
          <div class="flex-row-reverse right">
               <div class="p-2 cart">
               </div>
               <div class="dropdown p-2 settings">
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
          <div class="col-md-3 col-sm-12">
               <a href="farmerHomepage.php" id="navbar"><i class="fa fa-home" aria-hidden="true"></i><label>Home</label></a>
          </div>
          <div class="col-md-3 col-sm-12">
               <a href="MyProducts.php" id="navbar"><i class="fa fa-leaf" aria-hidden="true"></i><label>My Products</label></a>
          </div>
          <div class="col-md-3 col-sm-12">
               <a href="Transactions.php" id="navbar"><i class="fa fa-exchange" aria-hidden="true"></i><label>My Transactions</label></a>
          </div>
          <div class="col-md-3 col-sm-12">
               <a href="CallCenter.php" id="navbar"><i class="fa fa-phone fa-rotate-vertical" aria-hidden="true"></i><label>Contact Us</label></a>
          </div>
     </div>
     <hr>
     <br>
     <div class="container">
          <div class="row">
               <div class="col-md-12">
                   
                    <form action="contact_form_submit.php" method="POST">
                         <div class="form-group">
                              <label for="name">Name:</label>
                              <input type="text" class="form-control" id="name" name="name" required>
                         </div>
                         <div class="form-group">
                              <label for="phone">Phone Number:</label>
                              <input type="text" class="form-control" id="phone" name="phone" pattern="\d{10}" title="Please enter a 10-digit phone number" required>
                         </div>
                         <div class="form-group">
                              <label for="email">Email:</label>
                              <input type="email" class="form-control" id="email" name="email" required>
                         </div>
                         <div class="form-group">
                              <label for="role">You are a:</label>
                              <select class="form-control" id="role" name="role">
                                   <option value="farmer">Farmer</option>
                                   <option value="buyer">Buyer</option>
                              </select>
                         </div>
                         <div class="form-group">
                              <label for="query">Query:</label>
                              <textarea class="form-control" id="query" name="query" rows="4" required></textarea>
                         </div>
                         <button type="submit" class="btn btn-success">Submit</button>
                    </form>
               </div>
          </div>
     </div>
     <br><br>
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
               </div>
          </div>
     </section>
</body>

</html>
