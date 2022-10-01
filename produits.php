<?php
    $page = 'Produits';

    include('inclusions/header.php');
?>
<body>
    <section class="produits-section">
        <div class="produits-content-left">
            <h2><?php echo $pro_titre ?></h2>
            <div class="produits-separation-line"></div>
            <p><?php echo $pro_filtre ?> <i class="fas fa-chevron-down"></i> <i class="fas fa-filter"></i></p>
        </div>
        <div class="produits-content-right">
            <div class="product-box">
                <div class="product-box-child">
                    <img src="images/produits/1.png" alt="">
                    <h3><?php echo $pro_pos ?></h3>
                </div>
            </div>
            <div class="product-box">
                <div class="product-box-child">
                    <img src="images/produits/2.png" alt="">
                    <h3><?php echo $pro_caisses ?></h3>
                </div>
            </div>
            <div class="product-box">
                <div class="product-box-child">
                    <img src="images/produits/3.png" alt="">
                	<h3><?php echo $pro_bo ?></h3> 
                </div>
            </div>
            <div class="product-box">
                <div class="product-box-child">
                    <img src="images/produits/4.png" alt="">
                    <h3><?php echo $pro_mev ?></h3>
                </div>
            </div>
            <div class="product-box">
                <div class="product-box-child">
                    <img src="images/produits/5.png" alt="">
                    <h3><?php echo $pro_sec ?></h3>
                </div>
            </div>
            <div class="product-box">
                <div class="product-box-child">
                    <img src="images/produits/6.png" alt="">
                    <h3><?php echo $pro_ordi ?></h3>  
                </div>
            </div>
            <div class="product-box">
                <div class="product-box-child">
                    <img src="images/produits/7.png" alt="">
                    <h3><?php echo $pro_mobi ?></h3>  
                </div>
            </div>
        </div>
    </section>
<?php include('inclusions/footer.php') ?>