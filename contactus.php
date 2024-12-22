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
            header
{
    /* for blur to header */
    padding: 5px 15px;
    background:transparent;
    backdrop-filter:blur(35px);
}
            .contact
            {
              
                position:relative;
                min-height:100vh;
                padding:50px 100px;
                display:flex;
                justify-content:center;
                align-items:center;
                flex-direction:column;
                /* background:url(images/contact1.webp); */
                background-size:cover;
            }
            .contact .contact-box{
                margin-top: 1rem;;
                max-width:800px;
                text-align:center;
                display:flex;
            }
            .cu{
                color:black;
                 weight:700;
            }
            .contact .contact-box h2{
                font-size:36px;
               font-weight:500;
               color:black;
            }
            .contact .contact-box p{
                font-weight:300;
                color:white;
            }
            .contact-container
            {
                width:100%;
                display:flex;
                justify-content:center;
                align-items:center;
                margin-top:30px;
            }
            .contact-container .contactInfo
            {
                width:50%;
                display:flex;
                flex-direction:column;
            }
            .contact-container .contactInfo .sodium_crypto_box{
                position:relative;
                padding:20px 0;
                display:flex;
            }
            .contact-container .contactInfo .box .iconv{
                min-width:60px;
                height:60px;
                background:#fff;
                display:flex;
                justify-content:center;
                align-items:center;
                border-radius:50%;
                font-size:22px;  
            }
            .contact-container .contactInfo .box .text{
                display:flex;
                margin-left:20px;
                font-size:16px;
                color:#fff;
                flex-direction:column;
                font-weight:300;
            }
            .contact-container .contactInfo .box .text h3{
                font-weight:500;
                color:#00bcd4;
            }
            .contact-form{
                width:40%;
                padding:40px;
                /* background:#fff; */
                margin-left: 20rem;
                margin-top:-27rem;
                
            }
            .contact-form h2{
                font-size:30px;
                color:white;
                weight:500;
            }
            ..contact-form .input-box
            {
                position:relative;
                width:100%;
                margin-top: 10px;
            }
            .contact-form .input-box input,
            .contact-form .input-box textarea
            {
                width:100%;
                padding:5px 0;
                font-size:16px;
                margin:10px 0;
                border:none;
                border-bottom:2px solid #333;
                outline:none;
                resize:none;
            }
            .contact-form .input-box span{
                color:black !important;
                /* position: absolute; */
                left:0;
                /* padding:5px 0; */
                font-size:16px;
                margin:10px 0;
                pointer-events:none;
                transition:0.5s;
                color:white !important;
                margin-bottom: 3rem;;
                
            }
            .contact-form .input-box input:focus ~span,
            .contact-form .input-box input:valid ~span,
            .contact-form .input-box textarea:focus ~span,
            .contact-form .input-box textarea:valid ~span
            {
                color:#e91e63;
                font-size:12px;
                transform:translateY(-20px);
            }
            .contact-form .input-box input[type="submit"]
            {
                        width:100px;
                        background:300bcd4;
                        color:#fff;
                        border:none;
                        cursor:pointer;
                        padding:10px;
                        font-size:18px;
            }
            @media (max-width:991px)
            {
                .contact{
                    padding:50px;
                }
                .contact-container{
                    flex-direction:column;
                }
                .contact-container .contactInfo
                {
                    margin-bottom: 40px;

                }
                .contact-container .contactInfo,
                .contact-form
                {
                    width:100px;
                }
            }
            .contact{
                position:relative;
    height:100vh;
    /* 100% of viewport height */
    width:100%;
     background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(images/contactus.jpg) !important;
    background-size: cover;
    background-position: bottom center;
    display:flex;
    align-items: center;
    justify-content:flex-start;
}
          
        </style>  
        </head>
<body>
    <!-- header -->
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header.php');
       ?>
       <section class="contact">
        <br><br>   <br>
       <div class="shadow-lg p-3 mb-5 bg-body rounded cu">Contact Us</div>
              <div class="contact-box">
               <p>Lorem ipsum dolor sit amet,consectetur adipisicing elit,sed do eiusmod 
            tempor incididunt ut labore et dolor magna aliqua.Ut enim ad minim veniam.
                </p>
          </div>
          <div class="contact-container">
            <div class="contactInfo">
                <div class="box">
                    <div class="icon">
                    <i class="ri-map-pin-line"></i>
</div>
<div class="text">
    <h3>Address</h3>
    <p>4789 Mitra Nagar <br> Solapur </p>
</div>
<div class="icon">
<i class="ri-phone-fill"></i>
</div>
<div class="text">
    <h3>Phone</h3>
    <p>9307835932</p>
</div>
<div class="icon">
<i class="ri-mail-fill"></i>
</div>
<div class="text">
    <h3>Email</h3>
    <p>siddheshwars2005@gmail.com</p>
</div>
            </div>
            <div class="contact-form">
                <form>
                    <h2>Send Message</h2>
                    <div class="input-box">
                        <input type="text" name="" required>
                        <span>Full Name</span>
</div>
<div class="input-box">
                        <input type="text" name="" required>
                        <span>Email</span>
</div>
<div class="input-box">
                        <textarea required></textarea>
                        <span>Type your message.</span>
</div>
<br><br>
<div class="input-box">
<button type="Submit" class="btn btn-info">Send</button>
</div>
</div>
</div>

</section>

    
    <!-- custom link js fil -->
         <script src="js/script.js"></script>
    </body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
</html>