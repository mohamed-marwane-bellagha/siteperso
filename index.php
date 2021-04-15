<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        </nav>
    </header>
    <main>
        <div class='heropresentation'>
            <div class='heroheader'>
                <h1>Bienvenue dans mon Portfolio</h1>
                <p>On pourra y retrouver les principaux projets sur lesquels j'ai travaillé à <b>la Plateforme_</b>,
                    ainsi qu'une présentation des <b>compétences techniques</b> acquises au cours de la formation.
                    Enfin, on y retrouvera <b>mon CV</b>. </p>
            </div>
            <div class='herolinkscontainer'>
                <a class='herolinks' href="https://github.com/mohamed-marwane-bellagha"><i
                        class="fab fa-github fa-2x"></i></a>
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
                    <img src="img/photocv.jpg">
                    <div class="aboutpresentation">
                        <h3>Quelques Dates Importantes</h3>
                        <p>2015: Baccalaureat ES au Lycée Pierre Mendès France de Tunis</p>
                        <p>2019: Bachelor in Business Administration de l'EDHEC Business SChool</p>
                        <p>2020: Entrée à la Plateforme_ à Marseille</p>
                    </div>
                </div>
            </div>
        </div>
        <div id="projets">
            <h2>Une selection de quelques uns de mes projets.</h2>
            <div class='imageprojetscontainer'>
                <figure class='figprojets'>
                   
                        <img src="img/forum.jpg">
                    </a>
                    <figcaption>
                        Un forum sur le thème de League of Legends
                        <div class="langagescontainer">
                            <img src="img/HTML5Logo.svg">
                            <img src="img/CSS3.svg">
                            <img src=img/PHPLogo.svg">
                        </div>
                        <a href='https://github.com/mathis-cottet/forum'>Plus d'info </a>
                    </figcaption>
                </figure>
                <figure class='figprojets'>
                    <img src="img/memory.jpg">
                    <figcaption>
                        Le célèbre jeu de cartes du Memory
                        <div class="langagescontainer">
                            <img src="img/HTML5Logo.svg">
                            <img src="img/CSS3.svg">
                            <img src="img/PHPLogo.svg">
                        </div>
                        <a class='linkgit' href='https://github.com/mohamed-marwane-bellagha/memory'>Plus d'info </a>
                    </figcaption>
                </figure>
                <figure class='figprojets'>
                    <img src="img/boutique.jpg">
                    <figcaption>
                        Une boutique en ligne de vélos
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
                    <img src="img/cms.jpg">
                    <figcaption>
                        Un site vitrine utilisant WordPress
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
                    <label for="corps">Entrez votre message</label>
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