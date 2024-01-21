<?php
require 'data.php';
  
function checkinput($data){
 $data = trim($data);
 $data = stripslashes($data);
 $data = htmlspecialchars($data);
 return $data;
}
$nom = $email = $message = "";
 if($_SERVER["REQUEST_METHOD"] == "POST"){
     $nom = checkinput($_POST['nom']);
     $email = checkinput($_POST['email']);
     $message = checkinput($_POST['message']);
 
     $db = Database::connect();
     $statement = $db->prepare("INSERT INTO user (nom, email, message) VALUES(?,?,?)");
    $statement->execute(array($nom, $email, $message));
    Database::disconnect();
 } 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font-awesome-pro-master/FontAwesome Documentation/css/all.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Deuxième Prototype de Blog</title>
</head>
<body>
    <header>
        <a href="#" class="logo"> <span>F</span>ortune</a>
        <div class= "menutoggle" onclick="toggleMenu();"></div>
        <ul class="navbar">
            <li><a href="#banniere" onclick="toggleMenu();"> <i class="fas fa-home"></i> Accueil</a></li>
            <li><a href="#apropos" onclick="toggleMenu();"> <i class="fas fa-hands-helping"></i> A propos</a></li>
            <li><a href="#articles" onclick="toggleMenu();"> <i class="fas fa-newspaper"></i> Articles</a></li>
            <li><a href="#projet" onclick="toggleMenu();"> <i class="fas fa-chalkboard-teacher"></i> Projets</a></li>
            <li><a href="#livres" onclick="toggleMenu();"> <i class="fas fa-book"></i> Livres</a></li>
            <li><a href="#contact" onclick="toggleMenu();"> <i class="fas fa-phone"></i> Contact</a></li>
            <a href="#" class="btn-rejoindre" onclick="toggleMenu()">Rejoindre</a>
        </ul>
    </header>
    <section class="banniere" id="banniere">
        <div class="contenu">
            <p> adipisicing elit. Tenetur eligendi odio dolore repellendus minima voluptate. Aliquam aliquid sunt placeat asperiores dignissimos obcaecati quo laudantium corrupti inventore, cupiditate ducimus illo magni.
            Voluptates, quo. Laudantium, exercitationem? Nisi tenetur sit minus debitis, doloribus assumenda sunt in alias dicta doloremque dolores, cum ducimus ex temporibus natus sequi iure recusandae esse porro obcaecati cupiditate quae!</p>
            <a href="profil.php" class="btn-1">Mon profil</a>
            <a href="#" class="btn-2">Consulter mon cv</a>
        </div>
    </section>
    <section class="apropos" id="apropos">
        <div class="row">
            <div class="col50">
                <h2 class="titre-texte"> <span>A</span> PROPOS DE MOI</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque omnis ab repudiandae rerum commodi. Impedit culpa exercitationem quis optio alias harum labore hic illo eius? Libero fugit ex culpa saepe.
                Doloribus, esse? Tempore quos voluptas tenetur ipsa debitis asperiores quisquam non, fugiat suscipit tempora fugit soluta architecto quas! Eos ea placeat laborum mollitia expedita incidunt ex excepturi enim aperiam reiciendis.</p>
            </div>
            <div class="col50">
                <div class="img">
                    <img src="./images/student-849825__480.jpg" alt="image">
                </div>
               
            </div>
        </div>
    </section>
    <section class="articles" id="articles">
        <div class="titre">
            <h2 class="titre-texte"> <span>A</span>RTICLES</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque omnis ab repudiandae rerum commodi. Impedit culpa exercitationem quis optio alias harum labore hic illo eius? Libero fugit ex culpa saepe.
            Doloribus, esse? Tempore quos voluptas tenetur ipsa debitis asperiores quisquam non, fugiat suscipit tempora fugit soluta architecto quas! Eos ea placeat laborum mollitia expedita incidunt ex excepturi enim aperiam reiciendis.</p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="inbox">
                    <img src="./images/business-561387__480.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Developpez tous les domaines</h3>
                </div>
                <a href="#" class="btn-2">Lire</a>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/business-plan-2061634__480.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Etablissez un business plan</h3>
                </div>
                <a href="#" class="btn-2">Lire</a>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/engineer-4915799__480.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Devenez Ingénieur</h3>
                </div>
                <a href="#" class="btn-2">Lire</a>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/grocery-1232944__480.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Developper votre commerce</h3>
                </div>
                <a href="#" class="btn-2">Lire</a>
            </div>
           
            <div class="box">
                <div class="inbox">
                    <img src="./images/istockphoto-1333156372-170667a.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Apprennez à vous valoriser</h3>
                </div>
                <a href="#" class="btn-2">Lire</a>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/istockphoto-1338589619-170667a.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Apprennez à vous valoriser</h3>
                </div>
                <a href="#" class="btn-2">Lire</a>
            </div>
            <div class="titre">
                <a href="#" class="btn-1">Voir plus</a>
            </div>
        </div>
    </section>
    <section class="projet" id="projet">
        <div class="titre">
            <h2 class="titre-texte">MES<span> P</span>ROJETS</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque omnis ab repudiandae rerum commodi. Impedit culpa exercitationem quis optio alias harum labore hic illo eius? Libero fugit ex culpa saepe.</p>
        </div>
        <div class="contenu">
            <div class="box">
                <div class="inbox">
                    <img src="./images/p1.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Developpez tous les domaines</h3>
                </div>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/p2.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Etablissez un business plan</h3>
                </div>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/p3.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Devenez Ingénieur</h3>
                </div>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/p4.jpg" alt="">
                </div>
                <div class="text">
                    <h3>Developper votre commerce</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="livres" id="livres">
        <div class="titre blanc">
            <h2 class="titre-texte">INSPIRATIONS: <span>L</span>IVRES</h2>
            </div>
        <div class="contenu">
            <div class="box">
                <div class="inbox">
                    <img src="./images/p1.jpg" alt="">
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit id odit deleniti delectus nobis debitis? Exercitationem laboriosam quisquam laborum nemo nihil voluptate unde. Ipsum tempore minima amet voluptatibus cum aliquam!</p>
                    <h3>Madame Bovary</h3>
                </div>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/p2.jpg" alt="">
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate reprehenderit praesentium suscipit veniam illum laudantium nihil pariatur soluta aperiam velit voluptate atque, placeat totam architecto, recusandae, reiciendis facere dolores harum.</p>
                    <h3>Les Mémoires de Vanitas</h3>
                </div>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/p3.jpg" alt="">
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ad quos, quo, saepe quas officiis nemo possimus quidem labore a molestias inventore, illum deleniti sint beatae alias voluptate cumque animi. Facere?</p>
                    <h3>Les Tribus de Capitoline</h3>
                </div>
            </div>
            <div class="box">
                <div class="inbox">
                    <img src="./images/p4.jpg" alt="">
                </div>
                <div class="text">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos nemo pariatur soluta consequuntur, mollitia aspernatur dolorum libero veritatis quo quis labore quia nobis unde rem ducimus, consequatur beatae ab fugiat.</p>
                    <h3>Petit Jo</h3>
                </div>
            </div>
        </div>
    </section>
    <section class="contact" id="contact">
        <div class="titre noir">
            <h2 class="titre-texte">
                <span>C</span>ONTACT
            </h2>
        </div>
        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" role="form" method="post" class="contact-form">
            <h3>Envoyez moi un message</h3>
            <div class="inputbox">
                <input type="text" name="nom" id="nom" placeholder="Votre nom" value="<?php echo $nom; ?>"/>
                <p class="error">Veuillez entrer votre nom!</p>
            </div>
            <div class="inputbox">
                <input type="email" name="email" id="email" placeholder="Votre email svp!!"value="<?php echo $email; ?>"/>
                <p class="error">Précisez votre adresse mail</p>
            </div>
            <div class="inputbox">
                <textarea name="message" id="" cols="30" rows="10" placeholder="laissez un message ici!!" value="<?php echo $message; ?>"></textarea>
            </div>
            <div class="inputbox">
                <input type="submit" value="Envoyer">
        </div>
             <p class="thank">Votre message a bien été envoyé. Merci de m'avoir contacté :)</p>
        </form>
    </section>
    <div class="copyright">
        <p>copyright 2023 <a href="#">Yossa Fortune</a> Blog Personnel. Tous droits réservés</p>
    </div>


    <script type="text/javascript">
        window.addEventListener('scroll', function(){
            const header = document.querySelector('header');
            header.classList.toggle("sticky", window.scrollY > 0);
        });

        function toggleMenu(){
            const menutoggle = document.querySelector('.menutoggle');
            const navbar = document.querySelector('.navbar');
            menutoggle.classList.toggle('active');
            navbar.classList.toggle('active');
        }
    </script>
</body>
</html>