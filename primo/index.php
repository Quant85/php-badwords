<?php

/* $name = "Gaspare";
$surname = "Zuzzurro"; se inserisco qui la dichiarazione delle varibili esse vengono sovrascritte dalla lettura a cascata */

$name = $argv[1]; //effettuo la prima dichiarazione associando alla variabile $name la posizione dell'attributo che io passerò, ponendolo in 1 poichè in 0 gli passerò il file index.php - $argv è propria di PHP ed è la matrice di argomenti passati allo script

$surname = $argv[2];

/* $name = "Gaspare";
$surname = "Zuzzurro"; ridichiaro le variabili, esse vengono sovrascritte dalla lettura a cascata */

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
  <body>
    <h1> Ciao <?php echo $surname." ".$name;?></h1>
    <!-- ora posso passare gli argomenti da powershell/terminale - attenzione all'ordine di scrittura ed immissione es.
    php index.php "Primo" "Secondo" --mi restituirà Ciao Secondo Primo -->
    <h1> Ciao <?php echo $name." ".$surname;?></h1>
    <!-- php index.php "Primo" "Secondo" --mi restituirà Ciao Primo Secondo -->

  </body>
</html>