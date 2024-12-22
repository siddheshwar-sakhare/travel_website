<html>
  <?php
require_once('lib/function.php');
	   $ta= new travel_agency();
     $phone_no="+91";
     if(isset($_POST['submit']))
	   {

       $nm=$_POST['visitor_name'];
    $email=$_POST['visitor_email'];
   $m=$phone_no.$_POST['visitor_phone'];
      $total_adults=$_POST['total_adults'];

      $total_children=$_POST['total_children'];
     
 $checkin=$_POST['checkin'];

      $checkout=$_POST['checkout'];

      $source=$_POST['source'];
  
      $destination="Maldives";
    // echo $_POST['dest_nm'];
      $visitor_message=$_POST['visitor_message'];
    
      $params=array(
        'token' => 'vg9ya8qe1v1iyd8y',
        'to' => $m,
        'body' => 'Thank you! '.$nm.
                '\nThanks for Sucessfully Booking Trip for '.$destination.' We are happy to have you on Trip.'.
               '\n\n\nSS Travels 9307835932'
     
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
    
  
   
   $ta->data_insert1($nm,$email,$phone_no,$total_adults,$total_children,$checkin,$checkout,$source,$destination,$visitor_message);
     }
?>
<head><link rel="stylesheet" href="css/style.css">
<style>
.Main{
  width: 800px;
  margin: 1% auto;
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
<!-- Header -->
<?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header.php');

       ?>
<body>
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

<div class="Main">
  <form action="bookform.php.php" method="post">
  <div class="elem-group">
    <label for="name">Your Name</label>
    <input type="text" id="name" name="visitor_name" placeholder="John Doe" pattern=[A-Z\sa-z]{3,20} required>
  </div>
  <div class="elem-group">
    <label for="email">Your E-mail</label>
    <input type="email" id="email" name="visitor_email" placeholder="john.doe@email.com" required>
  </div>
  <div class="elem-group">
    <label for="phone">Your Phone</label>
    <input type="tel" id="phone" name="visitor_phone" placeholder="498-348-3872" pattern=(\d{3})-?\s?(\d{3})-?\s?(\d{4}) required>
  </div>
  <hr>
  <div class="elem-group inlined">
    <label for="adult">Adults</label>
    <input type="number" id="adult" name="total_adults" placeholder="2" min="1" required>
  </div>
  <div class="elem-group inlined">
    <label for="child">Children</label>
    <input type="number" id="child" name="total_children" placeholder="2" min="0" required>
  </div>
  <div class="elem-group inlined">
    <label for="checkin-date">Check-in Date</label>
    <input type="date" id="checkin-date" name="checkin" required>
  </div>

  <div class="elem-group inlined">
    <label for="checkout-date">Check-out Date</label>
    <input type="date" id="checkout-date" name="checkout" required>
  </div>
  <div class="elem-group">
    <label for="room-selection">Select Source</label>
    <input id="source" name="source" required>
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
    <textarea id="message" name="visitor_message" placeholder="Tell us anything else that might be important." required></textarea>
  </div>
  <center><input type="submit" class="btn-success" name="submit"value="Book Now"></button></center>
  <h2 name="result"></h2>
</form>
</div>

</body> 
<script src="js/script.js"></script>
<?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
</html>