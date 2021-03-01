<?php
$text =
'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';

$pieces = explode(".", $text);
// print_r($pieces);

// $nuovotesto= implode(". <br/>" ,$pieces);
// echo $nuovotesto ;
 $nuovotesto= '<p>'. implode(". </p><p>" ,$pieces) .'</p>';
 echo $nuovotesto;
?>

<ul>
<?php for ($i=0; $i < count($pieces); $i++) { ?>
  <li><?php echo ($i+1) . '°phrase : ' . $pieces[$i]; ?></li>
  <?php } ?>
</ul>

<?php
var_dump(round(3.4));
var_dump(round(3.5));
var_dump(round(3.6));
var_dump(round(3.6, 0));
var_dump(round(5.045, 2));
var_dump(round(5.055, 2));

 ?>

<!-- col round posso arrotondare anche cifre dopo -->
