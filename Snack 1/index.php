<?php


  /* SNACK 1 
    Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema. 

    Olimpia Milano - Cantù | 55-60
  */


  $matches_0609 = [
    [
      'homeTeam' => 'Portugal',
      'homeTeamPoints' => 50,
      'awayTeam' => 'Czech Republic',
      'awayTeamPoints' => 60
    ],
    [
      'homeTeam' => 'Switzerland',
      'homeTeamPoints' => 40,
      'awayTeam' => 'Spain',
      'awayTeamPoints' => 60
    ],
    [
      'homeTeam' => 'Norway',
      'homeTeamPoints' => 20,
      'awayTeam' => 'Slovenia',
      'awayTeamPoints' => 10
    ],
    [
      'homeTeam' => 'Sweden',
      'homeTeamPoints' => 80,
      'awayTeam' => 'Serbia',
      'awayTeamPoints' => 100
    ],
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 1</title>
</head>
<body>
  <h1>Matches played on 09/06/2022</h1>

  <ul>

    <?php for($i = 0; $i < count($matches_0609); $i++): ?>
      <li><?php echo $matches_0609[$i]['homeTeam'].' - '.$matches_0609[$i]['awayTeam'].' | '.$matches_0609[$i]['homeTeamPoints'].'-'.$matches_0609[$i]['awayTeamPoints'] ?> </li>
    <?php endfor; ?>  

  </ul>
  
</body>
</html>