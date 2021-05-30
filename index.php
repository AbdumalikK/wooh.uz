<?php
include_once "core/lang.php";
include_once "inc/header.php";
?>
<body>
<link rel="stylesheet" href="style/style.css">

<?php 
include_once "inc/select-lang.php";
echo '<div id="fullpage">
    <div class="container px-0">
			<div class="row">
				<div class="col-6">
					<!-- navbar -->
				   <nav class="navbar fixed-top">
							   <div class="logo">
							   <a href="index.php">
                                <img src="style/wooh.png" width="70" height="70" alt="logo" id="logo">
                                <!-- <h3 class="text-dark pt-3">WOOH.UZ</h3> -->
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
										<a href="index.php"><img src="style/logo-black.png" width="70" height="70" alt="logo"></a>
										</div>
									<!-- </div> -->
                                    <li class="nav-links">
                                        <a href="index.php">'._HOME.'</a>
                                    </li>
									<li class="nav-links">
									<a href="products.php" class="nested-links">'._PRODUCT.'</a>
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
									<a href="contact.php" class="nested-links">'._CONTACT.'</a>
									</li>
									<!-- <li class="nav-links">
									<a href="contact.php" class="nested-links">'._ABOUT.'</a>
									</li> -->
								</ul>
				</div>
			</div>
        </div>';
?>
<!-- whole page container -->
	<div id="menu-shadow" class="">
	<!-- section 0 -->
	<div class="sct0 section">
		<!-- main text -->
		<!-- <div class="row"> -->
			<!-- <div class="col-12 text-center"> -->
				<div class="d-block bg-title1 text-center mt-5">
					<h1 class="text-bold d-inline"><?= _PRODUCT1_NAME ?></h1>
				</div>
				<!-- <div class="wd-1020">
					<p class="p-3 m-0"><?= _PRODUCT1_TITLE ?></p>
				</div> -->
				<div class="main-content-button pt-md-5 row">
					<div class="col-12 col-md-6 text-md-right text-center">
						<button type="button" class="col-md-5 col-7 btn btn-black px-5 textColor-left">
						<a href="contact.php">
							<?= _CONTACT ?>
						</a>
						</button>
					</div>
					<div class="col-12 col-md-6 pt-4 pt-md-0 text-md-left text-center">
						<button type="button" class="col-md-5 col-7 btn btn-white px-5 textColor-right">
						<a href="products.php#firstPage">
							<?= _LEARN_MORE ?>
						</a>
						</button>
					</div>
				</div>
				<div class="text-center down pt-md-4 pt-2">
				<a href="#secondPage">	
				   <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
				</a>
			    </div>
			<!-- </div> -->
		<!-- </div> -->
		<!-- end main text -->
	</div>
<!-- section 1 -->
<section class="sct1 section">
	<!-- <div class="row"> -->
		<!-- <div class="col-12 text-center"> -->
		<div class="d-block bg-title1 text-center">
			<p class="text-bold pt-120 d-inline"><?= _PRODUCT1_NAME ?></p>
		</div>
			<!-- <p class="wd-1020 p-3">
			<?= _PRODUCT1_TITLE ?>
			</p> -->
		<!-- </div> -->
	<!-- </div> -->
		<div class="row mt-90 ">
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
			<p class="text-bold pt-120 d-inline"><?= _PRODUCT2_NAME ?></p>
		</div>
			<!-- <p class="wd-1020 p-3">
			<?= _PRODUCT2_TITLE ?>
			</p> -->
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
			<p class="text-bold pt-120 d-inline"><?= _PRODUCT2_NAME ?></p>
		</div>
			<!-- <p class="wd-1020 p-3">
			<?= _PRODUCT2_TITLE ?>
			</p> -->
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
			<p class="text-bold pt-120 d-inline">Nelli</p>
		</div>
			<!-- <p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p> -->
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
			<p class="text-bold pt-120 d-inline">Nelli</p>
		</div>
			<!-- <p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p> -->
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
			<p class="text-bold pt-120 d-inline">Sahara</p>
		</div>
			<!-- <p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p> -->
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
			<p class="text-bold pt-120 d-inline">Sahara</p>
		</div>
			<!-- <p class="wd-1020 p-3">
				Lorem ipsum dolor sit amet, consetetur sadipscing elitr.
			</p> -->
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

<?php include_once "inc/footer.php"; ?>

	</div>
</div>
<!-- end whole page container -->
<?php include_once "inc/footer.php"; ?>