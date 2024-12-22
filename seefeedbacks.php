<?php
 require_once('lib/function.php');
 $ta= new travel_agency();
      
 
// $locahost="localhost";
// $user="root";
// $pass="";
// $db="travel_agency";

// $conn=new mysqli($locahost,$user,$pass,$db);
// if ($conn->connect_error) {
//     die("Connection failed: " . $conn->connect_error);
//   }
// if($_SERVER["REQUEST_METHOD"]=="POST")  
// {
//     $q="select * from feedback_table";
//    $result=$conn->query($q);
//    if(!$result)
//    {
//     echo "Database access failed".$conn->error;
//     }
//    else
//    {
//     echo "<html><h2>";
//     $rows=$result->num_rows;
//     $s=array();
//     $r=array();
//     for($i=0;$i<$rows;$i++)
//     {
//         $result->data_seek($i);
//         $s[$i]=$result->fetch_assoc()["email"]."<br></h2><h3>";
//          $result->data_seek($i);
//         $r[$i]=$result->fetch_assoc()['feedback']."<br><br><br><br>";
//     }
//     echo "</html>";
//    }
// }
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
#feedback
{
    display:flex;
    justify-content: center;
    align-items:center;
    flex-direction:column;
    width:100%;
}
.feedback-heading
{
  
  letter-spacing:1px;
  margin:30px 0px;
  padding:10px 20px;
  display:flex;
  flex-direction:column;
  justify-content:center;
  align-items:center;
}
.feedback-heading h1
{
    background:white;
    font-size:2.2rem;
    color:#ffa343;
    font-weight:500;
    padding:10px 20px;  
}
.feedback-heading span{
    font-size:1.3rem;
    color:black;
    font-weight:300px;
    background:white !important;
    letter-spacing:4px;
    margin-bottom:10px;
    text-transform:uppercase;
}
.feedback-box-container
{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-wrap:wrap;
    width:100%;
}
.feedback-box
{
    width:500px;
    box-shadow:2px 2px 30px rgba(0,0,0,0.1);
    /* background-color:#ffffff; */
    padding:20px;
    margin:15px;
    cursor:pointer;
}
.profile-img{
    width:50px;
    height:50px;
    border-radius:50%;
    overflow:hidden;
    margin-right:10px;
}
.profile-img img
{
    width:100%;
    height:100%;
    object-fit:center;
    object-position:center;
}
.profile
{
    display:flex;
    align-items:center;

}
.name-user
{
    display:flex;
    flex-direction:column:
}
.name-user strong{
    font-size:1.1rem;
    letter-spacing:0.5px;
  
}
.name-user span
{
    fon-size:0.8rem;
}
.reviews
{
    color:white;
}
.box-1{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:20px;
}
.user-comment p
{
    font-size:1rem;
    color:#ffffffab;
}
.btnfeedback
{
    margin-top: 4rem;
}
    </style>
</head>
<body>
<?php 
//we can also use include for many time same file can include and require once only include once 
require_once('header.php');

?>
    <?php
$s=array();
 
 $s=$ta->feedbacks();
 ?>
 <section id="feedback">
      <div class="feedback-heading">
          <span >Feedbacks of clients</span>
          <!-- <h1>Clients Says</h1> -->
          <?php
          $counter=0;
   foreach($s as $record)
   {
      $m=$s[$counter]['email'];
      $n=$s[$counter]['feedback'];
      ?>
     
          
</div>
<div class="feedback-box-container">
  <div class="feedback-box">
      <div class="box-1">
          <div class="profile">
  <div class="profile-img">
      <img src="images/profileimg2.png" alt="profile-image">
  </div>
  <div class="name-user">
      <span><?php  echo "<br>$m";?></span>
        
  </div>
  </div>
  </div>
  <div class="user-comment">
    
  <p> <?php  echo "<br>$n"; ?></p>    
  
  </div>


</div>

<?php
  $counter++;
   
   }
  ?>
  </section>

</form>
</body>
<?php 
//we can also use include for many time same file can include and require once only include once 
require_once('footer.php');

?>
</html>