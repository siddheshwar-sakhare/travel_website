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
<style>
    .package-card1
    {
        margin-left:10rem;
        display:flex;
        gap:2rem;
    }
    .package-home
{
    position:relative;
    height:100vh;
    /* 100% of viewport height */
    width:110%;
     background-image:linear-gradient(to left,rgba(0,0,0,0.6),rgba(0,0,0,0.3)),url(images/about2.webp) !important;
    background-size: cover;
    background-position: bottom center;
    /* display:grid; */
    align-items: center;
    justify-content:flex-start;
   
}
.cstm_card 
 {
    margin:8%;
    width:90%;
    display: flex;
    gap:50px;

 }
 .cstm_card1
 {
    /* margin:8%; */
    margin-top: 5rem;
    margin-bottom: 3rem;
    width:90%;
    display: flex;
    gap:50px;

 }
 .cstm_back
 {
    margin-left:100;
 }
 .cstm_theroy_maldives
 {
     margin-left:100;
 }

    </style>
               <script typr="text/javascript" src="js/bootstrap.js"></script>
               <script typr="text/javascript" src="js/bootstrap.bundle.js"></script>
            <!-- Gopgle Fonts -->
           <link rel="preconnect" href="https://fonts.googleapis.com">
             <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
           <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;0,800;1,300&display=swap" rel="stylesheet">
</head>
<body>
<?php 
             //we can also use include for many time same file can include and require once only include once 
         require_once('header.php');
         ?>

    <section class="package-home">
<div class="cstm_card1">

   <div class="card" style="width: 25rem;">
       <img src="images/maldives01.jpg" class="card-img-top" alt="" height="100% ">
  </div>

  <div class="card" style="width: 18rem;">
      <img src="images/m11.webp" class="card-img-top" alt="..." height="100% ">
  </div>

  <div class="card" style="width: 18rem;">
      <img src="images/m12.webp" class="card-img-top" alt="..." height="100% ">
  </div>

  <div class="card" style="width: 25rem;">
      <img src="images/m13.webp" class="card-img-top" alt="..." height="100% ">
   </div>
</div> 
<p>India Tour Packages
About India Tourism: A South Asian nation synonymous with the phrase “unity in diversity,” India is a land of rich culture and heritage. It’s known for its varied geographical
 terrain, historical monuments,
 languages, cuisines, religions, festivals, and so much more! From north to south and east to west, there is plenty to see and experience here, and you can do so with Holidify’s numerous India tour packages that are fit for all.

The best way to plan a trip to India is by region. When it comes to North India, the area comprises states like Uttarakhand, Rajasthan, Jammu and Kashmir, Delhi and Uttar Pradesh. It’s known for its breathtaking snowy terrain and the majestic Himalayas and is a paradise for skiing, hiking and trekking, snowboarding, camping, etc.

The region boasts heritage sites like the Mughal Taj Mahal, colonial Parliament House, Christ Church and the Namgyal Monastery, Badrinath Temple and Dilwara Temples. </p> 
        </section>
              <!-- <div class="package-card1">
                            <div class="card" style="width: 18rem;">
                        <img src="images/taj.jpg" class="card-img-top" alt="...">
               
                    <script>
            function B()
             {
              
                    document.getElementById("read_more1").hidden=true;
                document.getElementById("more_id_1").innerHTML="The monument attracts a lot of tourists all around the year<br><b>Best Time to Visit:</b> October to March<br><b>Entry Fees:</b> INR 1100 for Foreigners and NR 50 for Indians";
           
                 
            }
            </script>
             <div class="card-body">
                    <h5 class="card-title">Taj Mahal</h5>
                    <p class="card-text">The Taj Mahal is one of the seven wonders of the world and is considered to be the most popular tourist attraction in the country. A symbol of love, the Taj was built by Mughal Emperor Shah Jahan for his queen Mumtaz. Tagore described the Taj as a "teardrop on the cheek of eternity".                  
            </p>
            <p id="more_id_1"> 
</p>   
                    <button class="btn" onclick="B()" id="read_more1">Read More</button>


                </div>
                </div>
                <div class="card" style="width: 18rem;">
                        <img src="images/qutubminar.jpg" class="card-img-top" alt="...">
           <script>
            function A()
             {
                document.getElementById("read_more").hidden=true;
                document.getElementById("more_id").innerHTML="The soaring and brave tower that allures tourists despite being destroyed by ravages of natural apocalypses several times, Qutub Minar is the tallest individual tower in the world and second tallest monument of Delhi. A UNESCO World Heritage Site, it is located in Mehrauli and its construction was started in 1192 by Qutb Ud-Din-Aibak, founder of Delhi Sultanate. Later, the tower was built by various rulers over the centuries. The sight of this glorious monument takes you back to the rich history of India.<br><b>Best Time to Visit:</b> Throughout the year<br><b>Entry Fees:</b> INR 100 for Foreigners and NR 30 for Indians";
             }
            </script>
                <div class="card-body">
                    <h5 class="card-title">Qutub Minar</h5>
                    <p class="card-text">  At a height of 234 feet, this minaret is the tallest individual tower in the world and is a perfect display of Mughal architectural brilliance.
</p>
 <a class="btn btn-primary" onclick="A()" id="read_more">Read More</a>
<p id="more_id"> 
</p>
</div>
                </div> -->




<!-- <div class="card">
  <div class="card-body">
    This is some text within a card body.
  </div>
</div> -->
                    <!-- <a href="#" class="btn btn-primary">Read More</a> -->
             
              



                    <!-- <div id="carouselExampleSlidesOnly" class="carousel slide home_image" data-bs-ride="carousel" >
  <div class="carousel-inner">

    <div class="carousel-item active">
        
      <img src="images/manali01.jpg" class="d-block w-100" alt="image1" width="1510" height="700">
    </div>
    <div class="carousel-item">
      <img src="images/login1.jpg" class="d-block w-100" alt="image2" width="1510" height="700">
    </div>
    <div class="carousel-item">
      <img src="images/manali4.webp" class="d-block w-100" alt="image3" width="1510" height="700">
    </div>
    <div class="carousel-item">
      <img src="images/manali5.webp" class="d-block w-100" alt="image4" width="1510" height="700">
    </div>
  </div>
</div> -->
<br><br>
<center><h3>Maldives</h3></center>
<br><br>
<div class="cstm_theroy_maldives">
    <br />
  <center>    <h4>Geography of the Maldives</h4>
      <p>
The country covers an area of around 90,000 square kilometres. However, only 298 km² of that is dry land, an area smaller than the city of Munich. The outstanding coastline of the Maldives is around 650 km in length. The Republic of the Maldives is an island nation in the Indian Ocean. It is composed of multiple atolls which are made up of a total of 1196 islands, and is located in the continent of Asia. The chain of islands is to the south-west of India and Sri Lanka and stretches over 871 km. The islands have a total coastline of 650 km and are spread over 26 atolls with coral beaches. Only 220 of the 1196 islands are inhabited by Maldivians. 87 other islands are used for tourism.
North Malé Atoll is one of the two largest atolls in the Maldives. It is made up of the island of Malé with the capital of Malé, the international airport on the island of Hulule and a number of major tourist islands. Another major atoll is Addu Atoll, which is home to the former British airforce base of Gan.
The islands are divided into the “local islands”, where Maldivians live, and “resort islands”, which are reserved for holidaymakers.

</p>
<div class="card" style="width: 60rem;">
      <img src="images/m14.webp" class="card-img-top" alt="..." height="100% ">
   </div>
<br />
<br />
<h4>   Flora and Fauna in the Maldives</h4>
      <p>
   
While the landscape of the Maldives is mainly composed of lagoons and beautiful beaches that are dominated by coconut palms and breadfruit trees, 
forests with up to 250 species of plants are home to several animals. As only few animals live of the dry land, most of the Maldives fascinating biodiversity can be 
explored in the air or under water. About 113 different species of birds were observed on the islands, amongst others the Alexandrine parakeets and several herons.
 The numerous coral reefs of the Maldives are home to over 2,000 species like the trumpet fish, the parrotfish and also bigger animals like whale sharks and various 
 species of sea turtles.
</p>
<div class="card" style="width: 60rem;">
      <img src="images/m16.webp" class="card-img-top" alt="..." height="100% "></center>
   </div>
</div>

<br />
<br />


<div class="cstm_card">

   <div class="card" style="width: 25rem;">
       <img src="images/manali01.jpg" class="card-img-top" alt="" height="100% ">
  </div>

  <div class="card" style="width: 18rem;">
      <img src="images/manali02.jfif" class="card-img-top" alt="..." height="100% ">
  </div>

  <div class="card" style="width: 18rem;">
      <img src="images/manali03.jfif" class="card-img-top" alt="..." height="100% ">
  </div>

  <div class="card" style="width: 25rem;">
      <img src="images/manali04.jfif" class="card-img-top" alt="..." height="100% ">
   </div>
</div> 

<div class="cstm_theroy_maldives">
    <br />
      <center><h4>Manali, Himachal Pradesh</h4>
      <p>
Manali is a town, near Kullu town in Kullu district in the Indian state of Himachal Pradesh.[2] It is situated in the northern end of the Kullu Valley, 
formed by the Beas River. The town is located in the Kullu district, approximately 270 kilometres (170 mi) north of the state capital of Shimla and 544 kilometres 
(338 mi) northeast of the national capital of New Delhi. With a population of 8,096 people recorded in the 2011 Indian census Manali is the beginning of an ancient
 trade route through Lahaul (H.P) and Ladakh, over the Karakoram Pass and onto Yarkand and Hotan in the Tarim Basin of China. Manali is a popular tourist destination 
in India and serves as the gateway to the Lahaul and Spiti district as well as the city of Leh in Ladakh.</center>

</p>
<div class="card" style="width: 60rem; margin-left:16rem;">
      <img src="images/manali04.jfif" class="card-img-top" alt="..." height="100% ">
   </div>
            </div>
<br />


<br />
<br />
<div class="cstm_theroy_maldives">
    <br />
      <center><h4>Dandeli</h4><center>
      <p>
Dandeli is a town in the western Indian state of Karnataka. The Dandeli Wildlife Sanctuary, with its trails and dense forests, is home to animals including black panthers, monkeys and elephants, as well as many bird species. A temple stands at the entrance to the
 limestone Kavala Caves, known for their stalagmite formations. West of the caves, Anshi National Park encompasses the Kali Tiger Reserve.
</p>
<div class="card" style="width: 60rem;">
      <img src="images/dandeli01.jpg" class="card-img-top" alt="..." height="100% ">
   </div>
<div class="cstm_card">

   <div class="card" style="width: 25rem;">
       <img src="images/dandeli05.jfif" class="card-img-top" alt="" height="100% ">
  </div>

  <div class="card" style="width: 18rem;">
      <img src="images/dandeli02.jfif" class="card-img-top" alt="..." height="100% ">
  </div>

  <div class="card" style="width: 18rem;">
      <img src="images/dandeli03.jfif" class="card-img-top" alt="..." height="100% ">
  </div>

  <div class="card" style="width: 25rem;">
      <img src="images/d13.jpg" class="card-img-top" alt="..." height="100% ">
   </div>
</div> 


<br />


<div class="cstm_theroy_maldives">
    <br />
      <h4>Shimla  </h4>
      <p>
      Shimla s the capital and the largest city of the northern Indian state of Himachal Pradesh. In 1864, Shimla was declared as the summer capital of British India. After
       independence, the city became the capital of East Punjab and was later made the capital city of Himachal Pradesh. It is the principal commercial, cultural and
        educational centre of the state.</p>
        <p>
Small hamlets were recorded before 1815 when British forces took control of the area. The climatic conditions attracted the British to establish the city in the dense
 forests of the Himalayas. As the summer capital, Shimla hosted many important political meetings including the Simla Accord of 1914 and the Simla Conference of 1945.
  After independence, the state of Himachal Pradesh came into being in 1948 as a result of the integration of 28 princely states. Even after independence, the city 
  remained an important political centre, hosting the Simla Agreement of 1972. After the reorganisation of the state of Himachal Pradesh, the existing Mahasu district 
  was named Shimla.</p>
  <br />
<br />
<div class="card" style="width: 60rem;">
      <img src="images/s8.jpg" class="card-img-top" alt="..." height="100% ">
   </div>
   <div class="cstm_card">

   <div class="card" style="width: 25rem;">
       <img src="images/s5.jpg" class="card-img-top" alt="" height="100% ">
  </div>

  <div class="card" style="width: 18rem;">
      <img src="images/s6.jfif" class="card-img-top" alt="..." height="100% ">
  </div>

  <div class="card" style="width: 18rem;">
      <img src="images/s7.jpg" class="card-img-top" alt="..." height="100% ">
  </div>

  
</div> 
<br />
<br />
<div class="cstm_card">
<div class="card" style="width: 20rem;">
      <img src="images/s9.jpg" class="card-img-top" alt="..." height="100% ">
   </div>
   <div class="card" style="width: 20rem;">
      <img src="images/s10.jpeg" class="card-img-top" alt="..." height="100% ">
   </div>
   <div class="card" style="width: 20rem;">
      <img src="images/s11.jpg" class="card-img-top" alt="..." height="100%">
   </div>
</div>

<br />
<div class="cstm_theroy_maldives">
    <br />
      <h4>Best Time to visit Shimla </h4>
      <br />
      <p>
      Shimla, the beautiful hill station of Himachal Pradesh is charming all around the year. Every season brings about its unique beauty. Summers are pleasant and last
 from May to June. The lush green valleys are scenic and perfect for adventures. In winters, the entire landscape gets draped in powdery snow. The snowfall starts from 
 late November and lasts till February. Snow adventures in the slopes brings crowds and the beauty is ethereal. In the rainy months; July to September, the hill station 
 retains its charm and allures visitors for the serene tourist free ambiance. Shimla is pleasant every season. According to your preferences visit the capital city of 
 hilly state nestled in the lap of Himalayas.
      </p>
     <br />
     <h2>Shimla Tourism</h2>
     <p>Shimla, one of India's most famous hill stations, derives its name from Goddess Shyamala, an incarnation of Goddess Kali, the deity of power and wrath. However, unlike its name, Shimla is a perfect heaven
   for the ones in search of tranquility. Nature has blessed this capital city with innumerable gifts and man has used them to make Shimla one of India's best locales.</p>
        <br />
        <h5>History</h5>
        <p>
        The British discovered Shimla in the form of a little village in 1819. Until then, it was a part of the Nepalese kingdom. It was during Lord William Bentinck's time that Shimla was truly acquired by the Government of India. The British persuaded the local Raja to part with the land in 1830, and the settlement became the subcontinent's most fashionable 
        summer resort. In 1864, Shimla was declared the summer capital of India. After the independence of India, Shimla became the capital of Punjab until 1966, when it came
         under Himachal Pradesh.
        </p>
 <br />
 <h5>Location</h5>
        <p>
        Perched at an altitude of 2159 m above sea level, Shimla is located towards the southern parts of the north Indian state of Himachal Pradesh. It is the state capital and is at a distance of 343 km from Delhi, 260 km from Manali, and 119 km from Chandigarh. The temperature range is not very high and the maximum temperature rarely crosses 25°C during summers. 
        Winters are cold due to the chilly winds from the upper Himalayas. Around Christmas, Shimla experiences snowfall. The best season to visit Shimla is between 
        September and November.
        </p>
        <br />
<div class="card" style="width: 60rem;">
      <img src="images/s13.jpeg" class="card-img-top" alt="..." height="100% ">
   </div>
<br />
<br />
<br />


</body>
<nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-itemn cstm_back"><a class="page-link" href="home.php"><button type="button" class="btn btn-info">Back</button></a></li>

  </ul>


</div>
       <script src="js/script.js"></script>
      </body>
      <?php 
             //we can also use include for many time same file can include and require once only include once 
         require_once('footer.php');
         ?>
  </html>