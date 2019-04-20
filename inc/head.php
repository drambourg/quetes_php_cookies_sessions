<?php
session_start();

if (!isset($_SESSION['loginname']) ) {
    if ($_SERVER['PHP_SELF'] != '/login.php') {
        header('Location: login.php');
        exit();
    }
}
if ($_SERVER['PHP_SELF'] == '/login.php') {
    session_unset();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>The Cookie Factory</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="assets/styles.css" />
</head>
<body>
  <header>
    <!-- MENU ENTETE -->
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
          data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="/" >
          <img class="pull-left" src="assets/img/cookie_funny_clipart.png" alt="The Cookies Factory logo">
          <h1>The Cookies Factory</h1>
        </a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Chocolates chips</a></li>
          <li><a href="#">Nuts</a></li>
          <li><a href="#">Gluten full</a></li>
          <li>
             <?php
                $stateCartIcon = 'btn-warning';
                if(!empty($_SESSION['cart'])) {
                    $stateCartIcon = 'btn-success';
                }
                ?>
            <a href="/cart.php" class="btn <?= $stateCartIcon ?> navbar-btn">
              <span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>
              Cart
            </a>
          </li>
            <?php if (isset($_SESSION['loginname'])) : ?>
            <li>
                <a type="button" class="btn navbar-btn btn-danger" data-toggle="modal" data-target="#modlogout">
                    Déconnexion
                </a>
            </li>
            <?php endif ?>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  <div class="container-fluid text-right">
    <strong><?php if (isset($_SESSION['loginname'])) : ?>
            Hello <?= $_SESSION['loginname']?> !
        <?php else : ?>
            Bienvenue!!
        <?php endif ?>
    </strong>
  </div>
</header>

  <!-- Modal -->
  <div class="modal fade" id="modlogout" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
      <div class="modal-dialog" role="document">
          <div class="modal-content">
              <div class="modal-header">
                  <h5 class="modal-title">Deconnexion</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body">
                  <p>Vous êtes sur le point de vous déconnecter. Votre panier sera supprimé.</p>
              </div>
              <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                  <a class="btn btn-danger" href="/login.php" role="button">Se déconnecter</a>
              </div>
          </div>
      </div>
  </div>

