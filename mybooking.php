<?php
       //include function file 
	   //this syntax can use to include any file 
	   require_once('lib/function.php');
	   $ta= new travel_agency();
       
       if(isset($_GET['delete_id']))
       {
         $d_id=$_GET['delete_id'];
          
         $ta->delete_record($d_id);
       }
       $r_id;
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
    .section-login
    {
        margin-top: 4rem;
        margin-bottom:1rem;
        background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(images/backfeedback.jfif);
    }
    th{
        padding-right:3rem;

    }
    td{
        padding-right:3rem;
       
    }
    table
{
    border:1px solid white;
    margin-bottom: 5rem;
}
hr{
    border:3px solid red;
    color:yellow;
}
h3{
    color:#ffa343;
}
.home
{
    position:relative;
    height:100vh;
    /* 100% of viewport height */
    width:100%;
     background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(images/mainimg.jfif);
    background-size: cover;
    background-position: bottom center;
    display:flex;
    align-items: center;
    justify-content:flex-start;
}
.user-container
{
  width:360px;
  box-shadow:0 0 8px rgba(250,250,250,0.6);
  opacity:0.6;
  border-radius:20px;
}
.user-container form{
  width:100%;
  text-align:center;
  padding:25px 20px;
}
.user-container{
  margin-left: 35%;
  margin-top: 10%;
  margin-bottom: 3rem;
  background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url("images/backfeedback.jfif");
}

    </style>
        </head>
          <body>
            <section class="home">
          <div class="user-container">
          <section class="section-login">
            
                   	 
            <form action="mybooking.php" method="POST">
                <h4>NOTE:</h4>
            <h5 style="color:red;">Entered mobile number must be same as entered for booking</h5>
            <div class="mb-3">
             <label for="exampleFormControlInput3" class="form-label">Mobile Number</label>
             <input type="number" class="form-control" name="mobile_no"id="exampleFormControlInput3" placeholder="Enter Mobile Number">
               </div>
           

              <br />
              <center><input type="submit" class="btn btn-warning" name="btn_submit"value="Enter"></button></center>
              </form>
          
             <!-- header -->
            </section>
                </div>
</section>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header.php');

       ?>
       
         	
       
        <!-- custom link js fil -->
        <script src="js/script.js"></script>
    </body>
   
</html>

      <?php 
      $r_id;
	   if(isset($_POST['btn_submit']))
	   {   
            
            $m_no=$_POST['mobile_no'];
             $r_data=array();
             $r_data=$ta->get_user_data_from_mo_no($m_no);
             if(empty($r_data))
             {
                     echo "No data found";
             }
             else
             {
             
                            ?>
                            <br />
                    
                            <h3>Booked Data</h3>
                            <br />                   <br />
                            <!-- <table  border="1" cellspacing="20" cellpadding="13" >  -->
                            <table class="table table-striped table-hover">
  
                            <thead>
                                                    <th>Sr No</th>
                                                    <th>Full Name</th>
                                                    <th>Email Id</th>
                                                    <th>Mobile NO</th>
                                                    <th>Adults</th>
                                                    <th>Children</th> 
                                                    <th>checkin</th>
                                                    <th>checkout</th> 
                                                    <th>Address</th>
                                                    <th>Destination</th>
                                                    <th>Comment</th>
                                                    <th>Time</th>     
                                                    <th>Date</th>
                                                    
                                                    <th>Edit</th>
                                                    <th>Delete</th> 
                           </thead> 
                          
                              <?php
                              $r_id=1;
                                        if(!empty($r_data))
                                        {
                                            // $counter=0
                                            $b=true;
                                            foreach($r_data as $record)
                                            {
                                              ?>  
                                              <td>
                                                <?php
                                                       print_r($record);
                                            
                                                       if($b==true)
                                                       {
                                                        $b=false;
                                                        $r_id=$record;
                                                       }
                                                 ?>
                                                 </td>

                                                <!-- //  echo "&nbsp &nbsp &nbsp &nbsp &nbsp";
                                                //    echo $r_name=$r_data[0]['name'];
                                                    // $r_email_id= $r_data[$counter]['email'];
                                                    // $r_mobile_no=$r_data[$counter]['phone'];
                                                    // $r_adults=$r_data[$counter]['adults'];
                                                    // $r_children=$r_data[$counter]['children'];
                                                    // $r_checkin=$r_data[$counter]['checkin'];
                                                    // $r_checkout= $r_data[$counter]['checkout'];
                                                    // $r_address= $r_data[$counter]['address'];
                                                    // $r_destination= $r_data[$counter]['destination'];
                                                    // $r_comment= $r_data[$counter]['comment'];
                                                    // $r_time= $r_data[$counter]['time'];
                                                    // $r_date= $r_data[$counter]['date'];
                                                
                                                ?> -->
                                                <!-- <tr> -->
                                                    <!-- 
                                                    <td> <?php echo $counter+1; ?> </td>
                                                    <td> <?php echo $r_fullname; ?> </td>
                                                    <td> <?php echo $r_email_id; ?> </td>
                                                    <td> <?php echo $r_mobile_no; ?> </td>
                                                    <td> <?php echo $r_adults; ?> </td>
                                                    <td> <?php echo $r_children; ?> </td>
                                                    <td> <?php echo $r_checkin; ?> </td>
                                                    <td> <?php echo $r_checkout; ?> </td>
                                                    <td> <?php echo $r_address; ?> </td>
                                                    <td> <?php echo $r_destination; ?> </td>
                                                    <td> <?php echo $r_country; ?> </td>
                                                    <td> <?php echo $r_comment; ?> </td>
                                                    <td> <?php echo $r_time; ?> </td>
                                                    <td> <?php echo $r_date; ?> </td>
                                                    -->
                                                  
                                               
                                            
                                                    <!-- <td>
                                                        <a href="mybooking.php?delete_id=?>">Cancel</a>
                                                    </td> -->
                                                <!-- </tr> -->
                                    <?php
                    
                                             
                                                   }
                                                    // $counter++;                 
                                         
                                     }
                                                    else
                                                    {
                                                        echo "No data Found ";
                                                    }
                             }
              }
              
                 ?>
                    
                   <td>
                                            <a href="edit_record.php?edit_id=<?php echo $r_id; ?>">Edit</a> 
                                           
                                                    </td>
                                                    <td>
                                                    <a href="mybooking.php?delete_id=<?php  echo $r_id; ?>">Cancel</a>
            </td>
                                                 
                 </table>
          
                 <?php 
               
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
           
       
