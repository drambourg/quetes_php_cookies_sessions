<?php require 'inc/head.php'; ?>
<section class="container-fluid">
    <div class="alert alert-dark text-center" role="alert">
        <h3>On passe à la caisse  <?= $_SESSION['loginname']?> ?</h3>
    </div>
</section>
<section class="cookies container-fluid">
    <div class="row">
        <?php
            $cartitems = array_count_values($_SESSION['cart']);
        ?>
        <?php if (count($cartitems ) == 0) : ?>
            <div class="col text-center">
                <h2>Votre panier est vide... Allez un peit plaisir ? </h2>
                <a class="btn btn-primary" href="/index.php" role="button">Retour aux Cookies!</a>
            </div>

        <?php endif ?>
        <?php if (isset($cartitems['46'])) : ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Pecan nuts</h3>
                    <p>Cooked by Penny !</p>
                    <div class="btn p-3 mb-2 bg-success text-white">
                        Commande en cours <?= $cartitems['46'] ?> pièce(s)
                    </div>
                </figcaption>
            </figure>
        </div>
        <?php endif ?>
        <?php if (isset($cartitems['36'])) : ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate chips</h3>
                    <p>Cooked by Bernadette !</p>
                    <div class="btn p-3 mb-2 bg-success text-white">
                        Commande en cours : <?= $cartitems['36'] ?> pièce(s)
                    </div>
                </figcaption>
            </figure>
        </div>
        <?php endif ?>
        <?php if (isset($cartitems['58'])) : ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>Chocolate cookie</h3>
                    <p>Cooked by Bernadette !</p>
                    <div class="btn p-3 mb-2 bg-success text-white">
                        Commande en cours : <?= $cartitems['58'] ?> pièce(s)
                    </div>
                </figcaption>
            </figure>
        </div>
        <?php endif ?>
        <?php if (isset($cartitems['32'])) : ?>
        <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
            <figure class="thumbnail text-center">
                <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
                <figcaption class="caption">
                    <h3>M&M's&copy; cookies</h3>
                    <p>Cooked by Penny !</p>
                    <div class="btn p-3 mb-2 bg-success text-white">
                        Commande en cours <?= $cartitems['32'] ?> pièce(s)
                    </div>
                </figcaption>
            </figure>
        </div>
        <?php endif ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
