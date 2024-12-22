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
               <!-- extra -->
   <style>
    .uttarakhand p{
                            font-size:1.3rem;
                            font-weight:500;
                            line-height:30px;
                            color:#ffffffab;
                            margin-bottom: 35px;
                            }
                            .uttarakhand
    {
        margin-top:3rem;
    }
    .uttarakhand .uttarakhand-img{
         gap:5rem;
        display:flex;
    }
    .uttarakhand h6
    {
        margin-top:3rem;
    }
    .uttarakhand h3
    {
        font-size:3vw;
                                color:white;
                                text-transform: uppercase;
                                text-shadow: #978787;
                                padding:1rem 0;                           
    }
    .uttarakhand .uttarakhand-text
    {
        margin-top:2rem;
    }

  .uttarakhand span
  {
    color:#ffa343;
  }
  .uttarakhand  .uttarakhandimg
  {
    width:400;
    display:flex;
    gap:2rem;
    padding:2rem;
  }

    </style>
            <!-- Gopgle Fonts -->
           <link rel="preconnect" href="https://fonts.googleapis.com">
             <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
           <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
</head>
<body>
    <!-- header -->
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header.php');
       ?>
       <section class="uttarakhand">
       <h6>WELCOME TO </h6>
       <h3><span>Uttarakhand</span> Tour Packages</h3>
       <div class="uttarakhand-img">
        <p>Travellers of all kinds can get the best tourism opportunities in Uttarakhand, the Himalayan state in India, with our various Uttarakhand sightseeing tour packages. Find the best deals on Uttarakhand tour packages at Tour My India for a family vacation, spiritual tour, nature exploration, adventure or honeymoon tour in the picturesque Dev Bhumi (the Land of Gods). Tour My India offers a wide range of holiday packages with best deals ensuring an unmatched travel experience you will not find anywhere else. Our years of experience in organizing tours in the Uttarakhand Himalayas make us familiar with every region and destination of this beautiful state. Therefore, we offer the best holiday experience with our Uttarakhand tourism packages to suit the taste of our customers.</p>
        <img src="images/uttarakhand1.webp">
</div>
<br>
<br>
<div class="uttarakhandimg">
<img src="images/uttarakhand2.jfif">
<img src="images/uttarakhand3.jfif">
<img src="images/uttarakhand4.jfif">
</div>
<a href="Uttarakhandbook.php"><button type="button" class="btn btn-warning">BOOK NOW</button></a>
    </section>
      

        
       
       <script src="js/script.js"></script>
    </body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
</html>