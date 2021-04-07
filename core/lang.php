<?php
session_start();

if(isset($_GET['lang']) && !empty($_GET['lang'])){
	$_SESSION['lang'] = $_GET['lang'];

	if(isset($_SESSION['lang']) && $_SESSION['lang'] != $_GET['lang']){
		echo "<script type='text/javascript'>location.reload();</script>";
	}
}

if(isset($_SESSION['lang'])){
	include "lang/lang_".$_SESSION['lang'].".php";
} else {
	include "lang/lang_en.php";
}
?>