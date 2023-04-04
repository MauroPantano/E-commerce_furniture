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
  <link rel="stylesheet" type="text/css" href="css/casella-testo.css">
  <link rel="shortcut icon" href="images/favicon.png">
  <link rel="apple-touch-icon" href="images/apple-touch-icon.html">
  <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.html">
  <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.html">
</head>

<body>
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
                          $iva = ($riga[0]*22)/100;
                          $totale = $riga[0]+$iva+2;
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
          <?php
            if(isset($_POST['svuota'])){
              $query5 = "DELETE FROM COMPRA WHERE UTENTE = '$_SESSION[email]'";
              $ris5 = mysqli_query($conn, $query5);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
           ?>
          <nav class="navbar">
            <p>menu</p>
            <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse"> <span class="i-bar"><i class="fa fa-bars"></i></span></button>
            <div class="collapse navbar-collapse js-navbar-collapse">
              <ul id="menu" class="nav navbar-nav">
                <li> <a href="index2.php">Home</a></li>
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
    <!-- =====  CONTAINER START  ===== -->
    <div class="container mt_30">
      <div class="row ">
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
        </div>
        <div class="col-sm-8 col-lg-9 mtb_20">
          <!-- contact  -->
          <div class="row">
            <div class="col-md-6 col-md-offset-3">
              <div class="panel-login panel">
                <div class="panel-heading">
                  <div class="row mb_20">
                    <center>
                      <h1>Account</h1>
                    </center>
                  </div>
                  <hr>
                </div>
                <div class="panel-body">
                  <div class="row">
                    <div class="col-lg-12">
                      <form id="login-form" action="#" method="post">
                        <!--Account con dati-->
                        <?php
                          //$img = "images/account/user-200.png";
                          $query = "SELECT *
                                    FROM UTENTE
                                    WHERE EMAIL = '$_SESSION[email]'";
                          $ris = mysqli_query($conn, $query);
                          echo "<center>";
                          echo "<img src='images/account/user-200.png' width='150' height='150'>";
                          echo "</center>";
                          while ($riga = mysqli_fetch_array($ris)){
                            if(!isset($_POST['login-submit'])){
                            echo "<b>Email:</b>";
                            echo "<input type=text placeholder='$riga[0]' name=email3 id=username1 class=form-control readonly>";
                            echo "<b>Nome:</b>";
                            echo "<input type=text placeholder='$riga[1]' name=nome3 id=username1 class=form-control readonly>";
                            echo "<b>Cognome:</b>";
                            echo "<input type=text placeholder='$riga[2]' name=cognome3 id=username1 class=form-control readonly>";
                            echo "<b>Password:</b>";
                            echo "<input type=password placeholder='$riga[3]' name=password3 id=username1 class=form-control readonly>";
                            echo "<b>Cellulare:</b>";
                            echo "<input type=text placeholder='$riga[4]' name=cellulare3 id=username1 class=form-control readonly>";
                            echo "<b>Via: </b>";
                            echo "<input type=text placeholder='$riga[5]' size='19' name=via3 id=CasellaTesto readonly>";
                            echo "<b> Numero civico: </b>";
                            echo "<input type=text placeholder='$riga[6]' size='1' name=numCivico3 id=CasellaTesto readonly><br>";
                            echo "<b>Città:</b>";
                            echo "<input type=text placeholder='$riga[7]' name=citta3 id=username1 class=form-control readonly>";
                            echo "<b>Comune:</b>";
                            echo "<input type=text placeholder='$riga[8]' name=comune3 id=username1 class=form-control readonly>";
                            echo "<b>Data di nascita:</b>";
                            echo "<input type=text placeholder='$riga[9]' name=data3 id=username1 class=form-control readonly>";
                            echo "<b>Carta di credito:</b>";
                            echo "<input type=text placeholder='$riga[10]' name=cartacredito3 id=username1 class=form-control readonly>";
                          }else {
                            echo "<b>Email:</b>";
                            echo "<input type=text placeholder='$riga[0]' name=email3 id=username1 class=form-control>";
                            echo "<b>Nome:</b>";
                            echo "<input type=text placeholder='$riga[1]' name=nome3 id=username1 class=form-control>";
                            echo "<b>Cognome:</b>";
                            echo "<input type=text placeholder='$riga[2]' name=cognome3 id=username1 class=form-control>";
                            echo "<b>Password:</b>";
                            echo "<input type=password placeholder='$riga[3]' name=password3 id=username1 class=form-control>";
                            echo "<b>Cellulare:</b>";
                            echo "<input type=text placeholder='$riga[4]' name=cellulare3 id=username1 class=form-control>";
                            echo "<b>Via: </b>";
                            echo "<input type=text placeholder='$riga[5]' size='19' name=via3 id=username1>";
                            echo "<b> Numero civico: </b>";
                            echo "<input type=text placeholder='$riga[6]' size='1' name=numCivico3 id=username1><br>";
                            echo "<b>Città:</b>";
                            echo "<input type=text placeholder='$riga[7]' name=citta3 id=username1 class=form-control>";
                            echo "<b>Comune:</b>";
                            echo "<input type=text placeholder='$riga[8]' name=comune3 id=username1 class=form-control>";
                            echo "<b>Data di nascita:</b>";
                            echo "<input type=date placeholder='$riga[9]' name=data3 id=username1 class=form-control>";
                            echo "<b>Carta di credito:</b>";
                            echo "<input type=text placeholder='$riga[10]' name=cartacredito3 id=username1 class=form-control>";
                          }
                          }
                        //Account modifica dati
                        echo "<div class='form-group text-center'>";

                        echo "</div>";
                        if(!isset($_POST['login-submit'])){
                        echo "<div class='form-group'>";
                          echo "<div class='row'>";
                            echo "<div class='col-sm-6 col-sm-offset-3'>";
                              echo "<input type='submit' name='login-submit' id='login-submit' tabindex='4' class='form-control btn btn-login' value='Modifica'>";
                            echo "</div>";
                          echo "</div>";
                        echo "</div>";
                      }else {
                        echo "<div class='form-group'>";
                          echo "<div class='row'>";
                            echo "<div class='col-sm-6 col-sm-offset-3'>";
                              echo "<input type='submit' name='conferma' id='login-submit' tabindex='4' class='form-control btn btn-login' value='Conferma'>";
                            echo "</div>";
                          echo "</div>";
                        echo "</div>";
                      }
                      if (isset($_POST['conferma'])) {
                        $query5 = "UPDATE UTENTE
                                    SET EMAIL = '$_POST[email3]',
                                    NOME = '$_POST[nome3]',
                                    COGNOME = '$_POST[cognome3]',
                                    PASSWORD = '$_POST[password3]',
                                    CELLULARE = '$_POST[cellulare3]',
                                    VIA = '$_POST[via3]',
                                    NUMERO_CIVICO = '$_POST[numCivico3]',
                                    CITTA = '$_POST[citta3]',
                                    COMUNE = '$_POST[comune3]',
                                    DATA = '$_POST[data3]',
                                    CARTA_DI_CREDITO = '$_POST[cartacredito3]'
                                    WHERE EMAIL = '$_SESSION[email]'";
                        $ris5 = mysqli_query($conn, $query5);
                        $newpage = 'login2.php';
                        header('Refresh: 0; url='.$newpage);
                      }
                        ?>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Single Blog  -->
  <!-- End Blog   -->
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
                  $newpage = 'login2.php';
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
  <a id="scrollup"></a>
  <script src="js/jQuery_v3.1.1.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.magnific-popup.js"></script>
  <script src="js/custom.js"></script>

</html>
