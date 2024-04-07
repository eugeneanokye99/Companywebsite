


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <style>
    .headerimage{
        background: linear-gradient(to right,blue,red);
        height: 30vh;
        width: 100%;
        
    }
    .headerimage span{
        color: white;
        font-size: 3rem;
        position: relative;
        right: -30%;
        bottom: -30%;
    }
   #second-container{
    display: grid;
    grid-template-columns: 25% 25% 35%;
    justify-content: space-between;
    margin-top: 5%;
   }
   .grid-item{
    background-color: white;
    border: 1px gray solid;
    height: fit-content;
    border-radius: 12px;
    width: 100%;
   }
   #second-container .grid-item .text-card{
    margin-top: 8vh;
    
   }

   #second-container .grid-item .form-card{
    position: relative;
    right: -25%;
    bottom: -8%;
   }
   label{
    font-weight: bold;
   }
   input{
    width: 20vw;
    height: 2.5em;
    border-radius: 7px;
    border: 1px solid;
   }
   button{
    color: white;
    background-color: rgb(229, 101, 22);
    height: 2.9em;
    font-size: 14px;
    
   }
   p{                                               
    max-width: fit-content;
   }

    @media screen and (max-width:435px) {
        .headerimage span{
            position: relative;
            right: -20%;
            font-size: 1.9rem;
        }
        #second-container{
            display: grid;
            grid-template-columns: 100%;
            gap: 10px;
            
        }
        input{
            width: 65%;
        }
        
    }
    @media screen and (max-width:986px){
        #second-container{
            display: grid;
            grid-template-columns: 50% 50%;
            gap: 5px;
    }
}
 </style>
    
<div class="headerimage" >
 <span> Connect With Us </span>
</div>

<div id="second-container">
 <div class="grid-item" >
   <h1> <img src="../../Assets/images/telephone.png" alt="" height="70.5rem" style="margin-left: 10vw;" >   </h1>
     <div class="text-card" >
         <span style="margin-left: 10vw; font-size:25px" >0544118351</span> <br> <br> 
         <span style="margin-left: 10vw; font-size:25px" >0554026405</span>
     </div>
 </div>
 <div  class="grid-item" >
   <h1><img src="../../Assets/images/gmail.png" alt="" height="70.5rem" style="margin-left: 10vw;" > </h1>
   <div class="text-card" >
   <span style="margin-left: 1vw; font-size:20px" >www.techquestexplorers@gmail.com</span>  
   </div>
 </div>
 <div class="grid-item" >
    <div class="form-card" >
      <form action="" method="post">
      <label for="name">Name</label> <br>
      <input type="text"  name="name" placeholder="name"> <br> <br>

      <label for="email">Email</label> <br>
      <input type="email"  name="email" placeholder="Email"> <br>  <br> 
      <textarea name="message" id="message" cols="30" rows="10" placeholder="type your message" ></textarea> <br>
      <button type="submit">Send Message</button>
     </form>
    </div>
   

 </div>


</div>
<br>
<br>



<?php   
       include_once("../Footer/Footer.php");
   
?>
</body>
</html>