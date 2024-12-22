<?php
       //include function file 
	   //this syntax can use to include any file 
	   require_once('lib/functions.php');
	   $ta= new travel_agency();
     $n="+91";
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
              
                 $country_n=$_POST['countrylist'];
                 $state_name=$_POST['statelist'];
                  $r_system_captcha=$_POST['system_captcha'];
                  $r_user_captcha=$_POST['user_captcha'];
                  $k=$n.$m_no;
                  if($r_system_captcha==$r_user_captcha)
                  {
                 
                  //used for file uploading
                $valid_formats = array("jpg","png","gif","bmp","jpeg","JPEG","JPG","BMP","PNG","GIF");

            if(isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST")
            {	     $params=array(
      'token' => 'vg9ya8qe1v1iyd8y',
      'to' => $k,
      'body' => 'Thanks !

      Thank you for filling out our sign up form. We are glad that you joined us.       
      Have a nice day,
      SS TRAVELS 9307835932',
   
      );
      $curl = curl_init();
      curl_setopt_array($curl, array(
        CURLOPT_URL => "https://api.ultramsg.com/instance57175/messages/chat",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30,
        CURLOPT_SSL_VERIFYHOST => 0,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "POST",
        CURLOPT_POSTFIELDS => http_build_query($params),
        CURLOPT_HTTPHEADER => array(
          "content-type: application/x-www-form-urlencoded"
        ),
      ));
      
      $response = curl_exec($curl);
      $err = curl_error($curl);
      
      curl_close($curl);
      
      if ($err) {
        echo "cURL Error #:" . $err;
      } else {
        echo $response;
      }

//               <!-- <div class="  alert alert-success" role="alert" style="mragin-top:5rem;">
//   Account Created Successfully...
// </div> -->
                $f_name 				= 	$_FILES['picture']['name'];
                $size 				= 	$_FILES['picture']['size'];
                //p_photo saves the name of picture
                $p_photo = 	$f_name;
                
                if(strlen($f_name))
                  {				
                      //txt save the name of file and ext saves extention
                      list($txt, $ext) = explode(".", $f_name);
                      //explode is used for saperate 
                      if(in_array($ext,$valid_formats))
                      {
                          //picture is name of your component name 
                          $tmp = $_FILES['picture']['tmp_name'];
                          //tmp saves the source path
                          $img_Dir = "profile_photos/";
                          //img directry destination of file ,the folder to save files
                          
                          //if given folder 'profile_photo'is not created the following code will create it automatically
                        if(!file_exists($img_Dir))
                        {
                            mkdir($img_Dir);
                            //make directry inbult functions
                        }
                        

                        if(move_uploaded_file($tmp,$img_Dir.$f_name))
                        {
                          
                        }
                        else
                        {
                            echo $image_error	=	"failed" ;
                            $flag				=	1;
                        }	
                    }
                    else
                    {
                        $image_error	= "Invalid file format";
                        $flag				=	1;	
                    }	
                  }	
            }
            else
            {
              ?>
              <div class="alert alert-danger" name="alert" role="alert">
                     ERROR!!!!Incorrect Details ,Re-enter again
              </div>
              <?php
            }
	
                 $ta->data_insert($name,$date_of_birth,$m_no,$e_id,$password,$gen,$s_name,$c_name,$z_code,$p_photo,$country_n, $state_name);
       

		          //  if($ta->data_insert($name,$date_of_birth,$m_no,$e_id,$password,$gen,$s_name,$c_name,$z_code,$p_photo,$country_n, $state_name))
              //  {
                     
              //           //Send Whatsapp Message ,1000 to 1200 character we can send 
              //           $whatsapp_message = "
              //           💥💥💥💥💥💥💥💥 \n

              //           *Welcome to SS TRAVEL AGENCY*

              //           Dear $name,
              //           Thank You For Successful Registration  \n

              //           \n Note:Automatic Software Message".
              //           "\n💥💥💥💥💥💥💥💥";

              //           $url =	"http://web.cloudwhatsapp.com/wapp/api/send?apikey=7a7bc6e92e1447d4ac545dac48eebee4&mobile=$m_no&msg=".urlencode($whatsapp_message);
              //           //on this link we passing api key , mobile no and msg using GET method

              //             echo $response = file_get_contents($url);




                        //             //Send Message ,  only 160 character we can send 
                        // $forwardURL = 'http://sms.bulksmsind.in/sendSMS?'.http_build_query(array(
                        //   'username' => "abc",
                        //   'sendername' => "DRMTCH",//sendername always fix 6 letters 
                        //   'smstype' => "TRANS", //"PROMO"
                        //   'numbers' => $contact_no,
                        //   'message' => $user_message,
                        //   'apikey' => "1b4a8d6a-5760-40c7-b7eb-e31119e19cad",
                        //   //application program interface
                     //   ));
              // }
              // else
              // {
              //           echo "Invalid Captcha Code!!!!";
              // }
        }
     }      
   
?>
<html>
    <head>
            <title>Bootstrap</title> 
              <!-- for SEO -->
              <meta name="keywords" content="travel registration,travling"/>
              <meta name="description" content="SS Travel Agency mainly focuses on giving tour of world."/>
              <meta name="robots" content="index">
              <meta name="viewport" content="width=device-width, initial-scale=1"/>

            <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
            <link rel="stylesheet" type="text/css" href="css/bootstrap-grid.css" />
             <link rel="stylesheet" type="text/css" href="css/bootstrap-reboot.css" />
              <link rel="stylesheet" type="text/css" href="css/bootstrap-utilities.css" />
             <link rel="stylesheet" type="text/css" href="css/style.css" />

               <script typr="text/javascript" src="js/bootstrap.js"></script>
               <script typr="text/javascript" src="js/bootstrap.bundle.js"></script>
               <style>
             
                .cstm_container
{
    margin-top:10rem;
}
.cstm_form_container
{
     background-color:skyblue; 
    padding:10px;
    border:1px solid #DFDFDF;
    margin-top:10rem;
}
.cstm_gender
{
   margin-right: 10px;

}

                </style>


    </head>

    <body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header2.php');
       ?>
          <div class="container cstm_container">
            <div class="row">
              <div class=" col col-md-3 col-sm-3">
               
              </div>

              <div class="col col-md-6 cstm_form_container" >
                  <h1 style="text-align: center; color:black"><center>Create Your Account</center></h1>
				 
                  
                <form action="registration.php" method="POST" enctype="multipart/form-data">
				          <!-- enctype="multipart/form-data' this is used for file uploading. aapn te profile photo ghetlo aahe na tyasthi he must aahe -->


                  <div class="mb-3">
                    <label for="exampleFormControlInput1"  class="form-label">Full Name</label>
                    <input type="text" class="form-control" required name="full_name"id="exampleFormControlInput1" placeholder="Enter Full Name">
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput2" class="form-label">Date Of Birth</label>
                    <input type="Date" class="form-control" required name="dob" id="exampleFormControlInput2" placeholder="Enter DOB">
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Mobile Number</label>
                    <input type="number" class="form-control" name="mobile_no"id="exampleFormControlInput3" placeholder="Enter Mobile Number">
                  </div>
                   
                  <div class="mb-3">
                    <label for="exampleFormControlInput4" class="form-label">Email address</label>
                    <input type="email" class="form-control" required name="email_add"id="exampleFormControlInput4" placeholder="name@example.com">
                  </div>
                  <div class="col-auto">
                    <label for="inputPassword2" class="visually-hidden">Password</label>
                    <input type="password" class="form-control" required name="pass" id="inputPassword2" placeholder="Enter Password">
                  </div>

                    <br />
                  <div class="mb-3 ">
                    <label for="exampleFormControlInput5" class="form-label">Gender</label>
                    <br />
                    <input type="radio"  name="Gender" required checked value="Male" class="cstm_gender" >Male
                    <input type="radio"   name="Gender" required value="feMale" class="cstm_gender" >Female
                    <input type="radio"  name="Gender" required value="other" class="cstm_gender" >other
                  </div>

                  <div class="mb-3">
                    <label for="exampleFormControlInput6" class="form-label"> Address</label>
                    <br />
                    <div class="mb-3">

                      <input type="text" class="form-control" name="street_address" id="exampleFormControlInput7" placeholder="Street Address">
                    </div>
            
                    <div class="row g-3">
                      <div class="col">
                        <input type="text" class="form-control" required name="city_name" placeholder="City" aria-label="City name">
                      </div>
                      <div class="col">
                        <input type="number" class="form-control" required name="zip_code" placeholder="Zip code" aria-label="Zip code">
                      </div>
                    </div>
                    <br />
					<label for="exampleFormControlInput91" class="form-label">Select Profile Photo</label>
					<div class="input-group mb-3">
					
					
					  <input type="file" class="form-control" name="picture" id="inputGroupFile02">
					  <label class="input-group-text" for="inputGroupFile02">Upload</label>
					</div>
                    <br />

                   

    <input  name="countrylist" class="form-control" type="text" required   placeholder="Enter Country">
    <br />
   
                     <input  name="statelist" class="form-control" required placeholder="Enter state">
					  <br />
            <br />
            <?php
                          $random_value = rand(50000,99999);
                 ?>
                        Enter Captcha Code..
                        <input type="text" class="form-control" name="system_captcha" value="<?php echo $random_value; ?>" />
                        <br />
                        <input type="text" class="form-control" name="user_captcha" placeholder="Enter Captcha Code" />
					  <br />
              <!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
  Launch static backdrop modal
</button> -->

<!-- Modal -->
<center><button type="submit" data-bs-toggle="modal" data-bs-target="#staticBackdrop" class="btn btn-success" name="btn_submit"value="SUBMIT">
Submit
</button></center>
        <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel" style="color:black">Security</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <p style="color:black">Your all data is stored under high security</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Understood</button>
      </div>
    </div>
  </div>
</div> 
                    </form>
                  </div>
              </div>

            </div>
          </div>
     <br />
   <!-- <a href="home.php"> <button type="button" class="btn btn-info">Back</button></a> -->
     <br />
        </body>
        <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
        </html>
		