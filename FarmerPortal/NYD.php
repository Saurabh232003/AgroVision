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

 <body   >
 
      <body>

           <nav class="navbar navbar-expand-xl ">
                 
                <div class=" flex-row-reverse left ">

                     <div class="p-2">
                          
                     </div>
                      
                     <a class="float-left" href="#">
                          <img src="img/AgroVision.png" class="float-left mr-5 ml-0 " alt="Logo" style="height:50px; width:150px;">
                     </a>
                </div>
                <button class="navbar-toggler" data-toggle="collapse" style="margin-left:-20px;" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                     <span class="navbar-toggler-icon"><i class="fas fa-bars p-1 " style="color:green;font-size:20px; "></i></span>
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




                <div class=" flex-row-reverse right ">
                     <div class="p-2 cart">
                           
                          <div class='loginz'>
                               <?php getFarmerUsername(); ?>
                          </div>
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
                <div class="col-md-3 col-sm-12">
                     <a href="farmerHomepage.php" id="navbar"><label>Home</label></a>
                </div>
                <div class="col-md-3 col-sm-12">
                     <a href="Agri.php" id="navbar"><label>Agriculture Knowledge</label></a>
                </div>
                <div class="col-md-3 col-sm-12">
                    <a href="Schemes.php" id="navbar"><label>Schemes</label></a>
                </div>
                
                <div class="col-md-3 col-sm-12">
                     <a href="CallCenter.php" id="navbar"><label>Contact US</label></a>
                </div>
           </div>
           <hr>

          

            
           <div class="features container">
           <h1 style="font-weight: bold;color:red; text-align:center;font: size 60px;">NATURAL YARNS AND DYES /प्राकृतिक शालू आणि रंगणी</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                     <div class="card">
                          <div class="aligncenter">
                                 
                                
                                    <img style="height:200px;width:100%" src="../Images/schemes/NYD.jpg" alt="logo">
                                    
                                 
                          </div>
                           
                     </div>
                   
                      
                     
                      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                <div class="card">
                            
                            <p style="font: size 25px">
                            कृषीच्या प्रमुख अंगावरून आपल्याला सुटलेल्या प्राकृतिक शालू आणि रंगणी सासूरची माहिती खूप महत्त्वाची आहे. त्याच्यात संबंधित माहिती खास करून देऊ.

प्राकृतिक शालू: प्राकृतिक शालू ही लहान बाजारात संग्रहीत केली जाणारी शालू आहे, ज्याचा उत्पादन प्राकृतिक अवस्थेत केला जातो. विविध प्राकृतिक शालू जसे की काटनी, उन, लिनन, जूट, रेग, माल इत्यादी आहेत. ह्या शालूंचा उत्पादन विशेष रक्ताळ पर्यावरणात केला जातो आणि त्याचा उपयोग आधुनिक वस्त्र उत्पादनात, वस्त्र फॅशनात आणि इतर साहित्यात केला जातो.

प्राकृतिक रंग: प्राकृतिक रंग उत्पादन तंत्र केल्याने प्राकृतिक सासूंचा वापर केला जातो, ज्यामुळे वस्त्रांना निळ्याचा, पांढरया, हिरव्या, गुलाबी आणि इतर प्राकृतिक रंगांची विविधता मिळते. ह्या रंगांचा उत्पादन विविध रंगणार्थात, पेंटिंग आर्टवर्कसाठी, वस्त्र रंगणार्थात, प्रिंटिंग व डाय इत्यादी साहित्यात केला जातो.

त्यांच्यात आरंभावर अधिक माहिती आणि अद्याप समाजातील उपलब्ध वस्त्र व रंगणी सासूंची तपासणी करण्यासाठी, स्थानिक तज्ञांची सल्ले घ्या.


<br>
<br>Natural fibers and dyes are very important aspects of agriculture. Here is some relevant information:

Natural Fibers: Natural fibers are obtained from plants or animals and are produced in their natural state. Various natural fibers such as cotton, wool, linen, jute, hemp, and silk are available. The production of these fibers is carried out in an environmentally friendly manner and they are used in modern textile production, fashion, and other industries.

Natural Dyes: Natural dyes are produced using techniques that involve natural sources such as plants, minerals, and insects. They provide a wide range of colors such as blue, white, green, pink, and others. These dyes are used in various applications including painting, textile coloring, printing, and dyeing.

For more detailed information and to explore available fabrics and dyeing techniques in your community, consult with local experts.


                            </p>
                                 
                                
                                     
                                    
                                 
                          </div>
                           
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                    <div class="card">
                         <div class="aligncenter">
                                
                               
                                   <img style="height:100%;width:100%" src="../Images/schemes/NYD1.jpg" alt="logo">
                                   
                                
                         </div>
                          
                    </div>
                  
                     
                    
                     
               </div>
                           
                </div>
                  
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