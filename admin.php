<?php
      

	   if(isset($_POST['btn_submit']))
	   {
            $m_no=$_POST['mobile_no'];
             $password=$_POST['pass'];

            $db_pass ="101105";
            if($password=="")
            {
               echo "please Enter Password";
            }
            else
            {
              if($password==$db_pass and $m_no=="9307835932")
              {
                header("location:report.php");
              }
              else
              {
                  echo "Incorrect ";
              }
            }
          

       }
?>
<html>
    <head>
            <title>Bootstrap</title> 

            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
             <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
              <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css"/>
             <link rel="stylesheet" type="text/css" href="css/style.css" />

               <script typr="text/javascript" src="js/bootstrap.js"></script>
               <script typr="text/javascript" src="js/bootstrap.bundle.js"></script>
<style>
  .user-container
{
  width:560px;
  box-shadow:0 0 8px rgba(250,250,250,0.6);
  opacity:0.6;
  border:1px solid white;
  border-radius:50px;
}
.user-container form{
  width:100%;
  text-align:center;
  padding:25px 20px;
}
.user-container{
  margin-left: 30%;
  margin-top: 10%;
  margin-bottom: 3rem;
  background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url("images/backfeedback.jfif");
}
  </style>

    </head>

    <body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header.php');

       ?>
     <div class="user-container">
          <div class="container cstm_container">
            <div class="row">
              <div class=" col col-md-3 col-sm-3">
               
              </div>

              <div class="col col-md-6 cstm_form_container" >
                  <h1 style="text-align: center;"><center>Admin Login </center></h1>
				 
                  
                <form action="admin.php" method="POST">
				 
                  <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" name="mobile_no"id="exampleFormControlInput3" placeholder="Enter Mobile Number">
                  </div>
                   <br />
                
                  <div class="col-auto">
                 <!-- <script> -->
                        <!-- function A() -->
                        <!-- { -->
                        <!-- var x=document.getElementById("inputPassword2"); -->
                        <!-- x.value=""; -->
                      
                        <!-- } -->
                     
                        <!-- </script> -->
                
                        <label for="inputPassword2" class="visually-hidden">Enter Password</label>
                    <input type="password" class="form-control"  name="pass" id="inputPassword2" placeholder="Password">
                
                  </div>

					  <br />
                     <center><input type="submit" class="btn btn-warning" name="btn_submit"value="Login"></button></center>
                      </form>
                  </div>
              </div>

            </div>
          </div>
                        </div>
      </body>
      <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');

       ?>
</html>