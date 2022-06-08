<?php

  /* Snack 3
    Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
  */

  $posts = [

    '10/01/2019' => [
      [
        'title' => 'Post 1',
        'author' => 'Michele Papagni',
        'text' => 'Testo post 1'
      ],
      [
        'title' => 'Post 2',
        'author' => 'John Snow',
        'text' => 'Testo post 2'
      ],
    ],
    '10/02/2019' => [
      [
        'author' => 'Agostino Pique',
        'title' => 'Post 3',
        'text' => 'Testo post 3'
      ]
    ],
    '15/05/2019' => [
      [
        'title' => 'Post 4',
        'author' => 'Andrea Dongiovanni',
        'text' => 'Testo post 4'
      ],
      [
        'title' => 'Post 5',
        'author' => 'Sora KH',
        'text' => 'Testo post 5'
      ],
      [
        'title' => 'Post 6',
        'author' => 'Cloud Strife',
        'text' => 'Testo post 6'
      ]
    ],
  ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 3</title>
  <style>
    li{
      margin-bottom: 10px;
    }
  </style>
</head>
<body>
  
  <?php foreach ($posts as $date => $posts): ?>

    <h2>Post del <?php echo $date ?>:</h2>

    <ul>

      <?php foreach ($posts as $key => $post): ?>

        <li>
          <?php echo $post['title'] ?> di
          <?php echo $post['author']?> :
        </li>

        <ul>
          <li> <?php echo $post['text'] ?> </li>
        </ul>

      <?php endforeach; ?>

    </ul>
    
  <?php endforeach; ?>

</body>
</html>