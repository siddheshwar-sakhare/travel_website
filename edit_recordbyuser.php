
         
        </html>
		<?php
       //include function file 
	   //this syntax can use to include any file 
	   require_once('lib/functions.php');
	   $ta= new travel_agency();
                  $ed_id="";
                //   echo "hello".$edit_id;
               if(isset($_GET['edit_id']))
               {
                  $ed_id= $_GET['edit_id'];
                  $_SESSION['edit_id']=$ed_id;
                 
                //   echo "hello".$e_id;
                
                  //session is globle variable , can we use any where 
                  //joparyant aapn swata value change krt nahi to parayant value change hot nahi ,system off ,browser change kelyavr pn change hote 
               }
             
           $ed_id=$_SESSION['edit_id'];
                     
	   if(isset($_POST['btn_submit']))
	   {
		   $name=$_POST['full_name'];
		 $name;
		 $date_of_birth=$_POST['dob'];
		 $m_no=$_POST['mobile_no'];
		 $e_id=$_POST['email_add'];
		   $password=$_POST['pass'];
		   $gen=$_POST['Gender'];
		   $s_name=$_POST['street_address'];
		   $c_name=$_POST['city_name'];
		   $z_code=$_POST['zip_code'];
		 $p_photo="-";
		echo $country_n=$_POST['countrylist'];
		 $state_name=$_POST['statelist'];
		   
		  // $ta->data_insert($name,$date_of_birth,$m_no,$e_id,$password,$gen,$s_name,$c_name,$z_code,$p_photo,$country_n, $state_name);
          $ta->update_record($name,$date_of_birth,$m_no,$e_id,$password,$gen,$s_name,$c_name,$z_code,$p_photo,$country_n,$state_name,$e_id);
	   }

   //process to display data in components
    $user_data=array();
    $user_data=$ta->get_user_data_from_id($ed_id);
    
     
    if(!empty($user_data))
    {
      $r_id   =$user_data['id'];
      $r_fullname= $user_data['full_name'];
     $r_dob=  $user_data['dob'];
       $r_mobile_no=$user_data['mobile_no'];
      $r_email_id=$user_data['email_id'];
       $r_pass=$user_data['password'];
       $r_gender=$user_data['gender'];
       $r_street_ad=$user_data['street_address'];
      $r_cityname= $user_data['city_name'];
      $r_zipcode= $user_data['zip_code'];
      $r_profile= $user_data['profile_photo'];
      $r_country= $user_data['country_name'];
      $r_state= $user_data['state_name'];
      $r_date= $user_data['date'];
     $r_time=  $user_data['time'];
    }



?>
<html>
    <head>
            <title>Bootstrap</title> 

            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
             <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
              <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css" />
             <link rel="stylesheet" type="text/css" href="css/style.css" />

               <script typr="text/javascript" src="js/bootstrap.js"></script>
               <script typr="text/javascript" src="js/bootstrap.bundle.js"></script>


    </head>

    <body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
          require_once('header.php');
       ?>
          <div class="container cstm_container">
            <div class="row">
              <div class=" col col-md-3 col-sm-3">
               
              </div>

              <div class="col col-md-6 cstm_form_container" >
                  <h1 style="text-align: center;"><center>Update Your Account</center></h1>
				  
                <form action="edit_recordbyuser.php" method="POST">
				
                  <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Full Name</label>
                    <input type="text" class="form-control" required name="full_name"id="exampleFormControlInput1" value="<?php echo $r_fullname; ?>" placeholder="Enter Full Name">
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Date Of Birth</label>
                    <input type="Date" class="form-control" required  name="dob" value="<?php echo $r_dob; ?>" id="exampleFormControlInput2" placeholder="Enter DOB" />
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" name="mobile_no" value="<?php echo $r_mobile_no;?>" id="exampleFormControlInput3" placeholder="Enter Mobile Number">
                  </div>
                   
                  <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label">Email address</label>
                    <input type="email" class="form-control" required name="email_add" value="<?php echo $r_email_id; ?>" id="exampleFormControlInput4" placeholder="name@example.com">
                  </div>
                  <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" required name="pass" value="<?php echo $r_pass; ?>" id="inputPassword2" placeholder="Password">
                  </div>

                    <br />
                  <div class="mb-3 ">
                    <label for="exampleFormControlInput5" class="form-label">Gender</label>
                    <br />
                    <input type="radio"  name="Gender" required value="Male" class="cstm_gender" <?php if($r_gender=="Male"){?>checked <?php } ?> />Male
                    <input type="radio"   name="Gender" required value="feMale" class="cstm_gender" <?php if($r_gender=="feMale"){?>checked <?php } ?> />Female
                    <input type="radio"  name="Gender" required value="other" class="cstm_gender" <?php if($r_gender=="other"){?>checked <?php } ?> />other
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput6" class="form-label"> Address</label>
                    <br />
                    <div class="mb-3">

                      <input type="text" class="form-control" name="street_address" value="<?php echo $r_street_ad; ?>" id="exampleFormControlInput7" placeholder="Street Address">
                    </div>
            
                    <div class="row g-3">
                      <div class="col">
                        <input type="text" class="form-control" required name="city_name" value="<?php echo $r_cityname; ?>" placeholder="City" aria-label="City name">
                      </div>
                      <div class="col">
                        <input type="number" class="form-control" required name="zip_code" value="<?php echo $r_zipcode; ?>" placeholder="Zip code" aria-label="Zip code">
                      </div>
                    </div>
                    <br />
					<label for="exampleFormControlInput91" class="form-label">Select Profile Photo</label>
					<div class="input-group mb-3">
		
					
					  <input type="file" class="form-control"  id="inputGroupFile02">
					  <label class="input-group-text" for="inputGroupFile02">Upload</label>
					</div>
                    <br />
                    <input  name="countrylist" class="form-control" type="text" value="<?php echo $r_country; ?>"  placeholder="Enter Country">
                    <br />
                     
                    <input  name=statelist  class="form-control" value="<?php echo $r_state; ?>" placeholder="Enter state">
                   
					  <br />
                     <center><input type="submit" class="btn btn-success" name="btn_submit" value="Save"></button></center>
                      </form>
                  </div>
              </div>

            </div>
          </div>
     
        </body>
        </html>