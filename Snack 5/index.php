<?php

  // Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

  $paragrafo_intero = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Rerum nisi animi totam, iure et ipsa minima magni libero similique deleniti nesciunt ad tempora possimus ex id vero. Aliquid, dolorem delectus.';

  $paragrafi_divisi_da_punto = explode('.', $paragrafo_intero);

  var_dump($paragrafi_divisi_da_punto);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 2 PHP</title>
</head>
<body>

  <ul>

    <?php for($i = 0; $i < count($paragrafi_divisi_da_punto); $i++): 

      if(!empty($paragrafi_divisi_da_punto[$i])): ?>
        <li> <?php echo $paragrafi_divisi_da_punto[$i] ?></li>
      <?php endif;?>
      
    <?php endfor; ?>

  </ul>

</body>
</html>