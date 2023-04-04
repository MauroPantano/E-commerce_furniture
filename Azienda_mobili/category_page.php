<?php
echo "<html lang='en'>";
?>

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
  <link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
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
                  unset($_SESSION['cod']);
                  $_SESSION['cod'] = '';
                  //unset($_SESSION['richiestaCOD']);
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
                        if($_SESSION['email']==''){

                        }else{
                          $query3 = "SELECT M.NOME,M.PREZZO,M.IMMAGINE
                                    FROM MOBILE M JOIN COMPRA C ON
                                    M.ID = C.MOBILE
                                    WHERE M.ID = C.MOBILE AND UTENTE = '$_SESSION[email]' AND CONFERMA = 0";
                          $ris3 = mysqli_query($conn, $query3);
                          while ($riga = mysqli_fetch_array($ris3)){
                          echo "<tr>";
                            echo "<td class='text-center'><a href=''><img src='images/product/$riga[2]' alt='iPod Classic' title='iPod Classic'></a></td>";
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
            <h1>Prodotti</h1>
            <ul>
              <li><a href="">Stile</a></li>
              <li class="active">Prodotti</li>
            </ul>
          </div>
        </div>
        <!-- =====  BREADCRUMB END===== -->
        <div id="column-left" class="col-sm-4 col-lg-3 ">
          <div id="category-menu" class="navbar collapse in mb_40" aria-expanded="true" style="" role="button">
            <div class="nav-responsive">
              <div class="heading-part">
                <h2 class="main_title">CATEGORIE</h2>
              </div>
              <form action="" method="POST">
              <ul class="nav  main-navigation collapse in">
                <li><input type="submit" class="categoria" name="categoria1" value="Cucina"></li>
                <li><input type="submit" class="categoria" name="categoria2" value="Soggiorno"></li>
                <li><input type="submit" class="categoria" name="categoria3" value="Camera da letto"></li>
                <li><input type="submit" class="categoria" name="categoria4" value="Cameretta"></li>
                <li><input type="submit" class="categoria" name="categoria5" value="Bagno"></li>
                <li><input type="submit" class="categoria" name="categoria6" value="Sala da pranzo"></li>
                <li><input type="submit" class="categoria" name="categoria7" value="Studio"></li>
                <li><input type="submit" class="categoria" name="categoria8" value="Ingresso"></li>
                <li><input type="submit" class="categoria" name="categoria9" value="Lavanderia"></li>
                <li><input type="submit" class="categoria" name="categoria10" value="Balcone e giardino"></li>
                <li><input type="submit" class="categoria" name="categoria11" value="Ufficio"></li>
                <li><input type="submit" class="categoria" name="categoria12" value="Smart Home"></li>
                <li><input type="submit" class="categoria" name="categoria13" value="Accessori"></li>
              </ul>
            </form>
            <?php
            for ($i=1; $i < 14; $i++) {
              if (isset($_POST['categoria'.$i])) {
                $SceltaCategoria = $_POST['categoria'.$i];
                echo $SceltaCategoria;
              }
            }
             ?>
            </div>
          </div>
          <div class="filter left-sidebar-widget mb_50">
            <div class="heading-part mtb_20 ">
              <h2 class="main_title">Caratteristiche</h2>
            </div>
            <form action="" method="POST">
            <div class="filter-block">
              <p>
                <label for="amount">Budget:</label>
                <input type="text" id="amount" readonly>
              </p>
              <div id="slider-range" class="mtb_20"></div>
              <div class="list-group">
                <div class="list-group-item mb_10">
                  <label>Colore</label>
                  <div id="filter-group1">
                    <div class="checkbox">
                      <label>
                        <input name="colore" value="Rosso" type="checkbox"> Rosso </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="colore" value="Bianco" type="checkbox"> Bianco </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="colore" value="Verde" type="checkbox"> Verde </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="colore" value="Nero" type="checkbox"> Nero </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="colore" value="Giallo" type="checkbox"> Giallo </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="colore" value="Marrone" type="checkbox"> Marrone </label>
                    </div>
                    <div class="checkbox ">
                      <label>
                        <input name="colore" value="Blu" type="checkbox"> Blu
                      </label>
                    </div>
                  </div>
                </div>
                <div class="list-group-item mb_10">
                  <label>Marca</label>
                  <div id="filter-group3">
                    <div class="checkbox">
                      <label>
                        <input name="marca" value="Chesterfield" type="checkbox"> Chesterfield </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="marca" value="Origin" type="checkbox"> Origin </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="marca" value="Brimnes" type="checkbox"> Brimnes </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="marca" value="Neiden" type="checkbox"> Neiden </label>
                    </div>
                    <div class="checkbox">
                      <label>
                        <input name="marca" value="Roset" type="checkbox"> Roset </label>
                    </div>
                  </div>
                </div>
                <input type="submit" name="ricerca" value="Ricerca" class="btn">
              </div>
            </div>
          </form>
          </div>
          <div class="left_banner left-sidebar-widget mb_50"> <a href="#"><img src="images/left1.jpg" alt="Left Banner" class="img-responsive" /></a> </div>
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
          <div class="category-page-wrapper mb_30">
            <div class="list-grid-wrapper pull-left">
              <div class="btn-group btn-list-grid">
                <button type="button" id="grid-view" class="btn btn-default grid-view active"></button>
                <button type="button" id="list-view" class="btn btn-default list-view"></button>
              </div>
            </div>
            <div class="page-wrapper pull-right">
              <label class="control-label" for="input-limit">Prodotto :</label>
              <div class="limit">
                <select id="input-limit" class="form-control">
                  <option value="8" selected="selected">Nuovo</option>
                  <option value="25">Usato</option>
                  <option value="50">Come nuovo</option>
                </select>
              </div>
              <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </div>
            <div class="sort-wrapper pull-right">
              <label class="control-label" for="input-sort">Ordina per :</label>
              <div class="sort-inner">
                <select id="input-sort" class="form-control">
                  <option value="ASC" selected="selected">Standard</option>
                  <option value="ASC">Name (A - Z)</option>
                  <option value="DESC">Name (Z - A)</option>
                  <option value="ASC">Prezzo (Basso &gt; Alto)</option>
                  <option value="DESC">Prezzo (Alto &gt; Basso)</option>
                  <option value="DESC">Valutazione (Alta)</option>
                  <option value="ASC">Valutazione (Bassa)</option>
                  <option value="ASC">Modello (A - Z)</option>
                  <option value="DESC">Modello (Z - A)</option>
                </select>
              </div>
              <span><i class="fa fa-angle-down" aria-hidden="true"></i></span>
            </div>
          </div>
          <div class="row">
            <!-- INIZIO PRODOTTO  -->
            <?php
            if(!isset($_POST['categoria'])){
            if(isset($_POST['ricerca'])){
              if((isset($_POST['marca'])) && (isset($_POST['colore']))){
                $query20 = "SELECT *
                            FROM MOBILE
                            WHERE MARCA = '$_POST[marca]' AND COLORE = '$_POST[colore]'";
                $ris20 = mysqli_query($conn, $query20);
              }
              elseif(isset($_POST['marca'])){
                $query20 = "SELECT *
                            FROM MOBILE
                            WHERE MARCA = '$_POST[marca]'";
                $ris20 = mysqli_query($conn, $query20);
              }
              elseif(isset($_POST['colore'])){
                $query20 = "SELECT *
                            FROM MOBILE
                            WHERE COLORE = '$_POST[colore]'";
                $ris20 = mysqli_query($conn, $query20);
              }
              $i = 0;
              $h = 12;
              $n = 0;
              $codice = array();
              $_SESSION['richiestaCOD'] = $codice;
              while ($riga = mysqli_fetch_array($ris20)){
                array_push($_SESSION['richiestaCOD'],$riga[0]);
                $i++;
                $h++;
                $n++;
                echo "<div class='product-layout product-grid col-md-4 col-xs-6'>";
                  echo "<div class='item'>";
                    echo "<div class='product-thumb clearfix mb_30'>";
                    //PRODOTTO SINGOLO TRAMITE CLICK
                      echo "<div class='image product-imageblock'> <a> <img data-name='product_image' src='images/product/$riga[8]' alt='iPod Classic' title='iPod Classic' class='img-responsive' /> <img src='images/product/$riga[9]' alt='iPod Classic' title='$riga[1]' class='img-responsive'/></a>";
                        echo "<div class='button-group text-center'>";
                        echo "</div>";
                      echo "</div>";
                      echo "<div class='caption product-detail text-center'>";
                        echo "<h6 data-name='product_name' class='product-name mt_20'><a href='#' title='Casual Shirt With Ruffle Hem'>$riga[1]</a></h6>";
                        echo "<div class='rating'> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i><span>"; echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span> </div>";
                        echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span>$riga[7]</span>";
                        echo "</span>";
                        echo "<p class='product-desc mt_20 mb_60'>$riga[11]</p>";
                        echo "<form action='' method='POST'>";
                        echo "<br><span class='product-desc mt_20 mb_60'><input value='Aggiungi prodotto' type='submit' name='inserisci$i' class='btn btn-default btn-lg'></span>";
                        echo "</form>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
              }
            }else{
              $query = "SELECT *
                        FROM MOBILE";
              $ris = mysqli_query($conn, $query);
              $i = 0;
              $h = 12;
              $n = 0;
              while ($riga = mysqli_fetch_array($ris)) {
                //STAMPARE SOLO 13 MOBILI
                $i++;
                $h++;
                $n++;
                if($i<13){
                echo "<div class='product-layout product-grid col-md-4 col-xs-6'>";
                  echo "<div class='item'>";
                    echo "<div class='product-thumb clearfix mb_30'>";
                    //PRODOTTO SINGOLO
                      echo "<div class='image product-imageblock'> <a> <img data-name='product_image' src='images/product/$riga[8]' alt='iPod Classic' title='iPod Classic' class='img-responsive' /> <img src='images/product/$riga[9]' alt='iPod Classic' title='$riga[1]' class='img-responsive'/></a>";
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
                        echo "<div class='rating'> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i><span>"; echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span> </div>";
                        echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span>$riga[7]</span>";
                        echo "</span>";
                        echo "<p class='product-desc mt_20 mb_60'>$riga[11]</p>";
                        echo "<form action='' method='POST'>";
                        echo "<br><span class='product-desc mt_20 mb_60'><input value='Aggiungi prodotto' type='submit' name='inserisci$i' class='btn btn-default btn-lg'></span>";
                        echo "</form>";
                      echo "</div>";
                    echo "</div>";
                  echo "</div>";
                echo "</div>";
              }
            }
          }// FINE RICERCA
        }else{
          $query5 = "SELECT *
                    FROM MOBILE
                    WHERE CATEGORIA = '$SceltaCategoria'";
          $ris5 = mysqli_query($conn, $query5);
          if($ris5->num_rows > 0){
          while ($riga = mysqli_fetch_array($ris5)){
          echo "<div class='product-layout product-grid col-md-4 col-xs-6'>";
            echo "<div class='item'>";
              echo "<div class='product-thumb clearfix mb_30'>";
              //PRODOTTO SINGOLO TRAMITE CATEGORIA
                echo "<div class='image product-imageblock'> <a> <img data-name='product_image' src='images/product/$riga[8]' alt='iPod Classic' title='iPod Classic' class='img-responsive' /> <img src='images/product/$riga[9]' alt='iPod Classic' title='$riga[1]' class='img-responsive'/></a>";
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
                  echo "<div class='rating'> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i></span> <span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-1x'></i><span>"; echo "<span class='fa fa-stack'><i class='fa fa-star-o fa-stack-1x'></i><i class='fa fa-star fa-stack-x'></i></span> </div>";
                  echo "<span class='price'><span class='amount'><span class='currencySymbol'>$</span>$riga[7]</span>";
                  echo "</span>";
                  echo "<p class='product-desc mt_20 mb_60'>$riga[11]</p>";
                  echo "<form action='' method='POST'>";
                  echo "<br><span class='product-desc mt_20 mb_60'><input value='Aggiungi prodotto' type='submit' name='inserisci$i' class='btn btn-default btn-lg'></span>";
                  echo "</form>";
                echo "</div>";
              echo "</div>";
            echo "</div>";
          echo "</div>";
        }
      }
        }//FINE CATEGORIA
          if(!isset($_POST['ricerca'])){
            $codice = array ("", "A74C7", "AK23A", "AZ09F", "B78NH", "BX39E", "EX78M", "FS98P", "HD891", "JG19K", "LF56C", "LV56A", "QJ48L");
            for($k=1;$k<13;$k++){
              if(isset($_POST['prod'.$k])){
                $_SESSION['cod'] = $codice[$k];
                $newpage = 'product.php';
                header('Refresh: 0; url='.$newpage);
              }
            }
          }else{
            for($k=1;$k<count($_SESSION['richiestaCOD']);$k++){
              if(isset($_POST['prod'.$k])){
                $_SESSION['cod'] = $_SESSION['richiestaCOD'][$k];
                $newpage = 'product.php';
                header('Refresh: 0; url='.$newpage);
              }
            }
          }

            if((isset($_POST['inserisci1'])) || isset($_POST['miniBottone1'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'A74C7', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci2'])) || isset($_POST['miniBottone2'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'AK23A', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci3'])) || isset($_POST['miniBottone3'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'AZ09F', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci4'])) || isset($_POST['miniBottone4'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'B78NH', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci5'])) || isset($_POST['miniBottone5'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'BX39E', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci6'])) || isset($_POST['miniBottone6'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'EX78M', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci7'])) || isset($_POST['miniBottone7'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'FS98P', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci8'])) || isset($_POST['miniBottone8'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'HD891', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci9'])) || isset($_POST['miniBottone9'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'JG19K', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci10'])) || isset($_POST['miniBottone10'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'LF56C', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci11'])) || isset($_POST['miniBottone11'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'LV56A', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }elseif ((isset($_POST['inserisci12'])) || isset($_POST['miniBottone12'])){
              $query2 = "INSERT INTO COMPRA (UTENTE, MOBILE, CONFERMA)
                        VALUES ('$_SESSION[email]', 'QJ48L', 0)";
              $ris2 = mysqli_query($conn, $query2);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
            //INIZIO LIKE
            if(isset($_POST['miniBottone13'])){
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'A74C7'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                //ELIMINAZIONE LIKE TABELLA AMA
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'A74C7'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'A74C7'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
                //INSERIMENTO LIKE TABELLA AMA
                $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                            VALUES ('$_SESSION[email]', 'A74C7', 1)";
                $ris13 = mysqli_query($conn, $query13);
                //INSERIMENTO LIKE TABELLA MOBILI
                $query14 = "UPDATE MOBILE
                            SET CUORE = CUORE+1
                            WHERE ID = 'A74C7'";
                $ris14 = mysqli_query($conn, $query14);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }
            }elseif (isset($_POST['miniBottone14'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'AK23A'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'AK23A'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'AK23A'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'AK23A', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'AK23A'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
              }
            }elseif (isset($_POST['miniBottone15'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'AZ09F'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'AZ09F'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'AZ09F'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'AZ09F', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'AZ09F'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
              }
            }elseif (isset($_POST['miniBottone16'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'B78NH'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'B78NH'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'B78NH'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'B78NH', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'B78NH'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
              }
            }elseif (isset($_POST['miniBottone17'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'BX39E'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'BX39E'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'BX39E'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'BX39E', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'BX39E'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
            }elseif (isset($_POST['miniBottone18'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'EX78M'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'EX78M'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'EX78M'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'EX78M', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'EX78M'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
            }elseif (isset($_POST['miniBottone19'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'FS98P'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'FS98P'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'FS98P'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'FS98P', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'FS98P'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
              }
            }elseif (isset($_POST['miniBottone20'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'HD891'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'HD891'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'HD891'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'HD891', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'HD891'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
            }elseif (isset($_POST['miniBottone21'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'JG19K'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'JG19K'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'JG19K'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'JG19K', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'JG19K'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
            }elseif (isset($_POST['miniBottone22'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'LF56C'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'LF56C'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'LF56C'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'LF56C', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'LF56C'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
            }elseif (isset($_POST['miniBottone23'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'LV56A'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM AMA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'LV56A'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'LV56A'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'LV56A', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'LV56A'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
            }elseif (isset($_POST['miniBottone24'])) {
              $query10 = "SELECT CUORE
                          FROM SODDISFA
                          WHERE CUORE = 1 AND UTENTE = '$_SESSION[email]' AND MOBILE = 'QJ48L'";
              $ris10 = mysqli_query($conn, $query10);
              if($ris10->num_rows > 0){
                $query11 = "DELETE FROM SODDISFA WHERE UTENTE = '$_SESSION[email]' AND MOBILE = 'QJ48L'";
                $ris11 = mysqli_query($conn, $query11);
                // ELIMINAZIONE LIKE TABELLA MOBILI
                $query15 = "UPDATE MOBILE
                            SET CUORE = CUORE-1
                            WHERE ID = 'QJ48L'";
                $ris15 = mysqli_query($conn, $query15);
                $newpage = 'category_page.php';
                header('Refresh: 0; url='.$newpage);
              }else{
              $query13 = "INSERT INTO SODDISFA (UTENTE, MOBILE, CUORE)
                          VALUES ('$_SESSION[email]', 'QJ48L', 1)";
              $ris13 = mysqli_query($conn, $query13);
              //INSERIMENTO LIKE TABELLA MOBILI
              $query14 = "UPDATE MOBILE
                          SET CUORE = CUORE+1
                          WHERE ID = 'QJ48L'";
              $ris14 = mysqli_query($conn, $query14);
              $newpage = 'category_page.php';
              header('Refresh: 0; url='.$newpage);
            }
            }
            ?>

          <!-- FINE INSIEME PRODOTTI  -->
          </div>
          <div class="pagination-nav text-center mt_50">
            <ul>
              <li><a href="#"><i class="fa fa-angle-left"></i></a></li>
              <li class="active"><a href="#">1</a></li>
              <li><a href="#">2</a></li>
              <li><a href="#">3</a></li>
              <li><a href="#"><i class="fa fa-angle-right"></i></a></li>
            </ul>
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
                  $newpage = 'category_page.php';
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
  <script src="js/jquery-ui.js"></script>
  <script>
  $(function() {
    $("#slider-range").slider({
      range: true,
      min: 0,
      max: 500,
      values: [75, 300],
      slide: function(event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
      " - $" + $("#slider-range").slider("values", 1));
  });
  </script>
</body>

</html>
