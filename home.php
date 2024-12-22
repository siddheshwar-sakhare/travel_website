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
<style>
   .services .s-box.service-box img
   {
             width:400;
             height:300;
             
   }
   .services .s-box
{
    margin-left: 15rem;
    display:flex;
    grid-template-columns: repeat(auto-fit,minmax(10rem,1fr));
    gap:5rem;
  
}
.services .text-service
{
    margin-top: 3rem;
    margin-left: 15rem;;
    display:flex;
    text-align:center;
    gap:15rem;
}
.services .text-service h3
{
    font-size:1.5rem;
    /* color:#ffa343; */
    text-transform:uppercase;
}

.services .s2-box
{
    margin-left: 15rem;
    display:flex;
    margin-top: 4rem;
    grid-template-columns: repeat(auto-fit,minmax(10rem,1fr));
    gap:5rem;  
}

.services .s-box  h3{
    color:var(--text-color);
    font-size:1.7rem;
    padding:1rem;

}
.india-pack h3
{
    text-align:left top;
    font-weight:500;
    font-size:3rem;
    cursor:pointer;
    line-height:1.2rem;
    margin-bottom:5rem;
    font-weight:800;
}
.india-pack
{
    margin-top:3rem;
    margin-bottom:3rem;
}
.india-pack .india-img 
{
    margin-left:5rem;;
    display:flex;
    gap:2rem;
    text-decoration:none;
}
.india-pack .india-img .india-img2{
   gap:1rem;
   display:grid;
}
.india-pack .india-img .india-img2 h4
{
    font-weight:700;
}
.india-pack .india-img .india-img3 h4
{
    font-weight:700;
}
.india-pack img
{
    border-radius:7px;
}
.india-pack .india-img .india-img3{
    gap:1rem;
  display:grid;
} 
.india-pack .india-img .uttarakhand
{
  
    width:500px;

}
.india-pack .india-img .uttarakhand h5
{
    margin-top: 20px;
   font-size:1.2rem;
     color:white;
     font-weight:600;
   margin-left:20%;
   text-transform: uppercase;
    letter-spacing:6px;
   
}
.home  .l_btn{
    margin-bottom: 30rem;
    margin-left:10rem;
}
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
    color:white;
    letter-spacing:2px;
    margin-bottom:10px;
    text-transform:uppercase;
}
.feedback-box-container
{
    display:flex;
    justify-content:center;
    align-items:center;
    flex-wrap:wrap;
    width:200%;
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
.fb
{
    display:flex;
    flex-direction:row !important;
    gap:2rem;
}
.user-comment p
{
    font-size:1rem;
    color:#ffffffab;
}
.shareexperience
{
    
    justify-content: center;
    display:flex;
    background:white;
    border:1px solid grey;
    border-radius:4px;
    width:20%;
    margin-left: 25%;
}
.shareexperience span
{
    color:black;
    letter-spacing:0.5px;
    font-weight:500;
    font-size:1rem;
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
.home{
    height:110vh !important;
    background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(images/login2.webp) !important;
}
.cstm_text-end{
    margin-top: 26rem;
    margin-left: 10rem;;
}




    </style>
            </head>
    <!-- header -->
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header.php');

       ?>

    <!-- Home page-->
    <section class="home">
        <div class="home-text">
            <h5>Let's</h5>
            <h1>Planning your <br> own travel</h1>
            <p>Trips. Tours. Travels. Nothing less,but something more.</p>
            <p>We make each trip a special one for you.<br>#sstravels</p>
        </div>
        <a href="javascript:window.scrollTo(0,1320)"class="btn"style="margin-right:1rem;">Start Your Journey</a>
        <figure class="text-end cstm_text-end">
  <blockquote class="blockquote">
    <p>Life is short and the world is wide. Better get started.</p>
  </blockquote>
  <figcaption class="blockquote-footer">
    created by <cite title="Source Title">@siddheshwarsakhare</cite>
  </figcaption>
</figure>
        </section>
        <!-- middle images -->
        <!-- <section class="feature">
                <div class="f-content">
                                        <div class="row">
                                                <div class="row-img">
                                                    <img src="images/d7.jfif">
                                            </div>
                                            <h4>Ski tours</h4>
                                        </div>
                                        <div class="row">
                                            <div class="row-img">
                                                <img src="images/d7.jfif">
                                        </div>
                                        <h4>Ski tours</h4>
                                    </div>
                                    <div class="row">
                                        <div class="row-img">
                                            <img src="images/d7.jfif">
                                    </div>
                                    <h4>Ski tours</h4>
                                </div>
                                <div class="row">
                                    <div class="row-img">
                                        <img src="images/d7.jfif">
                                </div>
                                <h4>Ski tours</h4>
                            </div>
                            <div class="row">
                                <div class="row-img">
                                    <img src="images/d7.jfif">
                            </div>
                            <h4>Ski tours</h4>
                        </div>
               </div>
                        
            </section> -->

            <!-- holidy section -->
            <section class="holiday">
                <div class="holiday-img">
                      <img src="images/ss1.jpg">
                </div>
                <div class="holiday-text">
                    <h5>INDIA</h5>
                    <h2>A Trip to go travel around India let our hearts free</h2>
                    <p>When it comes to North India, the area comprises states like Uttarakhand, Rajasthan, Jammu and Kashmir, Delhi and Uttar Pradesh</p>
                    <a href="package.php" class="btn">Read more</a>
                </div>
               </section> 
               <!-- home -->
               <!-- cards of package -->
               <div class="package-card-title">
               <h3>Some<span>Packages</span></h3>
               <div class="package-cards">
                <div class="card" style="width: 18rem;">
                    <img src="images/MALDIVES.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">MALDIVES</h5>
                        <p class="card-text">The Maldives became a founding member of the South Asian Association for Regional Cooperation (SAARC). It is also a member of the United Nations, the Commonwealth of Nations, the Organisation of Islamic Cooperation, and the Non-Aligned Movement. </p>
                        <button name="Maldives" value="Maldives"><a href="bookform.php.php" class="btn btn-primary">Book Now</a></button>
                    </div>
                    </div>
        
                    <div class="card" style="width: 18rem;">
                    <img src="images/manali.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Manali Tourism</h5>
                        <p class="card-text">
        With spectacular valleys, breathtaking views, snowcapped mountains, and lush forests of oak, deodar, and pine, Manali is a magical hill station at the northern end of Kullu valley in Himachal Pradesh.
        </p>
                        <a href="bookform1.php" class="btn btn-primary" name="manali">Book Now</a>
                    </div>
                    </div>
        
                    <div class="card" style="width: 18rem;">
                    <img src="images/d7.jfif" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Dandeli</h5>
                        <p class="card-text">
        Lying proudly on the banks of the River Kali, Dandeli is a part of the Western Ghats of Uttara Karnataka. This city is blessed with verdant green dense forests adding to the oh-so-amazing beauty of the place.</p>
                        <a href="bookform2.php" class="btn btn-primary">Book Now</a>
                    </div>
                    </div>
        
              </div>
            </div>
               <!-- home offer -->
               
                   <section class="india-pack">
                   <h3><span>India</span> Tour Packages</h3>
                    <div class="india-img">
                                 <div class="uttarakhand">
                                 <a href="uttarakhand.php"><img src="images/uk11.jpg" width="400" height="210"></a>
                                 <br>
                                    <h5>UTTA<span>RA KHA</span>ND</h5>
                                    <br>
                                    <a href="uttarakhand.php"><img src="images/sm1.jpg" width="400" height="210"></a>
                                </div>

                                <div class="india-img2">
                                   
                                   <a href="rajasthan.php"><img src="images/rjsthan.jpg" width="400" height="210" alt="rajsthan img"></a>
                                   <h4>Rajasthan</h4>
                                   <a href="himachal.php"> <img src="images/himachal02.jpg" width="400" height="210" alt="himachal img"></a>
                                    <h4>Himachal</h4>
                                </div>

                         <div class="india-img3">
                                    <a href="kashmir.php"><img src="images/kashmir02.jpg" width="400" height="210" alt="kashmir img"></a>
                                    <h4>Jammu&Kashmir</h4>
                                    <a href="uttrpradesh.php"><img src="images/up.jpg" width="400" height="210" alt="uttarpradesh img"></a>
                                    <h4>Uttar Pradesh</h4>
                             </div>
                             </div>

</div>

</section>
               <!-- home  -->
               <!-- <section class="package">
                    <div class="package-slider">
                        <div class="W">
                            <div class="slide" style="background:url(images/back.jpg)">
                                <div class="content">
                                    <span>explore,discover,travel</span>
                                    <h3>travel arround world</h3>
                                    <a href="" class="package-btn">Discover more</a>
                                </div>
                            </div>

                            <div class="slide" style="background:url(images/back.jpg)">
                                <div class="content">
                                    <span>explore,discover,travel</span>
                                    <h3>discover the new places</h3>
                                    <a href="" class="package-btn">Discover more</a>
                                </div>
                            </div>
                            <div class="slide" style="background:url(images/back.jpg)">
                                <div class="content">
                                    <span>explore,discover,travel</span>
                                    <h3>make your tour worth</h3>
                                    <a href="" class="package-btn">Discover more</a>
                                </div>
                            </div>
                        </div>

                    </div>
               </section> -->
               <!-- our sevices -->
               <section class="services">
                  <h1 class="heading-title">our services</h1>
                <div class="s-box">
                      
                      <!-- <a href="adventure.php"><img src="images/adventurem.jfif" alt="" ></a> -->
                      <a href="adventure.php"><picture>
  <source srcset="images/adventurem.jfif" type="image/svg+xml">
  <img src="" class="img-fluid img-thumbnail" alt="...">
</picture></a>

                      <!-- <a href="tourguide.php"><img src="images/guide.jfif" alt=""></a> -->
                      <a href="tourguide.php">
                      <picture>
  <source srcset="images/guide.jfif" type="image/svg+xml">
  <img src="..." class="img-fluid img-thumbnail" alt="...">
</picture>
</a>
                      <!-- <a href="campfire.php"> <img src="images/campfire.jfif" alt=""></a> -->
                      <a href="campfire.php">
                      <picture>
  <source srcset="images/campfire.jfif" type="image/svg+xml">
  <img src="" class="img-fluid img-thumbnail" alt="..." height="100" width="230">
</picture>
</a>
                      
                                </div>
                                <div class="text-service">
                                     <h3>adventure</h3>
                                       <h3>tour guide</h3>
                                                 <h3>camp fire</h3>
</div>
                                <div class="s2-box">
                               
                                <!-- <a href="trekking.php"><img src="images/trekking.jfif" alt=""></a>  -->
                                <a href="trekking.php"><picture>
  <source srcset="images/trekking.jfif" type="image/svg+xml">
  <img src="..." class="img-fluid img-thumbnail" alt="...">
</picture></a>                    
                                <!-- <a href="offroad.php"><img src="images/offroad.jfif" alt=""></a> -->
                                <a href="offroad.php"><picture>
  <source srcset="images/offroad.jfif" type="image/svg+xml">
  <img src="..." class="img-fluid img-thumbnail" alt="...">
</picture></a>
                                <!-- <a href="camping.php"><img src="images/camp.jfif" alt=""></a> -->
                                <a href="camping.php"><picture>
  <source srcset="images/camp.jfif" type="image/svg+xml">
  <img src="..." class="img-fluid img-thumbnail" alt="...">
</picture></a>
                         
                     </div>
                     <div class="text-service">
                             <h3>trekking</h3>
                     <h3>off road</h3> 
                        <h3>camping</h3>
</div>
                        
               </section>
               <!-- container -->
               <!-- <section class="container">
                <div class="container-text">
                    <h2>Start Your Vaction <br> with lots of Services</h2>
                    </div>
                    <div class="row-items">
                            <div class="container-box">
                                <div class="container-img">
                                      <img src="">
                                </div>
                                <h4>Ship Cruises</h4>
                                <p>150 properties</p>
                            </div>
                            <div class="container-box">
                                <div class="container-img">
                                      <img src="">
                                </div>
                                <h4>Summer Rest</h4>
                                <p>150 properties</p>
                            </div>
                            <div class="container-box">
                                <div class="container-img">
                                      <img src="">
                                </div>
                                <h4>Mountains Tours</h4>
                                <p>150 properties</p>
                            </div>
                        </div>
                </section> -->
                <!-- login -->

                
   
                       
              <!-- feedback -->
              <section id="feedback">
                <div class="feedback-heading">
                    <span>Comments</span>
                    <h1>Clients Says</h1>
                    
</div>
<div class="fb">
<div class="feedback-box-container">

            <div class="feedback-box">
                            <div class="box-1">
                                <div class="profile">
                        <div class="profile-img">
                            <img src="images/profileimg1.jfif" alt="profile-image">
                        </div>
                        <div class="name-user">
                            <strong>
                                Danish Man
                            </strong>
                            <span>@danishrichhe</span>
                        </div>
                        </div>
                        <div class="reviews">
                        <i class="fas fa-star" ></i>
                        <i class="far fa-star" ></i>
                        </div>

                        </div>
                        <div class="user-comment">
                            <p>This was our first trip and was worried about it. But our overall trip experience was really good. Travel agent was very helpful and supportive. One thing I would suggest to add other sport activities like paragliding, scuba diving in your packages.</p>
                  </div>
            </div>
            <div class="feedback-box-container">
            <div class="feedback-box">
                            <div class="box-1">
                                   <div class="profile">
                                         <div class="profile-img">
                                             <img src="images/profileimg3.jfif" alt="profile-image">
                                       </div>
                                        <div class="name-user">
                                            <strong>
                                               Elvish Yadav
                                              </strong>
                                            <span>@elvishsystuuum</span>
                                         </div>
                                  </div>
                                   <div class="reviews">
                                  <i class="fas fa-star" ></i>
                                    <i class="far fa-star" ></i>
                        </div>

            </div>
            <div class="user-comment">
                <p>This trip was incredible, from day one our tour guide was amazing .. caring and very knowledgeable.. the actual your was also incredible.. thanks everyone who made possible this unforgettable experience!</p>
            </div>
</div>
<div class="feedback-box-container">
            <div class="feedback-box">
                            <div class="box-1">
                                   <div class="profile">
                                         <div class="profile-img">
                                             <img src="images/profileimg2.jpg" alt="profile-image">
                                       </div>
                                        <div class="name-user">
                                            <strong>
                                              Jad Hadid
                                              </strong>
                                            <span>@jadhadid</span>
                                         </div>
                                  </div>
                                   <div class="reviews">
                                  <i class="fas fa-star" ></i>
                                    <i class="far fa-star" ></i>
                        </div>

            </div>
            <div class="user-comment">
                <p>Great Experience with (TA). one of customer service agent who’s name is (Siddhu). He is help a lot to get best deal. I found very easy the way she gave me all information for book my Trip. I very strongly advise other traveller to use (TA). its very friendly and easy to use. Thank you very much.</p>
            </div>
</div>

</div>
<a href="seefeedbacks.php" class="btn">See more</a>
<br>
<br>

</section>

<div class="shareexperience">
<span>Share Your experience</span>
</div>
<!-- <center><a href="feed-php.php" class="btn">Feedback</a></center> -->

<center><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Feedback</button></center>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel"  style="color:black">Feedback</h5>
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
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning"  name="submit" value="Login">Send</button>
      </div>
      
    </div>
  </div>
</div>

    <!-- custom link js fil -->
         <script src="js/script.js"></script>
    </body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
</html>