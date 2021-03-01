<?php
$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
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
foreach ($posts as $date=>$postsInDate){
  foreach ($postsInDate as $postDetail){
 ?>

 <div class="post">
   <p><?php echo $date; ?> </p>
 <h1> <?php echo $postDetail["title"]; ?> </h1>
 <h2><?php echo $postDetail["author"]; ?> </h2>
  <p><?php echo $postDetail["text"]; ?> </p>
</div>
<?php }
}?>
 </div>
  </body>
</html>
