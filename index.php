<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@1,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
  <link rel="stylesheet" href="./sidebar.css">
    <title>Document</title>

</head>

<body>


   
    <div id="acl" class="container">


        <div class="item1">
            <div style="z-index: 10000000000000000000000000000000000000000000000000000000000000000000000000000000000;" class="itemb1">
                <h1><img style="max-width: 30px;" src="Web capture_13-5-2023_03853_www.univ-blida.dz.jpeg" alt=""><i>LRDSI</i></h1>
            </div>
            <div class="itemb2"><a href="#">presentation</a>
                <a href="#">membres</a>
                <a href="#projects">projects</a>
            </div>
            <div class="itemb3">
             
            </div>
            <div class="itemb4"><img style="max-width: 30px; visibility:hidden" src="🦆 icon _globe alt_.png" alt=""></div>
            <div class="itemb5">
                <hr>
                <script>var viewportWidth = window.innerWidth;

                if (viewportWidth < 656) {
    document.write('<h1 style="margin-left: 19px;">Laboratoire de Recherche<hr> <span style="opacity: 0.6;" id="element"></span></h1>');
} else {
    document.write('<h1 style="margin-left: 19px;">Laboratoire de Recherche <span style="opacity: 0.6;" id="element"></span></h1>');
}</script>
                <hr>
                <h1 style="margin-left: 19px;">Faculté des Sciences | Université Saad Dahlab - Blida 1
                </h1>
                <h1>
                </h1>
                <hr>
                <br>
            </div>
        </div>

        <div class="item2">
            <div class="su">
                <h1 style="
                font-weight:400;font-size:70px;text-transform:capitalize;font-family:Arial, Helvetica, sans-serif;color:#000;
width:1000px;display:block; white-space:normal !important;">   <script>var viewportWidth = window.innerWidth;

if (viewportWidth < 656) {
document.write('Introducing <br> LRDSI');
} else {
document.write('Introducing LRDSI');
}</script></h1>



    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div  class="social-links">
                    
                        </a>  <a style="width:200px" class="social-btn" href="#">
                           <span>Get Started</span>
                        </a>
                      <br>
                        <a style="width:200px;background:#f4f4f4;color:#000" class="social-btn" href="LOGIN.html">
                            <span>Learn more</span>
                        </a>

                     
                    </div>


                    
                </div>
            </div>
        </div>
    </footer>
            </div>
        </div>
        <div class="item3"><img class="imgg" style="max-width:40%;max-height:550px;position:absolute;top:6%;right:5%;"
           src="Group 241 (4).png" alt="group photo"></div>    <!--  -->
<img
            style="position: absolute;top:-1%;right:6%;z-index:-11111111" src="Group 242.png">
    </div>
    <div class="navigation">
    <ul>
      <li id="home" onclick="togglehome()">
        <a href="#">
          <span class="icon"><i class="fa-solid fa-house"></i></span>
          <span class="title">Home</span>
        </a>
      </li>
  
      <li onclick="login()">
        <a href="#">
          <span class="icon"><i class="fa-solid fa-user"></i></span>
          <span class="title">Profile</span>
        </a>
      </li>
      <li onclick="toggleinfoMessages()">
        <a href="#">
          <span class="icon"><i class="fa-solid fa-message"></i></span>
          <span class="title">Messages</span>
        </a>
      </li>
      <li id="infoUsdb" onclick="toggleinfoUsdb()">
        <a href="#">
          <span class="icon"><i  class="fa-solid fa-circle-info"></i></span>
          <span class="title">USDB</span>
        </a>
      </li>
      <li id="infoLrdsi" onclick="toggleinfoLrdsi()">
        <a href="#">
          <span class="icon"><i  class="fa-solid fa-circle-info"></i></span>
          <span class="title">LRDSI</span>
        </a>
      </li>
     
      <li onclick="signout()">
        <a href="#">
          <span class="icon"><i class="fa-solid fa-right-from-bracket"></i></span>
          <span class="title">SignOut</span>
        </a>
      </li>
    </ul>
  </div>

  <div class="toggle" onclick="toggleMenu()"></div>
  <script type="text/javascript">
  function signout(){
    window.location.href = 'deconnexion.php';
  }
function login(){
  window.location.href = 'LOGINN.php';
}
  function toggleinfoUsdb(){
    let html=document.querySelector('html');
    let body = document.querySelector('.body');
  
    body.classList.toggle('active');
    let body2 = document.querySelector('.body.Lrdsi');
    let navigation = document.querySelector('.navigation');
    navigation.classList.remove('active');
    body2.classList.remove('active');
    let toggle = document.querySelector('.toggle');
      
   
      toggle.classList.remove('active');
  
  }
  function toggleinfoLrdsi(){
    let html=document.querySelector('html');
    let body2 = document.querySelector('.body.Lrdsi');
   
    body2.classList.toggle('active');
    let body = document.querySelector('.body');
    let navigation = document.querySelector('.navigation');
    navigation.classList.remove('active');
    body.classList.remove('active');
    let toggle = document.querySelector('.toggle');
      
   
      toggle.classList.remove('active');
  }
  
  function togglehome(){
    let body = document.querySelector('.body');
    let body2 = document.querySelector('.body.Lrdsi');
    let home = document.querySelector('#home');
    body.classList.remove('active');
    body2.classList.remove('active');
    let navigation = document.querySelector('.navigation');
    navigation.classList.remove('active');
    let toggle = document.querySelector('.toggle');
      
   
      toggle.classList.remove('active');
  
      
  }
    function toggleMenu() {
      let navigation = document.querySelector('.navigation');
      let toggle = document.querySelector('.toggle');
      
      let itemb2 = document.querySelector('.itemb2');
      navigation.classList.toggle('active');
      toggle.classList.toggle('active');
      itemb2.classList.toggle('active');
    }
    function  toggleinfoMessages(){
      let msg =document.querySelector('.messages')
    let body = document.querySelector('.body');
    let info = document.querySelector('#infoUsdb');
    msg.classList.toggle('active');
    let body2 = document.querySelector('.body.Lrdsi');
    let navigation = document.querySelector('.navigation');
    navigation.classList.remove('active');
    body2.classList.remove('active');
    body.classList.remove('active');
    let toggle = document.querySelector('.toggle');
      
   
      toggle.classList.remove('active');
  
  }
   
  </script>



    <!-- Load library from the CDN -->
    <script src="https://unpkg.com/typed.js@2.0.16/dist/typed.umd.js"></script>

    <!-- Setup and start animation! -->
    <script>
    var typed = new Typed('#element', {
        strings: ['pour le Développement des Systèmes Informatiques',
            'pour LA CYBERSÉCURITÉ DES SYSTÈMES INFORMATIQUES', "pour L' OPTIMISATION DES RÉSEAUX DE DONNÉES"
        ],
        typeSpeed: 20,
        backspeed:10,
        loop: true
    });
    </script>
    </div>
   
    <div class="menupage"></div>
    <div class="squir"></div>
    <div  class="cin"></div>
    <div class="the-hole-seconde-section">
    <div class="background"></div>
    <div class="body">
   

    <section >
  <div style="margin-left: 25px;;margin-top:30px" class="right">
  <div  class="head"><h1 style="line-height: 30px;font-size:20px">Saad Dahlab University Blida 1 (Université Saad Dahlab Blida 1) .<br> </h1></div>
    <p> you cen viqit the university page to learn more </p>
  <div class="btns">
    <a href="https://www.univ-blida.dz/"><button class="brutal">visit us</button></a>
   <a href="#contact"> <button>#contact us ☞</button></a>
   </div>
  </div>
  <div class="left">
    <img style="max-height:750px ;" src="346096998_756007689652101_8999744449722457714_n.jpg">
  </div>
</section></div>

<div   class="body Lrdsi">
    <section >
  <div style="margin-left: 25px;margin-top:30px" class="right">
  <div  ><div style="line-height: 30px;font-size:20px;color:white;max-width:400px;    white-space: pre-line;">Le laboratoire de Recherche pour le Développement des Systèmes Informatisés 
  (LRDSI) de l’université Saad Dahlab –Blida1, a été agréé en mai 2002 pour accompagner
   le département d’informatique créé en 1999, dans ses activités pédagogiques et scientifiques.
    Il est composé de quatre équipes regroupant plus de 30 enseignants chercheurs et 32 doctorants (LMD et classique).  
    </div>
    </div>
    <p> you cen viqit the university page to learn more </p>
  <div class="btns">
    <a href="https://www.univ-blida.dz/"><button class="brutal">visit us</button></a>
   <a href="#contact"> <button>#contact us ☞</button></a>
   </div>
  </div>
  <div class="left">
    <img style="max-height:750px ;" src="Web capture_13-5-2023_03853_www.univ-blida.dz.png">
  </div>
</section></div>
<div class="thed pd-y" style="background-color: white;" id="f">
    <div id="projects"class="projects-title hide-fade"><h2>news</h2></div>
   <div class="skils" >
    <div class="skil hide-fade layerf"><a style="z-index: 10000;color:white" href="#">read more</a><img class="img" src="img/Capture d’écran 2022-09-18 191946.png" alt="1stproject"></div><div class="skil hide-fade  layerf"><a style="z-index: 10000;color:white" href="#">read more</a><img class="img" src="img/Web 1920a – 1.jpg" alt="1stproject"></div><div class="skil hide-fade layerf"><a style="z-index: 10000;color:white" href="#">read more</a></div>
        
        
    </div>
   
</div></div>
    

  
<div id="contact" class="contact">
<form class="my-form" action="index.php" method="post">
  <div class="container">
    
    <ul>
 
      <li>
        <div class="grid grid-2">
          <input type="text" placeholder="Name" name="name" required>  
        </div>
      </li>
      <li>
        <div class="grid grid-2">
          <input type="email" placeholder="Email" name="email" required>  
        </div>
      </li>    
      <li>
        <textarea placeholder="Message" name="text" required minlength="15"></textarea>
      </li>   
      <li>
        <input type="checkbox" id="terms">
        

               
 <label for="terms">I have read and agreed with  <script>viewportWidth 
 if(viewportWidth <500){
  document.write('<br> <hr>');
 }  </script> <a href="">the terms and conditions.</a>

        </label>
      </li>  
      <li>
        <div class="grid grid-3">
          <div class="required-msg">REQUIRED FIELDS</div>
       
  
    <button class="btn-grid" type="submit" disabled>
      <span class="back">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/email-icon.svg" alt="">
      </span>
      <span class="front">Envoyer</span>
    </button>

    <button class="btn-grid" type="reset" disabled>
      <span class="back">
        <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/eraser-icon.svg" alt="">
      </span>
      <span class="front">Annuler</span>
    </button  >
        </div>
      </li>    
    </ul>
  </div>
</form>
</div>
<div class="messages">






<?php
include("MSG.php");

?>


</div>

<footer style="text-align: center;white-space:pre-line;max-width: 375px;margin-top: 0;margin-bottom:0;margin-right:auto;margin-left:auto"><tt><b> Privesy | Terms of use | Copyrights &copy; <span class="year"></span> LRDSI. all rights reserved</b></tt></footer>

</body>

</html>


<script type="text/javascript">
const observer= new IntersectionObserver((entries)=>{
entries.forEach((entry)=>{
   
    if(entry.isIntersecting){
        entry.target.classList.add("show-fade");
    }else{
        entry.target.classList.remove("show-fade");
    }
});
});
const hidinElements=document.querySelectorAll(".hide-fade");
hidinElements.forEach((el)=> observer.observe(el));
const year=document.querySelector(".year");

year.innerHTML=new Date().getFullYear();
    const checkbox = document.querySelector('.my-form input[type="checkbox"]');
const btns = document.querySelectorAll(".my-form button");

checkbox.addEventListener("change", function() {
  const checked = this.checked;
  for (const btn of btns) {
    checked ? (btn.disabled = false) : (btn.disabled = true);
  }
});
window.onload = function() {
    var imgg = document.querySelector('.imgg');
    imgg.classList.add('onload');
}
var cin = document.querySelector('.cin');
var vic = document.querySelector('#vic');

var viewportHeight = window.innerHeight;
var viewportWidth = window.innerWidth;
vic.style.width = viewportWidth + 'px';

var num_rows = (viewportHeight * 5) / 617;
var num_points_per_row = (viewportWidth * 15) / 1366;

for (var i = 0; i < num_rows; i++) {
    var row = document.createElement('div');
    row.style.marginTop = i + 'px';

    for (var j = 0; j < num_points_per_row; j++) {
        var point = document.createElement('span');
        point.classList.add('point');
        row.appendChild(point);
    }

    cin.appendChild(row);
    var linkElement = document.querySelector('.link');
    var tg = true;
    var menuPageElement = document.querySelector('.menupage');
    linkElement.addEventListener('mouseover', function() {
        if (tg == true) {

            menuPageElement.classList.add('vv');
        } else {
            menuPageElement.classList.remove('vv');

        }
    });
}
</script>
<style>
@font-face {
    font-family: 'oxaniumbold';
    src: url('oxanium-bold.woff2') format('woff2'),
        url('oxanium-bold.woff') format('woff');
    font-weight: normal;
    font-style: normal;

}

.hide-fade{
    opacity: 0;
    transition: all 0.5s;
    filter: blur(5px);
    
    transform: translateX(-30%);
}
.show-fade{
    opacity: 1 !important;
    filter: blur(0);
    transform: translateX(0%);
}

.itemb2 {
    text-align: center;
    font-weight: 200;
    opacity: 0.8;
}

h1,
.itemb2 a {
  font-family: 'oxaniumbold';

    margin-right: 10px;
}

.itemb2 a,.itemb3 a {
    text-decoration: none;
    color: #000;
}

.itemb2 a:hover,.itemb3 a:hover {
    opacity: 0.5;
}

.itemb1 h1,
.itemb2 a,
.itemb3 a {
  font-family: 'oxaniumbold';

    font-size: 16px;
    font-weight: 100px;
    line-height: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.itemb5 h1 {
    font-size: 32px;
    font-weight: 400;
    line-height: 40px;
    text-transform: uppercase;
    letter-spacing: 2px;
}

.vv {
    width: 100vw !important;
}

.menupage {
    transition: all 1s;
    width: 0vw;
    margin: 0;
    height: 100vh;
    position: absolute;
    top: -8px;
    right: 50%;
    left: 50%;
    transform: translateX(-50%);
    background-color: #9FAFC3;
}

.link:hover .menupage {
    width: 100vw;
}
body{
    margin: 0;
}

.main {
    
   
  
    width: 100vw;
    height: 100vh;
}

.link img {
    position: absolute;
    top: 50%;
    right: 50%;

    left: 50%;
    transform: translate(-50%, -50%);
}

.link {
    visibility: hidden;
    width: 50px;
    height: 40px;
    background-color: #9FAFC3;
    z-index: 1000000000000000000000000000000000000000000;
    position: fixed;
    top: 0;
    right: 50%;
    transition: color 0.5s;
    left: 50%;
    transform: translateX(-50%);
    transition: color 1s ease-in-out;

}

.link:hover {
    background-color: #f4f4f4;
    transition: color 1s ease-in-out;
}
html,body{
  overflow-x: hidden;
}

html {
    margin: 0;
    padding: 0;
}

.squir {
    width: 90vw;
    z-index: -1000000000000;
    position: absolute;
    top: 350px;
    left: 50%;
    transform: translate(-50%, -50%);
    height: 90vh;
    background-color: #f9f9f9;
}

.imgg {
    opacity: 0.1;
    transition: delay opacity 3ms;
    ;
}

.onload {
    opacity: 1;
    transition: opacity 1s ease-in-out;
}

body {
    padding-left: 10px !important;

    overflow-x: hidden;
    position: relative;
    background-color: #fff;
    white-space: nowrap;
}
html{
  width: 100vw;
  
}
.container {
    width: 100vw;
    height: 100vh;
    display: grid;
    grid-template-columns: 1fr 1fr;
    grid-template-rows: 6;
    grid-template-areas:
        "header header header header"
        "left left right right"
        "left left right right"
        "left left right right"
        "left left right right"
        "left left right right"

}

.itemb1 {
    grid-area: darkligh;
}

.itemb2 {
    grid-area: lrdsi;

}

.itemb2 h1,
.itemb2 p {
    display: inline;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: 700;
    font: 12px/30px;
    text-transform: uppercase;
    color: #6DAFA7;

}
.inputLink{
    position: relative;
}

.inputLink .button1 {
    width: 190px;
    height: 55px;
    background-color: #FFDE66;
    margin-right:10px;
    border-radius: 20;
    color:#fff;
    font-size: 16px;
    border: none !important;
  

}
.inputLink .button2 {
    width: 190px;
    height: 55px;
color:#0aaf60 !important ; 
border: #0aaf60 solid 2px;
   border-radius: 10;
   background-color: #f4f4f4;
    color:#fff;
    font-size: 16px;
    border: none !important;
  

}

.itemb3 {
    grid-area: search;
}

.itemb4 {
    grid-area: glob;
}

.itemb5 {
    grid-area: text;
    margin-left: 10px;
}


.item1 {
    padding-left: 15px !important;

    grid-area: header;
    display: grid;
    grid-template-columns: 0.5fr 7fr 0.5fr 1fr;
    grid-template-rows: 1fr 1fr;
    grid-template-areas:
        "darkligh lrdsi  search glob"
        "text text text text";
    height: 30vh;


}

;

.glob {
    grid-area: globglob;
}

.item2 .su {
    grid-area: leftL;
    margin-left: 30px !important;

}

.item2 {
    grid-area: left;

    margin-top: 50px;
    margin-left: 20px;
}

;

.item3 {
    grid-area: right;

}

;

.cin {
    width: 100vw;
    height: 100vh;
    position: absolute !important;
    top: 50%;
    left: 50%;
}

.point {
    z-index: 100000000000000000;
    display: inline-block;
    width: 4px;
    height: 4px;
    margin-top: 25px !important;
    background-color: black;
    margin-right: 50px;
    border-radius: 50%;
}

.lang {
    grid-area: lang;
    width: 60px;
    font-size: 10px;
    padding: 5px;
    display: inline;
    height: 15px;
    font-family: Arial, Helvetica, sans-serif;
    text-transform: uppercase;
    color: white;
    text-align: center;
    background-color: #2D5ABF;
    border-radius: 10px;
}




.skils{
  
    width:100vw;
    padding: 0;
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    align-content: flex-start;


}


.skil{
    
    height:200px;
margin: 20px;
    border:5px solid black;
    font-family: ' roboto mono' , monospace;
    flex-basis: 300px;
    margin-bottom: 20px;
    min-width: 0 ;
    min-height: 0;
    
    
    
    
}


.center-skil .skil{
    height:200px;
    max-width: 300px;
    flex-basis: 300px;
    align-self: center;
    border:5px solid black !important;
    margin-right: 20px ;margin-left: 20px ;

}
.seconde-section i{
    font-size: 80px;
    margin-bottom: 20px;
    
}
.skil-title{
    font-size: larger;
    color: black;
    margin-bottom: 10px;
    transition: color 0.5s;
    
}
.projects-title h2{
    font-size:50px;
    text-align: center;
     font-family: 'oxaniumbold'; 
    margin-bottom: 70px;
}
.thed{
    background-color: hsl(0, 2%, 78%);
    position: relative;

}
.thed .skil{
    margin-bottom: 40px;
    width:30%;
    height:400px !important;
    
    
}

.thed .skil a{
    top:80%;
    left:30%;
    text-decoration: none;
    color:#000;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    position: absolute;
   font-size: 20px;
    
    
    transition: opacity 0.5s,visibility 0.5s,top 0.5s;
    
}
.thed .skil:hover  a{
    opacity: 1;visibility: visible;top:50%;
}
.layerf{
    position: relative;
}
 .layerf:after{
    content: "";
    position: absolute;
    width: 0%;
    height:0%;
    color:#fff;
    background-color: black !important;
    z-index: -1;
    
}
.thed .layerf:after{
    top:0;left: 0;
    width: 100%;
    position: absolute;
    background-color: #5d92fe !important;
    z-index: 2;
    opacity: 0.8;
    transition: width 0.5s,height 0.5s;
    
}
.skil:hover:after .thed .skil a{
    opacity: 1;
    visibility: visible;
}
.layerf:hover:after{
    width:101%;
    height:100%;
}
.layerf:hover .skil-title{
    color:#fff;
} 
.layerf:hover  i{
   color:white;
}
.layerf i{transition: color 0.5s;}
.projects-title{
    font-size:30px;
    text-align: center;
    font-family: monospace;
    margin-bottom: 70px;
}
.thed{
    background-color: hsl(0, 2%, 78%);
    position: relative;

}
.thed .skil{
    margin-bottom: 40px;
    width:30%;
    height:400px !important;
    
    
}

.thed .skil a{
    top:80%;
    left:30%;
    text-decoration: none;
    color:#000;
    text-align: center;
    opacity: 0;
    visibility: hidden;
    position: absolute;
   font-size: 20px;
    
    
    transition: opacity 0.5s,visibility 0.5s,top 0.5s;
    
}
.thed .skil:hover  a{
    opacity: 1;visibility: visible;top:50%;
}

footer .social-btn {

    vertical-align:middle ;
    text-align: center;
    display: inline-block;
   
    background:#0aaf60;
    margin: 10px;
    border-top-left-radius: 20px;
    border-bottom-right-radius: 20px;
    box-shadow: 0px 5px 10px 0px #909090;
    color: #ffffff;
    overflow: hidden;
    position: relative;
    border: 1px dotted #fff;
}
footer .social-btn  span{
    font-size: 22px;
    transition: 0.2s linear;
}
footer .social-btn:hover  span {
    transform: scale(1.2) !important;
    color: #C8102E !important;
  
}
footer .social-btn::before {
    content: "";
    position: absolute;
    width: 150%;
    height: 150%;
    background: #ffffff;
    transform: rotate(45deg);
    left: -110%;
    top: 90%;
}
footer .social-btn:hover::before {
    animation: effect 0.6s 1;
    top: -10%;
    left: -10%;
    
    

}
.menubar{
    position: fixed;
    left: -20%;
    top: 0;
    width: 20%;
    height: 100vh;
    background-color: #000;
}
.menu:hover + .menubar{
    left: 0%;
}
.menu {
  background-image: url('flag-solid.svg') ;
  
  border: none;
width: 30px;
height: 30px;
  color: white;
  
  cursor: pointer;
}

/*-- Hover Animation Effect --*/
@keyframes effect {
    0% {
        left: -120%;
        top: 100%;
    }
    50% {
        left: 10%;
        top: -30%;
    }
    100% {
        top: -10%;
        left: -10%;
    }
}
a span{
  display: block;
  font-size: 24px;
  font-weight: 700;
  padding: 10px 40px;
  transition: all 0.3s;
  font-family: Arial, Helvetica, sans-serif;

}
a{
    text-decoration:none ;

}
@media (max-width: 576px){
footer .social-btn {
    width: 40px;
    height: 40px;
    margin: 5px;
}
footer .social-btn span {
    font-size: 18px;
}
}

@import url('https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap');
.right{
  padding: 90px;
}
 .body {
	 font-family: sans-serif;
	 background-color: #fed4fd;
}
 .body section {
	 width: 100vw;
	 max-height: 100vh;
	 min-height: 100vh;
	 display: flex;
	 align-items: center;
	 justify-content: space-between;
}
 .body section .right {
	 z-index: 1;
	 width: 50%;
}
 .body section .right h1 {
	 text-decoration: underline dashed;
	 
	 font-family: 'Alfa Slab One', cursive;
	 font-size: 16px;
}
 .body section .right h1 span {
	
	 line-height: 0.89;
}
 @media (max-width: 600px) {
	 .body section .right h1 {
		 white-space: normal;
	}
}
 .body section .right p {
	 letter-spacing: 1px;
	 font-size: clamp(1rem, 2rem, 1.45rem);
	 max-width: 85%;
	 border: 3px solid;
	 padding: 6px;
	 margin: 1.5rem 0;
}
 .body section .right p span {
	 position: relative;
}
 .body section .right p span:before {
	 content: "";
	 position: absolute;
	 top: 50%;
	 width: 1rem;
	 height: 0.5rem;
	 background: black;
}
 .body section .right .btns button {
	 width: fit-content;
	 display: inline-block;
	 font-size: 1.25rem;
	 font-weight: bold;
	 background-color: transparent;
	 border: 0;
	 padding: 0.75rem 1.5rem;
	 text-decoration: underline;
	 cursor: pointer;
	 transition: all 0.2s ease;
}
 .body section .right .btns button.brutal {
	 background-color: white;
	 border: 3px solid;
	 box-shadow: 4px 5px 0 black;
}
 .body section .right .btns button.brutal:hover {
	 transform: translate(-3px, -3px);
	 box-shadow: 7px 8px 0 black;
}
 .body section .right .btns button:not(.brutal):hover {
	 transform: rotate(-3deg);
}
 @media (max-width: 600px) {
	 .body section .right {
		 width: 100%;
	}
}
 .body section .right,.left {
	 width: 50%;
	 position: relative;
}
 .body section .left img {
	 object-fit: cover;
	 width: 80%;
	 height: 100%;
	 border: 6px solid;
	
}
.img1{
    width: 1000px;
}
.img1 img {
	 object-fit: cover;
	 width: 100% !important;
	 height: 100% !important;
	 border: 6px solid;
	 
}

 .body section .left img:hover {
	 transform: rotate(-3deg);
	 animation: filter 0.2s ease-in 0s 2;
}
 .body section .left:after {
	 content: "";
	 display: block;
	 width: 75px;
	 height: 90px;
	 position: absolute;
	 bottom: -40px;
	 right: 55px;
	 background-image: linear-gradient(-45deg, transparent 15px, #111 15px), linear-gradient(45deg, transparent 10px, #111 10px);
	 background-size: 10px 10px;
}
 @media (max-width: 600px) {
	 .body section .right {
		 width: 100%;
	}
}
 @media (max-width: 600px) {
	 .body section {
		 flex-direction: column;
		 align-items: flex-start;
		 gap: 1.5rem;
	}
}
 @keyframes filter {
	 10% {
		 filter: none;
	}
	 25% {
		 filter: grayscale(100%) invert(70%) saturate(80%);
	}
}

.img{
    
    max-width: 600px;
     
     color: #5d92fe;
 }
 .skil .img{
    width: 100%;
   
}

@keyframes wonderfull{
    from { margin-top: 0; }
    50%  { margin-top: -10px;  } /* ignorée */
    to   { margin-top: 0;  }
}
.pricing .skil .last-pixle-character{
    position: absolute;
   transform: scale(60%) translate(-50%,-70%);
   
    
}


@import url("https://fonts.googleapis.com/css?family=Open+Sans:400,700");

/* RESET RULES
–––––––––––––––––––––––––––––––––––––––––––––––––– */
:root {
  --white: #afafaf;
  --red: #e31b23;
  --bodyColor: #292a2b;
  --borderFormEls: hsl(0, 0%, 10%);
  --bgFormEls: hsl(0, 0%, 14%);
  --bgFormElsFocus: hsl(0, 7%, 20%);
}





.contact input,
.contact select,
.contact textarea,
.contact button {
  font-family: inherit;
  font-size: 100%;
}

.contact button,
.contact label {
  cursor: pointer;
}

.contact select {
  appearance: none;
}

/* Remove native arrow on IE */
select::-ms-expand {
  display: none;
}


select:-moz-focusring {
  color: transparent !important;
  text-shadow: 0 0 0 var(--white);
}

.contact textarea {
  resize: none;
}

.contact ul {
  list-style: none;
}

.contact {
  font: 18px/1.5 "Open Sans", sans-serif;
  background: var(--bodyColor);
  color: var(--white);
  margin: 1.5rem 0;
}

.contact .container {
  max-width: 800px;
  margin: 0 auto;
  padding: 0 1.5rem;
}

.menu{
    position: fixed;
    left: 0;
    top: 20%;
}

.my-form h1 {
  margin-bottom: 1.5rem;
}

.my-form li,
.my-form .grid > *:not(:last-child) {
  margin-bottom: 1.5rem;
}

.my-form select,
.my-form input,
.my-form textarea,
.my-form button {
  width: 100%;
  line-height: 1.5;
  padding: 15px 10px;
  border: 1px solid var(--borderFormEls);
  color: var(--white);
  background: var(--bgFormEls);
  transition: background-color 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25),
    transform 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.my-form textarea {
  height: 170px;
}

.my-form ::placeholder {
  color: inherit;
  /*Fix opacity issue on Firefox*/
  opacity: 1;
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus,
.my-form button:enabled:hover,
.my-form button:focus,
.my-form input[type="checkbox"]:focus + label {
  background: var(--bgFormElsFocus);
}

.my-form select:focus,
.my-form input:focus,
.my-form textarea:focus {
  transform: scale(1.02);
}

.my-form *:required,
.my-form select {
  background-repeat: no-repeat;
  background-position: center right 12px;
  background-size: 15px 15px;
}

.my-form *:required {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg);  
}

.my-form select {
  background-image: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/down.svg);
}

.my-form *:disabled {
  cursor: default;
  filter: blur(2px);
}


/* FORM BTNS
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form .required-msg {
  display: none;
  background: url(https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/asterisk.svg)
    no-repeat center left / 15px 15px;
  padding-left: 20px;
}

.my-form .btn-grid {
  position: relative;
  overflow: hidden;
  transition: filter 0.2s;
}

.my-form button {
  font-weight: bold;
}

.my-form button > * {
  display: inline-block;
  width: 100%;
  transition: transform 0.4s ease-in-out;
}

.my-form button .back {
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translate(-110%, -50%);
}

.my-form button:enabled:hover .back,
.my-form button:focus .back {
  transform: translate(-50%, -50%);
}

.my-form button:enabled:hover .front,
.my-form button:focus .front {
  transform: translateX(110%);
}


/* CUSTOM CHECKBOX
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.my-form input[type="checkbox"] {
  position: absolute;
  left: -9999px;
}

.my-form input[type="checkbox"] + label {
  position: relative;
  display: inline-block;
  padding-left: 2rem;
  transition: background 0.3s cubic-bezier(0.57, 0.21, 0.69, 1.25);
}

.my-form input[type="checkbox"] + label::before,
.my-form input[type="checkbox"] + label::after {
  content: '';
  position: absolute;
}

.my-form input[type="checkbox"] + label::before {
  left: 0;
  top: 6px;
  width: 18px;
  height: 18px;
  border: 2px solid var(--white);
}

.my-form input[type="checkbox"]:checked + label::before {
  background: var(--red);
}

.my-form input[type="checkbox"]:checked + label::after {
  left: 7px;
  top: 7px;
  width: 6px;
  height: 14px;
  border-bottom: 2px solid var(--white);
  border-right: 2px solid var(--white);
  transform: rotate(45deg);
}


/* FOOTER
–––––––––––––––––––––––––––––––––––––––––––––––––– */
.contact footer {
  font-size: 1rem;
  text-align: right;
  backface-visibility: hidden;
}

.contact footer a {
  text-decoration: none;
}

.contact footer span {
  color: var(--red);
}


/* MQ
–––––––––––––––––––––––––––––––––––––––––––––––––– */
@media screen and (min-width: 600px) {
  .my-form .grid {
    display: grid;
    grid-gap: 1.5rem;
  }

  .my-form .grid-2 {
    grid-template-columns: 1fr 1fr;
  }

  .my-form .grid-3 {
    grid-template-columns: auto auto auto;
    align-items: center;
  }

  .my-form .grid > *:not(:last-child) {
    margin-bottom: 0;
  }

  .my-form .required-msg {
    display: block;
  }
}

@media screen and (min-width: 541px) {
  .my-form input[type="checkbox"] + label::before {
    top: 50%;
    transform: translateY(-50%);
  }

  .my-form input[type="checkbox"]:checked + label::after {
    top: 3px;
  }
}
@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap");



.navigation {
  position: fixed;
  z-index: 1000;
  top: 0;
  left: 0;
  width: 50px;
  height: 100%;
  background: #fff;
  overflow: hidden;
  transition: 0.5s;
}

.navigation:hover,
.navigation.active {
  width: 200px;
}

.navigation ul {
  position: absolute;
  top: 10px;

  left: -90px;
  width: 100%;
}

.navigation ul li {
  position: relative;
  width: 100%;
  list-style: none;
  transition: 1s;
}

.navigation ul li:hover {
  background: #3e3e3e;
}

.navigation ul li a {
  position: relative;
  display: block;
  width: 100%;
  display: flex;
  text-decoration: none;
  color: #000000;
}

.navigation ul li a .icon {
  position: relative;
  display: block;
  min-width: 60px;
  margin: 0;
  padding-right: 0;
  height: 60px;
  line-height: 60px;
  text-align: center;
}

.navigation ul li a .icon .fa {
  font-size: 24px;
}

.navigation ul li a .title {
  position: relative;
  display: block;
  padding: 0 10px;
  height: 60px;
  line-height: 60px;
  text-align: start;
  white-space: nowrap;
}

.toggle {
    visibility: hidden;
    opacity: 0;
  position: absolute;
  top: 0;
  right: 0;
  width: 60px;
  height: 60px;
  background: #074848;
  cursor: pointer;
  transition: 0.7s;
  z-index: 100000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000000;
}

.toggle.active {
  background: #ff7700;
}

.toggle::before {
  content: "\f0c9";
  font-family: fontAwesome;
  position: absolute;
  width: 100%;
  height: 100%;
  line-height: 60px;
  text-align: center;
  font-size: 24px;
  color: #fff;
}

.toggle.active::before {
  content: "\f00d";
}

@media (max-width: 767px) {
  .navigation {
    left: -60px;
  }
  .navigation.active {
    left: 0px;
    width: 100%;
  }
  .toggle{
    visibility: visible !important;
    opacity: 1 !important;
  }
}
@media (max-width: 1352px) {
  .itemb5 h1,.itemb5 span{
    font-size: 20px !important;
  }

  }
  @media (max-width: 1043px) {

  .itemb5 h1,.itemb5 span{
    font-size: 15px !important;
  }
  .imgg{
    max-width: 50% !important;z-index: -1000000000;
  }
}
  @media (max-width: 773px) {
  .left {
  max-width: 350px;
}
  .imgg{
    top:300 !important;
    
  }
  .itemb5 h1,.itemb5 span{
    font-size: 10px !important;
  }
}
  @media (max-width: 663px) {
  .su h1{
    font-size: 40px !important;
  }
  .imgg{
    max-width: 350px !important;
    opacity: 0.3;

  }
  .itemb5 h1,.itemb5 span{
    font-size: 10px !important;
  }
.su{
  margin: 0 !important;
}
.social-links{
  margin-top: 40px;
}

  }
  html{
   height: 100%;
  }
  @media (max-width: 546px) {
  input,select,textarea{
    width: 50% !important;
  }
  .itemb2{
    visibility: hidden;
    position: absolute;
    top:600px;
  }
  
}
@media (max-width: 467px){
  .item1,.itemb5,h1,body{
  padding: 0 !important; 
  margin: 0 !important;
}


  
}
@media (max-width: 376px){
  .item2,.right,.head{
  padding: 0;
  margin-left: 0 !important;
}
.right,.head{
  font-size: 12px !important;
}



  
}

section{
  max-width: 100vw;
  
}
.projects-title{
    font-size:30px;
    text-align: center;
    font-family: monospace;
    margin-bottom: 70px;
}
.body,.messages{
  position: absolute;
  top: 0;
  left: 0;
  width: 0 ;
  opacity: 0;
  visibility: hidden;
  transition: all 1s;

}
.messages{
  left: 4% !important;
  
 
}

.body.active,.messages.active{
  width: 100vw !important;
  visibility: visible;
  opacity: 1;
  
}
.messages{
  top: 20px !important;
  background-color: white;
  height: 100vh;
  
  
}
.body.Lrdsi{
  background-color: #5d92fe;
}
form button{
  width: 100px !important;
}
HTML CSSResult Skip Results Iframe

.bstext{color:#FFF;margin-bottom:15px;border-radius:3px;padding:10px}

.bserror{background-color: #efffff;}
.headertext{font-size:16px;background-color:rgba(0,0,0,0.30);padding:8px 10px;margin:-10px;margin-bottom:10px}
.headertext > .fa{margin-right:5px}
.bloggerspice {overflow: hidden;}




.imgg {
  perspective: 1000px; /* Set the perspective for 3D effect */
  transition: transform 0.5s; /* Add transition for smooth animation */
}

.imgg:hover {
  transform: rotateY(-45deg); /* Rotate the image on hover */
}
</style>

<?php

include("database.php");

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["text"])) {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $text = $_POST["text"];

        $sql = "INSERT INTO `MSG` (`name`, `email`, `text`) VALUES ('$name', '$email', '$text')";
        if (!mysqli_query($conn, $sql)) {
            
        
            echo "Error inserting data: " . mysqli_error($conn);
        

        }
    } else {
        echo "Invalid data submitted.";
    }
  
}
mysqli_close($conn);

?>