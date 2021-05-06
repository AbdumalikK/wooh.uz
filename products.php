<?php
include_once "core/lang.php";
include_once "inc/header.php";
?>
<body class="">
<link rel="stylesheet" href="style/css/products.css">

<?php
include_once "inc/select-lang.php";
include 'inc/nav.php';
?>

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
            <a href="finessa.php">
                <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black textColor-left">
            <?= _LEARN_MORE ?>
            </button>
            </a>
        </div>
    </div>
    
    <div class="text-center down">
        <a href="#firstPage">	
            <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
    </div>
<!-- end carousel -->



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
                <a href="dielux.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black textColor-left">
                <?= _LEARN_MORE ?>
                </button>
                </a>
            </div>
        </div>

        <div class="text-center down pt-3">
        <a href="#secondPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
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
                <a href="nelli.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black textColor-left">
                <?= _LEARN_MORE ?>
                </button>
                </a>
            </div>
    </div>
        <div class="text-center down pt-3">
        <a href="#seventhPage">	
           <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
        </a>
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
                <a href="sahara.php">
                    <button type="button" class="col-5 col-md-3 col-lg-2 btn btn-black textColor-left">
                <?= _LEARN_MORE ?>
                </button>
                </a>
            </div>
    </div>

        <div class="text-center down pt-3">
            <a href="#ninethPage">	
                <img class="arrow-down animate-arrow" src="style/icons/arrow-down.svg" alt="down">
            </a>
        </div>


</div>
<!-- end whole page container -->
<?php include_once "inc/footer.php"; ?>