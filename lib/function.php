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
          
        // function data_insert1($nm,$email,$phone_no,$total_adults,$total_children,$checkin,$checkout,$source,$destination,$visitor_message)
        // {
		// 	$current_date=date("Y-m-d");
		// 	//small Y or H are allowed 
		// 	$current_time=date("H:i:s A");
			
		// 	//conn_done is an simple object
		// 	//this line '$this->con->prepare' prepares the connection with query 
			
		// 	if($conn_done= $this->con->prepare("INSERT INTO `maldives`(`name`, `email`, `phone`, `adults`, 
        //     `children`, `checkin`, `checkout`, `address`,`destination`, `comment`, `time`, `date`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?) "))
		// 	{
		// 		//bind param binds the parameters 
		// 		$conn_done->bind_param("sssiisssssss",$nm,$email,$phone_no,$total_adults,$total_children,$checkin,
        //         $checkout,$source,$destination,$visitor_message,$current_time,$current_date);
		// 		//appn direct '?' chya jagi he varchi line lihu shakto pn security sathi aapn as kel aahe 
				
				
		// 		//steps to excute the query
		// 		if($conn_done->execute())
		// 		{
		// 			return true;
		// 		}
		// 		else
		// 		{
		// 			return false;
		// 		}
		// 	}
        // }
        function data_insert1($nm,$email,$phone_no,$total_adults,$total_children,$checkin,$checkout,$source,$destination,$visitor_message)
        {
			$current_date=date("Y-m-d");
			//small Y or H are allowed 
			$current_time=date("H:i:s A");
			
			//conn_done is an simple object
			//this line '$this->con->prepare' prepares the connection with query 
			
			if($conn_done= $this->con->prepare("INSERT INTO `maldives`(`name`, `email`, `phone`, `adults`, 
            `children`, `checkin`, `checkout`, `address`,`destination`, `comment`, `time`, `date`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?) "))
			{
				//bind param binds the parameters 
				$conn_done->bind_param("sssiisssssss",$nm,$email,$phone_no,$total_adults,$total_children,$checkin,
                $checkout,$source,$destination,$visitor_message,$current_time,$current_date);
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
            
              if($conn_done= $this->con->prepare("Delete  from `maldives` where `id`=?"))
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

		function update_record($name,$email,$m_no,$adults,$children,$checkin,$checkout,$address,$comment,$ed_id)
		{
			$current_date=date("Y-m-d");
			
			$current_time=date("H:i:s A");
			if($conn_done= $this->con->prepare("UPDATE `maldives` SET `name`=?, `email`=?, `phone`=?, `adults`=?, 
            `children`=?, `checkin`=?, `checkout`=?, `address`=?, `comment`=?, `time`=?, `date`=?  WHERE `id`=? "))
			{
			
		
				$conn_done->bind_param("sssiisssssss",$name,$email,$m_no,$adults,$children,$checkin,$checkout,$address,$comment,$current_time,$current_date,$ed_id);
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

		function get_user_data_from_mo_no($m_no)
		{
			if($conn_done= $this->con->prepare("SELECT `id`, `name`, `email`, `phone`, `adults`, 
            `children`, `checkin`, `checkout`, `address`,`destination`, `comment`, `time`, `date`  FROM `maldives` 
			Where `phone`=?"))
			{
				$conn_done->bind_param("s",$m_no);
				$conn_done->bind_result($r_id,$r_nm,$r_email,$r_phone,$r_total_adults,$r_total_children,$r_checkin,$r_checkout,$r_source,$r_destination,$r_visitor_message,$r_time,$r_date);
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
					   $data['name']= $r_nm;
					   $data['email']= $r_email;
					   $data['phone']= $r_phone;
					   $data['adults']= $r_total_adults;
					   $data['children']= $r_total_children;
					   $data['checkin']= $r_checkin;
					   $data['checkout']= $r_checkout;
					   $data['address']= $r_source;
					   $data['destination']= $r_destination;
					   $data['comment`']=$r_visitor_message;
					   $data['time']= $r_time;
					   $data['date']= $r_date;
					
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

	 function get_user_data_from_id($ed_id)
		{
			if($conn_done= $this->con->prepare("SELECT `id`, `name`, `email`, `phone`, `adults`, 
            `children`, `checkin`, `checkout`, `address`,`destination`, `comment`, `time`, `date`  FROM `maldives` 
			Where `id`=?"))
			{
				$conn_done->bind_param("i",$ed_id);
				$conn_done->bind_result($r_id,$r_nm,$r_email,$r_phone,$r_total_adults,$r_total_children,$r_checkin,$r_checkout,$r_source,$r_destination,$r_visitor_message,$r_time,$r_date);
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
						$data['name']= $r_nm;
						$data['email']= $r_email;
						$data['phone']= $r_phone;
						$data['adults']= $r_total_adults;
						$data['children']= $r_total_children;
						$data['checkin']= $r_checkin;
						$data['checkout']= $r_checkout;
						$data['address']= $r_source;
						$data['destination']= $r_destination;
						$data['comment']=$r_visitor_message;
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
	
	  function feedbacks()
	  {
		 
			if($conn_done=$this->con->prepare("SELECT `email` , `feedback` from `feedback_table`"))
			{
				$conn_done->bind_result($r_email,$r_msg);
				if($conn_done->execute())
					{
						
						$d=array();
					     $counter=0;
						while($conn_done->fetch())
						{
							$d[$counter]['email']=$r_email;
							$d[$counter]['feedback']=$r_msg;
					
							$counter++;
						}
						if(!empty($d))
						{
							return $d;
						}
						else
						{
							return false;
						}
					}
				}
			}
	}
	//   function get_user_password($m_no) 
	//   {
	// 	if($conn_done= $this->con->prepare("SELECT  `password` FROM `registration_table` WHERE `mobile_no`=?"))
	// 	{
	// 		$conn_done->bind_param("s",$m_no);

	// 		$conn_done->bind_result($r_pass);
	// 		if($conn_done->execute())
	// 		{
		  
	// 			if($conn_done->fetch())
	// 			{
	// 				 return $r_pass;
	// 			}
	// 		}
	// 		else
	// 		{
	// 			return false;
	// 		}

	// 	}

	//   }

   
  
?>
    