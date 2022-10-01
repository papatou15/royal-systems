<?php 
    $page = 'Contact';

    include('inclusions/header.php');
?>
<body>
    <section class="contact-content">
        <div class="contact-content-left">
            <h1 class="contact-titre"><?php echo $con_titre ?></h1>
            <div class="contact-bar-style"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13006.75945084072!2d-73.58060211129836!3d45.54613276359789!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bfef241cb83%3A0x6103e42d7bd76856!2sROYAL%20SYSTEM!5e0!3m2!1sfr!2sca!4v1638472004060!5m2!1sfr!2sca" width="450" height="375" style="border:0;" allowfullscreen="" loading="lazy" class="google-map-large"></iframe>
        </div>
        <div class="contact-content-right">
            <div class="info-contact">
                <h3>Montréal</h3>
                <p>514-593-7600</p>
                <p>info@royal-system.com</p>
                <div class="info-contact-line"></div>
            </div>
            <div class="info-contact">
                <h3><?php echo $con_qbc ?></h3>
                <p>514-593-1640</p>
                <p>infoquebec@royal-system.com</p>
                <div class="info-contact-line"></div>
            </div>
            <div class="info-contact">
                <h3>Laval</h3>
                <p>514-593-7600</p>
                <p>infolaval@royal-system.com</p>
                <div class="info-contact-line"></div>
            </div>
            <div class="info-contact">
                <h3>Brossard</h3>
                <p>514-593-7600</p>
                <p>infobrossard@royal-system.com</p>
                <div class="info-contact-line"></div>
            </div>
            <div class="info-contact">
                <h3>Ottawa</h3>
                <p>514-593-7600</p>
                <p>infoottawa@royal-system.com</p>
                <div class="info-contact-line"></div>
            </div>
        </div>
    </section>

<?php include('inclusions/footer.php') ?>