<html>
    <style>
    .contact {
    display: flex;
    width: 1200px;
    margin: auto;
    }
    .box{
    width: 600px; 
    display: block;
    justify-content: right;
    margin-top: 30px;
    margin-right: 200px;
    font-family: Arial, Helvetica, sans-serif;
    }
    .form{
    border-radius:10px;
    padding:20px 30px;
    font-size:14px;
    font-weight:bold;
    width:600px;
    margin:20px 250px 0 35px;
    float:left;
    }
    h3{
    text-align: left;
    font-size:30px;
    font-weight: bold;
    font-family: Arial Black;
    }
    label{
    margin-top:15px;
    margin-bottom:15px;
    }
    input{
    width:100%;
    height:35px;
    margin-top:20px;
    margin-bottom: 20px;
    border:1px solid #999;
    border-radius:8px;
    padding:5px;
    }
    input[type=submit]{
    background: linear-gradient(to top right, #035cff, #4BA3FD);
    border:1px solid white;
    font-family: serif;
    font-Weight:bold;
    font-size:18px;
    margin-top:15px;
    color:white;
    font-family: Arial, Helvetica, sans-serif;
    }
    input[type=submit]:hover {
    transition: all 1s ease;
    border-radius: 50px;
    }
    textarea{
    width:100%;
    height:80px;
    margin-top:5px;
    border-radius:3px;
    padding:5px;
    resize:none;
    }
    span{
    color:red
    }
    .successMessage{
        background-color: #7acc7d;
        border: #2b5a2d 1px solid;
        padding: 5px 9px;
        color: #262b26;
        border-radius: 4px;
        cursor: pointer;
        font-size: 0.9em;
    }
    .errorMessage{
        background-color: #e64141;
        border: #da1414 1px solid;
        padding: 5px 10px;
        color: #fdf7f7;
        border-radius: 4px;
    }
    .info{
        font-size: 0.9em;
        color: #d67262;
        letter-spacing: 2px;
        padding-left: 5px;
    }  



    .reseaux_contact ul li a {
        list-style: none;
        text-decoration: none;
    }  

    .reseaux_contact {
        width: 100%;
        justify-content: space-between;
        align-items: center;
        margin-top: 150px;
        margin-left: 100px;
    }

    .reseaux_contact a {
        font-family: Arial, Helvetica, sans-serif;
        color: #050f1a;
        font-size: 16px;
        font-weight: bold;
        display: flex;
    }

    .reseaux_contact a p {
        margin-top: 10px; 
        margin-left: 5px;
    }

    .reseaux_contact a:hover {
        transition: all 0.5s ease;
        color: #1680F0;
    }

    .reseaux_contact img {
        height: 35px;
        width: 35px;
    }

    .reseaux_contact ul {
        display: flex;
        flex-direction: column;
    }

    .reseaux_contact ul li {
        margin: 10px 10px;
    }

    li {
        height: 35px;
    }

    .reseaux_contact .mail_contact:hover {
        color:#050f1a;
    }

    @media screen and (max-width: 1350px) {

    .contact {
        width: 1000px;
    }

    .form {
        margin-left: 25px;
    }
    
    .reseaux_contact {
        margin-left: -100px;
    }

    }

    @media screen and (max-width: 1150px) {

    .contact {
        width: 800px;
    }

    .box {
        width: 500px;
    }

    .form {
        width: 500px;
        margin-left: 0px;
    }
    
    .reseaux_contact {
        width: 250px;
        margin-left: -140px;
    }

    .reseaux_contact ul {
        width: 245px;
    }

    }

    @media screen and (max-width: 1050px) {
    
    .contact {
        justify-content: center;
        align-items: center;
        width: 600px;
        flex-direction: column;
    }

    .box {
        margin-right: 0px;
    }

    .reseaux_contact {
        margin-left: 0px;
    }

    }


    @media screen and (max-width: 1050px) {

    .contact {
        width: 400px;
    }

    .box {
        width: 400px;
    }

    .form {
        width: 400px;
    }

    }

    @media screen and (max-width: 1050px) {

    .contact {
        width: 300px;
    }

    .box {
        width: 300px;
    }

    .form {
        width: 300px;
    }

    .reseaux_contact img {
        width: 30px;
        height: 30px;
    }

    .reseaux_contact ul {
        width: 250px;
    }

    }

     </style>

<?php

// Inutile d'expliquer la présence du session_start().
session_start();

// { Début - Première partie
if(!empty($_POST) OR !empty($_FILES))
{
    $_SESSION['sauvegarde'] = $_POST ;
    $_SESSION['sauvegardeFILES'] = $_FILES ;
    
    $fichierActuel = $_SERVER['PHP_SELF'] ;
    if(!empty($_SERVER['QUERY_STRING']))
    {
        $fichierActuel .= '?' . $_SERVER['QUERY_STRING'] ;
    }
    
    header('Location: ' . $fichierActuel);
    exit;
}
// } Fin - Première partie

// { Début - Seconde partie
if(isset($_SESSION['sauvegarde']))
{
    $_POST = $_SESSION['sauvegarde'] ;
    $_FILES = $_SESSION['sauvegardeFILES'] ;
    
    unset($_SESSION['sauvegarde'], $_SESSION['sauvegardeFILES']);
}
// } Fin - Seconde partie

?>

<?php 

if (isset($_POST['submit'])) {

    extract($_POST);

    if (!empty($subject) and !empty($name) and !empty($email) and !empty($message)) {

        $to = "contact@shyrph.fr";

        $subject = htmlspecialchars(htmlentities(trim($subject)));
        $name = htmlspecialchars(htmlentities(trim($name)));
        $name = htmlspecialchars(htmlentities(trim($name)));
        $message = htmlspecialchars(htmlentities(trim($message)));

//        $header = "From:\"$name\"<$from>\n";
//        $header .= "Reply-To:$from\n";
//        $header .= "Content-Type:text/html; charset=\"iso-8859-1\"";

        $header = "MIME-Version: 1.0\r\n";
        $header .= "Content-type: text/html; charset=UTF-8\r\n";
        $header .= "From:\"$name\"<$email>\n";
        $header .= "Reply-To:$email\n";

        $message = htmlentities($_POST['message'],ENT_QUOTES,"UTF-8");
        
        if (mail($to, $subject,nl2br($message), $header)) {

            echo "Votre message a bien été envoyé";
        }
        else {
             
            echo "Echec de l'envoi";
        }

    }
}

?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes" />

    <title>Shyrph | Contact</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/accueil.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
</head>

<body>

    <header>
        <nav class="banner">  

            <a href="index.html" class="logo" title="Page d'accueil"><img src="image/shyrph2.png"></a>

            <div class="menu">
                <ul>
                    <li><a href="news.html" title="Nos actualités">NEWS</a></li>
                    <li><a href="equipe.html" title="Présentation de l'équipe">EQUIPE</a></li>
                    <li><a href="projets.html" title="Les futurs projets de l'équipe">PROJETS</a></li>
                    <li><a href="contact.php" title="Entrer en contact avec nous">CONTACT</a></li>
                    <li><a href="boutique.html" title="Découvrez nos maillots">BOUTIQUE</a></li>
                </ul>
            </div>

            <a href="index.html" class="logo2" title="Page d'accueil"><img src="image/shyrph2.png"></a>
                
            <a class="menu-hamburger" onclick="lockScroll()">
                <img src="image/menu-btn.png"> 
            </a>       
        </nav>
    </header>

    <div class="contenu">

        <div class="contenu">

        <div class="titre">
            <span>
                Nous contacter
            </span>

            <div class="ligne2">
            </div>
        </div>

        <div class="contact">
            <div class="box">
                <form class="form" method="post">
                <label>Nom : <span>*</span></label>
                <input required="" type="text" class="name" name="name" placeholder="Nom"/>
                <label>Email : <span>*</span></label><span class="info" class="info"></span>
                <input required="" type="email" class="email" name="email" placeholder="Email"/>
                <label>Sujet : <span>*</span></label>
                <input required="" type="text" class="subject" name="subject" placeholder="Demande de renseignement"/>
                <label>Message :</label>
                <textarea required="" class="message" name="message" placeholder="Message..."></textarea>
                <input type="submit" name="submit" value="Envoyer le message"/>
                <div class="statusMessage"> 
                </div>
                </form>
            </div>

<!--            <nav class="bas_contact">

                <div class="reseaux_hover_contact">
                    <ul>
                        <li><a href="https://www.instagram.com/shyrph/" target="_blank" title="Rejoignez-nous sur Instagram"><img src="image/reseaux/instagram.png"></a></li>
                        <li><a href="https://twitter.com/Shyrph" target="_blank" title="Rejoignez-nous sur Twitter"><img src="image/reseaux/twitter.png"></a></li>
                        <li><a href="https://discord.gg/3WJ9Bzt6aK" target="_blank" title="Rejoignez-nous sur Discord"><img src="image/reseaux/discord.png"></a></li>
                        <li><a href="https://www.youtube.com/@shyrph746" target="_blank" title="Rejoignez-nous sur Youtube"><img src="image/reseaux/youtube.png"></a></li>
                    </ul>
               </div>
-->     
            <div class="reseaux_contact">
                <ul>
                    <li><a class="mail_contact" title="Envoyez-nous un mail"><img class="mail_contact" src="image/reseaux/mail.png"><p> : contact@shyrph.fr</p> </a></li>
                    <li><a href="https://www.instagram.com/shyrph/" target="_blank" title="Rejoignez-nous sur Instagram"><img class="insta_contact" src="image/reseaux/instagram.png"><p> : Instagram</p></a></li>
                    <li><a href="https://twitter.com/Shyrph" target="_blank" title="Rejoignez-nous sur Twitter"><img class="tw_contact" src="image/reseaux/twitter.png"><p> : Twitter</p></a></li>
                    <li><a href="https://discord.gg/3WJ9Bzt6aK" target="_blank" title="Rejoignez-nous sur Discord"><img class="disc_contact" src="image/reseaux/discord.png"><p> : Discord</p></a></li>
                    <li><a href="https://www.youtube.com/@shyrph746" target="_blank" title="Rejoignez-nous sur Youtube"><img class="yt_contact" src="image/reseaux/youtube.png"><p> : Youtube</p></a></li>
                </ul>
            </div>

        </div>
    </div>

    <footer>
        <nav class="bas">

            <div class="reseaux_hover">
                <ul>
                    <li><a href="https://www.instagram.com/shyrph/" target="_blank" title="Rejoignez-nous sur Instagram"><img src="image/reseaux/instagram.png"></a></li>
                    <li><a href="https://twitter.com/Shyrph" target="_blank" title="Rejoignez-nous sur Twitter"><img src="image/reseaux/twitter.png"></a></li>
                    <li><a href="https://discord.gg/3WJ9Bzt6aK" target="_blank" title="Rejoignez-nous sur Discord"><img src="image/reseaux/discord.png"></a></li>
                    <li><a href="https://www.youtube.com/@shyrph746" target="_blank" title="Rejoignez-nous sur Youtube"><img src="image/reseaux/youtube.png"></a></li>
                </ul>
            </div>

            <div class="reseaux">
                <ul>
                    <li><a href="https://www.instagram.com/shyrph/" target="_blank" title="Rejoignez-nous sur Instagram"><img class="insta" src="image/reseaux/instagram_blanc.png"></a></li>
                    <li><a href="https://twitter.com/Shyrph" target="_blank" title="Rejoignez-nous sur Twitter"><img class="tw" src="image/reseaux/twitter_blanc.png"></a></li>
                    <li><a href="https://discord.gg/3WJ9Bzt6aK" target="_blank" title="Rejoignez-nous sur Discord"><img class="disc" src="image/reseaux/discord_blanc.png"></a></li>
                    <li><a href="https://www.youtube.com/@shyrph746" target="_blank" title="Rejoignez-nous sur Youtube"><img class="yt" src="image/reseaux/youtube_blanc.png"></a></li>
                </ul>
            </div>

            <p class="copyright">© 2023 - Tous droits réservés - Designed by Univer's</p>
        </nav>
    </footer>

</body>

    <script>
        const menuHamburger = document.querySelector(".menu-hamburger");
        const navLinks = document.querySelector(".menu");
 
        menuHamburger.addEventListener("click",()=>{
            navLinks.classList.toggle("mobile-menu");
        });

        function lockScroll() {
            document.body.classList.toggle("lock-scroll");
        };
    </script>

</html>