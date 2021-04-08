<?php
include_once 'core/lang.php';
include_once 'core/config.php';

// set date and time to Tashkent
date_default_timezone_set('Asia/Tashkent');

$email = '';
$message = '';
if(isset($_POST['submit'])) {
$email = $_POST['email'];
$message = $_POST['comment'];


$to = 'lalakucash@gmail.com';
 
if(mail($to, $email, $message)){
    // echo 'Your mail has been sent successfully.';
} else{
    // echo 'Unable to send email. Please try again.';
}

// telegram
// function sendMessage($chatID, $messaggio, $token) {
//     echo "sending message to " . $chatID . "\n";

//     $url = "https://api.telegram.org/bot" . $token . "/sendMessage?chat_id=" . $chatID;
//     $url = $url . "&text=" . urlencode($messaggio);
//     $ch = curl_init();
//     $optArray = array(
//             CURLOPT_URL => $url,
//             CURLOPT_RETURNTRANSFER => true
//     );
//     curl_setopt_array($ch, $optArray);
//     $result = curl_exec($ch);
//     curl_close($ch);
//     return $result;
// }

$message_date = date("d-m-Y H:i:s");

// Send message to telegram
$apiToken = "1790943678:AAGSNPyXCDS6723wOS1op53VHzMgmsxG_SY";
$message_tg = "Email: $email \n Xabar: $message \n Vaqti: $message_date";

$data = [
    'chat_id' => '1533586294',
    'text' => $message_tg,
];

file_get_contents('https://api.telegram.org/bot'.$apiToken.'/sendMessage?'.http_build_query($data));
// end telegram



$params = array(':email' => $email, ':message' => $message, ':message_date' => $message_date);
$sql = "INSERT INTO contact (email, comment, message_date) VALUES (:email, :message, :message_date)";
$stmt = $conn->prepare($sql);

if($stmt->execute($params)) {
    header("Location: message_sent.php");
} else {
    echo "Error: ".$sql."</b>".$conn->$error;
}

}



?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="style/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="style/bootstrap4/js/bootstrap.min.js"></script>
</head>
<body class="bg-lalaku">
<!-- container navbar -->
    <div class="container-fluid px-0">
        <!-- navbar -->
			<div class="row">
				<div class="col-6">
					<!-- navbar -->
				   <nav class="navbar fixed-top">
							   <div class="logo">
								   <a href="index.php"><img src="style/logo.svg" width="70" height="70" alt="logo" id="logo"></a>
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
											<img src="style/logo.svg" alt="logo">
										</div>
									<!-- </div> -->
					
									<li class="nav-links">
									<a href="#" class="nested-links"><?= _PRODUCT ?></a>
									<ul class="nested-nav mt-4">
										<li>
											<a href="#" class="nested-links">LALAKU PANTS</a>
										</li>
										<li>
											<a href="#" class="nested-links">LALAKU DIAPERS</a>
										</li>
										<li>
											<a href="#" class="nested-links">LALAKU MAMA POSTPARTUM PADS</a>
										</li>
										<li>
											<a href="#" class="nested-links">LALAKU MAMA SANITARY NAOKINS</a>
										</li>
										<li>
											<a href="#" class="nested-links">LALAKU KN 95 MASKS</a>
										</li>
									</ul>
									</li>
									<li class="nav-links">
									<a href="#" class="nested-links"><?= _CONTACT ?></a>
									</li>
									<li class="nav-links">
									<a href="#" class="nested-links"><?= _ABOUT ?></a>
									</li>
								</ul>
				   <!-- end burger menu -->

				</div>
			</div>
        </div>
       <!-- end navbar -->
        
    </div>
    <!-- end container -->

    <!-- contaiener titles -->
    <div class="container pt-120">
        <div class="col-12 text-center">
            <h1 class="contact-main-title"><?= _CONTACT_TITLE ?></h1>
        </div>
    
        <div class="row mt-contact text-center">
        
            <div class="col-lg-3">
                <h3 class="contact-title">call</h3>
                <hr>
                <p>+998 90 000 00 00</p>
                <p>+998 90 000 00 00</p>
                <p>+998 90 000 00 00</p>
            </div>
            <div class="col-lg-3">
                <h3 class="contact-title mt-4 mt-lg-0">e-mail</h3>
                <hr>
                <p>info@sofgigienik.com</p>
                <p>import@sofgigienik.com</p>
                <p>export@sofgigienik.com</p>
            </div>
            <div class="col-lg-3">
                <h3 class="contact-title mt-4 mt-lg-0">address</h3>
                <hr>
                <p>48 Khirmontepa 2-th Passage
Tashkent, Uzbekistan</p>
            </div>
            <div class="col-lg-3">
                <h3 class="contact-title mt-4 mt-lg-0">web</h3>
                <hr>
                <p>@lalaku.uzbekistan</p>
            </div>
        </div>    
    </div>
    <!-- end container titles -->
    <!-- validation script -->
    <script>
    function validateemail()  
            {  
            var x=document.contact.email.value;  
            var atposition=x.indexOf("@");  
            var dotposition=x.lastIndexOf(".");  
            if (atposition<1 || dotposition<atposition+2 || dotposition+2>=x.length){  
              alert("Please enter a valid e-mail address!");  
              return false;  
              }  
            }  
    </script>
    <!-- end valid -->
    
    <!-- form contact -->
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" name="contact" method="post" onsubmit="return validateemail();">
    <div class="container mt-contact">
        <div class="row">
            <div class="col-lg-12">
                <input type="email" name="email" placeholder="E-mail:" class="form-control input-border">
            </div>
            <div class="col-lg-12 mt-4">
                <textarea type="text" name="comment" class="form-control input-border" placeholder="Text" id="comment" cols="30" rows="10"></textarea>
            </div>
        </div>

            <div class="text-center py-5">
                <button type="submit" name="submit" class="btn btn-dark contact-submit">Submit</button>
            </div>
    </div>
</form>
    <!-- end form -->
<script src="style/js/index.js"></script>
</body>
</html>