<?php


  /* SNACK 4
    Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici.
    Stampare Nome, Cognome e la media dei voti di ogni alunno.
  */

  $alunni_classe_61 = [
    [
      'nome' => 'Manuel',
      'cognome' => 'Benini',
      'voti' => [10,10,10,10,10]
    ],
    [
      'nome' => 'Agostino',
      'cognome' => 'Pique',
      'voti' => [10,8,7,10,6]
    ],
    [
      'nome' => 'Andrea',
      'cognome' => 'De stefano',
      'voti' => [6,7,8,9,10]
    ],
    [
      'nome' => 'Francesco',
      'cognome' => 'Ercoli',
      'voti' => [1,2,3,4,5]
    ]
  ];

  function calcoloMedia($array){
    $somma = 0;

    for($i = 0; $i < count($array); $i++){
      $somma += $array[$i];
    }

    return $somma / count($array);
  };

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 7</title>
</head>
<body>
  <h1>Alunni classe 61</h1>

  <ul>

    <?php for($i = 0; $i < count($alunni_classe_61); $i++): ?>
      <li><?php echo 'Alunno'.$i.': '.$alunni_classe_61[$i]['nome'].' '.$alunni_classe_61[$i]['cognome'].', media:'.calcoloMedia($alunni_classe_61[$i]['voti']); ?></li>
    <?php endfor; ?>

  </ul>

</body>
</html>