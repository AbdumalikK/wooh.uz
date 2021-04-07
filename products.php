<?php
include_once "core/lang.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>LaLaKOO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta content='text/html; charset=UTF-8' http-equiv='Content-Type'/>
	<meta name="author" content="Abdumalik Karimov">
	<meta name="description" content="Sofgigienik offical sayti">
	<meta name="keywords" content="sofgigienik,lalaku,">
	<link rel="stylesheet" href="style/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/css/products.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="style/bootstrap4/js/bootstrap.min.js"></script>
	<!-- <script src="style/js/index.js"></script> -->
	<link rel="stylesheet" href="style/css/fullpage.css">
	<script src="style/js/easings.min.js"></script>
	<script src="style/js/scrolloverflow.min.js"></script>
    <script src="style/js/fullpage.js"></script>
    <script src="style/js/mobile-product.js"></script>
</head>
<body class="">
<style>
  /* Make the image fully responsive */
  .carousel-inner img {
    width: 100%;
    height: 100%;
  }
  .btn-black{
    z-index: 1;
  }
  </style>
<script>
function changeLang() {
	document.getElementById('form_lang').submit();
}
</script>
<!-- checking, if lang has not choosen  -->
<?php if(!isset($_SESSION['lang'])) { ?>
	<div class="row lang-position">
		<div class="col-12">
			<form method="GET" action="" id="form_lang">
				<div class="lang-card text-center">
					<h1>WELCOME TO THE SOF HYGIENIC INTERNATIONAL WEBSITE</h1>
					<hr>
					<h2>SELECT YOUR LANGUAGE</h2>
					<button type="submit" value="arabic" name="lang" class="btn d-block m-auto" id="lang" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] === 'arabic'); ?>>
						<p class="lang-size">Arabic</p>
					</button>
					<button type="submit" value="en" name="lang" class="btn d-block m-auto" id="lang" <?php if(isset($_SESSION['lang']) && $_SESSION['lang'] === 'en'); ?>>
						<p class="lang-size">English</p>
					</button>
				</div>
			</form>
		</div>
	</div>
	<div class="shadow">
<? } ?>
<!-- end checking -->


<!-- whole page container -->
<div id="fullpage">
    <div class="container px-0">
			<div class="row">
				<div class="col-6">
					<!-- navbar -->
				   <nav class="navbar fixed-top">
							   <div class="logo">
							   <a href="index.php"><img src="style/logo.svg" width="53" height="53" alt="logo" id="logo"></a>
							   </div>
			
							<button type="button" class="btn burger">	
								<div class="line1"></div>
								<div class="line2"></div>
								<div class="line3"></div>
							</button>
					</nav>
					<!-- end navbar -->
				</div>

				<div class="col-6">
					<!-- burger menu -->
								<ul class="main-nav">
									<!-- <div class="row mr-0"> -->
										<div class="my-4 px-0 logo">
										<a href="index.php"><img src="style/logo.svg" alt="logo"></a>
										</div>
									<!-- </div> -->
                                    <li class="nav-links">
                                        <a href="index.php"><?= _HOME ?></a>
                                    </li>
									<li class="nav-links">
									<a href="products.php" class="nested-links"><?= _PRODUCT ?></a>
									<ul class="nested-nav mt-4">
										<li>
											<a href="products.php#firstPage" class="nested-links">LALAKU PANTS</a>
										</li>
										<li>
											<a href="products.php#secondPage" class="nested-links">LALAKU DIAPERS</a>
										</li>
										<li>
											<a href="products.php#thirdPage" class="nested-links">LALAKU MAMA POSTPARTUM PADS</a>
										</li>
										<li>
											<a href="products.php#forthPage" class="nested-links">LALAKU MAMA SANITARY NAOKINS</a>
										</li>
										<li>
											<a href="products.php#fifthPage" class="nested-links">LALAKU KN 95 MASKS</a>
										</li>
									</ul>
									</li>
									<li class="nav-links">
									<a href="contact.php" class="nested-links"><?= _CONTACT ?></a>
									</li>
									<!-- <li class="nav-links">
									<a href="contact.php" class="nested-links"><?= _ABOUT ?></a>
									</li> -->
								</ul>
				   <!-- end burger menu -->
				</div>
			</div>
        </div>
        
	<div id="menu-shadow" class="">


<!-- section 0 -->
<div class="section sct0 bg-white">
    <!-- carousel images -->
    <div class="item-carousel">
        <div id="demo" class="carousel slide" data-ride="carousel">
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="style/images/products/product-slide-1.jpg" alt="lalaku-3">
                </div>
                <div class="carousel-item">
                    <img src="style/images/products/product-slide-2.jpg" alt="lalaku-4">
                </div>
            </div>
            
        </div>
    </div>

    <div class="row product-contact-top-first">
        <div class="col-12 col-md-12 text-center">
            <a href="contact.php">
                <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black textColor-left">
            <?= _CONTACT ?>
            </button>
            </a>
        </div>
    </div>
    
    <div class="text-center down">
        <a href="#thirdPage">	
            <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
    </div>
<!-- end carousel -->

        <!-- main text -->

<div class="container-fluid">
		<div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row align-items-end mobile-item-spec">

                    <div class="col-lg-6 col-12">
                        <div class="description-content">
                            <h1 class="text-bold pt-0 d-flex justify-content-end"><?= _PRO1_NAME ?></h1>
                            <p><?= _PRO1_TITLE ?></p>
                        </div>
                    </div>

                    <div class="col-lg-6 col-12">
                        <div class="col-7 my-0 mx-auto">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">3</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">54</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MIDI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">4-9 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">4</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">46</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MAXI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">7-18 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">5</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">40</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">JUNIOR</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">11-25 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">6</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">36</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">EXTRA LARGE</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">16+ KG</p>
                                    </th>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                
			</div>
		</div>
		<!-- end main text -->
    </div>
</div>



<!-- section 0 mobile -->
<div class="" id="section-mobile">
<div class="container">
		<div class="row">
			<div class="col-12 text-center">
                <div class="row mt-90 px-4">
                    <div class="col-lg-6 col-12">
                            <h1 class="text-bold pt-0"><?= _PRO1_NAME ?></h1>
                            <p><?= _PRO1_TITLE ?></p>
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                        <div class="col-12 my-0 mx-auto">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">3</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">54</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MIDI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">4-9 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">4</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">46</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MAXI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">7-18 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">5</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">40</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">JUNIOR</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">11-25 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">6</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">36</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">EXTRA LARGE</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">16+ KG</p>
                                    </th>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
			</div>
		</div>
		<!-- end main text -->
    </div>
</div>


<!-- section 1 -->
<div class="sct0 section">
         <!-- carousel images -->
    <div class="item-carousel">
        <div id="demo" class="carousel slide" data-ride="carousel">
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="style/images/products/product-slide-3.jpg" alt="diapers-1">
                </div>
                <div class="carousel-item">
                    <img src="style/images/products/product-slide-4.jpg" alt="diapers-2">
                </div>
            </div>
            
        </div>
    </div>
    
        <div class="row product-contact-top mt-minus-5">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black textColor-left">
                <?= _CONTACT ?>
                </button>
                </a>
            </div>
        </div>

        <div class="text-center down pt-3">
        <a href="#fifthPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div>

<div class="container-fluid">
        <div class="row">
			<div class="col-12 pt-120 text-center z-index title">

                <div class="row align-items-end">
                    
                    <div class="col-6">
                        <div class="col-7 my-0 mb-4 mx-auto">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">1</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">86</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">NEW BORN</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">2-5 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">82</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MINI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">3-6 KG</p>
                                    </th>
                                </tr>
                                
                            </table>
                            
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="description-content spec-item-left">
                            <h1 class="text-bold pt-0 d-flex justify-content-start pl-4"><?= _PRO2_NAME ?></h1>
                            <p><?= _PRO2_TITLE ?></p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
</div>
</div>



<!-- section 1 mobile -->
<div class="" id="section-mobile">

<div class="container">
    <div class="row">
			<div class="col-12 text-center">
                <div class="row mt-90 px-4">
                    <div class="col-lg-6 col-12">
                        <h1 class="text-bold pt-0"><?= _PRO2_NAME ?></h1>
                        <p><?= _PRO2_TITLE ?></p>
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                            <table class="table table-condensed">
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">1</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">86</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">NEW BORN</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">2-5 KG</p>
                                    </th>
                                </tr>
    
                                <tr>
                                    <th>
                                        <h2 class="d-inline-block item-number">2</h2>
                                        <p class="d-inline-block line-h">size</p>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number">82</h2>
                                        <p class="d-inline-block line-h">pcs</p>
                                    </th>
                                    <th>
                                        <h6 class="d-inline-block item-size">MINI</h6>
                                    </th>
                                    <th>
                                        <p class="d-inline-block item-size">3-6 KG</p>
                                    </th>
                                </tr>
                            </table>
                    </div>


                </div>
            </div>
    </div>
		<!-- end main text -->
</div>
</div>




<!-- section 2 -->
<div class="section sct0">
             <!-- carousel images -->
             <div class="item-carousel">
        <div id="demo" class="carousel slide" data-ride="carousel">
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="style/images/products/product-slide-5.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="style/images/products/product-slide-6.jpg" alt="">
                </div>
            </div>
            
        </div>
    </div>

    <div class="row product-contact-top mt-minus-5">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black textColor-left">
                <?= _CONTACT ?>
                </button>
                </a>
            </div>
    </div>
        <div class="text-center down pt-3">
        <a href="#seventhPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
        </div>

<div class="container-fluid">
    <div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row align-items-end">
                    <div class="col-6">
                        <div class="description-content mr-top-265">
                            <h1 class="text-bold pt-0 d-flex justify-content-end"><?= _PRO3_NAME ?></h1>
                            <p><?= _PRO3_TITLE ?></p>
                        </div>
                        
                    </div>
                    <div class="col-6 mb-5">
                        <div class="col-2 my-0 mx-auto">
                            <table class="table table-condensed">
                                <tr>
                                    <th class="border-bottom-pcs">
                                        <h2 class="d-inline-block item-number mb-0">10</h2>
                                        <p class="d-inline-block line-h mb-0">pcs</p>
                                    </th>
                                </tr>
                            </table>

                        </div>
                    </div>
                </div>
                
			</div>
        </div>
        </div>
</div>



<!-- section 2 mobile -->
<div class="" id="section-mobile">
  <!-- main text -->
<div class="container">
    <div class="row">
			<div class="col-12 text-center">
                <div class="row mt-90 px-4">
                    <div class="col-lg-6 col-12">
                    <h1 class="text-bold pt-0 d-flex justify-content-end"><?= _PRO3_NAME ?></h1>
                            <p><?= _PRO3_TITLE ?></p>
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                            <table class="table table-condensed">
                                <tr>
                                    <th class="border-bottom-pcs">
                                        <h2 class="d-inline-block item-number mb-0">10</h2>
                                        <p class="d-inline-block line-h mb-0">pcs</p>
                                    </th>
                                </tr>
                            </table>
                    </div>
                </div>
            </div>
        </div>
		<!-- end main text -->
    </div>
</div>



<!-- section 3 -->
<div class="section sct0 ">
             <!-- carousel images -->
             <div class="item-carousel">
        <div id="demo" class="carousel slide" data-ride="carousel">
            
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="style/images/products/product-slide-7.jpg" alt="">
                </div>
                <div class="carousel-item">
                    <img src="style/images/products/product-slide-8.jpg" alt="">
                </div>
            </div>
            
        </div>
    </div>

    <div class="row product-contact-top mt-minus-5">
            <div class="col-12 col-md-12 text-center">
                <a href="contact.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black textColor-left">
                <?= _CONTACT ?>
                </button>
                </a>
            </div>
    </div>

        <div class="text-center down pt-3">
            <a href="#ninethPage">	
                <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
            </a>
        </div>

<div class="container-fluid">
    <div class="row">
			<div class="col-12 pt-120 text-center z-index title">
                <div class="row align-items-end">
                    <div class="col-6">
                        <div class="col-5 justify-content-start scr3-item-pcs">
                            <table class="table table-condensed">
                                <tr class="border-bottom-pcs">
                                    <th>
                                        <h6 class="d-inline-block item-size mb-0">CLASSIC</h6>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number mb-0">10</h2>
                                        <p class="d-inline-block line-h mb-0">pcs</p>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>

                    <div class="col-6">
                        <div class="description-content spec-item-left mr-top-265">
                            <h1 class="text-bold pt-0 d-flex justify-content-start pl-4"><?= _PRO4_NAME ?></h1>
                            <p><?= _PRO4_TITLE ?></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<!-- section 3 mobile -->
<div class="" id="section-mobile">
  <!-- main text -->
<div class="container">
    <div class="row">
			<div class="col-12 text-center">
                <div class="row mt-90 px-4">
                    <div class="col-lg-6 col-12">
                    <h1 class="text-bold pt-0 d-flex justify-content-start pl-4"><?= _PRO4_NAME ?></h1>
                            <p><?= _PRO4_TITLE ?></p>
                    </div>

                    <div class="col-lg-6 col-12 mt-5">
                            <table class="table table-condensed">
                                <tr class="border-bottom-pcs">
                                    <th>
                                        <h6 class="d-inline-block item-size mb-0">CLASSIC</h6>
                                    </th>
                                    <th>
                                        <h2 class="d-inline-block item-number mb-0">10</h2>
                                        <p class="d-inline-block line-h mb-0">pcs</p>
                                    </th>
                                </tr>
                                
                            </table>
                    </div>
                </div>
            </div>
        </div>
		<!-- end main text -->
    </div>
</div>









<!-- footer -->
<div class="section sct5">
    <h1 class="text-center" style="color: gray;">ООО Sof Gigienik<p class="yellow mt-2">Copyright © 2020</p>
            <div class="row pt-120">
                <div class="col-3 text-center">
                    <a href="https://www.instagram.com/lalaku.uzbekistan/">
                        <i class="fab fa-instagram social-icon"></i>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="https://www.facebook.com/lalaku.uzbekistan/">
                        <i class="fab fa-facebook-f social-icon"></i>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="https://www.youtube.com/channel/UCCHvBrlmF-gCUR60zFiAexw">
                        <i class="fab fa-youtube social-icon"></i>
                    </a>
                </div>
                <div class="col-3 text-center">
                    <a href="">
                        <i class="fab fa-whatsapp social-icon"></i>
                    </a>
                </div>
            </div>
</h1>
<div class="row pt-120">
    <div class="col-md-6 col-12 d-flex justify-content-center">
        <a href="https://www.google.com/maps/place/%D0%9E%D1%84%D0%B8%D1%81+%D0%B1%D1%80%D0%B5%D0%BD%D0%B4%D0%B0+%22LALAKU%22,+%D0%9E%D0%9E%D0%9E+%22SOF+GIGIENIK%22/@41.3247619,69.3359945,21z/data=!4m13!1m7!3m6!1s0x38aef457cc74f7e5:0x5142b528b7c5e4d8!2s35+Khirmontepa+2-th+Passage,+Tashkent,+Uzbekistan!3b1!8m2!3d41.3249853!4d69.3360588!3m4!1s0x38aef51bb28be239:0x9e3b62489b4f1490!8m2!3d41.3247974!4d69.3360713">
        <i class="fas fa-map-marker-alt footer-icon mr-2"></i>
        <p class="d-inline">Toshkent sh., Mirzo Ulug‘bek tumani, Xirmontepa 2-tor, 48</p>
        </a>
    </div>
    <div class="col-md-6 col-12 mt-4 mt-md-0 mt-lg-0 d-flex justify-content-center">
        <a href="tel:+998 94 480 00 77">
            <i class="fas fa-phone-alt footer-icon mr-2"></i>
            <p class="d-inline">+998 94 480 00 77</p>
        </a>
    </div>
</div>
		
		<div class="text-center mt-5">
		<a href="#firstPage">	
			<img class="arrow-up animate-arrow" src="style/icons/arrow-up.svg" alt="up">
        </a>
        </div>
</div>



	</div>
</div>
<!-- end whole page container -->
	<script src="style/js/index.js"></script>
	<script src="style/js/config-scrolling.js"></script>
</body>

</html>