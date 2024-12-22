<?php

    session_start();
   date_default_timezone_set('Asia/kolkata');
   //this line used for default india time sathi
   class travel_agency
   {
	   private $con;
	   
	   function __construct()
	   {
		   $this->con=new mysqli("localhost","root","","travel_agency");
	   } 
          
        function data_insert($full_name,$dob,$mobile_no,$email_id,$pass,$gender,$street_add,$city_name,$zip_code,$photo,$country_name,$state_name)
        {
			$current_date=date("Y-m-d");
			//small Y or H are allowed 
			$current_time=date("H:i:s A");
			
			//conn_done is an simple object
			//this line '$this->con->prepare' prepares the connection with query 
			
			if($conn_done= $this->con->prepare("INSERT INTO `registration_table`( `full_name`, `dob`, `mobile_no`, `email_id`, `password`, `gender`, `street_name`, `city_name`, `zip_code`, `profile_photo`, `country_name`, `state_name`, `date`, `time`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?) "))
			{
				//bind param binds the parameters 
				$conn_done->bind_param("ssssssssisssss",$full_name,$dob,$mobile_no,$email_id,$pass,$gender,$street_add,$city_name,$zip_code,$photo,$country_name,$state_name,$current_date,$current_time);
				//appn direct '?' chya jagi he varchi line lihu shakto pn security sathi aapn as kel aahe 
				
				
				//steps to excute the query
				if($conn_done->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
			}
		}	
		
		function user_report()
		{
			if($conn_done= $this->con->prepare("SELECT `id`, `full_name`, `dob`, `mobile_no`, `email_id`, `password`, `gender`, `street_name`, `city_name`, `zip_code`, `profile_photo`, `country_name`, `state_name`, `date`, `time` FROM `registration_table` "))
			{
				$conn_done->bind_result($r_id,$r_fullname,$r_dob,$r_mobile_no,$r_email_id,$r_pass,$r_gender,$r_street_ad,$r_cityname,$r_zipcode,$r_profile,$r_country,$r_state,$r_date,$r_time);
				//param is used for '?' in query and result is used for select query
				if($conn_done->execute())
				{
					$data=array();
					$counter=0;

					while($conn_done->fetch())
					{
						//aapn counter nantr number suddha deu shakto like 
						//$data[$counter]['0']= $r_id;
					    //$data[$counter]['1']= $r_fullname;
                       $data[$counter]['id']= $r_id;
					   $data[$counter]['full_name']= $r_fullname;
					   $data[$counter]['dob']= $r_dob;
					   $data[$counter]['mobile_no']= $r_mobile_no;
					   $data[$counter]['email_id']= $r_email_id;
					   $data[$counter]['password']= $r_pass;
					   $data[$counter]['gender']= $r_gender;
					   $data[$counter]['street_address']= $r_street_ad;
					   $data[$counter]['city_name']= $r_cityname;
					   $data[$counter]['zip_code']= $r_zipcode;
					   $data[$counter]['profile_photo']= $r_profile;
					   $data[$counter]['country_name']= $r_country;
					   $data[$counter]['state_name']= $r_state;
					   $data[$counter]['date']= $r_date;
					   $data[$counter]['time']= $r_time;

					   $counter++;
					}
					if(!empty($data))
					{
						return $data;
					}
					else
					{
						return false;
					}
				}
				
			}


		}

		function delete_record($d_id)
		{
            
              if($conn_done= $this->con->prepare("Delete from `registration_table` where `id`=?"))
			  {
				$conn_done->bind_param("i",$d_id);
				if($conn_done->execute())
				{
					return true;
				}
				else
				{
					return false;
				}
			  }

		}

		function update_record($full_name,$dob,$mobile_no,$email_id,$pass,$gender,$street_add,$city_name,$zip_code,$photo,$country_name,$state_name,$ed_id)
		{
			$current_date=date("Y-m-d");
			
			$current_time=date("H:i:s A");
			if($conn_done= $this->con->prepare("UPDATE `registration_table` SET `full_name`=?,`dob`=?,`mobile_no`=?,`email_id`=?,`password`=?,`gender`=?,`street_name`=?,`city_name`=?,`zip_code`=?
			,`profile_photo`=?,`country_name`=?,`state_name`=?,`date`=?,`time`=? WHERE `id`=?"))
			{
			 
		 echo $country_name; 
				$conn_done->bind_param("ssssssssisssssi",$full_name,$dob,$mobile_no,$email_id,$pass,$gender,$street_add,$city_name,$zip_code,$photo,$country_name,
				$state_name,$current_date,$current_time,$ed_id);
			  if($conn_done->execute())
			  {
			 
				  return true;
			  }
			  else
			  {
				  return false;
			  }

			}
		}

		function get_user_data_from_id($ed_id)
		{
			if($conn_done= $this->con->prepare("SELECT `id`, `full_name`, `dob`, `mobile_no`, `email_id`, `password`, `gender`, `street_name`, `city_name`, `zip_code`,
			 `profile_photo`, `country_name`, `state_name`, `date`, `time` FROM `registration_table` Where `id`=? "))
			{
				$conn_done->bind_param("i",$ed_id);
				$conn_done->bind_result($r_id,$r_fullname,$r_dob,$r_mobile_no,$r_email_id,$r_pass,$r_gender,$r_street_ad,$r_cityname,$r_zipcode,$r_profile,$r_country,$r_state,$r_date,$r_time);
				//param is used for '?' in query and result is used for select query
				if($conn_done->execute())
				{
					$data=array();
				
					if($conn_done->fetch())
					{
						//aapn counter nantr number suddha deu shakto like 
						//$data[$counter]['0']= $r_id;
					    //$data[$counter]['1']= $r_fullname;
                       $data['id']= $r_id;
					   $data['full_name']= $r_fullname;
					   $data['dob']= $r_dob;
					   $data['mobile_no']= $r_mobile_no;
					   $data['email_id']= $r_email_id;
					   $data['password']= $r_pass;
					   $data['gender']= $r_gender;
					   $data['street_address']= $r_street_ad;
					   $data['city_name']= $r_cityname;
					   $data['zip_code']= $r_zipcode;
					   $data['profile_photo']= $r_profile;
					   $data['country_name']= $r_country;
					   $data['state_name']= $r_state;
					   $data['date']= $r_date;
					   $data['time']= $r_time;
					}
					if(!empty($data))
					{
						return $data;
					}
					else
					{
						return false;
					}
				}
				
			}
		}
    
	  function get_user_password($m_no) 
	  {
		if($conn_done= $this->con->prepare("SELECT  `password` FROM `registration_table` WHERE `mobile_no`=?"))
		{
			$conn_done->bind_param("s",$m_no);

			$conn_done->bind_result($r_pass);
			if($conn_done->execute())
			{
		  
				if($conn_done->fetch())
				{
					 return $r_pass;
				}
			}
			else
			{
				return false;
			}

		}

	  }

   }
  
?>