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
<style>
  .about{
    position:relative;
    height:100vh;
    /* 100% of viewport height */
    width:100%;
     background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(images/about1.jpg) !important;
    background-size: cover;
    background-position: bottom center;
    /* display:flex; */
    align-items: center;
    /* justify-content:flex-start; */
  }
      .about_container
  {
    margin-left:7%;
    margin-top:4rem;
    margin-bottom:3%;
  }
  .about_container h1
  {
    color:#ffa343;
    margin-bottom: 1rem;
  }
  .about_container .btn
  {
  
    border-radius:3px;
    border-color:white;
    box-shadow: blue;
    border:50% solid grey;
  }
  .about_container .about_text
  {
    margin-left:35%;
    margin-top:-30%;
    margin-bottom:10%;
    width:600px;
  border-radius:4px;
  border:blue;
    height:300px;
    
  }
  .img1box
  {
    border-radius:150px;
    margin-top: 3rem;
    border:70% solid grey;
  }
    </style>

    </head>
<body>
<?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('header.php');
       ?>
<section class="about">
  <div class="about_container">
     <img src="images/about_img.jpg" class="img1box" width="400" height="500">
      <div class="about_text">
       
        <h1>About Us</h1>
        <p>Tourism is travel for pleasure or business, and the commercial activity of providing and supporting such travel.[2] The World Tourism Organization defines tourism more generally, in terms which go "beyond the common perception of tourism as being limited to holiday activity only", as people "travelling to and staying in places outside their usual environment for not more than one consecutive year for leisure and not less than 24 hours, business and other purposes".[3] Tourism can be domestic (within the traveller's own country) or international, and international tourism has both incoming and outgoing implications on a country's balance of payments.
         Tourism numbers declined as a result of a strong economic slowdown (the late-2000s recession) between the second half of 2008 and the end of 2009, and in consequence of the outbreak of the 2009 H1N1 influenza virus,[4][5] but slowly recovered until the COVID-19 pandemic put an abrupt end to the growth. The United Nations World Tourism Organization estimated that global international tourist arrivals might decrease by 58% to 78% in 2020, leading to a potential loss of US$0.9–1.2 trillion in international tourism receipts.[6]</p>
      </div>
    </div>
    </section>
    <br />
    <br />
</body>
<?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
<html>