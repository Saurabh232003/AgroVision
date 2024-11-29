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
                     <a href="CallCenter.php" id="navbar"><label>Call Centers</label></a>
                </div>
           </div>
           <hr>

          

            
           <div class="features container">
           <h1 style="font-weight: bold;color:red; text-align:center;font: size 60px;">SOIL AND WATER MANAGEMENT / मृदा आणि पाणी व्यवस्थापन</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                     <div class="card">
                          <div class="aligncenter">
                                 
                                
                                    <img style="height:200px;width:100%" src="../Images/schemes/SAWM.jpg" alt="logo">
                                    
                                 
                          </div>
                           
                     </div>
                   
                      
                     
                      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                <div class="card">
                            
                            <p style="font: size 25px">
                            "मृदा आणि पाणी व्यवस्थापन" हा विषय मृदा आणि पाण्याच्या संरक्षणात, उपयोगात आणि व्यवस्थापनात मदत करण्यासाठी विशेष महत्वाचा आहे. या विषयात निहायची माहिती आहे:

१. मृदा संरक्षण: मृदा संरक्षण हा प्राथमिक आणि महत्त्वाचा पायाभूत अवयव आहे. ह्यातून मृदा क्षत्र आणि पाण्य अभावाची परिस्थितीत निवडणे, मृदा वाढवणे, अशिवाय जमीन संरक्षण, आणि अवसानशी वापरलेल्या कृषी विधानाची काळजी घेणे समाविष्ट केले जाते.

२. पाणी वापर व्यवस्थापन: पाण्याचे वापर अत्यंत महत्त्वाचे आहे आणि ह्याचा व्यवस्थापन संबंधित अनेक नियम आणि अनुप्रयोग आहेत. पाण्याच्या गर्दी, उपयोग, गुणवत्ता नियंत्रण, जलसंचयन, स्थायित्वीकरण, आणि पुन्हा वापर या प्रमुख विषयांवर तंत्रज्ञान दर्शविता आणि मार्गदर्शन करणे आवश्यक आहे.

३. मृदा शोधाची माहिती: विविध भौतिक आणि केमिकल प्रक्रिया, मृदा विश्लेषण, उत्तम शेतीचे मृदा प्रकार, आणि मृदा स्वास्थ्य याबाबत निवडणी करण्यासाठी मृदा शोधाची माहिती प्रदान केली जाऊ शकते.

४. परिस्थिती संरक्षण: परिस्थिती संरक्षण हा पाणी आणि मृदा संरक्षणाचा एक संगणक घटक आहे. एकमेकांप्रमाणे, वायुमुळे पोल्यूशन आणि वन्यजन्य प्राणी विकृतींचा नियंत्रण करण्यासाठी वन्यजन्य पादप आणि जनवन्य जीवनाची काळजी घेता येते.

५. मृदा संरक्षण तंत्रज्ञान: शेतीमध्ये मृदा संरक्षण तंत्रज्ञान आहे ज्याच्यामध्ये संगोपन आणि राखण असे विविध प्रणाली आणि तंत्रे येतात. ह्या प्रकारच्या तंत्रज्ञानातून शेतीसाठी अत्यंत महत्त्वाचे फायदे मिळतात.

ह्या विषयाची माहिती शेतीसंबंधित कामाच्या अत्यंत महत्त्वाच्या भाग आहे आणि त्याची ठेवणी आणि वापर करण्यात लागणारे आहे.

<br>
<br>"The Management of Soil and Water" is a subject of particular importance in aiding the conservation, utilization, and regulation of soil and water. Essential information in this subject includes:

Soil Conservation: Soil conservation is a fundamental and crucial aspect. It involves selecting methods to prevent soil erosion and water scarcity, promoting soil fertility, conserving arable land, and adhering to sustainable agricultural practices.

Water Usage Management: The management of water usage is extremely important and involves various regulations and practices. It requires expertise and guidance on aspects such as water scarcity, usage control, quality management, water harvesting, stabilization, and reuse.

Soil Research Information: Information related to various physical and chemical processes, soil analysis, optimal soil types for farming, and soil health can be provided to aid decision-making.

Environmental Conservation: Environmental conservation is an integral component of soil and water conservation. Measures such as controlling air pollution and biodiversity conservation are taken to mitigate pollution and preserve wildlife habitats.

Soil Conservation Techniques: Soil conservation techniques encompass various methods and systems for storage and preservation. These techniques offer significant benefits for agriculture.

This information is a crucial part of agricultural work, and its application and implementation are essential.



                            </p>
                                 
                                
                                     
                                    
                                 
                          </div>
                           
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                    <div class="card">
                         <div class="aligncenter">
                                
                               
                                   <img style="height:100%;width:100%" src="../Images/schemes/SAWM1.jpg" alt="logo">
                                   
                                
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