<?php
    $page = 'Index';

    include('inclusions/header.php');
?>

    <section class="main-content">
        <div class="main-content-left">
            <h1 class="main-titre"><?php echo $acc_mainTitre ?></h1>
            <div class="main-titre-underline"></div>
            <p><?php echo $acc_mainDesc ?></p>
        </div>
        <div class="main-content-right">
            <div class="main-equipe">
                <img src="images/support.jpg" alt="support">
                <div class="main-equipe-text">
                    <p><?php echo $acc_mainEquipeText ?></p>
                    <a href="contact.php"><button class="small-button" type="button"><?php echo $acc_mainContactButton ?></button></a>
                </div>
            </div>
            <div class="main-content-right-line"></div>
            <div class="soumission">
                <p><?php echo $acc_mainSoumText ?></p>
                <button class="small-button"><?php echo $acc_mainFormulaireButton ?></button>
            </div>
        </div>
    </section>

    <?php
        include('inclusions/footer.php');
    ?>