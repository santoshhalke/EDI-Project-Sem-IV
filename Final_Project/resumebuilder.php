<?php
require_once "includes/connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Serif+4:ital,opsz,wght@1,8..60,500&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/resumebuilder.css">
    <title>Welcome to training and placement portal</title>
</head>
<body>
    <!-- here goes html code  -->

    <div class="heading">
        <h1 class="text-center my-2">RESUME GENERATOR</h1>
        <p class="text-center">By Training and placement Portral</p>
    </div>


    <div class="container" id="cv-form">
        
        <div class="row">
          
            <div class="col-md-6">
               <!-- first column  -->
               <h3>Personal Information</h3>

               <div class="form-group">
                  <label for="nameField">Your Name</label>
                  <input 
                   type="text" 
                   id = "nameField" 
                   placeholder = "Enter here" 
                   class="form-control">
               </div>
                
               <div class="form-group mt-2">
                 <label for="contactField">Your Contact</label>
                 <input 
                  type="text" 
                  id = "contactField" 
                  placeholder = "Enter here" 
                  class="form-control">
                </div>

                <div class="form-group mt-2">
                    <label for="addressField">Your Address</label>
                    <textarea
                     id = "addressField" 
                     placeholder = "Enter here" 
                     class="form-control"
                     rows="3"
                     ></textarea>
                </div>

                  <div class="form-group mt-3">
                    <label>Select your photo</label>
                    <input id = "imgField" type="file" class="form-control">
                  </div>

                   <p class="text-secondary my-3">Important Details</p>

                   <div class="form-group mt-2">
                    <label for="fbField">Facebook</label>
                    <input 
                     type="text" 
                     id = "fbField" 
                     placeholder = "Enter here" 
                     class="form-control">
                   </div>

                   <div class="form-group mt-2">
                    <label for="instaField">Instagram</label>
                    <input 
                     type="text" 
                     id = "instaField" 
                     placeholder = "Enter here" 
                     class="form-control">
                   </div>

                   <div class="form-group mt-2">
                    <label for="linkedField">Linkedin</label>
                    <input 
                     type="text" 
                     id = "linkedField" 
                     placeholder = "Enter here" 
                     class="form-control">
                   </div>

            </div>
            <div class="col-md-6 test">
                 <!-- second column  -->
                 <h3>Professional Information</h3>

                <div class="form-group mt-2">
                    <label for="">Objectives</label>
                    <textarea id = "objectiveField"rows = "5"placeholder = "Enter here"  class="form-control"></textarea>
                </div>

                <div class="form-group mt-2" id="we">
                    <label for="">Work Experience</label>
                    <textarea placeholder = "Enter here"  class="form-control weField" id = "weField" rows="3"></textarea>
                </div> 

                <!-- new textarea  -->

                <div class="container text-center mt-2 " id="weAddButton">
                    <button onclick = "addNewWEField()" class = "btn btn-primary btn-sm">Add</button>
                </div>

                <div class="form-group mt-2" id="aq">
                    <label for="">Academic Qualifications</label>
                    <textarea placeholder = "Enter here"  class="form-control eqField" rows="3" id = "eqField"></textarea>
                </div>
                <div class="container text-center mt-2 " id = "aqAddButton">
                    <button onclick = "addNewAQField()" class = "btn btn-primary btn-sm">Add</button>
                </div>
                <div class="container text-center mt-3" id="generatecvdivcontainer">
        
                    <button  onclick="generator()" class="btn btn-primary btn-lg" id="button">GENERATE CV</button>
        
                </div>
            </div>
        </div>


    </div>

           <!-- cv templet -->

        <div class="container" id="cv-template">

            <div class="row">
                <div class="col-md-4 text-center py-5 background">
                 
                    <!-- first col  -->
                     
                     <img 
                      src="profile.png"
                      class = "img-fluid myimage"
                      id="imgTemplate"
                      >

                    <div class="container">
                      <p id="nameT1">Aman kumar Tiwari</p>
                      <p id="contactT">+91 9876454366</p>
                      <p id="addressT">malegaon-423105</p>
                      <hr>
                      <p>
                        <a  id="fbT" href="#1">https://www.Facebook.com/LearnCodeWithDurgesh</a>
                      </p>

                      <p>
                        <a id="instaT" href="#1">https://www.instagram.com/Durgesh_k_t</a>
                      </p>

                      <p>
                        <a id="LinkedT"href="#1">https://www.linkedin.com/LearnCodeWithDurgesh</a>
                     </p>


                    </div>

                </div>
                <div class="col-md-8 py-5">

                    <!-- second col  -->

                    <h1 id = "nameT2" class="text-center" style="font: size 980px;">Aman kumar Tiwari</h1>

                    <!-- objectives card  -->

                    <div class="card mt-4">
                        <div class="card-header background">
                            <h3>objectives</h3>
                        </div>
                        <div class="card-body">
                            <p id="objectiveT">Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                Eius dicta maiores, aliquid fugiat inventore libero quasi, 
                                error, earum voluptatum assumenda nostrum laboriosam sunt. 
                                Inventore corrupti minima molestias vero expedita alias odit 
                                consequuntur atque ducimus, maiores quibusdam esse incidunt, 
                                animi, suscipit doloribus iste recusandae error accusantium? 
                                Eos illum rem non iusto?
                            </p>
                        </div>
                    </div>
                       
                   
                    <div class="card mt-4">
                        <div class="card-header background">
                            <h3>Work Experience</h3>
                        </div>
                        <div class="card-body">
                          <ul id="weT">
                            <!-- <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, temporibus?</li>
                    
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, temporibus?</li>
                        
                            <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, temporibus?</li> -->
                           </ul>
                        </div>
                    </div>

                     <!-- Academic Qualifications  -->

                    <div class="card mt-4">
                        <div class="card-header background">
                            <h3>Academic Qualifications</h3>
                        </div>
                        <div class="card-body">
                           <ul id="aqT">
                              <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, temporibus?</li>
                           
                               <li>Lorem ipsum dolor sit amet consectetur adipisicing elit. Libero, temporibus?</li>
                           </ul>

                        </div>
                    </div>
            
                   <div class="conatiner mt-3 text-center">
                    <button onclick ="printCV()"class="btn background">
                        Print CV
                    </button>
                   </div>

                </div>
            </div>

        </div>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" 
      integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="javascript/resumebuilder.js"></script>
</body>
</html>
