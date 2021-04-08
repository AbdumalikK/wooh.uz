<?php  
include "../core/config.php";

$sql = "SELECT * FROM contact ORDER BY id DESC";
$stmt = $conn->prepare($sql);
$stmt->execute();

while ($row = $stmt->fetch()) {


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    <link rel="stylesheet" href="../style/bootstrap4/css/bootstrap.min.css">
    <link rel="stylesheet" href="../style/style.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="../style/bootstrap4/js/bootstrap.min.js"></script>
</head>
<body class="bg-lalaku">

<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <h2 class="text-center p-5">Xabar raqami #<?php echo $row['id'];?></h2>
            <div class="wrap">
                <h3>E-mail</h3>
                <p class="post"><?php echo $row['email']; ?></p>

                <h3>Message</h3>
                <p class="post b-square"><?php echo $row['comment']; ?></p>
            </div>
        </div>
    </div>
</div>

<?php } ?>
</body>
</html>