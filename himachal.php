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
    .himachal p{
                            font-size:1.3rem;
                            font-weight:500;
                            line-height:30px;
                            color:#ffffffab;
                            margin-bottom: 35px;
                            }
                            .himachal
    {
        margin-top:3rem;
    }
    .himachal .raj-img img{
            width:1200;
            height:500;
    }
    .himachal h6
    {
        margin-top:3rem;
    }
    .himachal h3
    {
        font-size:3vw;
                                color:white;
                                text-transform: uppercase;
                                text-shadow: #978787;
                                padding:1rem 0;                           
    }
    .himachal .hima-img
    {
        display:flex;
        gap:4rem;
    }
  .himachal span
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
       <section class="himachal">
       <h6>WELCOME TO </h6>
       <h3><span>Himachal </span> Tour Packages</h3>
        <div class="hima-img">
        <p>With snow-capped mountains to plunging river valley, age-old monasteries to quaint churches, Himachal Pradesh makes for a holiday destination for all. If you have been planning to visit Himachal Pradesh, find out how we can make your Himachal Pradesh tour worth remembering for a lifetime. We at Tour My India offer the best Himachal Pradesh tour packages with attractive deals that are perfect for a family vacation, holiday with friends, adventure, and honeymoon. Unwind amidst the serene beauty of Himachal Pradesh with the best affordable tour packages offered by Tour My India.</p>
        <img src="images/himachal.webp">
</div>
<a href="Himachalbook.php"><button type="button" class="btn btn-warning">BOOK NOW</button></a>
    </section>
      

        
       
       <script src="js/script.js"></script>
    </body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
</html>