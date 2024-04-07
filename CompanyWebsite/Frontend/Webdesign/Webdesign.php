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
        background-color: #FCF9F9;
    }
    #banner-image{
        height: 30vh;
        width: 100%;
    }
    #second-region{
        background-color: #5524FB;
        height: 16vh;

    }
    #second-region p{
        color: white;
        font-size: 2.1em;

    }

    #firsth1{
        color: #1607f0;
        text-align: center;
    }
    #third-region{
        background-color: white;
    }
    #third-region p {
    text-align: center;
    }
    .our-projects-css{
        display: grid;
        grid-template-columns: 50% 50%;
        gap: 15px;
    }
   
    .project-text{
        color: #1607f0;
        text-align: center;
        
        
    }
    .numeric-text{
        color: #1607f0;
    }
    .our-project-innerbox{
        background-color: white;
    }
    .request-container{
        background-color:rgb(29, 29, 193);
        width: 100%;
        height: 15vh;
    }
    .request-container button{
        font-size: 2.0em;
        background-color: rgb(229, 101, 22);
        color: white;
        margin-left: 40%;
        margin-top: 1rem;
    }
    .request-container button:hover{
       color: orangered;

    }
   
     
 </style>
  <!-- The banner image area -->
  <?php include_once("../Header/Header.php");  ?> 
  <div>
  <img id="banner-image" src="../../Assets/images/1016081_design_web design_web_ux_icon.png" alt="">
  </div>
 <!-- The second area where business services scalability are talked about -->
  <div id="second-region" >
    <p>We help businesses scale to a new level by expanding their presence on the digital ecospace. We build innovative and aesthetically pleasing products that markets your products.  </p>

  </div>

  <h2 id="firsth1">WEB DESIGN SERVICES</h2>

  <div id="third-region">
    <p> ECOMMERCE <br>
       SCHOOLS WEBSITES <br>
       FINTECH WEBSITES <br>
       HOTELS WEBSITES <br>
       MOBILE DEVELOPMENT</p> 
       <br>

  </div>

  <h2 class="project-text" >OUR PROJECTS OUTLINE </h2>

  <div class="our-projects-css">

    <div class="our-project-innerbox">
        <span class="numeric-text"> 01 </span>
         <span style="color:orangered">Identify</span> <p> We gather the requirements of the project based on the business concerns from our clients.
            Then we map out how to address the concerns of the business in the technological realm. 
        </p>

    </div>


    <div class="our-project-innerbox">
    <span class="numeric-text">02</span> 

     <span style="color:orangered">Research</span> <p> In the research phase we  look at the competition in the market to analyse their strengths and weaknesses.
    After that we contact your target market to do some study about your organisation and also learn about your customers. 
    </p>
    </div>


    <div class="our-project-innerbox">
    <span class="numeric-text">03</span>  
    <span style="color:orangered">User Interface Design</span> <p> From the research phase, we build mockups, and high level prototypes of how the digital product will
    look like in the market mimicking the animations and transitions 
    </p>
    </div>
          
    <div class="our-project-innerbox">
    <span class="numeric-text">04</span>  
    <span style="color:orangered" > Coding</span> <p>  This phase involves writing codes to convert the the requirements into tangible working software product using a programming stack as applied to the needs of the problem.
    </p>

  </div>

  <div class="our-project-innerbox">
    <span class="numeric-text">05</span>  
    <span style="color:orangered" > Monitoring and Evaluation </span> <p>  This phase involves writing codes to convert the the requirements into tangible working software product using a programming stack as applied to the needs of the problem.
    </p>

  </div>
</div>
   
<div class="request-container" >
    <button>Request for Proposal</button>
</div>
<br>
    

 


   
</body>
</html>
<?php include_once("../Footer/Footer.php");  ?>  