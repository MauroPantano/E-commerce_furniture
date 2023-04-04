<html lang="en">

<head>
  <!-- =====  BASIC PAGE NEEDS  ===== -->
  <meta charset="utf-8">
  <title>PantanoShop</title>
  <!-- =====  SEO MATE  ===== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="distribution" content="global">
  <meta name="revisit-after" content="2 Days">
  <meta name="robots" content="ALL">
  <meta name="rating" content="8 YEARS">
  <meta name="Language" content="en-us">
  <meta name="GOOGLEBOT" content="NOARCHIVE">
  <!-- =====  MOBILE SPECIFICATION  ===== -->
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="viewport" content="width=device-width">
  <!-- =====  CSS  ===== -->
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>

<body class="shop-detail">
  <?php
    include "conn.php";
   ?>
  <!-- =====  LODER  ===== -->
  <div class="loder"></div>
  <div class="wrapper">
    <!-- =====  HEADER START  ===== -->
    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="header-top-left">
                <div class="contact"><span class="hidden-xs hidden-sm hidden-md">Apertura negozi dalle 9:00 alle 19:00</span></div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8">
              <ul class="header-top-right text-right">
                <?php
                  ob_start();
                  session_start();
                  //$_SESSION['username'] = '';
                  if ($_SESSION['username'] == ''){
                    echo "<li class='account'><a href='login.php'>Account</a></li>";
                  }else {
                    echo "<li class='language dropdown'> <span class='dropdown-toggle' id='dropdownMenu1' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false' role='button'>".$_SESSION['username']."<span class='caret'></span> </span>";
                    echo "<ul class='dropdown-menu' aria-labelledby='dropdownMenu1'>";
                    echo "<li><a href='login2.php'>Account</a></li>";
                    echo "<li><a href='login.php'>Esci</a></li>";
                    echo "</ul>";
                    echo "</li>";
                  }
                 ?>
                <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Language <span class="caret"></span> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Inglese</a></li>
                    <li><a href="#">Francese</a></li>
                    <li><a href="#">Tedesco</a></li>
                  </ul>
                </li>
                <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Currency <span class="caret"></span> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu12">
                    <li><a href="#">€ Euro</a></li>
                    <li><a href="#">£ Sterlina</a></li>
                    <li><a href="#">$ Dollaro USA</a></li>
                  </ul>
                </li>
                <li class="currency dropdown">
                  <a href="https://www.iubenda.com/privacy-policy/99772221" class="iubenda-black iubenda-embed" title="Privacy Policy ">Privacy Policy</a><script type="text/javascript">(function (w,d) {var loader = function () {var s = d.createElement("script"), tag = d.getElementsByTagName("script")[0]; s.src="https://cdn.iubenda.com/iubenda.js"; tag.parentNode.insertBefore(s,tag);}; if(w.addEventListener){w.addEventListener("load", loader, false);}else if(w.attachEvent){w.attachEvent("onload", loader);}else{w.onload = loader;}})(window, document);</script>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="header">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="main-search mt_40">
                <input id="search-input" name="search" value="" placeholder="Search" class="form-control input-lg" autocomplete="off" type="text">
                <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
              </span> </div>
            </div>
            <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="index2.php"> <img alt="themini" src="images/Logo-PantanoShop.png"> </a> </div>
            <div class="col-xs-6 col-sm-4 shopcart">
              <div id="cart" class="btn-group btn-block mtb_40">
                <?php
                //CARRELLO
                if($_SESSION['email']==''){
                  echo "<button type='button' class='btn' data-target='#cart-dropdown' data-toggle='collapse' aria-expanded='true'><span id='shippingcart'>Carrello</span><span id='cart-total'>items (0)</span> </button>";
                }else{
                  $query6 = "SELECT COUNT(CONFERMA)
                            FROM COMPRA
                            WHERE CONFERMA = 0 AND UTENTE = '$_SESSION[email]'";
                  $ris6 = mysqli_query($conn, $query6);
                  while ($riga = mysqli_fetch_array($ris6)){
                  echo "<button type='button' class='btn' data-target='#cart-dropdown' data-toggle='collapse' aria-expanded='true'><span id='shippingcart'>Carrello</span><span id='cart-total'>items ($riga[0])</span> </button>";
                  }
                }
                ?>
              </div>
              <div id="cart-dropdown" class="cart-menu collapse">
                <ul>
                  <li>
                    <table class="table table-striped">
                      <tbody>
                        <!--PRODOTTO -->
                        <?php
                        if($_SESSION['email']==''){

                        }else{
                          $query3 = "SELECT M.NOME,M.PREZZO,M.IMMAGINE
                                    FROM MOBILE M JOIN COMPRA C ON
                                    M.ID = C.MOBILE
                                    WHERE M.ID = C.MOBILE AND C.UTENTE = '$_SESSION[email]' AND CONFERMA = 0";
                          $ris3 = mysqli_query($conn, $query3);
                          while ($riga = mysqli_fetch_array($ris3)){
                          echo "<tr>";
                            echo "<td class='text-center'><a href='#'><img src='images/product/$riga[2]' alt='iPod Classic' title='iPod Classic'></a></td>";
                            echo "<td class='text-left product-name'><a href='#'>$riga[0]</a> <span class='text-left price'>$ $riga[1]</span>";
                              //echo "<input class='cart-qty' name='product_quantity' min='1' value='1' type='number'>";
                            echo "</td>";
                            echo "<td class='text-center'><a class='close-cart'><i class='fa fa-times-circle'></i></a></td>";
                          echo "</tr>";
                          }
                        }
                        ?>
                      </tbody>
                    </table>
                  </li>
                  <?php
                  $query4 = "SELECT SUM(PREZZO)
                            FROM MOBILE M JOIN COMPRA C ON
                            M.ID = C.MOBILE
                            WHERE M.ID = C.MOBILE AND C.UTENTE = '$_SESSION[email]' AND CONFERMA = 0";
                  $ris4 = mysqli_query($conn, $query4);
                   ?>
                  <li>
                    <table class="table">
                      <tbody>
                        <tr>
                          <?php
                          while ($riga = mysqli_fetch_array($ris4)){
                          $totParziale = number_format($riga[0],2);
                          echo "<td class='text-right'><strong>Totale parziale</strong></td>";
                          echo "<td class='text-right'>$ $totParziale</td>";
                          $iva = number_format(($riga[0]*22)/100,2);
                          $totale = number_format($riga[0]+$iva+2,2);
                          }
                          ?>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                          <td class="text-right">$2.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>IVA (22%)</strong></td>
                          <?php
                          echo "<td class='text-right'>$ $iva</td>";
                          ?>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Totale</strong></td>
                          <?php
                          echo "<td class='text-right'>$ $totale</td>";
                          ?>
                        </tr>
                      </tbody>
                    </table>
                  </li>
                  <li>
                    <form action="cart_page.php">
                      <input class="btn pull-right mt_10" value="Visualizza carrello" type="submit">
                    </form>
                    <form action="" method="POST">
                      <input class="btn pull-left mt_10" value="Svuota" name="svuota" type="submit">
                    </form>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <nav class="navbar">
            <p>menu</p>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
            <div class="collapse navbar-collapse js-navbar-collapse">
              <ul id="menu" class="nav navbar-nav">
                <li> <a href="index2.php">Home</a></li>
                <li> <a href="category_page.php">Shop</a></li>
                <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scopri di più </a>
                  <ul class="dropdown-menu mega-dropdown-menu row">
                    <li class="col-md-3">
                      <ul>
                        <li class="dropdown-header">STILE</li>
                        <li><a href="#">Asiatico</a></li>
                        <li><a href="#">Classico</a></li>
                        <li><a href="#">Mediterraneo</a></li>
                        <li><a href="#">Coloniale</a></li>
                        <li><a href="#">Eclettico</a></li>
                        <li><a href="#">Minimalista</a></li>
                        <li><a href="#">Industriale</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <ul>
                        <li class="dropdown-header">PROMOZIONE</li>
                        <li><a href="#">Sconto stagionale</a></li>
                        <li><a href="#">Riscatta buono sconto</a></li>
                        <li><a href="#">Mypoints</a></li>
                        <li><a href="#">Premium</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <ul>
                        <li class="dropdown-header">USATO</li>
                        <li><a href="#">Controlla articoli</a></li>
                        <li><a href="#">Aggiungi articolo</a></li>
                      </ul>
                    </li>
                    <li class="col-md-3">
                      <ul>
                        <li id="myCarousel" class="carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="item active"> <a href="#"><img src="images/casa1.jpg" class="img-responsive" alt="Banner1"></a></div>
                            <!-- End Item -->
                            <div class="item"> <a href="#"><img src="images/casa2.jpg" class="img-responsive" alt="Banner1"></a></div>
                            <!-- End Item -->
                            <div class="item"> <a href="#"><img src="images/casa3.jpg" class="img-responsive" alt="Banner1"></a></div>
                            <!-- End Item -->
                          </div>
                          <!-- End Carousel Inner -->
                        </li>
                        <!-- /.carousel -->
                      </ul>
                    </li>
                  </ul>
                </li>
                <li> <a href="blog_page.html">Blog</a></li>
                <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Altro </a>
                  <ul class="dropdown-menu">
                    <li> <a href="cart_page.php">Carrello</a></li>
                  </ul>
                </li>
                <li> <a href="about.php">Riguardo a noi</a></li>
                <li> <a href="contact_us.php">Contattaci</a></li>
              </ul>
            </div>
            <!-- /.nav-collapse -->
          </nav>
        </div>
      </div>
    </header>
    <!-- =====  HEADER END  ===== -->
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <div class="row ">
        <!-- =====  BANNER STRAT  ===== -->
        <?php
          $query = "SELECT *
                    FROM MOBILE
                    WHERE ID = '$_SESSION[cod]'";
          $ris = mysqli_query($conn, $query);
          while ($riga = mysqli_fetch_array($ris)) {
            echo "<div class='col-sm-12'>";
              echo "<div class='breadcrumb ptb_20'>";
                echo "<h1>$riga[1]</h1>";
                echo "<ul>";
                  echo "<li><a href='index2.php'>Home</a></li>";
                  echo "<li><a href='category_page.php'>Prodotti</a></li>";
                  echo "<li class='active'>$riga[1]</li>";
                echo "</ul>";
              echo "</div>";
            echo "</div>";
          }

        ?>
        <!-- =====  BREADCRUMB END===== -->
        <div id="column-left" class="col-sm-4 col-lg-3 hidden-xs">
          <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
            <div class="nav-responsive">
              <div class="heading-part">
                <h2 class="main_title">CATEGORIE</h2>
              </div>
              <ul class="nav  main-navigation collapse in">
                <li><a href="#">Cucina</a></li>
                <li><a href="#">Soggiorno</a></li>
                <li><a href="#">Camera da letto</a></li>
                <li><a href="#">Cameretta</a></li>
                <li><a href="#">Bagno</a></li>
                <li><a href="#">Sala da pranzo</a></li>
                <li><a href="#">Studio</a></li>
                <li><a href="#">Ingresso</a></li>
                <li><a href="#">Lavanderia</a></li>
                <li><a href="#">Balcone e giardino</a></li>
                <li><a href="#">Ufficio</a></li>
                <li><a href="#">Smart Home</a></li>
                <li><a href="#">Accessori</a></li>
              </ul>
            </div>
          </div>
          <div class="left_banner left-sidebar-widget mt_30 mb_40"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
          <div class="left-special left-sidebar-widget mb_50">
            <div class="heading-part mb_10 ">
              <h2 class="main_title">Migliori prodotti</h2>
            </div>
            <div id="left-special" class="owl-carousel">
              <ul class="row ">
                <!-- INIZIO PRODOTTO MIGLIORE -->
                <?php
                $query12 = "SELECT *
                            FROM MOBILE
                            ORDER BY PREZZO DESC";
                $ris12 = mysqli_query($conn, $query12);
                $stampa = 0;
                while ($riga = mysqli_fetch_array($ris12)){
                  $stampa++;
                  if($stampa<10){
                    echo "<li class='item product-layout-left mb_20'>";
                      echo "<div class='product-list col-xs-4'>";
                        echo "<div class='product-thumb'>";
                          echo "<div class='image product-imageblock'> <a> <img class='img-responsive' title='iPod Classic' alt='iPod Classic' src='images/product/$riga[8]'> <img class='img-responsive' title='$riga[1]' alt='$riga[1]' src='images/product/$riga[9]'> </a> </div>";
                        echo "</div>";
                      echo "</div>";
                      echo "<div class='col-xs-8'>";
                        echo "<div class='caption product-detail'>";
                          echo "<h6 class='product-name'><a href='#'>$riga[1]</a></h6>";
                          echo "<div class='rating'> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span> </div>";
                          echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span> $riga[7]</span>";
                          echo "</span>";
                        echo "</div>";
                      echo "</div>";
                    echo "</li>";
                    if(($stampa == 3) || ($stampa == 6) || ($stampa == 9)){
                      echo "</ul>";
                      if($stampa != 9){
                        echo "<ul class='row'>";
                      }
                    }
                  }
                }
                ?>
                <!-- FINE PRODOTTO MIGLIORE  -->
            </div>
          </div>
        </div>
        <div class="col-sm-8 col-lg-9 mtb_20">
          <!--  INIZIO CARATTERISTICHE PRODOTTO  -->
          <?php
          $query = "SELECT *
                    FROM MOBILE
                    WHERE ID = '$_SESSION[cod]'";
          $ris = mysqli_query($conn, $query);
          while ($riga = mysqli_fetch_array($ris)) {
          echo "<div class='row mt_10'>";
            echo "<div class='col-md-6'>";
              echo "<div><a class='thumbnails'> <img data-name='product_image' src='images/product/$riga[8]' alt='' /></a></div>";
              echo "<div id='product-thumbnail' class='owl-carousel'>";
                echo "<div class='item'>";
                  echo "<div class='image-additional'><a class='thumbnail' href='images/product/$riga[8]' data-fancybox='group1'> <img src='images/product/$riga[8]' alt='' /></a></div>";
                echo "</div>";
                echo "<div class='item'>";
                  echo "<div class='image-additional'><a class='thumbnail' href='images/product/$riga[9]' data-fancybox='group1'> <img src='images/product/$riga[9]' alt='' /></a></div>";
                echo "</div>";
                echo "<div class='item'>";
                  echo "<div class='image-additional'><a class='thumbnail' href='images/product/$riga[8]' data-fancybox='group1'> <img src='images/product/$riga[8]' alt='' /></a></div>";
                echo "</div>";
                echo "<div class='item'>";
                  echo "<div class='image-additional'><a class='thumbnail' href='images/product/$riga[9]' data-fancybox='group1'> <img src='images/product/$riga[9]' alt='' /></a></div>";
                echo "</div>";
                echo "<div class='item'>";
                  echo "<div class='image-additional'><a class='thumbnail' href='images/product/$riga[8]' data-fancybox='group1'> <img src='images/product/$riga[8]' alt='' /></a></div>";
                echo "</div>";
                echo "<div class='item'>";
                  echo "<div class='image-additional'><a class='thumbnail' href='images/product/$riga[9]' data-fancybox='group1'> <img src='images/product/$riga[9]' alt='' /></a></div>";
                echo "</div>";
                echo "<div class='item'>";
                  echo "<div class='image-additional'><a class='thumbnail' href='images/product/$riga[8]' data-fancybox='group1'> <img src='images/product/$riga[8]' alt='' /></a></div>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
            echo "<div class='col-md-6 prodetail caption product-thumb'>";
              echo "<h4 data-name='product_name' class='product-name'><a title='Casual Shirt With Ruffle Hem'>$riga[1]</a></h4>";
              echo "<div class='rating'>";
                echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span>";
              echo "</div>";
              echo "<span class='price mb_20'><span class='amount'><span class='currencySymbol'>$</span> $riga[7]</span>";
              echo "</span>";
              echo "<hr>";
              echo "<ul class='list-unstyled product_info mtb_20'>";
                echo "<li>";
                  echo "<label>Marca:</label>";
                  echo "<span> <a href='#'>$riga[2]</a></span></li>";
                echo "<li>";
                  echo "<label>Codice prodotto:</label>";
                  echo "<span> $riga[0]</span></li>";
                echo "<li>";
                  echo "<label>Quantità:</label>";
                  echo "<span> $riga[10]</span></li>";
                echo "<li>";
                  echo "<label>Disponibilità:</label>";
                  if($riga[10]>0){
                    echo "<span> Disponibile</span></li>";
                  }else{
                    echo "<span> Non disponibile</span></li>";
                  }
              echo "</ul>";
              echo "<hr>";
              echo "<p class='product-desc mtb_30'> $riga[11]</p>";
              echo "<div id='product'>";
                echo "<div class='form-group'>";
                  echo "<div class='row'>";
                    echo "<div class='Sort-by col-md-6'>";
                      echo "<label>Quantità:</label>";
                      echo "<input name='product_quantity' min='1' value='1' type='number'>";
                    echo "</div>";
                    echo "<div class='Color col-md-6'>";
                      echo "<label>Colore:</label>";
                      echo "<select name='product_color' id='select-by-color' class='selectpicker form-control'>";
                        echo "<option>Blu</option>";
                        echo "<option>Verde</option>";
                        echo "<option>Arancione</option>";
                        echo "<option>Bianco</option>";
                      echo "</select>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
                echo "<div class='button-group mt_30'>";
                  echo "<div class='add-to-cart'><a href='#'><span>Add to cart</span></a></div>";
                  echo "<div class='wishlist'><a href='#'><span>wishlist</span></a></div>";
                  echo "<div class='compare'><a href='#'><span>Compare</span></a></div>";
                  echo "<input type='submit' value='Aggiungi prodotto' class='btn btn-default btn-lg'>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
          $stile = $riga[3];
          }
          ?>
          <!-- FINE CARATTERISTICHE PRODOTTO  -->
          <div class="row">
            <div class="col-md-12">
              <div id="exTab5" class="mtb_30">
                <ul class="nav nav-tabs">
                  <li class="active"> <a href="#1c" data-toggle="tab">Commenti</a> </li>
                  <li><a href="#2c" data-toggle="tab">Recensione </a> </li>
                  <li><a href="#3c" data-toggle="tab">Problemi</a> </li>
                </ul>
                <div class="tab-content ">
                  <div class="tab-pane active pt_20" id="1c">
                    <!-- INSERIRE commenti PRODOTTO -->
                    <div id="comments" class="comments-area mt_50">
                    <?php
                    $query12 = "SELECT COUNT(COMMENTO)
                              FROM RECENSIONE
                              WHERE MOBILE = '$_SESSION[cod]'";
                    $ris12 = mysqli_query($conn, $query12);
                      while ($riga2 = mysqli_fetch_array($ris12)){
                        if($riga2[0]>1){
                          echo "<h3 class='comment-title'>$riga2[0] Commenti</h3>";
                        }else{
                          echo "<h3 class='comment-title'>$riga2[0] Commento</h3>";
                        }
                      }
                      $query9 = "SELECT COMMENTO,VALUTAZIONE,NOME
                                FROM RECENSIONE
                                WHERE MOBILE = '$_SESSION[cod]'";
                      $ris9 = mysqli_query($conn, $query9);
                      while ($riga = mysqli_fetch_array($ris9)) {
                      echo "<ul class='comment-list mt_30'>";
                        echo "<li class='comment'>";
                          echo "<hr>";
                          echo "<article class='comment-body mtb_20'>";
                            echo "<div class='comment-avatar'> <img alt='' src='images/account/user-200.png'> </div>";
                            echo "<div class='comment-main'>";
                              echo "<h5 class='author-name'> <a href='#' class='comment-name'>$riga[2]</a> <small class='comment-date'></small> </h5>";
                              echo "<div class='comment-reply pull-right'> <a href='#'><i class='fa fa-reply' aria-hidden='true'></i> Reply</a> </div>";
                              echo "<div class='comment-content mt_10'>$riga[0]</div>";
                              echo "<div class='rating'>";
                              for($tmp=0; $tmp<$riga[1]; $tmp++){
                                echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                              }
                              if($riga[1]<5){
                                $stellaMancante = 5-$riga[1];
                                for($tmp=0; $tmp<$stellaMancante; $tmp++){
                                  echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span>";
                                  }
                              }
                              echo "</div>";
                            echo "</div>";
                          echo "</article>";
                          echo "<hr>";
                        echo "</li>";
                      echo "</ul>";
                    }
                     ?>
                     </div>
                  </div>
                  <div class="tab-pane" id="2c">
                    <form class="form-horizontal" action="" method="POST">
                      <div id="review"></div>
                      <h4 class="mt_20 mb_30">Scrivi una recensione</h4>
                      <div class="form-group required">
                        <div class="form-group required">
                          <div class="col-sm-12">
                            <label class="control-label" for="input-name">Il tuo nome</label>
                            <input name="nomeRecensione" value="" id="input-name" class="form-control" type="text">
                          </div>
                        </div>
                        <div class="col-sm-12">
                          <label class="control-label" for="input-review">Il tuo commento</label>
                          <textarea name="text" id="input-review" class="form-control"></textarea>
                          <div class="help-block"><span class="text-danger">Nota:</span> Non inserire linguaggio scurrile, altrimenti verrai segnalato</div>
                        </div>
                      </div>
                      <label>------------------------------</label>
                      <div class="form-group required">
                        <div class="col-md-6">

                          <label class="control-label">Valutazione </label>
                          <div class="rates"><span>Min </span>
                            <input name="rating" value="1" type="radio">
                            <input name="rating" value="2" type="radio">
                            <input name="rating" value="3" type="radio">
                            <input name="rating" value="4" type="radio">
                            <input name="rating" value="5" type="radio">
                            <span>Max </span></div>
                        </div>
                        <div class="col-md-6">
                          <div class="buttons pull-right">
                            <button type="submit" name="invia" class="btn btn-md btn-link">Invia</button>
                          </div>
                        </div>
                        <label>--------------------------------</label>
                      </div>
                    </form>
                    <?php
                    $query10 = "SELECT *
                                FROM RECENSIONE
                                WHERE UTENTE = '$_SESSION[email]' AND MOBILE = '$_SESSION[cod]'";
                    $ris10 = mysqli_query($conn, $query10);
                    if($ris10->num_rows > 0){

                    }else{
                        if((isset($_POST['text'])) && (isset($_POST['rating']))){
                          $query5 = "INSERT INTO RECENSIONE (UTENTE, NOME, MOBILE, COMMENTO, VALUTAZIONE)
                                    VALUES ('$_SESSION[email]', '$_POST[nomeRecensione]', '$_SESSION[cod]', '$_POST[text]', '$_POST[rating]')";
                          $ris5 = mysqli_query($conn, $query5);
                          $newpage = 'product.php';
                          header('Refresh: 0; url='.$newpage);
                        }
                      }

                     ?>
                  </div>
                  <div class="tab-pane pt_20" id="3c">
                    <p>Nessun problema riscontrato...</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="heading-part text-center mb_10">
                <h2 class="main_title mt_50">Prodotti correlati</h2>
              </div>
              <div class="related_pro box">
                <!-- INIZIO PRODOTTI CORRELATI -->
                <div class="product-layout  product-grid related-pro  owl-carousel mb_50 ">
                  <!-- INIZIO PRODOTTO -->
                  <?php
                  $query2 = "SELECT *
                            FROM MOBILE
                            WHERE STILE = '$stile'";
                  $ris2 = mysqli_query($conn, $query2);
                  $i = 0;
                  $h = 12;
                  $n = 0;
                  while ($riga = mysqli_fetch_array($ris2)) {
                    $i++;
                    $h++;
                    $n++;
                  echo "<div class='item'>";
                    echo "<div class='product-thumb'>";
                      echo "<div class='image product-imageblock'> <a> <img data-name='product_image' src='images/product/$riga[8]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> <img src='images/product/$riga[9]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> </a>";
                        echo "<div class='button-group text-center'>";
                        echo "<form action='' method='POST'>";
                          echo "<div class='wishlist'><input type='submit' class='wishlist' value='' name='miniBottone$h'></div>";
                          echo "</form>";
                          echo "<form action='' method='POST'>";
                          echo "<div class='quickview'><input type='submit' class='quickview' value='' name='prod$n'></div>";
                          echo "</form>";
                          echo "<form action='' method='POST'>";
                          echo "<div class='compare'><input type='submit' class='compare' value='' name='miniBottone'></div>";
                          echo "</form>";
                          echo "<form action='' method='POST'>";
                          echo "<div class='add-to-cart'><input type='submit' class='add-to-cart' value='' name='miniBottone$i'></div>";
                          echo "</form>";
                        echo "</div>";
                      echo "</div>";
                      echo "<div class='caption product-detail text-center'>";
                        echo "<h6 data-name='product_name' class='product-name mt_20'><a href='#' title='Casual Shirt With Ruffle Hem'>$riga[1]</a></h6>";
                        echo "<div class='rating'>";
                          echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                          echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                          echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                          echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span>";
                          echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span>";
                        echo "</div>";
                        echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span> $riga[7]</span>";
                        echo "</span>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                  }
                  ?>
                  <!--  FINE PRODOTTO  -->

                  <!-- FINE PRODOTTI CORRELATI -->
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div id="brand_carouse" class="ptb_30 text-center">
        <div class="type-01">
          <div class="heading-part mb_10 ">
            <h2 class="main_title">Brand Logo</h2>
          </div>
          <div class="row">
            <div class="col-sm-12">
              <div class="brand owl-carousel ptb_20">
                <div class="item text-center"> <a href="#"><img src="images/brand/brand1.png" alt="Disney" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand2.png" alt="Dell" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand3.png" alt="Harley" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand4.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand5.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand6.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand7.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand8.png" alt="Canon" class="img-responsive" /></a> </div>
                <div class="item text-center"> <a href="#"><img src="images/brand/brand9.png" alt="Canon" class="img-responsive" /></a> </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====  CONTAINER END  ===== -->
    <!-- =====  FOOTER START  ===== -->
    <div class="footer pt_60">
      <div class="container">
        <div class="newsletters mt_30 mb_50">
          <div class="row">
            <div class="col-sm-6">
              <div class="news-head pull-left">
                <h2>SEGUI I NOSTRI AGGIORNAMENTI !</h2>
                <div class="new-desc">Sii il primo a conoscere i nostri nuovi arrivi e molto altro!</div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="news-form pull-right">
                <form onsubmit="return validatemail();" action="" method="post">
                  <div class="form-group required">
                    <input name="email2" id="email2" placeholder="Inserisci la tua Email" class="form-control input-lg" required="" type="email">
                    <input type="submit" name="iscriviti" value="Iscriviti" style="background-color:black;"class="btn btn-default btn-lg">
                  </div>
                </form>
                <?php
                if((isset($_POST['iscriviti'])) && (isset($_POST['email2']))){
                  $query5 = "INSERT INTO AGGIORNAMENTO_CLIENTE (EMAIL)
                            VALUES ('$_POST[email2]')";
                  $ris5 = mysqli_query($conn, $query5);
                  $newpage = 'product.php';
                  header('Refresh: 0; url='.$newpage);
                }
                 ?>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Informazioni</h6>
            <ul>
              <li><a href="#">Riguardo a noi</a></li>
              <li><a href="#">Informazioni sulla consegna</a></li>
              <li><a href="#">Politica sulla privacy</a></li>
              <li><a href="#">Termini & Condizioni</a></li>
              <li><a href="contact_us.php">Contattaci</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Servizi</h6>
            <ul>
              <li><a href="#">Mappa sito</a></li>
              <li><a href="#">Lista dei desideri</a></li>
              <li><a href="#">Mio Account</a></li>
              <li><a href="#">Cronologia ordini</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Extra</h6>
            <ul>
              <li><a href="#">Marche</a></li>
              <li><a href="#">Certificati regalo</a></li>
              <li><a href="#">Notizie</a></li>
            </ul>
          </div>
          <div class="col-md-3 footer-block">
            <h6 class="footer-title ptb_20">Contatti</h6>
            <ul>
              <li>Magazzino e uffici</li>
              <li>Canicattini Bagni via Bellini 23 (SR)</li>
              <li>Tel. 0931945897</li>
              <li>Cell. 3884582706</li>
              <li>maurizio96010@gmail.com</li>
              <li><a href="#">www.PantanoShop.com</a></li>
            </ul>
          </div>
        </div>
      </div>
      <div class="footer-bottom mt_60 ptb_20">
        <div class="container">
          <div class="row">
            <div class="col-sm-4">
              <div class="social_icon">
                <ul>
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-google"></i></a></li>
                  <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-rss"></i></a></li>
                </ul>
              </div>
            </div>
            <div class="col-sm-4">
              <div class="copyright-part text-center">@ 2019 All Rights Reserved PantanoShop</div>
            </div>
            <div class="col-sm-4">
              <div class="payment-icon text-right">
                <ul>
                  <li><i class="fa fa-cc-paypal "></i></li>
                  <li><i class="fa fa-cc-visa"></i></li>
                  <li><i class="fa fa-cc-discover"></i></li>
                  <li><i class="fa fa-cc-mastercard"></i></li>
                  <li><i class="fa fa-cc-amex"></i></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- =====  FOOTER END  ===== -->
  </div>
  <a id="scrollup"></a>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/custom.js"></script>
</body>

</html>
