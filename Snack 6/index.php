<?php

  /* Snack 6
    Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.
  */

  $db = [
    'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
    ],
    'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
    ]
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 6 PHP</title>
  <style>
    .rectangle{
      width: 500px;
      border: 1px solid black;
    }
    .pm{
      background-color: green;
    }
    .teachers{
      background-color: gray;
    }
  </style>
</head>
<body>

  <?php foreach ($db as $role => $peoples): ?>

    <div class="rectangle <?php echo $role; ?>">
      <h1><?php echo $role === 'teachers' ? 'Insegnanti' : 'Pm' ?></h1>
      <ul>

        <?php foreach ($peoples as $people): ?>
          <li><?php echo $people['name'] . ' ' .  $people['lastname']; ?></li>
        <?php endforeach; ?>
        
      </ul>

    </div>

  <?php endforeach; ?>

</body>
</html>