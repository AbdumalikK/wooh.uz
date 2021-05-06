<?php
include_once "core/config.php";
include_once "core/lang.php";
include_once "inc/header.php";
?>
<body>
<link rel="stylesheet" href="style/style.css">
<?php 
include_once "inc/select-lang.php";
include "inc/nav.php";
?>
<link href="style/src/jquery.exzoom.css" rel="stylesheet">
<script src="style/src/jquery.exzoom.js"></script>
<style>
  .exzoom .exzoom_img_box{
    background-color: white;
  }
  .exzoom_img_ul_outer{
    border: 0!important;
  }
  .exzoom_img_box {
    height: 500px!important;
    padding-right: 50px!important;
  }
  .container {
    margin-top: 80px;
  }
  @media screen and (max-width: 700px){
    .exzoom_img_box {
      height: 320px!important;
    }
    .container {
      margin-top: 30px;
    }
  }
</style>

<div id="menu-shadow" class="">

<div class="container">
    <div class="row">
    <div class="col-md-6 col-12">
        <div class="exzoom" id="exzoom">
  <!-- Images -->
  <div class="exzoom_img_box">
    <ul class='exzoom_img_ul'>
      <li><img src="../style/images/products/product-slide-1.jpg"/></li>
      <li><img src="../style/images/products/product-slide-2.jpg"/></li>
    </ul>
  </div>
  <!-- <a href="https://www.jqueryscript.net/tags.php?/Thumbnail/">Thumbnail</a> Nav-->
  <div class="exzoom_nav"></div>
  <!-- Nav Buttons -->
  <p class="exzoom_btn">
      <a href="javascript:void(0);" class="exzoom_prev_btn"> < </a>
      <a href="javascript:void(0);" class="exzoom_next_btn"> > </a>
  </p>
</div>
</div>
        <div class="col-md-6 col-12 mt-4">
          <div class="card">
            <div class="card-header">
              <h3><?= _PRO1_NAME ?></h3>
            </div>
            <div class="card-body">
              <p class="p-3 m-0"><?= _PRO1_TITLE ?></p>
            </div>
          </div>
        </div>
    </div>
</div>

<script>
    $(function(){
    
    $("#exzoom").exzoom({
    
      // thumbnail nav options
      "navWidth": 60,
      "navHeight": 60,
      "navItemNum": 5,
      "navItemMargin": 7,
      "navBorder": 1,
    
      // autoplay
      "autoPlay": true,
    
      // autoplay interval in milliseconds
      "autoPlayTimeout": 50000
      
    });
    
    });
</script>


<script src="style/bootstrap4/js/bootstrap.min.js"></script>
<script src="style/js/index.js"></script>
