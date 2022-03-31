<!DOCTYPE html>
<html>
    <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reknot Application Form</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">


    </head>

    </head>

        <title>AF</title>
        <body>
            <form action="insert.php" method="POST">

            <div class="container">
              <nav class="nav justify-content-center navbar navbar-dark bg-secondary">
                 
                  <a class="navbar-brand" href="#"><h1>Reknot Solutions Pvt. Ltd.</h1></a><br<br>
              </nav><br> 
              
               <fieldset>
              
                <h3 class="text-center">Application Form</h3>
 
               
                <div class="row">

                     <label for="full_name" class="form-label"><i class="fa-solid fa-user-pen">&emsp;</i><b>Full Name</b></label>
                     <input type="text" placeholder="Enter your Full Name" name="full_name" id="full_name" required>
                </div> <br><br>


                <div class="row">

                     <label for="email" class="form-label"><i class="fa-regular fa-square-envelope"></i>&emsp;</i><b>Email</b></label>
                     <input type="email" placeholder="Enter your email" name="email" id="email" required>
                </div> <br><br>

                <div class="row">

                     <label for="phone_number" class="form-label"><i class="fa-regular fa-square-phone"></i>&emsp;<b>Phone Number</b></label>
                     <input type="number" placeholder="Enter your Phone number" name="phone_number" id="phone_number" required>
                </div> <br><br>

                <div class="row">
                     <label for="college_name" class="form-label"><i class="fa-solid fa-building-columns"></i>&emsp;<b>College Name</button></label>
                     <input type="text" placeholder="Enter your College name" name="college_name" id="college_name" required>
                </div> <br><br>

                <div class="row">
                    <label for="address" class="form-label"><i class="fa-solid fa-address-card"></i>&emsp;<b>Address</b></label>
                     <input type="text" placeholder="Enter your Address" name="address" id="address" required>
                </div> <br><br>
                
                <div class="row">
                     <label for="skills" class="form-label"><i class="fa-brands fa-creative-commons-nd"></i>&emsp;<b>Skills</b></label>
                     <input type="text" placeholder="Enter your Skills" name="skills" id="skills" required>
                </div> <br><br>
               
                <div class="row">
                          <div class="col">
                             <div class="form-group">
                              <label for="pc" class="form-label"><i class="fa-regular fa-laptop"></i>&emsp;<b>Do u have your own pc?</b></label><br>
                                <input type="radio" name="pc" value="Yes">&emsp;Yes<br><br>
                               <input type="radio" name="pc" value="No" class="ml-5">&emsp;No
                             </div>
                           </div>

                               <div class="col">
                                     <div class="form-group">
                                      <label for="wifi" class="form-label"><i class="fa-regular fa-wifi"></i>&emsp;<b>Do u have WIFI connection?</b></label><br>
                                      <input type="radio" name="wifi" value="Yes">&emsp;Yes <br><br>
                                      <input type="radio" name="wifi" value="No" class="ml-5">&emsp;No
                                    </div>
                                </div>
                </div><br><br>
        




                                      <label for="edu"><i class="fa-solid fa-diploma"></i>&emsp;Education</label>&emsp;
                                       <select name="edu" id="edu">
                                       <option value="postgraduate">Post Graduate</option>
                                       <option value="graduate">Graduate</option>
                                       <option value="undergraduate">Under graduate</option>
                                       <option value="diploma">Diploma</option>
                                       </select><br><br>

<!--
                                       <label class="form-label" for="cv">Upload Resume</label>
                                       <input type="file" class="form-control" id="cv" /><br><br>


                                <label>Skills : </label><input type="text" name="skills"><br> <br>
  

                                              <p>Do you apply any internship program in past?</p>
                                        <label>here </label><input  name="select"><br> <br>
                                    <input type="radio" id="yes" name="yes" value="Y">
                                    <label for="yes">Yes</label><br>
                                       <input type="radio" id="no" name="no" value="N">
                                        <label for="no">No</label><br><br>-->
                                     <div class="row">
     
                                     <div class="col-md-12 text-center">
                                         <button type="submit" name="submit"> Apply</button>
                                        
                                     </div>

                                    <!-- <div class="row">
                                     <div class="col-md-12 text-center">
                                         <a href="connection.php">Check List</a>
                                         </div>
                                         </div>
                                     </div>-->
                                     <div class="col-md-12 text-right">
                                     <button onclick="location.href = 'connection.php';" id="myButton" class="float-left submit-button" >Check list here</button>
                                     </div>
                                     
            <footer class="page-footer font-small blue pt-4">
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">Reknot Solutions Pvt. Ltd. <br>
                <a href="/">careers.reknot@gmail.com</a> </br>
            </div>
            
            </div>
            </fieldset>

            
            </footer>
            </form>

        </body>
    </head>
</html>