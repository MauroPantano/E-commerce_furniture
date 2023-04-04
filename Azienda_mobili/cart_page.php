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
  <?php
    include "conn.php";
    $spedizione = 0;
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
                            WHERE M.ID = C.MOBILE AND C.UTENTE = '$_SESSION[email]' AND C.CONFERMA = 0";
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
        <div class="col-sm-12">
          <div class="breadcrumb ptb_20">
            <h1>Carrello della spesa</h1>
            <ul>
              <li><a href="index2.php">Home</a></li>
              <li class="active">Carrello della spesa</li>
            </ul>
          </div>
        </div>
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
          <div class="left_banner left-sidebar-widget mb_50 mt_30"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
          <div class="left-special left-sidebar-widget mb_50">
            <div class="heading-part mb_20 ">
              <h2 class="main_title">Migliori prodotti</h2>
            </div>
            <div id="left-special" class="owl-carousel">
              <ul class="row ">
                <!-- INIZIO MIGLIORE PRODOTTO -->
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
            </div>
          </div>
        </div>
        <div class="col-sm-8 col-lg-9 mtb_20">
          <form enctype="multipart/form-data" method="post" action="#">
            <div class="table-responsive">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <td class="text-center">Immagine</td>
                    <td class="text-left">Nome del prodotto</td>
                    <td class="text-left">Modello</td>
                    <td class="text-left">Quantità</td>
                    <td class="text-right">Prezzo unitario</td>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $CodMobile = array();
                  $i = 0;
                  if($_SESSION['email']==''){

                  }else{
                  $query7 = "SELECT M.NOME,M.PREZZO,M.IMMAGINE,M.MARCA,M.ID
                            FROM MOBILE M JOIN COMPRA C ON
                            M.ID = C.MOBILE
                            WHERE M.ID = C.MOBILE AND UTENTE = '$_SESSION[email]' AND CONFERMA = 0";
                  $ris7 = mysqli_query($conn, $query7);
                  while ($riga = mysqli_fetch_array($ris7)){
                    $CodMobile[$i] = $riga[4];
                  echo "<tr>";
                    echo "<td class='text-center'><a href='#'><img src='images/product/$riga[2]' alt='iPod Classic' title='iPod Classic'></a></td>";
                    echo "<td class='text-left'><a href='product.html'>$riga[0]</a></td>";
                    echo "<td class='text-left'>$riga[3]</td>";
                    echo "<td class='text-left'>";
                      echo "<div style='max-width: 200px;' class='input-group btn-block'>";
                        echo "<input type='text' class='form-control quantity' size='1' value='1' name='quantity'>";
                        echo "<span class='input-group-btn'>";
                      echo "<button class='btn' title='' data-toggle='tooltip' type='submit' data-original-title='Update'><i class='fa fa-refresh'></i></button>";
                      echo "<button  class='btn btn-danger' title='' data-toggle='tooltip' type='button' data-original-title='Remove'><i class='fa fa-times-circle'></i></button>";
                      echo "</span></div>";
                    echo "</td>";
                    //PREZZO DEL SINGOLO PRODOTTO
                    echo "<td class='text-right'>$ $riga[1]</td>";
                    $i++;
                    }
                    }
                    ?>
                  </tr>
                </tbody>
              </table>
            </div>
          </form>
          <h3 class="mtb_10">Cosa ti piacerebbe fare dopo?</h3>
          <p>Scegli se hai un codice sconto o punti premio che desideri utilizzare o desideri stimare i costi di spedizione.</p>
          <div class="panel-group mt_20" id="accordion">
            <div class="panel panel-default pull-left">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Usa il codice coupon <i class="fa fa-caret-down"></i></a></h4>
              </div>
              <div id="collapseOne" class="panel-collapse collapse in">
                <div class="panel-body">
                  <label for="input-coupon" class="col-sm-4 control-label">Inserisci qui il tuo coupon</label>
                  <form action = "" method="POST">
                  <div class="input-group">
                    <input type="text" class="form-control" id="input-coupon" placeholder="Inserisci qui il tuo coupon" value="" name="coupon">
                    <span class="input-group-btn">
                  <input type="submit" class="btn" data-loading-text="Loading..." id="button-coupon" name="Applica-coupon" value="Applica-coupon">
                  </span> </div>
                  </form>
                </div>
              </div>
            </div>
            <?php
            $percentuale = 0;
              if(isset($_POST['Applica-coupon'])){
                $query20 = "SELECT *
                          FROM SCONTO
                          WHERE COD = '$_POST[coupon]'";
                $ris20 = mysqli_query($conn, $query20);
                while ($riga = mysqli_fetch_array($ris20)){
                  $percentuale = $riga[1];
                }
              }
             ?>
            <!--<div class="panel panel-default pull-left">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Riscatta buono regalo <i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapseTwo" class="panel-collapse collapse">
                <div class="panel-body">
                  <label for="input-voucher" class="col-sm-4 control-label">Riscatta buono regalo</label>
                  <div class="input-group">
                    <form action = "" method="POST">
                    <input type="text" class="form-control" id="input-voucher" placeholder="Inserisci importo" value="" name="voucher">
                    </form>
                    <span class="input-group-btn">
                  <input type="button" class="btn" data-loading-text="Loading..." id="button-voucher" value="Applica">
                  </span> </div>
                </div>
              </div>
            </div>-->
            <div class="panel panel-default pull-left">
              <div class="panel-heading">
                <h4 class="panel-title"> <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Stima spese di spedizione e &amp; Tasse <i class="fa fa-caret-down"></i></a> </h4>
              </div>
              <div id="collapseThree" class="panel-collapse collapse">
                <div class="panel-body">
                  <p>Inserisci la destinazione per avere un preventivo delle spese</p>
                  <form action="" method="POST" class="form-horizontal">
                    <div class="form-group required">
                      <label for="input-country" class="col-sm-2 control-label">Nazione</label>
                      <div class="col-sm-10">
                        <select class="form-control" id="input-country" name="country_id">

                          <?php
                            $query18 = "SELECT *
                                      FROM ELENCO_NAZIONI_SQL";
                            $ris18 = mysqli_query($conn, $query18);
                            while ($riga = mysqli_fetch_array($ris18)){
                              echo "<option value='$riga[1]'>$riga[1]</option>";
                            }
                          ?>
                        </select>
                      </div>
                    </div>
                    <input type="submit" name="Ottieni" class="btn pull-right" data-loading-text="Loading..." id="button-quote" value="Ottieni preventivo"><span class="popuptext" id="myPopup"></span>

                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-sm-4 col-sm-offset-8">
              <?php
              $query4 = "SELECT SUM(PREZZO)
                        FROM MOBILE M JOIN COMPRA C ON
                        M.ID = C.MOBILE
                        WHERE M.ID = C.MOBILE AND C.UTENTE = '$_SESSION[email]' AND CONFERMA = 0";
              $ris4 = mysqli_query($conn, $query4);
               ?>
              <table class="table table-bordered">
                <tbody>
                  <?php
                  if(isset($_POST['Ottieni'])){
                    $query17 = "SELECT PREZZO
                              FROM ELENCO_NAZIONI_SQL
                              WHERE NOME = '$_POST[country_id]'";
                    $ris17 = mysqli_query($conn, $query17);
                    while ($riga = mysqli_fetch_array($ris17)){
                      $spedizione = $riga[0];
                      echo "<tr>";
                      echo "<td class='text-right'><strong>Spedizione</strong></td>";
                      echo "<td class='text-right'>$ $spedizione</td>";
                      echo "</tr>";
                    }
                  }
                  ?>
                  <tr>
                    <?php
                    while ($riga = mysqli_fetch_array($ris4)){
                    $totParziale = number_format($riga[0],2);
                    echo "<td class='text-right'><strong>Totale parziale</strong></td>";
                    echo "<td class='text-right'>$ $totParziale</td>";
                    $iva = number_format(($riga[0]*22)/100,2);
                    if(isset($sconto)){
                      $totale = number_format(($riga[0]+$iva+2+$spedizione),2);
                    }
                    $totale2 = $riga[0]+$iva+2;
                    }
                    ?>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>Eco Tax (-2.00):</strong></td>
                    <td class="text-right">$2.00</td>
                  </tr>
                  <tr>
                    <td class="text-right"><strong>IVA (22%):</strong></td>
                    <?php
                    echo "<td class='text-right'>$ $iva</td>";
                    ?>
                  </tr>
                  <?php
                  if((isset($_POST['Applica-coupon'])) && (isset($_POST['coupon']))){
                    $sconto = number_format(($totale2/100)*$percentuale,2);
                    $sconto2 = ($totale2/100)*$percentuale;
                    echo "<tr>";
                      echo "<td class='text-right'><strong>Sconto:</strong></td>";
                      echo "<td class='text-right'>$ $sconto</td>";
                    echo "</tr>";
                  }
                  ?>
                  <tr>
                    <td class="text-right"><strong>Totale:</strong></td>
                    <?php
                    if(isset($sconto2)){
                      $totale = number_format($totale2 - $sconto2,2);
                    }elseif(isset($spedizione)){
                      $totale = number_format($totale2 + $spedizione,2);
                    }
                      echo "<td class='text-right'>$ $totale</td>";
                    ?>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
          <form action="" method="POST">
            <input class="btn pull-right mt_10" value="Conferma acquisto" name="Conferma" type="submit">
          </form>
          <form action="" method="POST">
            <input class="btn pull-left mt_10" value="Svuota" name="svuota" type="submit">
          </form>
        </div>
      </div>
      <?php
        if(isset($_POST['Conferma'])){
          $query6 = "UPDATE COMPRA
                    SET CONFERMA = CONFERMA+1
                    WHERE UTENTE = '$_SESSION[email]' AND CONFERMA = 0";
          $ris6 = mysqli_query($conn, $query6);
          for ($i=0; $i<count($CodMobile); $i++) {
            $query7 = "UPDATE MOBILE
                      SET QUANTITA = QUANTITA-1
                      WHERE ID = '$CodMobile[$i]'";
            $ris7 = mysqli_query($conn, $query7);
          }
          for ($i=0; $i<count($CodMobile); $i++) {
            $query7 = "UPDATE MOBILE
                      SET VENDUTO = VENDUTO+1
                      WHERE ID = '$CodMobile[$i]'";
            $ris7 = mysqli_query($conn, $query7);
          }
          $newpage = 'cart_page.php';
          header('Refresh: 0; url='.$newpage);
        }
        if(isset($_POST['svuota'])){
          $query5 = "DELETE FROM COMPRA WHERE UTENTE = '$_SESSION[email]'";
          $ris5 = mysqli_query($conn, $query5);
          $newpage = 'category_page.php';
          header('Refresh: 0; url='.$newpage);
        }
       ?>
      <div id="brand_carouse" class="ptb_30 text-center">
        <div class="type-01">
          <div class="heading-part mb_20 ">
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
                  $newpage = 'cart_page.php';
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
