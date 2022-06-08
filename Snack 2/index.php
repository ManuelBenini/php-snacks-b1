<?php


  /* SNACK 2 
    Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
  */

  $name = $_GET['name'];
  $mail = $_GET['mail'];
  $age = $_GET['age'];

  if(empty($name) or empty($mail) or empty($age)){
    echo 'Accesso negato (non sono stati inseriti tutti i dati richiesti)';
  }else{
    echo "nome: $name <br>";
    echo "mail: $mail <br>";
    echo "età: $age <br>";

    if(strlen($name) > 3){
      echo 'il nome è più lungo di 3 lettere <br>';
    }else{
      echo 'il nome non è più lungo di 3 lettere <br>';
    }

    if(strpos($mail, '.')){
      echo 'mail contiene un punto <br>';
    }else{
      echo 'mail non contiene un punto <br>';
    }

    if(strpos($mail, '@')){
      echo 'mail contiene una chiocciola <br>';
    }else{
      echo 'mail non contiene una chiocciola <br>';
    }

    if(is_numeric($age)){
      echo 'age è un numero <br>';
    }else{
      echo 'age non è un numero <br>';
    }

    if(strlen($name) > 3 and strpos($mail, '.') and strpos($mail, '@') and is_numeric($age)){
      echo 'Accesso riuscito';
    }else{
      echo 'Accesso negato';
    }
  }

?>