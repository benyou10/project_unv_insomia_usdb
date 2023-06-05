<?php
$conn = mysqli_connect("localhost","root","","project");
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
            margin-left: 30px !important;
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
    i{
        color: #146F63;
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
        margin-top: 20px;
    }
 
    </style>
</head>
<body>
    
    <header>
        <div class="head">
        <a href="#" class="lrdsi"><img src="Web capture_13-5-2023_03853_www.univ-blida.dz.png" alt="logo" class="image">
            <label class="lrdsi">LRDSI</label></a>
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
    <p id="PublicationsInternationales"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Publications Internationales</h2><br>
    <?php
     $req1 = "SELECT * FROM publication WHERE Category='Publications_internationales'";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['Publication_Title']."</h3><br><h5><i>Jounal : </i>".$x['Journal']."<br><br><i>Autheurs : </i>".$x['Autheurs']."<br><br><i>Date : </i>".$x['Year']."</h5><br>";
     }
    ?>
    <p id="PublicationsNationales"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Publications Nationales</h2><br>
    <?php
     $req1 = "SELECT * FROM publication WHERE Category='Publications_nationales'";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['Publication_Title']."</h3><br><h5><i>Jounal : </i>".$x['Journal']."<br><br><i>Autheurs : </i>".$x['Autheurs']."<br><br><i>Date : </i>".$x['Year']."</h5><br>";
     }
    ?>
    <p id="CommunicationsInternationales"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Communications Internationales</h2><br>
    <?php
     $req1 = "SELECT * FROM comunication WHERE Category='Communications_internationales'";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['Title']."</h3><br><h5><i>Conference : </i>".$x['Conference']."<br><br><i>Autheurs : </i>".$x['Autheurs']."<br><br><i>Date : </i>".$x['Year']."</h5><br>";
     }
    ?>
    <p id="CommunicationsNationales"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Communications Nationales</h2><br>
    <?php
     $req1 = "SELECT * FROM comunication WHERE Category='Communications_nationales'";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['Title']."</h3><br><h5><i>Conference : </i>".$x['Conference']."<br><br><i>Autheurs : </i>".$x['Autheurs']."<br><br><i>Date : </i>".$x['Year']."</h5><br>";
     }
    ?>
    <p id="LogicielsetBrevets"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Logiciels et Brevets</h2><br>
    <?php
     $req1 = "SELECT * FROM logiciels WHERE Category='Logiciels_et_Brevets'";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['Title']."</h3><br><h5><i>Name : </i>".$x['Nom']."<br><br><i>Date : </i>".$x['Year']."</h5><br>";
     }
    ?>
    <p id="OuvragesetPolycopies"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Ouvrages et Polycopies</h2><br>
    <?php
     $req1 = "SELECT * FROM logiciels WHERE Category='Ouvrages_et_Polycopies'";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['Title']."</h3><br><h5><i>Name : </i>".$x['Nom']."<br><br><i>Date : </i>".$x['Year']."</h5><br>";
     }
    ?>
    <p id="ThesesdeDoctorat"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Thèses de doctorat</h2><br>
    <?php
     $req1 = "SELECT * FROM these";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['These_title']."</h3><br><h5><i>Nom et Prenom : </i>".$x['Name']."<br><br><i> Directeur(s) de thèse  : </i>".$x['Directeur_de_these']."<br><br><i>Date de soutenance  : </i>".$x['Year']."</h5><br>";
     }
    ?>
    <p id="MemoiresdeMagister"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Mémoires de Magister</h2><br>
    <?php
     $req1 = "SELECT * FROM memoire WHERE Category='Memoires_de_magister'";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['Memoire_title']."</h3><br><h5><i>Candidat  : </i>".$x['Candidat']."<br><br><i>Encadreurs  : </i>".$x['Encadreurs']."<br><br><i>Date de soutenance : </i>".$x['Year']."</h5><br>";
     }
    ?>
    <p id="MemoiresdeMaster"></p>
    <h2><i class="fa-regular fa-bookmark"></i> Mémoires de Master</h2><br>
    <?php
     $req1 = "SELECT * FROM memoire WHERE Category='Memoires_de_master'";
     $res1 = $conn->query($req1);
     while($x=mysqli_fetch_assoc($res1)) {
         echo"<h3>".$x['id']." - ".$x['Memoire_title']."</h3><br><h5><i>Candidat  : </i>".$x['Candidat']."<br><br><i>Encadreurs  : </i>".$x['Encadreurs']."<br><br><i>Date de soutenance : </i>".$x['Year']."</h5><br>";
     }
    ?>

    </div>
</body>
</html>