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
           <h1 style="font-weight: bold;color:red; text-align:center;font: size 60px;">RAIN WATER MANAGEMENT / पाऊस पाण्याचे व्यवस्थापन</h1>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                     <div class="card">
                          <div class="aligncenter">
                                 
                                
                                    <img style="height:200px;width:100%" src="../Images/schemes/RWM.jpg" alt="logo">
                                    
                                 
                          </div>
                           
                     </div>
                   
                      
                     
                      
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                <div class="card">
                           <h4><b></b></h4>
                            <p style="font: size 25px">
                            पाऊस पाण्याचे व्यवस्थापन एक महत्त्वाचे आणि गंभीर विषय आहे ज्यावरून समुदायांची आणि खारेजी प्रदेशांची आर्थिक, सामाजिक, आणि पर्यावरणीय विकासाची धारणा आहे. पाऊस पाण्याचा व्यवस्थापन हे प्राथमिकतेचे विषय आहे ज्याच्यामुळे पाण्याची भांडणी आणि नियोजनासाठी तंत्रज्ञान, कौशल्ये, आणि सामर्थ्य वाढते.

पाऊस पाण्याचे व्यवस्थापन याचा एक मुख्य उद्दिष्ट असला पाहिजे, तो असे करणे की पाऊसाचा प्राप्त होणारा पाणी संग्रहित केला जातो आणि त्याचे उपयोग योग्य स्थळात नियोजित केले जाते. या प्रक्रियेसाठी विविध तंत्रे वापरली जातात, जसे की तालाब, बंधारा, स्टॉक टॅंक, अधिक अग्रेसर आणि अधिक पाठळी, वर्टीकल गाळा, अग्निपांचात आणि इतर प्रकारांत.

पाऊस पाण्याचे व्यवस्थापन या प्रक्रियेमध्ये, जलसंचयन, जलपाट, जलाशयाचा पुनर्जलसृजन, आणि जलाशयाच्या नियंत्रणासाठी विविध उपायांचा अभ्यास येतो. यात, जलसंचयन उपकरणे आणि पाणीच्या दौडाव्याचे प्रणाली एकमेकांसाठी नेहमीचे महत्त्वाचे असतात.

पाणीचा वापर वाढत असताना, प्रत्येक समुदायाला पाऊस पाण्याच्या व्यवस्थापनाचे महत्त्व दाखवण्याची गरज आहे. या कामात शेती, प्रस्थान, औद्योगिक विकास, स्थानिक संस्थांचे विकास, आणि पर्यावरणाची संरक्षण असे विविध क्षेत्रे समाविष्ट होतात.

शेतीतील कृषिव्यवस्थापन, जलसंपदा अनुसंधान, पाण्याच्या वापराची योजना बनविणे, जलसंयंत्र, विकसित क्षेत्र, आणि अन्य जलसंचयन प्रक्रिया, पाणीचे संग्रहण आणि नियोजन, अधिक महत्त्वाच्या आणि अग्रगामी मार्ग आहेत ज्यांच्यामुळे समुदायातील जलसंपदा, अन्नद्रव्य, आणि आग्रही प्राधिकरणांची स्थिती वाढते.
<br>
<br>Management of rainfall water is an important and serious matter that impacts the economic, social, and environmental development of communities and desert regions. The management of rainfall water is a priority issue as it enhances the infrastructure and capabilities required for water storage and regulation.

The main objective of rainfall water management is to capture the water received during rainfall and regulate its usage in appropriate locations. Various techniques are employed for this process, such as ponds, reservoirs, stock tanks, check dams, contour bunding, vertical mulching, rainwater harvesting, and others.

In the process of rainfall water management, practices such as water conservation, watershed management, reservoir recharging, and various measures for reservoir control are studied. Water conservation tools and irrigation systems play a crucial role in complementing each other.

As the demand for water increases, it becomes imperative to highlight the importance of rainfall water management to every community. This work encompasses agriculture, industry, infrastructure development, local institution development, and environmental conservation.

In agricultural management, water resource research, planning for water use, water facilities, developed areas, and other water conservation processes, water collection and regulation are of paramount importance and are progressive approaches that contribute to the enhancement of community water resources, food security, and proactive authority positions.


                            </p>
                                 
                                
                                     
                                    
                                 
                          </div>
                           
                </div>
                <div class="card-deck row text-center" style="display: flex; flex-wrap: wrap;">
                    
                    <div class="card">
                         <div class="aligncenter">
                                
                               
                                   <img style="height:100%;width:100%" src="../Images/schemes/RWM1.jpg" alt="logo">
                                   
                                
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