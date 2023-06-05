<?php
$conn = mysqli_connect("localhost:3307","root","","project");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membres</title>
    <script src="https://kit.fontawesome.com/fdf3d674f2.js" crossorigin="anonymous"></script>
    <style>
    i[onclick]{
        visibility: hidden;
        opacity: 0;
    }
    @media (max-width:800px) {
            i[onclick]{
        visibility: visible;
        opacity: 1;
        cursor: pointer;
    }
        .desplay, p{
           width: 80vw;
            margin-left: 10px !important;
        }
        nav{
            left: 0;
            width: 0;
            visibility: none;
            opacity: 0;
        }
    }
    *{
        margin: 0;
        padding: 0;
        user-select: none;
        box-sizing: border-box;
        position: relative;
        font-family: Arial, Helvetica, sans-serif;
    }

    a:hover{
        color: white;
        background-color: #146F63;
    }
    .navbar-container {
        position: absolute;
        width: 18%;
        height: 100%;
        left: 0px;
        top: 12vh;
        bottom: 0px;
        } 
    nav ul {
        height: 100%;
        width: 100%;
        list-style: none;
    }   
    nav ul li a {
        color: black;
        text-decoration: none;
        font-size: 17px;
        padding-left: 17vh;
        display: block;
        width: 100%; 
    }
    
    nav ul li a {
        line-height: 4.5vh;
    }
    nav ul ul li a {
        font-size: 14px;
        color:  grey;
        padding-left: 20vh;
    }
    nav li{
        margin-right: 30px;
    }
    nav{
        border-right: 2px solid grey;
        position: fixed;
        height: 100vh;
        transition: all 0.5s;
    }
    nav.active{
        width: 100vw;
        background-color: white;
        z-index: 10000;
       
                width: 100vw;
                visibility: visible;
                opacity: 1;
    }
    .lrdsi{
        font-size: 25px; 
        cursor: pointer;
        color: black;
        text-decoration: none;
        }
    .lrdsi:hover{
        background-color: white;
        color: black;
    }
    header{
        border-bottom: 2px solid grey;
        height: 12vh;
        position: fixed;
        width: 100vw;
        background-color: white;
        z-index: 100000;
    }
    .pres{
        padding-top: 5vh;
    }
    .fa-magnifying-glass{
        margin-left: 16vh;
    }
    .image{
        width: 6vh;
        height: 6vh;
        margin-left: 8%;
        top: 1.6vh;
    }
    .rechercher{
        width: 25vh;
        height: 4vh;
        border-radius: 12px;
        border: 0;
        background-color: cornsilk;
        text-align: center;
    }
    .desplay{
        max-width: 60%;
        white-space: pre-line;
        margin-left:400px ;
        cursor: text;
    }
    .desplay h2{
        text-align: center;
        margin-top: 100px;
        color: #146F63;
    }
    .desplay h3{
        color: #146F63;
        margin-left: -20px;
    }
    .linkxx{
        background-color: white;
        color: black;
        text-decoration: none ;
    }
    .linkxx:hover{
        background-color: transparent;
        color: #146F63;
    }
    </style>
</head>
<body>
    
    <header>
        <div class="head"> 
            <a href="#" class="lrdsi"><img src="logggo.png" alt="logo" class="image">
            <label for="" class="lrdsi">LRDSI</label></a>
            <i class="fa-sharp fa-solid fa-magnifying-glass"></i>
            <input type="search" class="rechercher" placeholder=" Rechercher"> 
            <i onclick="togglemenu()" class="fa-solid fa-sliders"></i>
            <script>
                function togglemenu(){
                    let nav=document.querySelector('nav');
                    nav.classList.toggle('active');
                }
            </script>
        </div>
    </header>
    <div class="navbar-container">
        <nav>
            <ul class="navbar">
                <li>
                    <a href="presentation.php#about" class="pres" ><i class="fa-solid fa-house"></i> Présentation</a>
                    <ul class="submenu">
                        <li><a href="presentation.php#about">About</a></li>
                        <li><a href="presentation.php#il">Information Laboratoire</a></li>
                        <li><a href="presentation.php#domaine">Domaines R&D</a></li>
                        <li><a href="presentation.php#projet">Projets</a></li>
                        <li><a href="presentation.php#contact">Contact</a></li>
                    </ul>
                </li>
                <li>
                    <a href="memberpage.php#intec"><i class="fa-solid fa-users"></i> Membres</a>
                    <ul class="submenu">
                        <li><a href="memberpage.php#intec">INTEC</a></li>
                        <li><a href="memberpage.php#bdd">BDD</a></li>
                        <li><a href="memberpage.php#rfa">RFA</a></li>
                        <li><a href="memberpage.php#siir">SIIR</a></li>
                    </ul>
                </li>
                <li>
                    <a href="recherchepage.php" class="Recherche"><i class="fa-solid fa-book-open"></i> Recherche</a>
                    <ul class="submenu">
                        <li><a href="Requipe.php#intec">Equipes</a></li>
                        <li><a href="Rprojet.php">Projets</a></li>
                        <li><a href="Rpublication.php">Publication</a></li>
                    </ul>
                </li>
                <li><a href="formation.php"><i class="fa-solid fa-pen"></i> Formation</a></li>
                <li><a href="contact.php"><i class="fa-solid fa-phone"></i> Contacts</a></li>
            </ul>
        </nav>
    </div>
    <div class="desplay">
        <p id="about"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Présentation</h2>
    <p>Le laboratoire de Recherche pour le Développement des Systèmes Informatisés (LRDSI) de l’université Saad Dahlab –Blida1, a été agréé en mai 2002 pour accompagner le département d’informatique créé en 1999, dans ses activités pédagogiques et scientifiques. Il est composé de quatre équipes regroupant plus de 30 enseignants chercheurs et 32 doctorants (LMD et classique). 

    Les missions du LRDSI s’articulent autour de trois axes principaux : recherche, valorisation - transfert de technologie et formation. Sa vocation est de développer un savoir-faire, au service de la société en liaison étroite avec les disciplines Ingénierie, Sciences Humaines et Sociales, Sciences de l'environnement et Sciences de la Vie. 

    Les thèmes de recherche du laboratoire couvrent un large spectre des sciences de l’informatique à dominante logicielle et incluent à la fois, des aspects fondamentaux et des aspects appliqués : algorithmique, combinatoire, graphes, programmation, génie logiciel, vérification et preuves, parallélisme, calcul à haute performance, réseaux, bases de données, extraction et représentation des connaissances, apprentissage, fouille de données, interaction homme-machine, aide à la décision, etc.  

    Les enseignants-chercheurs du LRDSI participent activement à la formation des étudiants inscrits dans les spécialités informatiques des trois niveaux du L (Licence), M (Master) et D (Doctorat) mis en place à chaque rentrée universitaire. 
    
    Nadjia Benblidia, 
    Directrice du Laboratoire </p>
    <p id="il"></p>
    <h2>Information Laboratoires</h2><br>
    <h4><a href="memberpage.php" class="linkxx"> Membres et Equipes </a></h4>
    <h4><a href="Rpublication.php" class="linkxx">Publications et Soutenances</a></h4>
    <p id="domaine"></p>
    <h2>Domaines R&D</h2><br>
    <h4><a href="Requipe.php#intec" class="linkxx">Intelligence Computationnelle</a></h4>
    <h4><a href="Requipe.php#bdd" class="linkxx">Big Data et Systèmes Décisionnels</a></h4>
    <h4><a href="Requipe.php#rfa" class="linkxx">Reconnaissance Des Formes et Applications</a></h4>
    <h4><a href="Requipe.php#siir" class="linkxx">Sécurité De Systèmes Informatiques et Raisonnement</a></h4>
    <p id="projet"></p>
    <h2>Projets</h2><br>
    <h4><a href="Rprojet.php#projetsnationauxderecherche" class="linkxx">Projets Nationaux de Recherche (PNR)</a></h4>
    <h4><a href="Rprojet.php#projetscnepru" class="linkxx">Projets Cnepru</a></h4>
    <h4><a href="Rprojet.php#projetsdecooperationinternationale" class="linkxx">Projets de coopération internationale</a></h4>
    <p id="contact"></p>
    <h2>Contact</h2>
    </div>
</body>
</html>