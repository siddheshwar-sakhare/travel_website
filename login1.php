<html>
<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width,intial-scale=1">
          <title>Travel Website</title>
          <!-- <link rel="stylesheet" type="text/css" href="css/style.css"> -->

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
  


.main
{
    background-color:cyan;
    padding:10px;
    width:250px;
    color:black;
    margin-left:40%;
    margin-top:3%;
    margin-bottom:7%;
    border-radius:20px;
}
.service .img_container {
  
  display:flex;
  padding-left:10%;
  gap:100px; 
  position: relative;
  left:-45%;
   
}
.package 
{
  position: relative;
  left:35%;
  padding-bottom:10%;
  display:flex;
  padding-left:10%;
  gap:100px; 
}
.package .pckg_img1box
{
  border-radius:5px;
}
.package button
{
  position: relative;
  left:-300%;
  margin-top:30%;
  border-radius:5px;
  width:250px;
  height:300px;
}

.service .img1box
{
  border-radius:5px;
}
.service {
  padding-bottom:3%;  
  position: relative;
  left:43%;
}
.about{
  margin:4%;
  margin-left:6%;
  margin-right:8%;
  background-color: whitesmoke;
  border:black;
  border-radius:5px;
}
.about .about_img{
  margin-left:70%;
  margin-top:-20%;
  width:300px;
  height:300px;
}
.about .about_text .btn1{
  color:white;
  background-color:black;
  font-size:16px;
  font:bold;
  margin-bottom:4%;
}
.about .about_text h1
{
  position: relative;
  left:45%;
  font-style:italic;
}
.about .about_text .text{
  font-size:18px;
  width: 700px;
}

::placeholder{
    color:#fff;
    font-family:Arial;
}
.login .link
{
    font-family: Arial, Helvetica, sans-serif;
    font-size:17px;
    padding-top: 20px;
    text-align:center;
}
.login .link a{
    text-decoration:none;
    color:var(--main-color);
}
.liw
{
    padding-top:15px;
    padding-bottom:10px;
    text-align:center;
}
.user-container
{
  height:400px;
  width:460px;
  box-shadow:0 0 8px rgba(250,250,250,0.6);
  opacity:0.6;
  /* margin-left: 0px; */
  margin-right: 50rem;


}
.user-container form{
  width:100%;
  text-align:center;
  padding:25px 20px;
  height:500%;

}
form h1{
  padding:10px 0;
}
form input{
  width:100%;
  height:50px;
  margin:4px 0;
  border:1px solid #5c5c5c;
  border-radius:3px;
  padding:0 15px;
  font-size:20px;
}
form i{
  position:absolute;
  font-style:20px;
  top:50%;
  right:20px;
  transform:translateY(-50%);
}
form textarea{
  padding:5px 15px;
  border:1px solid #5c5c5c;
  border-radius:3px;
  padding:0 15px;
  font-size:20px;
  width:100%;
  margin: 4px 0;
}
form input:focus,
form textarea:focus
{
  padding-left:4px;
  border:1px solid white;
  color:yellow;
  transition:all 0.3s ease;
}
.user-container{
  margin-left:0;
  margin-top: 0;
  margin-bottom: 0;
  background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url("images/backfeedback.jfif");
}
form button{
  margin-top: 2rem;
  margin-bottom:2rem;
}

    .main-home
{
    position:relative;
    height:100vh;
    /* 100% of viewport height */
    width:100%;
     background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(images/login1.webp) !important;
    background-size: cover;
    background-position: bottom center;
    display:flex;
    align-items: center;
    justify-content:flex-start;
}

.main-home-text
{
   margin-left:120rem !important;
}
.main-home-text h5
{
     font-size:18px;
     font-weight:600;
     margin: bottom 10px;
     text-transform: uppercase;
     letter-spacing:6px;
      color:var(--main-color);
}
.main-home-text h1
{
    font-size:var(--h1-font);
    font-weight:800;
    line-height:1.2;
    margin-bottom:20px;
}
.main-home-text p
{
    font-size:var(--p-font);
    font-weight: 500;
    /* beat aahe bgh */
    line-height:30px;
    color:#ffffffab;
    margin-bottom:35px;

}
</style>
   </head>
   <body> 
   </body>
 
    <section class="main-home">
   <div class="main-home-text">
            <h5>Let's</h5>
            <?php
            $s="dd";
            $phone_no="+91";
            $visitor_phone="9307835932";
                $m=$phone_no.$visitor_phone;
                $params=array(
                  'token' => 'vg9ya8qe1v1iyd8y',
                  'to' => $m,
                  'body' =>  'Hey'.$s.'Welcome',
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
              
                  ?>
            <h1>Planning your <br> own travel</h1>
            <p>Trips. Tours. Travels. Nothing less,but something more.</p>
            <p>We make each trip a special one for you.<br>#sstravels</p>
        </div>
        <a href="javascript:window.scrollTo(0,1100)"class="btn">Book a trip</a>
        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
Submit
</button>
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

<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Open modal for @fat</button>
<div class="modal fade " id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
             <div class="modal-dialog">
                       <div class="modal-content">
                           <div class="modal-header">
                             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                          </div>
                          <div class="modal-body">
                             <div class="user-container ">
                             <form action="feedback.php" method="POST">
                             <h1>Give your <span>Feedback</span></h1>
                                     <div class="user">
                                            <div class="mb-3">
                                     <label for="exampleFormControlInput3" class="form-label">Email ID</label> 
                                               <i class="ri-mail-line"></i>
                                    <input type="email" class="form-control" name="email" id="exampleFormControlInput3" placeholder="xyz@gmail.com">
                                               </div>
                  
                                <label for="inputPassword2" class="visually-hidden">Enter Feedback</label> 
                                          <i class="ri-message-fill"></i>
                    <textarea  class="form-control"  name="feedback" id="inputPassword2" placeholder="Enter text here"></textarea>
            
                                      </div>
                              </div>
        </form>
      <                  /div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning"  name="submit" value="Login">Send</button>
      </div>
    </div>
  </div>
</div>
<div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning"  name="submit" value="Login">Send</button>
      </div>
</section>

   </html>