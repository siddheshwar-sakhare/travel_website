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
                                          .offroad.offroad p{
                            font-size:1.3rem;
                            font-weight:500;
                            line-height:30px;
                            color:#ffffffab;
                            margin-bottom: 35px;
                            }
                            .offroad h3
                            {
                                font-size:3vw;
                                color:white;
                                text-transform: uppercase;
                                text-shadow: #978787;
                                padding:1rem 0;
                                margin-top: 5rem;
                            }
                            .offroad .offroad-img h6
                            {
                                text-align:left;
                                color:#978787;
                                margin-left: 17rem;
                                margin-bottom:2rem;
                            }
                            .offroad .offroad-img 
                            {
                                margin-bottom: 4rem;
                            }
                            .offroad h1
                            {
                                color:var(--main-color);
                               font-size:5rem;
                                   padding:2rem;
                            }
                            .offroad .offroad-vechical-img
                            {
                            
                                display:flex;
                                margin-bottom:5rem;
                                gap:4rem;
                            }
                            .offroad .tire-img
                            {
                                display:flex;
                                gap:1rem;
                            }
                            .offroad .tire-pic
                            {
                                margin-top:5rem;
                                display:flex;
                                gap:1.5rem;
                                width:360;
                                height:270;
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
       <section class="offroad">
       <h3>What is <span>OFF ROADING </span>?</h3>
       <p><span>Off-roading</span> is the activity of driving or riding in a vehicle on unpaved surfaces such as sand, gravel, riverbeds, mud, snow, rocks, and other natural terrain. Types of off-roading range in intensity, from leisure drives with unmodified vehicles, to competitions with customised vehicles and professional drivers. Off-roading has been given criticism for the environmental damage caused by their vehicles. There have also been extensive debates over the role of government in regulating the sport, including a Supreme Court case brought against the Bureau of Land Management in the United States.</p>
         <div class="offroad-img">
            <img src="images/offroad2.jpeg" alt="offroad image">

</div>
            <p>Off-roading is a term used to describe driving on unpaved ground. This surface can be almost anything other than typical smooth pavement, including fields, riverbeds, muddy bogs, sand dunes, beaches, mountainsides, gravel, boulders and even roads that have fallen into disrepair. If it's not paved (or paved well), it's fair game for off-roaders.</p>
            <h3>Off-road <span>vehicle</span></h3>
            <div class="offroad-vechical-img">
            <img src="images/offroad3.jfif" alt="offroad image">
            <img src="images/offroad4.jfif" alt="offroad image">
            <img src="images/offroad5.jfif" alt="offroad image">
                        </div>
                        <h3>OFF ROADING TIRES</h3>
                        <div class="tire-img">
                        <img src="images/offroad10.webp" alt="offroad image">
                            <p>The primary function of tires is to provide traction. For normal vehicles, this means gripping a relatively smooth paved or gravel surface. For off-road vehicles, this means gripping a variety of surfaces, from rocks and boulders to sand and dirt to snow and mud. As a result, tires are one of the most important purchases you'll make for your off-road vehicle.
Before you head to the local tire shop, think about the kind of driving you'll be doing. It's possible to buy smooth-riding tires (or street tires), but this implies you'll rarely, if ever, be driving off regular roads. As this is an article about off-road vehicles, let's set aside any discussion of smooth-riding tires and focus on the three major types of off-road tires available for four-wheel-drive vehicles:</p>
                        </div>
                        <div class="tire-pic">
                        <img src="images/offroad11.jfif" alt="offroad image">
            <img src="images/offroad12.jfif" alt="offroad image">
            <img src="images/offroad13.jfif" alt="offroad image">
                        </div>


</section>

        
       
       <script src="js/script.js"></script>
    </body>
    <?php 
           //we can also use include for many time same file can include and require once only include once 
       require_once('footer.php');
       ?>
</html>