<!-- Istruzioni:
Creare una variabile con un paragrafo di testo.
Visualizzare a schermo il paragrafo con la relative lunghezza e
sostituire la badword passata in GET con tre *. -->

<?php
  $txt = 'Ti hanno visto bere a una fontana <br>
  Che non ero io <br>
  Ti hanno visto spogliata la mattina <br>
  Biricchina biriccò <br>
  Mentre con me non ti spogliavi <br>
  Neanche la notte <br>
  Ed eran botte, Dio, che botte <br>
  Ti hanno visto alzare la sottana <br>
  La sottana fino al pelo, che nero <br>
  Poi hai detto "Poveretto <br>
  Il tuo sesso dallo al gabinetto" <br>
  Te ne sei andata via con la tua amica <br>
  Quella alta, grande fica...';

  $barword = $_GET["badword"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bad Words</title>
</head>
<body>
  <main>
    <h1>Censuratore</h1>
    <h2>Il testo da censurare è lungo: <?php echo strlen( $txt);?> caratteri<br>punteggiatura compresa. 😊 </h2>

    <p>
      <?php echo str_replace($barword, '*****', $txt);?>
    </p>
      <!--  http://localhost:8888/php-badwords/secondo/?badword=pelo  -->
  </main>
</body>
</html>