<html>
<head><link rel="stylesheet" type="text/css" href="css/style.css">

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
  width:360px;
  box-shadow:0 0 8px rgba(250,250,250,0.6);
  opacity:0.6;
}
.user-container form{
  width:100%;
  text-align:center;
  padding:25px 20px;
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
  margin-left: 35%;
  margin-top: 10%;
  margin-bottom: 3rem;
  background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url("images/backfeedback.jfif");
}
form button{
  margin-top: 2rem;
  margin-bottom:2rem;
}
</style>
</head>
<!-- Header -->
    <!-- custom link js fil -->
 
    <body class="bodyclass">
      <?php 
          
      require_once('header.php');
      ?>           
       <!-- <form action="see_feedback.php" method="post">
        <br><br>
       <input type="submit" value="See Feedbacks" width=340px height=80px>
       </form>
       </div> -->
    <!-- </body> -->
      <div class="user-container">
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
                    <center><button type="submit" class="btn btn-warning"  name="submit" value="Login">Send</button></center>
                 
                </div>
                </div>
          <!-- <div class="login">
                    <h2>Feedback here</h2>
          
                  <div class="mb-3">
                    <label for="exampleFormControlInput3" class="form-label">Email ID</label> 
                    <input type="number" class="form-control" name="email"id="exampleFormControlInput3" placeholder="xyz@gmail.com">
                  </div>
                
                  <div class="col-auto">
                         <label for="inputPassword2" class="visually-hidden">Enter Password</label> 
                    <input type="text" class="form-control"  name="feedback" id="inputPassword2" placeholder="Enter text here">
                
                  </div>
 
					  <br />
                     <center><button type="submit" class="btn btn-warning"  name="submit"value="Login">Send</button></center>
                    

                   
                   </div> -->
               
        <!-- <div class="main">

       <input type="submit" value="See Feedbacks" width=340px height=80px>
</div> -->
       </form>
       <script src="js/script.js"></script>
    </body>

<!-- Footer  -->
  <!-- Site footer -->
  <?php 
          
          require_once('footer.php');
          ?>

</html>