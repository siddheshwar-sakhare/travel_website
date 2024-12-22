<?php
       //include function file 
	   //this syntax can use to include any file 
	   require_once('lib/function.php');
	   $ta= new travel_agency();
                  $ed_id="";
                $r_fullname;
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
		   $name=$_POST['visitor_name'];
		   echo $name;
		   echo $email=$_POST['visitor_email'];
		   echo $m_no=$_POST['visitor_phone'];
		   echo $adults=$_POST['total_adults'];
		   echo $children=$_POST['total_children'];
		   echo $checkin=$_POST['checkin'];
		   echo $checkout=$_POST['checkout'];
		   echo $address=$_POST['source'];

		   echo $comment=$_POST['visitor_message'];
		   
		  // $ta->data_insert($name,$date_of_birth,$m_no,$e_id,$password,$gen,$s_name,$c_name,$z_code,$p_photo,$country_n, $state_name);
          $ta->update_record($name,$email,$m_no,$adults,$children,$checkin,$checkout,$address,$comment,$ed_id);
	   }

   //process to display data in components
    $user_data=array();
    $user_data=$ta->get_user_data_from_id($ed_id);
    
     
    if(!empty($user_data))
    {
      $r_id   =$user_data['id'];
     $r_fullname= $user_data['name'];
     $r_email=  $user_data['email'];
       $r_mobile_no=$user_data['phone'];
      $r_adults=$user_data['adults'];
       $r_children=$user_data['children'];
       $r_checkin=$user_data['checkin'];
       $r_checkout=$user_data['checkout'];
      $r_address= $user_data['address'];
      $r_comment=$user_data['comment'];
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
.Main{
    margin-top: 4rem;
    margin-left: 22rem;
  width: 800px;
  /* margin: 1% auto; */
  padding: 50px;
  background-color:#915ae4;;
  color:white;
}

div.elem-group {
  margin: 20px 0;
}

div.elem-group.inlined {
  width: 49%;
  display: inline-block;
  float: left;
  margin-left: 1%;
}

label {
  display: block;
  font-family: 'Nanum Gothic';
  padding-bottom: 10px;
  font-size: 1.25em;
}

input, select, textarea {
  border-radius: 2px;
  border: 2px solid #777;
  box-sizing: border-box;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  width: 100%;
  padding: 10px;
}

div.elem-group.inlined input {
  width: 95%;
  display: inline-block;
}

textarea {
  height: 250px;
}

hr {
  border: 1px dotted #ccc;
}

button {
  height: 50px;
  background: orange;
  border: none;
  color: white;
  font-size: 1.25em;
  font-family: 'Nanum Gothic';
  border-radius: 4px;
  cursor: pointer;
}

button:hover {
  border: 2px solid black;
}

</style>
            </head>

    <body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
          require_once('header.php');
       ?>
       
	   <script>
var currentDateTime = new Date();
var year = currentDateTime.getFullYear();
var month = (currentDateTime.getMonth() + 1);
var date = (currentDateTime.getDate() + 1);

if(date < 10) {
  date = '0' + date;
}
if(month < 10) {
  month = '0' + month;
}

var dateTomorrow = year + "-" + month + "-" + date;
var checkinElem = document.querySelector("#checkin-date");
var checkoutElem = document.querySelector("#checkout-date");

checkinElem.setAttribute("min", dateTomorrow);

checkinElem.onchange = function () {
    checkoutElem.setAttribute("min", this.value);
}
</script>
<form action="edit_record.php" method="POST">
<div class="Main">

  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" value="<?php echo $r_fullname ?>"  placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="visitor_email"  value="<?php echo "$r_email"?>"  placeholder="john.doe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone"  value="<?php echo "$r_mobile_no"?>"  name="visitor_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Adults</label>
    <input type="number" id="adult"  value="<?php echo "$r_adults"?>" name="total_adults" placeholder="2" min="1" required>
  </div>
  <div class="elem-group inlined">
    <label for="child">Children</label>
    <input type="number" id="child"  value="<?php echo "$r_children"?>"  name="total_children" placeholder="2" min="0" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date"  value="<?php echo "$r_checkin"?>" name="checkin" required>
  </div>

  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="checkout-date"  value="<?php echo "$r_checkout"?>"  name="checkout" required>
  </div>
  <div class="elem-group">
    <label for="room-selection">Select Source</label>
    <input id="source" value="<?php echo "$r_address"?>"  name="source" required>
    <br><br>
    <!-- <label for="room-selection">Select Destination</label>
    <select id="destination" name="destination" required>
    <option value="">Choose a Destination place from the List</option>
        <option value="Dehli">Delhi</option>
        <option value="Mumbai">Mumbai</option>
        <option value="Singapore">Singapore</option>
        <option value="Agra">Agra</option>
        <option value="Goa">Goa</option>
        <option value="Kerla">Kerla</option>
        <option value="grand_canyon">grand_canyon</option>
        <option value="NEW-ZEALAND">NEW-ZEALAND</option>
        <option value="COSTA-RICA">COSTA-RICA</option>
    </select> -->
  </div>
  <hr>
  <div class="elem-group">
    <label for="message">Anything Else?</label>
    <textarea id="message" name="visitor_message"  value="<?php echo "$r_comment" ?>"  placeholder="Tell us anything else that might be important." required></textarea>
  </div>
  <center><input type="submit" class="btn-success" name="btn_submit" value="Save"></center>
  <!-- <center><input type="reset" class="btn-success" name="submit" value="Reset"></center> -->
  <h2 name="result"></h2>

</div>
</form>

<script src="js/script.js"></script>
         
        </body>
		<?php 
           //we can also use include for many time same file can include and require once only include once 
          require_once('header.php');
       ?>
         
        </html>