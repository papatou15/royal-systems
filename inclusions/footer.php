    <footer>
        <div class="footer-content">
            <div class="footer-map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d818.7135399835673!2d-73.57323711042254!3d45.55148342486468!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91bfef241cb83%3A0x6103e42d7bd76856!2sROYAL%20SYSTEM!5e0!3m2!1sfr!2sca!4v1638388890123!5m2!1sfr!2sca" width="300" height="225" style="border:0;" allowfullscreen="false" loading="lazy"></iframe>
            </div>
            <div class="footer-line-separate"></div>
            <div class="footer-content-right">
                <p><?php echo $pdp_titre ?></p>
                <nav class="i18n">
                <?php foreach($languesDisponibles as $codeLangue) { ?>
                    <div>
                        <a href="?langue=<?= $codeLangue; ?>" class="<?php if($langueChoisie == $codeLangue) {echo 'actif';} ?>" title="<?= $nomsDesLangues[$codeLangue]; ?>"><?= $codeLangue; ?></a>
                    </div>
                <?php } ?>
                </nav>
            </div>
        </div>
        <div class="footer-bg"></div>
    </footer>
</body>
</html>