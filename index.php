<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta description="Le Portfolio de l'apprenti développeur Mohamed Marwane Bellagha, étudiant à la Plateforme_ Marseille">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.3/css/all.css"
        integrity="sha384-SZXxX4whJ79/gErwcOYf+zWLeJdY/qpuqC4cAa9rOGUstPomtqpuNWT9wdPEn2fk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio - Mohamed Marwane Bellagha</title>
</head>
<?php 
if(isset($_POST['envoimail'])){
    mail("mohamed-marwane.bellagha@laplateforme.io","Demande de contact de la part de ".$_POST['mail']."","".$_POST['corps']."");
};
?>
<body>
    <header>
        <nav class="navheader">
            <span>MB</span>
            <ul class='navlist'>
                <li><a href="index.php">Home</a></li>
                <li><a href="#about">A propos</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="dropdown">
    <button class="dropbtn"><i class="fas fa-hamburger"></i></button>
    <div class="dropdown-content">
        <a href="index.php">Home</a>
        <a href="#about">A propos</a>
        <a href="#contact">Contact</a>
  </div>
</div> 
        </nav>
    </header>
    <main>
        <div class='heropresentation'>
            <div class='heroheader'>
                <h1>Bienvenue dans le Portfolio de Mohamed Marwane BELLAGHA</h1>
                <p>On peut y retrouver les principaux projets sur lesquels j'ai travaillé à <b>la Plateforme_</b>,
                    ainsi qu'une présentation des <b>compétences techniques</b> acquises au cours de la formation.
                    Enfin, on y retrouvera <b>mon CV</b>. </p>
            </div>
            <div class='herolinkscontainer'>
                <a class='herolinks' href="https://github.com/mohamed-marwane-bellagha">
                <i class="fab fa-github fa-2x"></i></a>
                <a class='herolinks' href="https://www.linkedin.com/in/mohamed-marwane-bellagha-7a77ab159/"><i
                        class="fab fa-linkedin-in fa-2x"></i></a>
                <a class='herolinks' href="CV.pdf"><i class="far fa-id-badge fa-2x"></i></a>
            </div>
        </div>
        <div id="about">
            <div class='movetext'>
                <h2>A propos de moi</h2>
                <hr>
                <div class="aboutcontainer">
                    <img class='photocv' src="img/photocv.jpg" alt="Photo de Mohamed Marwane Bellagha">
                    <div class="aboutpresentation">
                        <h3>Compétences Techniques</h3>
                        <div class="aboutcptences">
                            <img src="img/HTML5Logo.svg">
                            <img src="img/CSS3.svg">
                            <img src="img/PHPLogo.svg">
                            <img src="img/Octicons-mark-github.svg">
                            <img src="img/React-icon.svg">
                            <img src="img/Symfony2.svg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="projets">
            <h2>Une selection de quelques uns de mes projets.</h2>
            <div class='imageprojetscontainer'>
                <figure class='figprojets'>
                        <img src="img/forum.jpg" alt="Capture d'écran du projet Forum">
                    </a>
                    <figcaption>
                        <h3 class='figcaptionheader'>Un forum sur le thème de League of Legends</h3>
                        <div class="langagescontainer">
                            <img src="img/HTML5Logo.svg">
                            <img src="img/CSS3.svg">
                            <img src="img/PHPLogo.svg">
                        </div>
                        <a class='linkgit' href='https://github.com/mathis-cottet/forum'>Plus d'info </a>
                    </figcaption>
                </figure>
                <figure class='figprojets'>
                    <img src="img/memory.jpg" alt="Capture d'écran du projet Memory">
                    <figcaption>
                       <h3 class='figcaptionheader'>Le célèbre jeu de cartes du Memory</h3>
                        <div class="langagescontainer">
                            <img src="img/HTML5Logo.svg">
                            <img src="img/CSS3.svg">
                            <img src="img/PHPLogo.svg">
                        </div>
                        <a class='linkgit' href='https://github.com/mohamed-marwane-bellagha/memory'>Plus d'info </a>
                    </figcaption>
                </figure>
                <figure class='figprojets'>
                    <img src="img/boutique.jpg" alt="Capture d'écran du projet Boutique en Ligne">
                    <figcaption>
                        <h3 class='figcaptionheader'>Une boutique en ligne de vélos</h3>
                        <div class="langagescontainer">
                            <img src="img/HTML5Logo.svg">
                            <img src="img/CSS3.svg">
                            <img src="img/PHPLogo.svg">
                            <img src="img/JavaScript.svg">
                        </div>
                        <a class='linkgit' href='https://github.com/mathis-cottet/boutique'>Plus d'info </a>
                    </figcaption>
                </figure>
                <figure class='figprojets'>
                    <img src="img/cms.jpg"  alt="Capture d'écran du projet CMS">
                    <figcaption>
                        <h3 class='figcaptionheader'>Un site vitrine utilisant WordPress</h3>
                        <div class="langagescontainer">
                            <img src="img/WordPress_blue_logo.svg">
                        </div>
                        <a class='linkgit' href='https://mohamed-marwane-bellagha.students-laplateforme.io/myCMS/'>Plus d'info </a>
                    </figcaption>
                </figure>
            </div>
        </div>
        <div id="contact">
            <h2>Prenons Contact</h2>
            <form method='post'>
                <fieldset class="fieldsetcontact">
                    <label for="objet" >Sujet</label>
                    <input type="text" id='objet' name='objet'>
                    <label for='mail'>Mail</label>
                    <input type="email" id='mail' name='mail'>
                    <label for="corps">Message</label>
                    <textarea id="corps" name="corps"></textarea>
                    <button type="submit" name="envoimail">Envoyer</button>
                </fieldset>
            </form>
        </div>
    </main>
    <footer>
    <div>
    <ul class='footerlist'>
                <li><a href="index.html">Home</a></li>
                <li><a href="#about">A propos</a></li>
                <li><a href="#projets">Projets</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
    </div>
    <div class='footerlink'>

                <a class='herolinks' href="https://github.com/mohamed-marwane-bellagha"><i
                        class="fab fa-github fa-3x"></i></a>
                <a class='herolinks' href="https://www.linkedin.com/in/mohamed-marwane-bellagha-7a77ab159/"><i
                        class="fab fa-linkedin-in fa-3x"></i></a>
                <a class='herolinks' href="CV.pdf"><i class="far fa-id-badge fa-3x"></i></a>
      
    </div>
    </footer>
</body>

</html>