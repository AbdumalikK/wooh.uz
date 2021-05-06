<?php
echo '<div id="fullpage">
    <div class="container px-0">
			<div class="row">
				<div class="col-6">
					<!-- navbar -->
				   <nav class="navbar fixed-top">
							   <div class="logo">
							   <a href="index.php">
                                <img src="style/logo-black.png" width="70" height="70" alt="logo" id="logo">
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