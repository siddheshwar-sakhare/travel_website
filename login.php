<?php
       //include function file 
	   //this syntax can use to include any file 
	   require_once('lib/functions.php');
	   $ta= new travel_agency();
     
     if(isset($_GET['logout']))
     {
       unset($_SESSION['login_mo_no']);
     }

	   if(isset($_POST['btn_submit']))
	   {
            $m_no=$_POST['mobile_no'];
             $password=$_POST['pass'];

            $db_pass = $ta->get_user_password($m_no);
              
            if($db_pass=="")
            {
                echo "This user is not registered";
                header("location:registration.php");
            }
            else
            {
              if($password==$db_pass)
              {
                //echo "Successfully Logined";
                $_SESSION['login_mo_no']=$m_no;
                //header is used to move one page to second without click
                header("location:home.php");
              }
              else
              {
                 //$_POST['alert']="Error";/>
                 ?>
                 <div class="alert alert-danger" name="alert" role="alert">
                        ERROR!!!!Incorrect Password ,check Password  
                 </div>
                 <?php
                  // echo "Incorrect Password ,check Password";
              }
            }
          
       }

           
       
?>
<html>
<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width,intial-scale=1">
          <title>Travel Website</title>
          <link rel="stylesheet" type="text/css" href="css/style.css">

           <!-- box icon links -->
           <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

           <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
           <!-- bootstrap -->
           <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
             <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
              <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css" />
             <link rel="stylesheet" type="text/css" href="css/style.css" />

               <script typr="text/javascript" src="js/bootstrap.js"></script>
               <script typr="text/javascript" src="js/bootstrap.bundle.js"></script>
            <!-- Gopgle Fonts -->
           <link rel="preconnect" href="https://fonts.googleapis.com">
             <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
          
             <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
             </head>

    <body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header.php');

       ?>
    <form action="login.php" method="POST">
    <div class="login">
                    <h2>Login here</h2>
                  
                  <div class="mb-3">
                    <!-- <label for="exampleFormControlInput3" class="form-label">Mobile Number</label> -->
                    <input type="number" class="form-control" name="mobile_no"id="exampleFormControlInput3" placeholder="Enter Mobile Number">
                  </div>
                
                  <div class="col-auto">
                        <!-- <label for="inputPassword2" class="visually-hidden">Enter Password</label> -->
                    <input type="password" class="form-control"  name="pass" id="inputPassword2" placeholder="Password">
                
                  </div>
 
					  <br />
                     <center><button type="submit" class="btn btn-warning" name="btn_submit"value="Login">Log In</button></center>
                    

                    <p class="link">Don't have an account<br>
                    <a href="registration.php">Sign up here</a></p>
                    <p class="liw">Log in with</p>
                     <div class="login-icons">
                     <a href="#"><i class="ri-instagram-fill"></i></a>
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-whatsapp-fill"></i></a>            
                   </div>
                </div>
                       
                  
                <script src="js/script.js"></script>      
      </body>
      <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');

       ?>

</html>