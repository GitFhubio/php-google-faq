<?php
$students = [
[
'name'=>'Giorgio',
'surname' => 'Pratelli',
'voti'=>[4,6,7,8,5]
],
[
'name'=>'Enrico',
'surname' => 'Fassi',
'voti'=>[4,6,7,8,5]
],
[
'name'=>'Giorgio',
'surname' => 'Fassotti',
'voti'=>[4,6,2,4,5]
],
];
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <style>

  .wrapper {
    display:flex;
    width:100vw;
    max-width:100%;
    height:100vh;
  }
  </style>
  <body>
  <div class="wrapper">
<?php
foreach ($students as $student){ ?>
  <h1><?php echo $student['name']; ?></h1>
  <h2><?php echo $student['surname']; ?></h2>
   <?php   $sum=0;
      for ($i=0; $i < count($student['voti']) ; $i++) {
     // echo $student['voti'][$i];
     $sum+=$student['voti'][$i];
   } ?>
   <h6> <?php echo $sum/count($student['voti']); ?> </h6>
     <?php  }
    ?>
    <!-- oppure c'era array_sum  -->

 </div>
  </body>
</html>

<!-- col round posso arrotondare anche cifre dopo -->
