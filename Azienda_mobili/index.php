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

<body>
  <!-- =====  LODER  ===== -->
  <?php
  include "conn.php";
  ob_start();
  session_start();
  $_SESSION['username'] = '';
  $_SESSION['email'] = '';
   ?>
  <div class="loder"></div>
  <div class="wrapper">
    <div id="subscribe-me" class="modal animated fade in" role="dialog" data-keyboard="true" tabindex="-1">
      <div class="newsletter-popup"> <img class="offer" src="images/offerta.jpg" width="350" alt="offer">
        <div class="newsletter-popup-static newsletter-popup-top">
          <div class="popup-text">
            <div class="popup-title">50% <span> Di <br>Sconto</span></div>
            <div class="popup-desc">
              <div>ISCRIVITI E RICEVI IL 50% DI SCONTO SUL TUO PROSSIMO ORDINE</div>
            </div>
          </div>
          <form onsubmit="return  validatpopupemail();" method="post">
            <div class="form-group required">
              <input type="email" name="email-popup" id="email-popup" placeholder="Inserisci la tua Email" class="form-control input-lg" required />
              <button type="submit" class="btn btn-default btn-lg" id="email-popup-submit">Iscriviti</button>
              <label class="checkme">
                <input type="checkbox" value="" id="checkme" /> Non mostrare di nuovo </label>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- =====  HEADER START  ===== -->
    <header id="header">
      <div class="header-top">
        <div class="container">
          <div class="row">
            <div class="col-xs-12 col-sm-4">
              <div class="header-top-left">
                <div class="contact"><span class="hidden-xs hidden-sm hidden-md">Apertura negozi dalle 9:00 alle 19:00 </span></div>
              </div>
            </div>
            <div class="col-xs-12 col-sm-8">
              <ul class="header-top-right text-right">
                <li class="account"><a href="login.php">Account</a></li>
                <li class="language dropdown"> <span class="dropdown-toggle" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Lingue <span class="caret"></span> </span>
                  <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    <li><a href="#">Inglese</a></li>
                    <li><a href="#">Francese</a></li>
                    <li><a href="#">Tedesco</a></li>
                  </ul>
                </li>
                <li class="currency dropdown"> <span class="dropdown-toggle" id="dropdownMenu12" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">Moneta <span class="caret"></span> </span>
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
                <input id="search-input" name="search" value="" placeholder="Cerca" class="form-control input-lg" autocomplete="off" type="text">
                <span class="input-group-btn">
              <button type="button" class="btn btn-default btn-lg"><i class="fa fa-search"></i></button>
              </span> </div>
            </div>
            <div class="navbar-header col-xs-6 col-sm-4"> <a class="navbar-brand" href="index2.php"> <img alt="themini" src="images/Logo-PantanoShop.png"> </a> </div>
            <div class="col-xs-6 col-sm-4 shopcart">
              <div id="cart" class="btn-group btn-block mtb_40">
                <button type="button" class="btn" data-target="#cart-dropdown" data-toggle="collapse" aria-expanded="true"><span id="shippingcart">Carrello</span><span id="cart-total">items (0)</span> </button>
              </div>
              <div id="cart-dropdown" class="cart-menu collapse">
                <ul>
                  <li>
                    <table class="table table-striped">
                      <tbody>

                      </tbody>
                    </table>
                  </li>
                  <li>
                    <table class="table">
                      <tbody>
                        <tr>
                          <td class="text-right"><strong>Totale parziale</strong></td>
                          <td class="text-right">$ 0.0</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                          <td class="text-right">$2.00</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>IVA (22%)</strong></td>
                          <td class="text-right">$ 0.0</td>
                        </tr>
                        <tr>
                          <td class="text-right"><strong>Totale</strong></td>
                          <td class="text-right">$ 0.0</td>
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
                <li> <a href="index.php">Home</a></li>
                <li> <a href="category_page.php">Shop</a></li>
                <li class="dropdown mega-dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Scopri di più</a>
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
    <!-- =====  BANNER STRAT  ===== -->
    <br><br>
    <div class="banner">
      <div class="main-banner owl-carousel">
        <div class="item"><a href="#"><img src="images/banner-promozione2.png" alt="Main Banner" class="img-responsive" /></a></div>
        <div class="item"><a href="#"><img src="images/banner-promozione.png" alt="Main Banner" class="img-responsive" /></a></div>
      </div>
    </div>
    <!-- =====  BANNER END  ===== -->
    <!-- =====  CONTAINER START  ===== -->
    <div class="container">
      <!-- =====  SUB BANNER  STRAT ===== -->
      <div class="row">
        <div class="col-sm-3 mt_20 cms-icon ">
          <div class="feature-i-left ptb_30 ">
            <div class="icon-right Shipping"></div>
            <h6>Spedizione gratuita</h6>
            <p>Spedizione gratuita in tutto il mondo</p>
          </div>
        </div>
        <div class="col-sm-3 mt_20 cms-icon ">
          <div class="feature-i-left ptb_30 ">
            <div class="icon-right Order"></div>
            <h6>Ordina online</h6>
            <p>Ordina dai migliori negozi di mobiliari</p>
          </div>
        </div>
        <div class="col-sm-3 mt_20 cms-icon ">
          <div class="feature-i-left ptb_30 ">
            <div class="icon-right Save"></div>
            <h6>Acquista e risparmia</h6>
            <p>Raccogli i punti ad ogni acquisto</p>
          </div>
        </div>
        <div class="col-sm-3 mt_20 cms-icon ">
          <div class="feature-i-left ptb_30 ">
            <div class="icon-right Safe"></div>
            <h6>Acquisti sicuri</h6>
            <p>Fidati delle recensioni</p>
          </div>
        </div>
      </div>
      <div class="row ">
        <div class="col-sm-12 mt_30">
          <!-- =====  PRODUCT TAB  ===== -->
          <div id="product-tab" class="mt_10">
            <div class="heading-part mb_10 ">
              <h2 class="main_title">Prodotti sponsorizzati</h2>
            </div>
            <ul class="nav text-right">
              <li class="active"> <a href="#nArrivals" data-toggle="tab">Nuovi arrivi</a> </li>
              <li><a href="#Bestsellers" data-toggle="tab">I più venduti</a> </li>
              <li><a href="#Featured" data-toggle="tab">In primo piano</a> </li>
            </ul>
            <div class="tab-content clearfix box">
              <div class="tab-pane active" id="nArrivals">
                <div class="nArrivals owl-carousel">
                  <?php
                  $query2 = "SELECT *
                            FROM MOBILE
                            ORDER BY DATA DESC
                            LIMIT 7";
                  $ris2 = mysqli_query($conn, $query2);
                  while ($riga = mysqli_fetch_array($ris2)){
                  echo "<div class='product-grid'>";
                    echo "<div class='item'>";
                      echo "<div class='product-thumb'>";
                        echo "<div class='image product-imageblock'> <a href='product_detail_page.html'> <img data-name='product_image' src='images/product/$riga[8]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> <img src='images/product/$riga[9]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> </a>";
                          echo "<div class='button-group text-center'>";
                            echo "<div class='wishlist'><a href='#'><span>wishlist</span></a></div>";
                            echo "<div class='quickview'><a href='#'><span>Quick View</span></a></div>";
                            echo "<div class='compare'><a href='#'><span>Compare</span></a></div>";
                            echo "<div class='add-to-cart'><a href='#'><span>Add to cart</span></a></div>";
                          echo "</div>";
                        echo "</div>";
                        echo "<div class='caption product-detail text-center'>";
                          echo "<div class='rating'> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span> </div>";
                          echo "<h6 data-name='product_name' class='product-name'><a href='#' title='Casual Shirt With Ruffle Hem'>$riga[1]</a></h6>";
                          echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span> $riga[7]</span>";
                          echo "</span>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                  }
                  ?>
                </div>
              </div>
              <div class="tab-pane" id="Bestsellers">
                <div class="Bestsellers owl-carousel">
                  <?php
                  $query = "SELECT *
                            FROM MOBILE
                            WHERE VENDUTO > 0
                            ORDER BY VENDUTO DESC";
                  $ris = mysqli_query($conn, $query);
                  while ($riga = mysqli_fetch_array($ris)){
                  echo "<div class='product-grid'>";
                    echo "<div class='item'>";
                      echo "<div class='product-thumb  mb_30'>";
                        echo "<div class='image product-imageblock'> <a href='product.php'> <img data-name='product_image' src='images/product/$riga[8]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> <img src='images/product/$riga[9]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> </a>";
                          echo "<div class='button-group text-center'>";
                            echo "<div class='wishlist'><a href='#'><span>wishlist</span></a></div>";
                            echo "<div class='quickview'><a href='#'><span>Quick View</span></a></div>";
                            echo "<div class='compare'><a href='#'><span>Compare</span></a></div>";
                            echo "<div class='add-to-cart'><a href='#'><span>Add to cart</span></a></div>";
                          echo "</div>";
                        echo "</div>";
                        echo "<div class='caption product-detail text-center'>";
                          echo "<div class='rating'> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span> </div>";
                          echo "<h6 data-name='product_name' class='product-name'><a href='#' title='Casual Shirt With Ruffle Hem'>$riga[1]</a></h6>";
                          echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span> $riga[7]</span>";
                          echo "</span>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                  }
                  ?>
                </div>
              </div>
              <div class="tab-pane" id="Featured">
                <div class="Featured owl-carousel">
                  <!-- INIZIO PRODOTTO PRIMO PIANO -->
                  <?php
                  $query3 = "SELECT *
                            FROM MOBILE
                            ORDER BY CUORE DESC
                            LIMIT 7";
                  $ris3 = mysqli_query($conn, $query3);
                  while ($riga = mysqli_fetch_array($ris3)){
                  echo "<div class='product-grid'>";
                    echo "<div class='item'>";
                      echo "<div class='product-thumb  mb_30'>";
                        echo "<div class='image product-imageblock'> <a href='product.php'> <img data-name='product_image' src='images/product/$riga[8]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> <img src='images/product/$riga[9]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> </a>";
                          echo "<div class='button-group text-center'>";
                            echo "<div class='wishlist'><a href='#'><span>wishlist</span></a></div>";
                            echo "<div class='quickview'><a href='#'><span>Quick View</span></a></div>";
                            echo "<div class='compare'><a href='#'><span>Compare</span></a></div>";
                            echo "<div class='add-to-cart'><a href='#'><span>Add to cart</span></a></div>";
                          echo "</div>";
                        echo "</div>";
                        echo "<div class='caption product-detail text-center'>";
                          echo "<div class='rating'> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span> </div>";
                          echo "<h6 data-name='product_name' class='product-name'><a href='#' title='Casual Shirt With Ruffle Hem'>$riga[1]</a></h6>";
                          echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span> $riga[7]</span>";
                          echo "</span>";
                        echo "</div>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                  }
                  ?>
                  <!-- FINE PRODOTTO PRIMO PIANO -->
                </div>
              </div>
            </div>
          </div>
          <!-- =====  PRODUCT TAB  END ===== -->
        </div>
      </div>
      <div class="row">
        <div class="cms_banner">
          <div class="col-xs-12 mt_60">
            <div id="subbanner4" class="sub-hover">
              <div class="sub-img"><a href="#"><img src="images/banner-PantanoShop2.png" alt="Sub Banner5" class="img-responsive"></a></div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 mtb_10">
          <!-- =====  PRODUCT TAB  ===== -->
          <div class="mt_60">
            <div class="heading-part mb_10 ">
              <h2 class="main_title">Offerte della settimana</h2>
            </div>
            <div class="latest_pro box">
              <div class="latest owl-carousel">
                <!-- INIZIO PRODOTTO OFFERTE -->
                <?php
                $query3 = "SELECT *
                          FROM MOBILE
                          ORDER BY CUORE ASC
                          LIMIT 7";
                $ris3 = mysqli_query($conn, $query3);
                while ($riga = mysqli_fetch_array($ris3)){
                echo "<div class='product-grid'>";
                  echo "<div class='item'>";
                    echo "<div class='product-thumb  mb_30'>";
                      echo "<div class='image product-imageblock'> <a href='product.php'> <img data-name='product_image' src='images/product/$riga[8]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> <img src='images/product/$riga[9]' alt='iPod Classic' title='iPod Classic' class='img-responsive'> </a>";
                        echo "<div class='button-group text-center'>";
                          echo "<div class='wishlist'><a href='#'><span>wishlist</span></a></div>";
                          echo "<div class='quickview'><a href='#'><span>Quick View</span></a></div>";
                          echo "<div class='compare'><a href='#'><span>Compare</span></a></div>";
                          echo "<div class='add-to-cart'><a href='#'><span>Add to cart</span></a></div>";
                        echo "</div>";
                      echo "</div>";
                      echo "<div class='caption product-detail text-center'>";
                        echo "<div class='rating'> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span> </div>";
                        echo "<h6 data-name='product_name' class='product-name'><a href='#' title='Casual Shirt With Ruffle Hem'>$riga[1]</a></h6>";
                        echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span> $riga[7]</span>";
                        echo "</span>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
                }
                ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-sm-12 mtb_10">
          <!-- =====  Blog ===== -->
          <div id="Blog" class="mt_50">
            <div class="heading-part mb_10 ">
              <h2 class="main_title">Ultime notizie</h2>
            </div>
            <div class="blog-contain box">
              <div class="blog owl-carousel ">
                <div class="item">
                  <div class="box-holder">
                    <div class="thumb post-img"><a href="#"> <img src="images/blog/notizia.jpg" alt="themini"> </a>
                      <div class="date-time text-center">
                        <div class="day"> 19</div>
                        <div class="month">Apr</div>
                      </div>
                      <div class="post-image-hover"> </div>
                      <div class="post-info">
                        <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Soggiorno moderno Modello Scevis</a> </h6>
                        <p>Parete attrezzata moderna per un arredo soggiorno giovane e lineare. Mobile soggiorno composto da vari elementi come l’utile pianale porta tv con luce a led, basi, pensili e piccola libreria.</p>
                        <div class="view-blog">
                          <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Commenti</a> </div>
                          <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> Mostra dettagli</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-holder">
                    <div class="thumb post-img"><a href="#"> <img src="images/blog/notizia2.jpg" alt="themini"> </a>
                      <div class="date-time text-center">
                        <div class="day"> 10</div>
                        <div class="month">Apr</div>
                      </div>
                      <div class="post-image-hover"> </div>
                      <div class="post-info">
                        <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">SOGGIORNO LAGO</a> </h6>
                        <p>il soggiorno LAGO è pensato per la vita di ogni giorno. Grazie all’estrema modularità delle pareti attrezzate e dei divani, la collezione LAGO Living permette di creare infinite soluzioni su misura per ogni stile, sogno e metratura. Riconfigurabile nel tempo e nello spazio, il soggiorno prende la forma che vuoi tu.</p>
                        <div class="view-blog">
                          <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Commenti</a> </div>
                          <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> Mostra dettagli</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-holder">
                    <div class="thumb post-img"><a href="#"> <img src="images/blog/notizia3.jpg" alt="themini"> </a>
                      <div class="date-time text-center">
                        <div class="day"> 03</div>
                        <div class="month">Apr</div>
                      </div>
                      <div class="post-image-hover"> </div>
                      <div class="post-info">
                        <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Arredo giardino</a> </h6>
                        <p>L’arredo da giardino è sempre di più una parte importante dell’arredamento di un’abitazione. La presenza di spazi aperti, che essi siano balconi, terrazzi o veri e propri giardini, dà un valore aggiunto non di poco conto ad una casa o un appartamento e, per far rendere al meglio questo valore, la scelta dell’arredamento da esterni è sempre più importante.</p>
                        <div class="view-blog">
                          <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Commenti</a> </div>
                          <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> Mostra dettagli</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="item">
                  <div class="box-holder">
                    <div class="thumb post-img"><a href="#"> <img src="images/blog/notizia4.jpg" alt="themini"> </a>
                      <div class="date-time text-center">
                        <div class="day"> 25</div>
                        <div class="month">Mar</div>
                      </div>
                      <div class="post-image-hover"> </div>
                      <div class="post-info">
                        <h6 class="mb_10 text-uppercase"> <a href="single_blog.html">Cucina lineare Su Misura personalizzabile della Mottes Mobili</a> </h6>
                        <p>Le dimensioni come in foto Lunghezza 425 cm. con apertura a gole Inox, modello Plana, completa dei elettrodomestici in classe A+ marchiati Electrolux. La nostra offerta è personalizzabile con le misure della vostra parete, e con la possibilità di scelta delle finiture delle ante e piano d'appoggio, sempre mantenendo lo sconto del 40%.</p>
                        <div class="view-blog">
                          <div class="write-comment pull-left"> <a href="single_blog.html"> 0 Commenti</a> </div>
                          <div class="read-more pull-right"> <a href="single_blog.html"> <i class="fa fa-link"></i> Mostra dettagli</a> </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- =====  Blog end ===== -->
          </div>
        </div>
      </div>
      <!-- =====  SUB BANNER END  ===== -->
      <div id="brand_carouse" class="ptb_60 text-center">
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
                  $newpage = 'index.php';
                  header('Refresh: 0; url='.$newpage);
                }
                 ?>
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
  <script src="js/jquery.firstVisitPopup.js"></script>
  <script src="js/custom.js"></script>
</body>



</html>
