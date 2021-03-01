
<?php
// ini_set("log_errors", 1);
// ini_set("error_log", "/Applications/MAMP/logs/sito_fabio_php_error.log");
// con questo mi da l'errore solo qui dentro
include "data.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8">
  <title>google</title>
  <link rel="stylesheet" href="dist/app.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
</head>
<body>
  <div class="header">
    <div class="header-top">
      <ul>
        <li>  <img class="logo" src="img/Google-Logo.png" alt=""></li>
        <li class="privacyterms">Privacy & Terms</li>
      </ul>
      <ul>
        <li><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i><i class="fas fa-ellipsis-v"></i></li>
        <li><span class="user">F</span></li>
      </ul>
    </div>
    <div class="header-bottom">
      <ul class="nav">
        <li>Overview</li>
        <li>Privacy Policy</li>
        <li>Terms of Service</li>
        <li>Technologies</li>
        <li>FAQ</li>
      </ul>
    </div>
  </div>
  <div class="main container">
    <?php foreach ($faqs as $faq) { ?>
      <ul>
        <li class="question"><?php echo $faq["question"]; ?></li>
        <li class="answer"><?php echo $faq["answer"];
        ?>

      </li>
    </ul>
  <?php } ?>
</div>
<div class="footer">
  <div class="container">
    <ul class="footer-left">
      <?php foreach ($footerList as $element) {
        ?> <li><?php echo $element; ?></li>
      <?php } ?>
    </ul>
    <ul class="footer-right">
      <i class="fas fa-globe"></i>
      <select class="my-select">
        <?php foreach ($footerSelect as $option) {
          ?> <option value=""><?php echo $option; ?></option>
        <?php } ?>
      </select>
    </ul>

  </div>
</div>
</body>

</html>
