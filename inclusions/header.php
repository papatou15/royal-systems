<?php
    $languesDisponibles = [];
    $nomsDesLangues = [];
    $contenuDossierTextes = scandir('textes');
    foreach($contenuDossierTextes as $nomDossier) {
      if($nomDossier != '.' && $nomDossier != '..') {
        $codeEtNomLangue = explode('-', $nomDossier);
        $languesDisponibles[] = $codeEtNomLangue[0];
        $nomsDesLangues[$codeEtNomLangue[0]] = $codeEtNomLangue[1];
      }
    }
  
    // i18n
    // A - Déterminer la langue par défaut
    $langueChoisie = 'fr';
  
    // B - Vérifier si l'utilisateur a déjà fait un choix de langue auparavant.
    // Si tel est le cas, le tableau $_CCOKIE contiendra un témoin HTTP nommé 
    // 'leila_langue' (voir le code de l'étape C plus loin)
    if(isset($_COOKIE['rs_langue']) && in_array($_COOKIE['rs_langue'], $languesDisponibles)) {
      $langueChoisie = $_COOKIE['rs_langue'];
    }
  
    // C - Si l'utilisateur choisi une langue en cliquant un lien dans la navigation en haut de la page
    if(isset($_GET['langue']) && in_array($_GET['langue'], $languesDisponibles)) {
      $langueChoisie = $_GET['langue'];
      
      // C2 - Retenir le choix de langue de l'utilisateur dans un témoin HTTP (cookie)
      setcookie('rs_langue', $langueChoisie, time() + 365*24*60*60*2); // expire dans 2 ans
    }
  
    // D - On est enfin prêt à charger le fichier contenant les textes dans langue choisie
    include('textes/' . $langueChoisie . '-' . $nomsDesLangues[$langueChoisie] . '/i18n.txt.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="font/style.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://kit.fontawesome.com/39053a74c5.js" crossorigin="anonymous"></script>
    <title>Royal Systems | <?php echo $page ?></title>
</head>
<body>
    <header>
        <div class="header-content">
            <a href="index.php" class="logo"><img src="images/logo.png" alt="logo_royal_systems"></a>
            <div class="main-nav">
                <ul>
                    <li><a href="produits.php"><?php echo $ent_navProduits ?></a></li>
                    <li><a href="#"><?php echo $ent_navServices ?></a></li>
                    <li><a href="#"><?php echo $ent_navPropos ?></a></li>
                    <li><a href="contact.php"><?php echo $ent_navContact ?></a></li>
                </ul>
            </div>
            <div class="mobile-nav">
                <input type="checkbox" id="menu-toggle"/>
                <label id="trigger" for="menu-toggle"></label>
                <label id="burger" for="menu-toggle"></label>
                <ul id="menu">
                    <li><a href="produits.php"><?php echo $ent_navProduits ?></a></li>
                    <li><a href="#"><?php echo $ent_navServices ?></a></li>
                    <li><a href="#"><?php echo $ent_navPropos ?></a></li>
                    <li><a href="contact.php"><?php echo $ent_navContact ?></a></li>
                </ul>
            </div>
        </div>
        <div class="header-bg"></div>
    </header>