<?php
//include function file 
//this syntax can use to include any file 
require_once('lib/functions.php');
$ta= new travel_agency();

if(isset($_GET['logout']))
{
unset($_SESSION['login_mo_no']);
}
if(isset($_POST['login_submit']))
{
     $m_no=$_POST['mobile_no'];
      $password=$_POST['pass'];

     $db_pass = $ta->get_user_password($m_no);
     if($password=="")
     {

          ?>
          <div class="alert alert-danger" role="alert">
          Please enter password!!!
        </div>
        <?php
     }
                if($db_pass=="")
                  {

                      // echo "Please enter password";
                  // header("location:registration.php");
                            //$_POST['alert']="Error";/>
              ?>

                       <div class="alert alert-danger" role="alert">
                You have no account !! please Create an Account...
                  </div>
              <!-- Modal -->
              
                        <?php
            
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

    <div class="alert alert-danger" role="alert">
      You entered password is wrong.
        </div>
    <!-- Modal -->

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
<style>
    .main-home
{
    position:relative;
    height:100vh;
    /* 100% of viewport height */
    width:100%;
     background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(images/login2.webp) !important;
    background-size: cover;
    background-position: bottom center;
    display:flex;
    align-items: center;
    justify-content:flex-start;
    border:5px solid grey;
}

.main-home-text h5
{
     font-size:18px;
     font-weight:600;
     margin: bottom 10px;
     text-transform: uppercase;
     letter-spacing:6px;
      color:var(--main-color);
}
.main-home-text h1
{
    font-size:var(--h1-font);
    font-weight:800;
    line-height:1.2;
    margin-bottom:20px;
}
.main-home-text p
{
    font-size:var(--p-font);
    font-weight: 500;
    /* beat aahe bgh */
    line-height:30px;
    color:#ffffffab;
    margin-bottom:35px;

}
.main-home .logo1
{
  margin-bottom: 40rem;
}
.l_btn{
    margin-top:20rem;
}
.login{
    margin-left:15rem;
}


</style>
   </head>
   <body onload="javascript:document.getElementById('login_id').hidden=true;">

 
    <section class="main-home">
        <div class="logo1">
    <h3 class="logo">SS<span>Travels</span></h3>
    
</div>
      <div class="home-text">
      <p>Best Travel Agency</p>
      <figure class="text-end">
  <blockquote class="blockquote">
    <p>A journey of a thousand miles begins with a single step</p>
  </blockquote>
  <figcaption class="blockquote-footer" style="color:black">
    created by <cite title="Source Title">@siddheshwarsakhare</cite>
  </figcaption>
</figure>
                <center><h5>WEL-COME</h5><center><h6>To SS Travels</h6>
                <h1>We make Awesome <br> Tours</h1>
                <p>Experience The  Best Trip Ever.. </p>
                <p>Make your Tour Amazing with Us.</p>
            
        </div>
        <!-- <a href="javascript:window.scrollTo(0,1100)"class="btn">Book a trip</a> -->
    
 <div class="l_btn">
        <button type="submit" class="btn btn-warning" id="l_id" onclick="javascript:document.getElementById('login_id').hidden=false;" name="l_submit" value="Login">Log In</button>
</div>
<form action="loginmain.php" method="POST">
<div class="login" id="login_id">
                    <h2>Login here</h2>
          
                  <div class="mb-3">
                    <!-- <label for="exampleFormControlInput3" class="form-label">Mobile Number</label> -->
                    <input type="number" class="form-control" required name="mobile_no" id="exampleFormControlInput3" placeholder="Enter Mobile Number">
                  </div>
                
                  <div class="col-auto">
                        <!-- <label for="inputPassword2" class="visually-hidden">Enter Password</label> -->
                    <input type="password" class="form-control" required name="pass" id="inputPassword2" placeholder="Password">
                
                  </div>
 
					  <br />
                     <center><button type="submit" class="btn btn-warning" onclick="javascript:document.getElementById('login_id').hidden=true;" name="login_submit"value="Login">Log In</button></center>
                    

                    <p class="link">Don't have an account<br>
                    <a href="registration.php">Sign up here</a></p>
                    <p class="liw">Log in with</p>
                     <div class="login-icons">
                     <a href="#"><i class="ri-instagram-fill"></i></a>
                    <a href="#"><i class="ri-facebook-fill"></i></a>
                    <a href="#"><i class="ri-whatsapp-fill"></i></a>            
                   </div>
                </div>
</form>
</section>

</body>
   </html>