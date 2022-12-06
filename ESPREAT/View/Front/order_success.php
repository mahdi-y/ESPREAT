<?php 

include 'connect.php';

session_start();

$user_id = $_SESSION["identifiant"];


?>

<?php include('header.php'); ?>
<?php include('navbar-logout.php');?>


<body>
    <div class="box" style="margin-top: 170px;margin-left: 10%;">
    <p><div id="google_translate_element" style=""></div> 
    <script type="text/javascript"> 
    function googleTranslateElementInit() { 
      new google.translate.TranslateElement({pageLanguage: 'fr'},'google_translate_element'); 
    } 
    </script> 
    <script type="text/javascript"src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script> </p>
    <h1 >Order placed <span style="color: #ed1f24">successfully!</span></h1>
    <div class="sub-box" style="margin-left: -90px;">
    <p style="font-size: 25px; margin-top: 25px;">Thank you <?php echo $user_id?> for using ESPR<span style="color : #ed1f24;">E</span>AT!</p>
    <p>Be sure to pick-up your order from the collection point in the previously stated building.</p>
    <p>Your Order will be ready in 2-4 minutes.</p>
    <p>
        <a href="index-logout.php">Back to Home</a>
    </p>
    </div>
    </div>
</body>