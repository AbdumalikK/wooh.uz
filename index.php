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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <!-- <script src="style/bootstrap4/js/bootstrap.min.js"></script> -->
	<!-- <script src="style/js/index.js"></script> -->
	<link rel="stylesheet" href="style/css/fullpage.css">
	<!-- <script src="style/js/easings.min.js"></script> -->
	<!-- <script src="style/js/scrolloverflow.min.js"></script> -->
	<!-- <script src="style/js/fullpage.js"></script> -->
</head>

<body>
<script>
function changeLang() {
	document.getElementById('form_lang').submit();
}
</script>
<!-- checking, if lang has not choosen  -->
<?php if(!isset($_SESSION['lang'])) { ?>
	<div class="row lang-position my-0 mx-auto">
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
    <div class="container-fluid px-0">
		<header>
			<div class="row">
				<div class="col-6">
					<!-- navbar -->
				   <nav class="navbar fixed-top">
							   <div class="logo">
							   	<a href="index.php">
									<!-- <img src="style/logo.svg" width="53" height="53" alt="logo" id="logo"> -->
									<h3 class="text-white pt-3">WOOH.UZ</h3>
								</a>
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
									<a href="products.php" class="nested-links"><?= _PRODUCT ?></a>
									<!-- <ul class="nested-nav mt-4">
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
									</ul> -->
									</li>
									<li class="nav-links">
									<a href="contact.php" class="nested-links"><?= _CONTACT ?></a>
									</li>
									<!-- <li class="nav-links">
									<a href="#" class="nested-links"><?= _ABOUT ?></a>
									</li> -->
								</ul>
				   <!-- end burger menu -->

				</div>
				
			</div>
			
			
		</div>
	</header>
	<div id="menu-shadow" class="">
	<!-- section 0 -->
	<div class="sct0 section">
		<!-- main text -->
		<div class="row">
			<div class="col-12 text-center">
				<div class="d-block bg-title1">
					<h1 class="text-bold d-inline"><?= _PRODUCT1_NAME ?></h1>
				</div>
				<div class="wd-1020">
					<p class="p-3 m-0"><?= _PRODUCT1_TITLE ?></p>
				</div>
				<div class="row main-content-button pt-md-5">
					<div class="col-12 col-md-6 text-md-right text-center">
						<button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left"><a href="contact.php">
							<?= _CONTACT ?>
						</a></button>
					</div>
					<div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
						<button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right"><a href="products.php#firstPage">
							<?= _LEARN_MORE ?>
						</a></button>
					</div>
				</div>
				<div class="text-center down pt-md-4 pt-2">
				<a href="#secondPage">	
				   <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
				</a>
			    </div>
			</div>
		</div>
		<!-- end main text -->
	</div>
<!-- section 1 -->
<section class="sct1 section">
	<div class="row">
		<div class="col-12 text-center">
		<div class="d-block bg-title1">
			<h1 class="text-bold pt-120 d-inline"><?= _PRODUCT2_NAME ?></h1>
		</div>
			<p class="wd-1020 p-3">
			<?= _PRODUCT2_TITLE ?>
			</p>
		</div>
	</div>
		<div class="row mt-90">
		 <div class="col-12 col-md-6 text-md-right text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left"><a href="contact.php">
				 <?= _CONTACT ?>
			 </a></button>
		 </div>
		 <div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right"><a href="products.php#secondPage">
				 <?= _LEARN_MORE ?>
			 </a></button>
		 </div>
		 <div class="col-12">
			 <span class="arrow-down"></span>
		 </div>
	 </div>
	 <div class="text-center">
	 <a href="#thirdPage">	
		<img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
	</a>
	</div>
</section>

<!-- section 2 -->
<section class="sct2 section">
	<div class="row">
		<div class="col-12 text-center">
		<div class="d-block bg-title2">
			<h1 class="text-bold pt-120 d-inline"><?= _PRODUCT3_NAME ?></h1>
		</div>
			<p class="wd-1020 p-3">
			<?= _PRODUCT3_TITLE ?>
			</p>
		</div>
	</div>
		<div class="row mt-90">
		 <div class="col-12 col-md-6 text-md-right text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left"><a href="contact.php">
				 <?= _CONTACT ?>
			 </a></button>
		 </div>
		 <div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right"><a href="products.php#thirdtPage">
				 <?= _LEARN_MORE ?>
			 </a></button>
		 </div>
	 </div>
	 <div class="text-center pt-2 pt-md-4">
	 <a href="#forthPage">	
		<img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
    </a>
	</div>
</section>

<!-- section 3 -->
<section class="sct3 section">
	<div class="row">
		<div class="col-12 text-center">
		<div class="d-block bg-title2">
			<h1 class="text-bold pt-120 d-inline"><?= _PRODUCT4_NAME ?></h1>
		</div>
			<p class="wd-1020 p-3">
			<?= _PRODUCT1_TITLE ?>
			</p>
		</div>
	</div>
		<div class="row mt-90">
		 <div class="col-12 col-md-6 text-md-right text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left"><a href="contact.php">
				 <?= _CONTACT ?>
			 </a></button>
		 </div>
		 <div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right"><a href="products.php#forthPage">
				 <?= _LEARN_MORE ?>
			 </a></button>
		 </div>
	 </div>
	 <div class="text-center pt-md-4 pt-2">
	 <a href="#fifthPage">	
		<img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
	</a>
	</div>
</section>

<!-- section 4 -->
<section class="sct4 section">
	<div class="row">
		<div class="col-12 text-center">
		<div class="d-block bg-title3">
			<h1 class="text-bold pt-120 d-inline">LALAKU KN 95 MASKS</h1>
		</div>
			<p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p>
		</div>
	</div>
		<div class="row mt-90">
		 <div class="col-12 col-md-6 text-md-right text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left"><a href="contact.php">
				 <?= _CONTACT ?>
			 </a></button>
		 </div>
		 <div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right"><a href="products.php#fifthPage">
				 <?= _LEARN_MORE ?>
			 </a></button>
		 </div>
	 </div>
	 <div class="text-center pt-md-4 pt-2">
	 <a href="#sixthPage">	
		<img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
     </a>
	</div>
</section>

<!-- section 5 -->
<section class="sct5 section">
	<div class="row">
		<div class="col-12 text-center">
		<div class="d-block bg-title3">
			<h1 class="text-bold pt-120 d-inline">LALAKU KN 95 MASKS</h1>
		</div>
			<p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p>
		</div>
	</div>
		<div class="row mt-90">
		 <div class="col-12 col-md-6 text-md-right text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left"><a href="contact.php">
				 <?= _CONTACT ?>
			 </a></button>
		 </div>
		 <div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right"><a href="products.php#fifthPage">
				 <?= _LEARN_MORE ?>
			 </a></button>
		 </div>
	 </div>
	 <div class="text-center pt-md-4 pt-2">
	 <a href="#seventhPage">	
		<img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
     </a>
	</div>
</section>

<!-- section 6 -->
<section class="sct6 section">
	<div class="row">
		<div class="col-12 text-center">
		<div class="d-block bg-title4">
			<h1 class="text-bold pt-120 d-inline">LALAKU KN 95 MASKS</h1>
		</div>
			<p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p>
		</div>
	</div>
		<div class="row mt-90">
		 <div class="col-12 col-md-6 text-md-right text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left"><a href="contact.php">
				 <?= _CONTACT ?>
			 </a></button>
		 </div>
		 <div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right"><a href="products.php#fifthPage">
				 <?= _LEARN_MORE ?>
			 </a></button>
		 </div>
	 </div>
	 <div class="text-center pt-md-4 pt-2">
	 <a href="#eightPage">	
		<img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
     </a>
	</div>
</section>

<!-- section 7 -->
<section class="sct7 section">
	<div class="row">
		<div class="col-12 text-center">
		<div class="d-block bg-title4">
			<h1 class="text-bold pt-120 d-inline">LALAKU KN 95 MASKS</h1>
		</div>
			<p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p>
		</div>
	</div>
		<div class="row mt-90">
		 <div class="col-12 col-md-6 text-md-right text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left"><a href="contact.php">
				 <?= _CONTACT ?>
			 </a></button>
		 </div>
		 <div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
			 <button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right"><a href="products.php#fifthPage">
				 <?= _LEARN_MORE ?>
			 </a></button>
		 </div>
	 </div>
	 <div class="text-center pt-md-4 pt-2">
	 <a href="#ninethPage">	
		<img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
     </a>
	</div>
</section>


<!-- section 8 -->
<section class="sct8 section">
	<div class="row">
		<div class="col-12 text-center">
		<h1 class="text-center" style="color: gray;">ООО Sof Gigienik<p class="yellow mt-2">Copyright © 2020</p>

			<!-- <p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p> -->
		</div>
	</div>
		<div class="row mt-footer footer">
                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                    <a href="https://www.instagram.com/lalaku.uzbekistan/">
                        <i class="fab fa-instagram social-icon"></i>
                    </a>
                </div>
                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                    <a href="https://www.facebook.com/lalaku.uzbekistan/">
                        <i class="fab fa-facebook-f social-icon"></i>
                    </a>
                </div>
                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                    <a href="https://www.youtube.com/channel/UCCHvBrlmF-gCUR60zFiAexw">
                        <i class="fab fa-youtube social-icon"></i>
                    </a>
                </div>
                <div class="col-3 text-center d-flex align-items-center justify-content-center">
                    <a href="">
                        <i class="fab fa-whatsapp social-icon"></i>
                    </a>
                </div>
            </div>
		<div class="text-center pt-5">
		<a href="#firstPage">	
			<img class="arrow-up animate-arrow" src="style/icons/arrow-up.svg" alt="up">
		</a>
		</div>
</section>



	</div>
</div>
<!-- end whole page container -->
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="style/bootstrap4/js/bootstrap.min.js"></script>
	<!-- <script src="style/js/index.js"></script> -->
	<!-- <link rel="stylesheet" href="style/css/fullpage.css"> -->
	<script src="style/js/easings.min.js"></script>
	<script src="style/js/scrolloverflow.min.js"></script>
	<script src="style/js/fullpage.js"></script>
	<script src="style/js/index.js"></script>
	<script src="style/js/config-scrolling.js"></script>
</body>

</html>