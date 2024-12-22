<?php
ob_start();
       require_once('lib/functions.php');
       $ta= new travel_agency();

       if(isset($_GET['delete_id']))
       {
         $d_id=$_GET['delete_id'];
          
         $ta->delete_record($d_id);
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
       <br><br><br><br><br>
         	<h1>Users Report</h1>
         <button><a href="report.php?excel_export" class="btn"style="margin-left:87rem">Download</a></button>
            <table class="table table-striped table-hover">
        <thead>
                               <th>Sr No</th>
                               <th>Full Name</th>
                                <th>DOB</th>
                                <th>Mobile NO</th>
                                <th>Email Id</th>
                               <th>Password</th>
                              <th>Gender</th>
                              <th>Street Name</th> 
                              <th>City Name</th>
                              <th>Zip Code</th> 
                              <th>Profile Photo</th>
                              <th>Country Name</th>
                              <th>State Name</th>    
                                <th>Date</th>
                               <th>Time</th>   
                               <th>Edit</th>
                               <th>Delete</th> 
</thead> 
                   <tbody>
                    <?php
                     $r_data=array();
                     $r_data=$ta->user_report();
                    if(!empty($r_data))
                    {
                      $counter=0;
                       foreach($r_data as $record)
                       {
                              $r_id   =$r_data[$counter]['id'];
                             $r_fullname= $r_data[$counter]['full_name'];
                            $r_dob=  $r_data[$counter]['dob'];
                              $r_mobile_no=$r_data[$counter]['mobile_no'];
                             $r_email_id= $r_data[$counter]['email_id'];
                              $r_pass=$r_data[$counter]['password'];
                              $r_gender=$r_data[$counter]['gender'];
                              $r_street_ad=$r_data[$counter]['street_address'];
                             $r_cityname= $r_data[$counter]['city_name'];
                             $r_zipcode= $r_data[$counter]['zip_code'];
                             $r_profile= $r_data[$counter]['profile_photo'];
                             $r_country= $r_data[$counter]['country_name'];
                             $r_state= $r_data[$counter]['state_name'];
                             $r_date= $r_data[$counter]['date'];
                            $r_time=  $r_data[$counter]['time'];
                            ?>
                            <tr>
                                <td> <?php echo $counter+1; ?> </td>
                                <td> <?php echo $r_fullname; ?> </td>
                                <td> <?php echo $r_dob; ?> </td>
                                <td> <?php echo $r_mobile_no; ?> </td>
                                <td> <?php echo $r_email_id; ?> </td>
                                <td> <?php echo $r_pass; ?> </td>
                                <td> <?php echo $r_gender; ?> </td>
                                <td> <?php echo $r_street_ad; ?> </td>
                                <td> <?php echo $r_cityname; ?> </td>
                                <td> <?php echo $r_zipcode; ?> </td>
                                <td> <?php echo $r_profile; ?> </td>
                                <td> <?php echo $r_country; ?> </td>
                                <td> <?php echo $r_state; ?> </td>
                                <td> <?php echo $r_date; ?> </td>
                                <td> <?php echo $r_time; ?> </td>
                                <td>
                                   <a href="edit_recordbyuser.php?edit_id=<?php echo $r_id ?>">Edit</a> 
                                </td>
                                <td>
                                  <a href="report.php?delete_id=<?php echo $r_id; ?>">Delete</a>
                                </td>
                            </tr>
                            <?php

                            $counter++;                 
                       }  
                    }
                    else
                    {
                        echo "No data Found ";
                    }

                    $user_record=$r_data;

                    if(isset($_GET['excel_export']))
                    {
                      $filename = "user_data_report".date('Ymd').".xls";		
                     
                      // header("Content-Type: application/vnd.ms-excel");
                     header("Content-Type:application/xls");
                      header("Content-Disposition: attachment; filename=\"$filename\"");	

ob_end_flush();
                     
                      $show_coloumn = false;
                      if(!empty( $user_record)) 
                      {
                        foreach( $user_record as $record)
                         {
                            if(!$show_coloumn)
                             {
                          // display field/column names in first row
                          echo implode("\t", array_keys($record)) . "\n";
                          $show_coloumn = true;
                                }
                        echo implode("\t", array_values($record)) . "\n";
                        }
                      }
                      exit;  
                    }
                    
                    ?>
            
                         
                   </tbody>
     </table>
	</body>
  <?php 
           //we can also use include for many time same file can include and require once only include once 
          require_once('footer.php');
       ?>
</html>