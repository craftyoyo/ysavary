<?php
include 'mobile.php';
$detect = new Mobile_Detect();
#var_dump (basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)));
#https://get.teamviewer.com/6k6ekrj
#echo  "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$switch = basename(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
#switch ((isset($_GET['social']) ? $_GET['social']: '')) {
  switch ((isset($switch) ? $switch: '')) {
    case 'twitter':
        header('location: https://twitter.com/craftyoyo');
        break;
    case 'facebook':
        header('location: https://www.facebook.com/ysvary');
        break;
    case 'linkedin':
        header('location: https://www.linkedin.com/in/yoan-savary-011531155/');
        break;
    case 'mail':
        header('location: https://ysavary.fr/#contact');
        break;
    case 'instagram':
        header('location: https://www.instagram.com/yoan.savary/');
        break;
    case 'tel':
        header('location: tel:0768341388');
        break;
    case 'spotify':
        header('location: https://open.spotify.com/embed/playlist/07HEAwKr3WFwgyvpet6sZM');
        break;
    case 'meet':
        header('location: https://phone-fabriknow-com.3cx.net/join/yoansavary');
        break;
    case 'help':
        header('location: https://get.teamviewer.com/6k6ekrj');
        break;
    case 'cv':
        header('location: https://ysavary.fr/CV_Yoan_Savary.pdf');
        break;
    case 'srv':
        header('location: https://www.topachat.com/pages/configomatic.php?c=C5E7xVwK85hYW%2Fgx%2FmID9882TYR6ZBd6cxaK9aDPh5E%3D');
        break;
    case '3cx':
        header('location: https://appel-comon-real-fr.3cx.net/open/bc80caa48a2eb6b999d1b9194241e26c3bd5dde3');
        break;
    case 'thing':
        header('location: http://status.ysavary.fr/');
        break;
    case "":
        break;
    default:
        echo "Cette page n'exsiste pas";
        break;
}
function elapsed_time($timestamp, $precision = 2) {
  $time = time() - $timestamp;
  $a = array( ' ans' => 31557600, ' mois' => 2629800, ' semaines' => 604800, ' jours' => 86400, ' heures' => 3600, ' min' => 60, 'sec' => 1);
  $i = 0;
  foreach($a as $k => $v) {
    $$k = floor($time/$v);
    if ($$k) $i++;
    $time = $i >= $precision ? 0 : $time - $$k * $v;
    $$k = $$k ? $$k.''.$k.' ' : '';
    @$result .= $$k;
  }
  return $result;
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yoan Savary</title>
  <meta property="og:description" content="Hello Voici mon petit site pro ou vous trouverez tout les info pour me contacter, Vous trouverez aussi mon parcours pro!" />
  <meta property="og:title" content="Yoan Savary" />
  <meta property="og:image" content="images/pp.jpg" />
  <meta property="og:image:secure_url" content="images/pp.jpg" />
  <meta property="og:image:type" content="image/jpeg" />
  <meta property="og:image:width" content="400" />
  <meta property="og:image:height" content="300" />
  <meta property="og:image:alt" content="Photo of me :)" />
  <meta name="description" content="Hello Voici mon petit site pro ou vous trouverez tout les info pour me contacter, Vous trouverez aussi mon parcours pro!">
  <meta name="keywords" content="yoan savary, yoan, savary, helpdesk, IT, econocom">
  <meta name="author" content="Yoan Savary">
  <meta name="google" content="notranslate" />
  <link rel="icon" href="favicon.ico" />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css' async defer>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/typicons/2.0.9/typicons.min.css' async defer>
  <link rel="stylesheet" href="css/style.min.css" async>
  <?php 
$month = date('m');
if($month == 12){
   echo '<link rel="stylesheet" href="css/snow.css" async>';
} else {
   #pas noel
}
?>
</head>


<body>
  <div class="snowflakes" aria-hidden="false">
<?php 
$month = date('m');
$link = "https://www.youtube.com/watch?v=aAkMkVFwAoo&ab_channel=MariahCareyVEVO";
$randok = true;


if($month == 12){
  
  for ($x = 0; $x <= 30; $x++) {
if ($x == 15 && $randok) { echo '<a href="'.$link.'">'; }
      echo "<div class=\"snowflake\" style=\"z-index: 1; color: rose;\">❄</div>\n";
      if ($x == 21 && $randok) { echo '</a>'; }
  }
}

?>

    <!-- Header Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->
    <header id="header">
      <div class="main_nav">
        <div class="container">
          <div class="mobile-toggle"> <span></span> <span></span> <span></span> </div>
          <nav>
            <ul>
              <li><a class="smoothscroll" alt="Lien vers la section A propos" href="#about">A propos</a></li>
              <li><a class="smoothscroll" alt="Lien vers la section expérience" href="#experience">expérience</a></li>
              <li><a href="#" class="iframe" alt="Lien vers mon CV" onclick="showCv()">CV</a></li>
              <li><a class="smoothscroll" alt="Lien vers la section contact" href="#contact">Contact</a></li>
              <li><a class="smoothscroll" alt="Lien vers Linkedin" href="https://www.linkedin.com/in/yoan-savary-011531155/">Linkedin</a></li>
            </ul>
          </nav>
        </div>
      </div>
      <div class="title">
        <div><span class="typcn typcn-lightbulb icon heading"></span></div>
        <div class="smallsep heading"></div>
        <h1 class="heading"> Yoan Savary</h1>
        <?php 
$month = date('m');

if($month == 12){
   echo '<h2 class="heading">joyeuse fête de fin d\'année</h2><br>  
   <p><a class="button" alt="Lien vers Linkedin" href="https://www.linkedin.com/in/yoan-savary-011531155/">Linkedin</a></p>';
} else {
   echo '<h2 class="heading">SysAdmin, IT HelpDesk</h2><br>
   <p><a class="button" alt="Lien vers Linkedin" href="https://www.linkedin.com/in/yoan-savary-011531155/">Linkedin</a></p>';
}
?>
        <a class="smoothscroll" href="#about">
          <div class="mouse">
            <div class="wheel"></div>
          </div>
        </a>
      </div>
      <a class="smoothscroll" href="#about">
        <div class="scroll-down"></div>
      </a>
  </div>
  </header>

  <!-- About Section
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <section id="about">
    <div class="container">
      <div class="row">
        <h1>A propos de moi</h1>
        <div class="block"></div>
        <p>je m'appelle Yoan Savary j'ai <?= ''.elapsed_time('827791800', 6);?>, Depuis que j'ai 10 ans j'ai la chance
          d'avoir un PC, depuis j'ai appris énormément de choses telles que comment les réparer, les sécuriser et bien
          plus...</p>
      </div>
      <div class="row">
        <div class="six columns">
          <h3><span class="typcn typcn-device-desktop icon"></span>L'informatique</h3>
          <p>Comme je le dits plus haut depuis que j'ai eu mon PC j'ai appris beaucoup de choses et je les mets en pratique chaque jours que ce soit pour moi ou mes clients, amis. Avec mon entreprise j'essaie d'apporter mon aide, mes connaissances pour aider aux mieux les entreprises/particulier!
          </p>
        </div>
        <div class="six columns">
          <h3><span class="typcn typcn-pen icon"></span>Le développement</h3>
          <p>La aussi depuis un peux pres 4ans je fait du devloppement web,Java,PHP ce qui me permet de proposer des
            service innovant!
            Je travaille avec l'entreprise d'un collègue <a alt="Site de Com'On Réal" href="https://comon-real.fr">Com'On Réal</a> ce qui me permet de
            proposer a mes clients des site web fait sur meseur et qui leur conviendras a 100%.
          </p>
        </div>
      </div>
    </div>
  </section>

  <!-- Contact experience
–––––––––––––––––––––––––––––––––––––––––––––––––– -->

  <section id="experience">
    <div class="container">
      <h1>Experience</h1>
      <div class="block"></div>
      <div id="experience-timeline">
        <!--Com'On Réal-->
        <div class="vtimeline-point">
          <div class="vtimeline-icon">
          <img alt="Logo de com'On Réal" class="img-circle" style="max-width: 50px; height: 50px;" src="/images/comonreal.png"></img>
          </div>

          <div class="vtimeline-block">
            <span class="vtimeline-date">décembre 2019 – Juin 2020</span>
            <div class="vtimeline-content">
              <h4><a alt="Site de Com'on Réal" href="https://comon-real.fr/">Com'On Réal</a></h4>
              <h3>Community Manager, IT Manager (Freelance)</h3>
              <p>Chez Com'on Réal j'ai pu apprendre le metier de CM, et le relationel client !<br>Les points/action que
                j'ai pu mettre en place.
                <ul>
                  <li>Proposer des solution appropriée aux clients</li>
                  <li>Mettre en place des solutions technnique (Serveur Mail, web, SQL)</li>
                  <li>Trouver ce que veux le client.</li>
                  <li>Tout mettre en oeuvre pour satisfaire le client !</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
          <!--Econocom-->
        <div class="vtimeline-point">
          <div class="vtimeline-icon">
          <img alt="Logo de Econocom" class="img-circle" style="max-width: 50px; height: 50px;" src="/images/econocom.jpg"></img>
          </div>
          <div class="vtimeline-block">
            <span class="vtimeline-date">juillet 2018 – septembre 2018</span>
            <div class="vtimeline-content">
              <h4><a alt="Site de Econocom" href="https://www.econocom.com/fr">Econocom</a></h4>
              <h3>Technicien helpdesk</h3>
              <p>Lors de cette emploi chez Econocom j'ai pu mettre en pratique les points suivants.
                <ul>
                  <li>Répondre au téléphone et comprendre l’utilisateur/trice la/le rassurer.</li>
                  <li>Comprendre et traiter rapidement les problèmes de l’utilisateur/trice.</li>
                  <li>Utilisation des logiciels : Citrix director, Console Active Directory, LanDesk</li>
                  <li>Dépannage Wyse, imprimante/scanner ricoch, brother, logiciel métier banque (SAB AT, Platine,
                    Condor), DAB</li>
                </ul>
              </p>
            </div>
          </div>
        </div>
        <!--Encom-->
        <div class="vtimeline-point">
          <div class="vtimeline-icon">
          <img alt="Logo de Encom-Conseil" class="img-circle" style="max-width: 50px; height: 50px;" src="/images/encom.png"></img>
          </div>
          <div class="vtimeline-block">
            <span class="vtimeline-date">Janvier 2018 – fevrier 2018</span>
            <div class="vtimeline-content">
              <h4><a alt="Site de encom" href="https://encom-conseil.fr/">Encom-Conseil</a></h3>
                <h3>Technicien Support Hotline</h3>
                <p>Pendant mon expérience chez Encom j'ai appris les points suivants.
                  <ul>
                    <li>Gestion d’un support téléphonique pour dépannage distant.</li>
                    <li>Intervention sur site pour installation & dépannage client.</li>
                    <li>Suivi de commande, gestion des tickets clients.</li>
                    <li>Dépannage d’accès internet avec analyse de trame.</li>
                  </ul>
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Contact Section -->
  <?php


// Check for any mobile device.
if ($detect->isMobile()){
   // mobile content
}
else {
   // other content for desktops

  echo '<section id="contact">
  <div class="container">
    <h1>Contact</h1>
    <div class="block"></div>
    <div class="row">
      <div class="six columns">
        <p><span class="typcn typcn-device-phone icon"></span></span> <a alt="numéro de téléphone Mobile" href="tel:0768341388">07 68 34 13 88</a>
          <br><span class="typcn typcn-phone icon"></span> <a alt="numéro de téléphone pro" href="tel:0972212518">09 72 21 25 18</a></p>
      </div>
      <div class="six columns">
        <p></p>
      </div>
    </div>

    <form action="#" method="post">
      <div id="ok" style="display: none; background-color:green;color:white;padding:10px;">Votre message a bien ete envoyé</div>
      <div id="nok" style="display: none; background-color:red;color:white;padding:10px;">Votre message a pas ete envoyé</div>
      <div id="robot" style="display: none; background-color:red;color:white;padding:10px;">Erreur de captcha</div>
      <div class="row">
        <div class="six columns">
          <label for="exampleRecipientInput">Nom *</label>
          <input required class="u-full-width" placeholder="Doe" name="firstname" type="text">
        </div>
        <div class="six columns">
          <label for="exampleRecipientInput">Prénom *</label>
          <input required class="u-full-width" placeholder="John" name="lastname" type="text">
        </div>
      </div>
      <div class="row">
        <div class="six columns">
          <label for="exampleEmailInput">Email *</label>
          <input required class="u-full-width" placeholder="Contact@example.com" name="email" type="email">
        </div>
        <div class="six columns">
          <label for="exampleEmailInput">Tel</label>
          <input class="u-full-width" placeholder="0033712345678" name="phone" type="tel">
        </div>
      </div>
      <div class="row">
        <label for="exampleMessage">Message *</label>
        <textarea required class="u-full-width" placeholder="Bonjour..." name="message"></textarea>
        <div class="g-recaptcha" data-sitekey="6LcA9b0UAAAAAM0BGI2XASAOjiW5MgNTYXm1PuFv"></div>
        <input class="button-primary" name="submit" type="submit" value="Submit">
        <p class="button-primary">* Champs requis</p>
      </div>
    </form>
  </div>
</section>

<!-- Footer Section -->

<footer>
<call-us 
style="position: fixed; right: 20px; bottom: 20px; 

       font-family: Arial; 
        z-index: 99999; 
       --call-us-form-header-background:#373737;
       --call-us-main-button-background:#0596d4;
       --call-us-client-text-color:#d4d4d4;
       --call-us-agent-text-color:#eeeeee;
       --call-us-form-height:330px;" 
 id="wp-live-chat-by-3CX"
 channel-url="https://phone.fabriknow.com"
 files-url="https://phone.fabriknow.com"
 minimized="true"
 animation-style="none"
 party="yoansavary"
 minimized-style="BubbleRight"
 allow-call="true"
 allow-video="false"
 allow-soundnotifications="true"
 enable-onmobile="true"
 enable="true"
 popout="false"
 ignore-queueownership="false"
 enable-poweredby="false"
 authentication="both"
 show-typing-indicator="true"
 operator-name="Support"
 show-operator-actual-name="true"
 channel="phone"
 aknowledge-received="true"
 gdpr-enabled="false"
 gdpr-message="Osef" message-userinfo-format="both"
 message-dateformat="both"
 start-chat-button-text="Chat"
 window-title="Comment puis-je vous aider ?"
 invite-message="Dites moi ce que je peux faire pour vous ?"
 authentication-message="Donnez moi juste votre nom et mail."
 unavailable-message="Je ne suis pas là laissez moi un un message !"
 offline-finish-message="Je vous recontacte rapidement !"
> </call-us>


<script src="https://ysavary.fr/js/callus.js" async defer id="tcx-callus-js"></script>';
   } 
   ?>
  
    <div class="container">
      <div class="nine columns">
        <p>Created by Yoan Savary.</p>
        <a href="https://ysavary.fr/fibre_free_mikrotik/">Remplacer sa freebox par un routeur mikrotik :)</a>
      </div>
      <div class="three columns"> 
      
       <a alt="Lien vers Instagram" href="https://www.instagram.com/yoan.savary/" style="text-decoration:none;"><span class="typcn typcn-social-instagram-circular socialIcons"></span> </a>
       <a alt="Lien vers Linkedin" href="https://www.linkedin.com/in/yoan-savary-011531155/" style="text-decoration:none;"><span class="typcn typcn-social-linkedin-circular socialIcons"></span></a>
      </div>
    </div>
  </footer>
  <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" async defer crossorigin="anonymous"></script>
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-158631459-1" async defer></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-158631459-1');
  </script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.0/TextPlugin.min.js" integrity="sha512-5vj9ij+ioiIGxKUW3a3FwhixlMWYdt13TNj1y6HKqpMeGcXZ7GeP+YhcbAIl1ZUJl1jNiNuaYWzVcHoOB4r7vQ==" async defer crossorigin="anonymous"></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js' async defer></script>
  <script src="js/script.min.js" async defer></script>
  <?php
  // Check for any mobile device.
  if ($detect->isMobile()){
     // mobile content
  }
  else {
     //echo "<script src='https://www.google.com/recaptcha/api.js' async defer></script>";
  }
  ?>
</body>
</html>