<?php
$locahost="localhost";
$user="root";
$pass="";
$db="travel_agency";

$conn=new mysqli($locahost,$user,$pass,$db);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }
if($_SERVER["REQUEST_METHOD"]=="POST")  
{
   if(!empty($_POST['email']) && !empty($_POST['feedback']))
   {
    $email=$_POST['email'];
    $feedback=$_POST['feedback'];

    $q="INSERT INTO feedback_table VALUES('$email','$feedback')";
   $result=$conn->query($q);
   if(!$result)
   {
    echo "Database access failed".$conn->error;
    }
   else
   {
    $link="<script>alert('Thank you for giving  FeedBack' )</script>";
    
    echo $link;

   }
}
 else
 {
    $link="<script>alert('Enter Required Data')</script>";
    echo $link;

 }
}
?>
<!DOCTYPE html>
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
    <!-- header -->
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('home.php');

       ?>

       
</body>
</html>