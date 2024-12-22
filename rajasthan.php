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
    .rajasthan p{
                            font-size:1.3rem;
                            font-weight:500;
                            line-height:30px;
                            color:#ffffffab;
                            margin-bottom: 35px;
                            }
    .rajasthan
    {
        margin-top:3rem;
    }
    .rajasthan .raj-img img{
            width:1200;
            height:500;
    }
    .rajasthan h6
    {
        margin-top:3rem;
        color:#ffa343;
    }
    .rajasthan h3
    {
        font-size:3vw;
                                color:white;
                                text-transform: uppercase;
                                text-shadow: #978787;
                                padding:1rem 0;                           
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
       <section class="rajasthan">
        <div class="raj-img">
       <img src="images/rajasthan2.jpg">
       <div>
        <h6>WELCOME TO</h6>
        <h3>Rajasthan Tour Packages</h3>
        <p>Discover the incredible beauty of the land of royal palaces and forts with affordable Rajasthan Tour packages offered by Tour My India. Rajasthan Tourism offers travellers the opportunity to explore exotic architectures, vibrant culture, rich wildlife, and warm hospitality. Tour My India's exclusively designed holiday packages cover the major exotic heritage attractions from all the popular tourist destinations of Rajasthan, such as Jaipur, Bikaner, Udaipur, Jaisalmer, Jodhpur, and other offbeat places. Avail the best discounts on Rajasthan family tour packages, honeymoon vacation tours, and weekend tour packages by booking with Tour My India. With our affordable Rajasthan Travel Packages, discover the beauty of the state like never before! We're here to guide you, keeping in mind your precise needs, and make sure you enjoy a perfect vacation tour.</p>
        <a href="Rajasthanbook.php"><button type="button" class="btn btn-warning">BOOK NOW</button></a>
    </section>
      

        
       
       <script src="js/script.js"></script>
    </body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
</html>