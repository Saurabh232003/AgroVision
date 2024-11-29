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
           <h1 style="font-weight: bold;color:red; text-align:center;font: size 60px;">PLANT AND DISEASE MANAGEMENT / पिक आणि रोग व्यवस्थापन</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                     <div class="card">
                          <div class="aligncenter">
                                 
                                
                                    <img style="height:200px;width:100%" src="../Images/schemes/PADM.jpg" alt="logo">
                                    
                                 
                          </div>
                           
                     </div>
                   
                      
                     
                      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                <div class="card">
                           <h4><b></b></h4>
                            <p style="font: size 25px">
                            पिक आणि रोग व्यवस्थापन हा कृषीच्या प्रमुख मुद्द्यांपैकी एक आहे. ह्या विषयातील महत्त्वाची माहिती शेतकरी आणि कृषी संबंधित व्यक्तींना आपल्याला शेतीवरील संज्ञेसाठी समृद्ध करू शकते. पिक आणि रोग व्यवस्थापनात खोड पिकांचे संरक्षण, रोगनिराकरण, आणि तज्ञता यांसाठी मुख्य मार्गदर्शक तज्ञांचा योगदान आहे. यात लागणारे मुख्य प्रयोग आहेत:

रोग आणि पिकांची ओळख: खेतीत आणि पशुपालनात पिक आणि रोग ओळखणे महत्त्वाचे आहे. ह्या विषयात सक्षम तज्ञांना माहिती प्रदान केली जाते किव्हा ते संपर्क करण्यासाठी वेळीची माहिती प्रदान केली जाते.

रोगांच्या नियंत्रणाचे उपाय: पिक आणि पशुपालनात प्रमुख रोगांचे उपाय, सर्वाधिक वापर केल्या जाणार्‍या उपाय, आणि वैकल्पिक उपाय यांची माहिती प्रदान केली जाते.

पेस्ट नियंत्रण: प्रमुख पेस्टसाठी नियंत्रण उपाय आणि पेस्टसाठी विविध प्रकारांचे संरक्षण.

एकीकरणित प्रबंधन: संवेदनशीलता व बाजारातील वृद्धी यांसाठी रोग व्यवस्थापनात एकीकृत अनुप्रयोग.

कृषी संबंधित अद्याप तंतूंची माहिती: नवीन तंतूंच्या प्रकोपांमुळे व त्यांच्या नियंत्रणासाठी अपडेटेड माहिती.

क्लिनिकल आणि डायाग्नोस्टिक सहाय्य: रोगांच्या ओळखासाठी वैद्यकीय सहाय्य.

व्यावसायिक प्रतिसाद: प्रमुख रोगांचा आणि पेस्टसाठी व्यावसायिक प्रतिसाद योग्य काम योजना आणि उपाय.

पिक आणि रोग व्यवस्थापन हे एक संशोधनात्मक प्रक्रिया आहे ज्यामध्ये संशोधन, वैज्ञानिक अभ्यास, आणि अनुभवांचे संयोजन केले जाते त्याच्यामध्ये रोगांचे संरक्षण आणि नियंत्रण केले जाते.

<br>
<br>Crop and disease management is one of the major issues in agriculture. Rich information on this subject can empower farmers and agriculture-related individuals to enhance their understanding of farming practices. Crop and disease management relies heavily on the expertise of specialists for the protection, eradication, and expertise in this area. Key practices involved include:

Identification of Diseases and Crops: Identifying crops and diseases in agriculture and livestock farming is crucial. Experts are provided with information on this subject or are made available for immediate contact.

Methods for Disease Control: Information is provided on major diseases in crops and livestock, commonly used methods for control, and alternative methods.

Pest Control: Control measures for major pests and protection against various types of pests.

Integrated Management: Integrated application in disease management for sensitivity and market growth.

Current Agricultural Information: Updated information on new pests and their control due to outbreaks.

Clinical and Diagnostic Assistance: Medical assistance for disease identification.

Commercial Response: Professional responses to major diseases and pests with appropriate action plans and solutions.

Crop and disease management is a research-based process involving research, scientific studies, and the integration of experiences. It encompasses the protection and control of diseases.



                            </p>
                                 
                                
                                     
                                    
                                 
                          </div>
                           
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                    <div class="card">
                         <div class="aligncenter">
                                
                               
                                   <img style="height:100%;width:100%" src="../Images/schemes/PADM1.jpg" alt="logo">
                                   
                                
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