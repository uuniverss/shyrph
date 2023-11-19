<?php

echo '

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=yes" />

    <title>Shyrph | Accueil</title>
    <link rel="shortcut icon" type="image/png" href="image/favicon.png">

    <link href="https://fonts.googleapis.com/css?family=Athiti&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/accueil.css">

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
</head>

<body>

    <header>
        <nav class="banner">  

            <a href="index.html" class="logo" title="Page d\'accueil"><img src="image/shyrph2.png"></a>

            <div class="menu">
                <ul>
                    <li><a href="news.html" title="Nos actualités">NEWS</a></li>
                    <li><a href="equipe.html" title="Présentation de l\'équipe">EQUIPE</a></li>
                    <li><a href="projets.html" title="Les futurs projets de l\'équipe">PROJETS</a></li>
                    <li><a href="contact.html" title="Entrer en contact avec nous">CONTACT</a></li>
                    <li><a href="boutique.html" title="Découvrez nos maillots">BOUTIQUE</a></li>
                </ul>
            </div>

            <a href="index.html" class="logo2" title="Page d\'accueil"><img src="image/shyrph2.png"></a>
                
            <a class="menu-hamburger" onclick="lockScroll()">
                <img src="image/menu-btn.png"> 
            </a>       
        </nav>
    </header>

<!--    <div class="slide-container">
        <div class="custom-slider fade">
            <img class="slide-img" src="image/papier.jpg">
        </div>
        <div class="custom-slider fade">
            <img class="slide-img" src="image/fond2.jpg">
        </div>
        <div class="custom-slider fade">
            <img class="slide-img" src="image/fond.png">
        </div>
        <a class="prev" onclick="plusSlides(-1)">❮</a>
        <a class="next" onclick="plusSlides(1)">❯</a>
    </div>
    <br>
    <div class="slide-dot">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(3)"></span>
    </div> -->
    
    <div class="contenu">

        <div class="titre">
            <span>
                Accueil
            </span>

            <div class="ligne2">
            </div>
        </div>

        <div class="slide-container">
            <div class="custom-slider fade">
                <img class="slide-img" src="image/papier.jpg">
            </div>
            <div class="custom-slider fade">
                <img class="slide-img" src="image/fond2.jpg">
            </div>
            <div class="custom-slider fade">
                <img class="slide-img" src="image/fond.png">
            </div>
<!--            <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a> -->
        </div>
        <br>
        <div class="slide-dot">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>

        <div class="banner2">

            <span>
                Nos partenaires nous soutiennent :
            </span>

            <nav class="partenaire">
                <div class="ligne">
                    <ul>
                        <li><a href="https://onex.gg/store/shyrph-esport/" title="Découvrez notre partenaire OneX"><img src="image/onex.png"></a></li>
                    </ul>
                </div>
            </nav>
        </div>

        <div class="presentation">
            <span>
                Le début d\'une grande aventure dans le monde de l\'esport...
            </span>
    
            <p class="texte1">
                Shyrph est une association esport, fondée le 18 Juin 2022 à la suite d’une idée de création d’un projet ayant pour but de révolutionner l’esport et sa vision des choses. 
            </p>

            <p class="texte2">
                En effet, la structure a pour objectif de rendre de l\'esport un endroit familial, et plus particulièrement faire de Shyrph une famille qui à pour but d\'atteindre des sommets dans l\'esport, grâce à joueurs dotés de grandes qualités.
            </p>

            <p class="texte3" title="En savoir plus">
                En savoir plus →
            </p>

<!--            <div class="separation">
                <div class="ligne">
                </div>
            </div> -->

            <p class="texte4">
                La team Shyrph est donc présente sur le jeu Fortnite, mais nous ne délaissons pas pour autant les autres jeux, qui arrivent très vite ! De plus, nous mettons en place de nombreux projets divers qui, nous espérons, sauront vous plaire, afin d\'une part de démocratiser l\'esport en apportant une nouvelle empreinte mais aussi pour récompenser notre communauté. Si vous voulez en savoir plus n\'hésitez pas à aller dans l\'onglet <a title="Les futurs projets de l\'équipe" href="projet.html">projets</a> pour en savoir plus.
            </p>

            <p class="texte5">
                Pour 2023, Shyrph compte bien gravir les échelons afin d\'atteindre le haut niveau esportif grâce notamment à notre contenu, mais aussi par le recrutement de très bons staffs et joueurs professionnels de l\'esport que vous pouvez retrouver dans l\'onglet <a title="Présentation de l\'équipe" href="equipe.html">équipe</a>, ou encore en repoussant les limites de l\'esport...
            </p>

            <p class="texte6">
                <a title="Réduire">Moins</a>
            </p>
        </div>
    </div>


    
    <!-- Shyrph est donc présente sur le jeu Fortnite, mais nous ne délaissons pas pour autant les autres jeux, qui arrivent même très vite ! De plus, nous mettons en place divers et nombreux projets qui vont vous plaire, afin d\'une part démocratiser l\'esport en apportant de nouvelles choses mais aussi pour récompenser notre communauté. Si vous voulez en savoir plus n\'hésitez pas à aller dans <a href="pages/projet.html">Projets</a> pour en savoir plus ! Pour 2023, Shyrph compte bien gravir les échelons afin d\'atteindre le haut niveau esportif grâce notamment à notre contenu, mais aussi par le recrutement des meilleurs membres professionnelles de l\'esport que vous pouvez voir dans <a href="pages/equipe.html">Equipe</a>, ou encore en remédiant aux limites de l\'esport.
    <div class="banner3">

        <h1 class="soutient">NOS PARTENAIRES NOUS SOUTIENNENT :</h1>

        <div class="fond">
            <img src="image/fond.jpg">
        </div>
    </div>-->

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

            <p class="copyright">© 2023 - Tous droits réservés - Designed by Univer\'s</p>
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


        var slideIndex = 1;
		showSlides(slideIndex);

		function plusSlides(n) {
			showSlides(slideIndex += n);
		}

		function currentSlide(n) {
			showSlides(slideIndex = n);
		}

		function showSlides(n) {
			var i;
			var slides = document.getElementsByClassName("custom-slider");
			var dots = document.getElementsByClassName("dot");
			if (n > slides.length) {slideIndex = 1}
			if (n < 1) {slideIndex = slides.length}
			for (i = 0; i < slides.length; i++) {
				slides[i].style.display = "none";
			}
			for (i = 0; i < dots.length; i++) {
				dots[i].className = dots[i].className.replace(" active", "");
			}
			slides[slideIndex-1].style.display = "block";
			dots[slideIndex-1].className += " active";
		}

        $(document).ready(function(){     
            $(".texte4").hide();
            $(".texte5").hide();
            $(".texte6").hide();

            $(".texte3").click(function(){
                $(".texte4").show();
                $(".texte5").show();
                $(".texte6").show();
                $(".texte3").hide();
            });
        
            $(".texte6").click(function(){
                $(".texte3").show();
                $(".texte4").hide();
                $(".texte5").hide();
                $(".texte6").hide();

            });
        });
    </script>

</html>';

?>