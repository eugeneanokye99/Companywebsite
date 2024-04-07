<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: #F6F4F4;
        }
        #banner{
            width: 100%; 
            height: 40vh;                                                                        
        }
        .education-text{
            display: flex;
            justify-content: center;
            color: #1607F0;
            align-items: center;
            
            font-size: 3.0rem;
        }
        .mode-of-delivery{
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;

        }
        .mode-item{
            background-color: white;
            width: 20vw;
            height: 40vh;
            border-radius: 10px;
        }
        #home-img{
            height: 2.5rem;
            margin-left: 7.5vw;
        }
        #online-img{
            margin-left: 7.5vw;
        }
        .mode-item p{
            text-align: center;
        }
        .meeting-times-equipment{
            display: flex;
            justify-content: space-around;
            border-radius: 10px;
            
        }
        .meeting-container{
            background-color: white;
            width: 20vw;
            height: 30vh;
            border-radius: 10px;
        }
        /* mobile responsive css   */
        @media screen and (max-width:438px) {
            .education-text{
                font-size: 1.5rem;
            }
            #home-img{
                margin-left: 5.5vw; 
            }
            #online-img{
                margin-left: 5.5vw;
            }
            
        }

    </style>

  <!--The banner image-->
  <?php include_once("../Header/Header.php");  ?> 
  <div>
    <img id="banner" src="../../Assets/images/crownprince.jpeg" alt="">
  </div>

  <section>
    <div  class="education-text">
     <p>
     We offer programming education  <br>to  individuals and partner schools
     </p>                  
    </div>
  </section>
   <!--The Mode of Delivery Container-->
   <h3 style="text-align: center; color: #1607F0;" >Mode of Delivery</h3>
   <div class="mode-of-delivery" >
     <div class="mode-item" >
      <img id="online-img" src="../../Assets/images/icons8-online-50.png" alt="">
      <p>Online</p>
        <br>
        <br>
        <p>Google Meet</p>
        <br>
        <p>Zoom</p>

     </div>
     <div class="mode-item" >
       <img id="home-img" src="../../Assets/images/home.png">
       <p>Offline</p>
       <br>
       <br>
       <p>In person</p>
    </div>

   </div>

   <section>
 <!--Meeting times-->

 <div class="meeting-times-equipment" >
    <div>
        <h3 style="color:#1607F0" >Times of Meeting</h3>
        <div class="meeting-container" >
         <p> We meet individuals and partner schools who <br> subscribe to our services  <br>  maximum two(2) times a week </p>
        </div>
    </div>

    <div>
        <h3 style="color: #1607F0;">Equipments Needed</h3>
        <div class="meeting-container">
            <p>Laptop or Desktop</p>
            <p>Stable Internet Connection</p>
            <p>Tablets</p>
            <p>Notebooks</p>

        </div>
    </div>
 </div>


   </section>
   <br>
   <br>

                                                                                             

  
<?php include_once("../Footer/Footer.php");  ?>    
</body>
</html>

