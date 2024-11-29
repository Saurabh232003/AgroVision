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
           <h1 style="font-weight: bold;color:red; text-align:center;font: size 60px;">WHETHER BASED KNOWLEDGE / मौसम आधारित माहिती</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                     <div class="card">
                          <div class="aligncenter">
                                 
                                
                                    <img style="height:200px;width:100%" src="../Images/schemes/WBK.jpg" alt="logo">
                                    
                                 
                          </div>
                           
                     </div>
                   
                      
                     
                      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                <div class="card">
                            
                            <p style="font: size 25px">
                            मौसम आधारित कृषीच्या माहितीने कृषी क्षेत्रातील शेतीचे आणि पाण्याचे व्यवस्थापन सुधारित करण्यात महत्वाचे आहे. या प्रकारे, शेतीसाठी उपयुक्त बियाणे निवडल्यास, खेतीच्या क्रियांमध्ये समयसारख्या परिवर्तनांच्या अटी वापरून, उत्पादनात वाढ उपलब्ध होते.

आधारित मौसमदर्शन, बाजारातील अद्यातन माहिती, आणि उच्च प्रौद्योगिकी अशा अनेक स्रोतांवरून मिळविलेल्या माहितीने कृषी क्षेत्रातील शेतीसाठी अधिक महत्वाची असते.

मौसम आधारित कृषीच्या माहितीमध्ये आपल्याला कोणत्या पाण्याच्या श्रोतांच्या उपलब्धतेवर आधारितरीत्या कृषी क्रिया घेऊ त्याबाबतचे मार्गदर्शन उपलब्ध होते. उदाहरणार्थ, अनुमानित पाण्याच्या पात्रतेसाठी आधारित जलस्तर आणि वर्षाची माप कृषी योजना आणि बियाण्याची निवड करण्यासाठी महत्त्वाची आहे.

मौसमाचे परिणाम अधिक मिळवण्यासाठी कृषीच्या क्षेत्रातील सांगोपान नेते, पाण्याचे व्यवस्थापन करतात, विविध कृषी तंत्रज्ञान आणि बाजार स्थितीच्या समीक्षा करतात. या माहितीच्या आधारे कृषी क्षेत्रातील शेतीबाबत उत्तम निर्णय घेता येते आणि कृषी उत्पादन वाढते
<br>
<br>Weather-based agricultural information is crucial for improving the management of farming and water resources in the agricultural sector. In this way, appropriate seeds selection for cultivation and timely adjustments in farming activities lead to increased production.

Information obtained from weather forecasts, market updates, and various sources of advanced technology plays a significant role in agriculture.

Weather-based agricultural information provides guidance on agricultural activities based on the availability of water resources. For example, estimating the suitability of water sources and the measurement of rainfall are essential for planning agriculture and selecting seeds.

To obtain better results from weather forecasts, agricultural stakeholders monitor weather conditions, manage water resources, and review various agricultural technologies and market conditions. Based on this information, informed decisions can be made regarding farming activities, leading to increased agricultural production.


                            </p>
                                 
                                
                                     
                                    
                                 
                          </div>
                           
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                    <div class="card">
                         <div class="aligncenter">
                                
                               
                                   <img style="height:100%;width:100%" src="../Images/schemes/WBK1.jpg" alt="logo">
                                   
                                
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