
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
            background-color: #F8F2F2;
        }
        #header-image{
            width: 100%;
            height: 40vh;
        }
        .value-text{
            color: #EE6924;
            font-size: 3.4em;
            text-align: center;
        }
        .what-we-do-text{
            text-align: center;
            color: black;
            text-transform: capitalize;
        }
        #first-section{
            background-color: #F8F8F8;
            border-radius: 8px;
        }
        #first-section h2{
            text-align: center;
            font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
            font-style: italic;
            color: #1607F0;
        }
        #book-img{
         width: 20%;
         height: 6vh;
         margin-left: 43%;
        }
        .value-text{
            font-size: 2em;
        }
        #programming-text{
            color: #1607F0;
            text-align: center;
        }
        #learn-more{
            color: #EE6924;
            text-align: center;
            text-decoration: none;
           margin-left: 40%;
        }
        .engagement-section{
            background-color: #A16BF3;
        }
        .engagement-section h3{
            color: #F8F2F2;
            text-align: center;
            font-size: 1.3rem;
        }
        .engagement-flex{
            display: flex;
            justify-content: space-around;
        }
    </style>
<?php 
 include_once("../Header/Header.php")
?>
 <!-- This is the header image used to separate the header from the main body -->
<div>

<img id="header-image" src="../../Assets/images/headerimage.jpeg" alt="Logo" sizes="  " srcset="">
</div>

 <!-- Value proposition  Section after the banner -->
 <section>
    <div class="value-text" >
     We build and nurture  individuals to hone their skills in technology to become an expert of their own.

    </div>
 </section>

 <h1 class="what-we-do-text" >What we do</h1>
 <!-- The section that talks about programming tutorials-->
 <div id="first-section" >
    <img id="book-img" src="../../Assets/images/creative-teaching.png" alt="">
    <h2>Programming Tutorials</h2>
    <div>
      <p id="programming-text"  >
      We provide graphical programming as well as text based programming in addition to embedded programming such as Arduino, robotics to individuals and our partner schools.
      </p>   
    </div>

    <a id="learn-more" href="">Learn more</a>


 </div>

 <div id="first-section" >
    <img id="book-img" src="../../Assets/images/coding.png" alt="">
    <h2>Website Design</h2>
    <div>
      <p id="programming-text"  >
      We help businesses to move to the digital world by building a digital artifact that is highly optimised and scalable to meet 
      the needs of the your customers.
      </p>   
    </div>

    <a id="learn-more" href="">Learn more</a>


 </div>
  
 <!-- The engagement section -->
 <div class="engagement-section" >
    <h3>Our engagement</h3>
    <!-- put schools and individuals engagement side by side -->
    <div class="engagement-flex" >
        <span>Individuals <br>
           <b>20+</b>
        </span>

        <span>Schools <br>
           <b>2</b> 
        </span>

    </div>

 </div>


<?php   
include_once("../Footer/Footer.php")

?>
</body>
</html>