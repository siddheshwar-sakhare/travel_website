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
    .kashmir p{
                            font-size:1.3rem;
                            font-weight:500;
                            line-height:30px;
                            color:#ffffffab;
                            margin-bottom: 35px;
                            }
                            .kashmir
    {
        margin-top:3rem;
    }
    .kashmir .kashmir-img{
         gap:5rem;
    }
    .kashmir h6
    {
        margin-top:3rem;
    }
    .kashmir h3
    {
        font-size:3vw;
                                color:white;
                                text-transform: uppercase;
                                text-shadow: #978787;
                                padding:1rem 0;                           
    }
    .kashmir.kashmir-img
    {
        display:flex;
        gap:4rem;
    }
  .kashmir span
  {
    color:#ffa343;
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
       <section class="kashmir">
       <h6>WELCOME TO </h6>
       <h3><span>Kashmir </span> Tour Packages</h3>
        <div class="kashmir-img">
        <p>Fall in love with Jammu & Kashmir with our affordable Kashmir tour packages. Jammu & Kashmir is a world-famous tourist destination known for its captivating landscapes, as well as its warm and vibrant culture. Tour My India offers the best holiday packages for Jammu & Kashmir, carefully designed to provide the ultimate experience for family tours, romantic honeymoons, thrilling trekking adventures, wildlife holidays, and sacred pilgrimage tours. Jammu and Kashmir offer a wealth of holiday possibilities, with its abundant tourism treasures. So come, explore, and spend a few days in Kashmir, the paradise on earth, with Tour My India. Book your Kashmir holiday packages at the best deals and prices, and take advantage of special discounts available on our 2023/2024 packages.</p>
        
</div>
<div class="kashmir-img">
<img src="images/kashmir1.jfif" width="550" height="400">
<img src="images/kashmir2.jfif" width="550" height="400">
</div>
<br>
<br>
<a href="Kashmirbook.php"><button type="button" class="btn btn-warning">BOOK NOW</button></a>
    </section>
      

        
       
       <script src="js/script.js"></script>
    </body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
</html>