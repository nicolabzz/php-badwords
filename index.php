<!-- 
Descrizione:
- Creare una variabile con un paragrafo di testo a vostra scelta.
- Stampare a schermo il paragrafo e la sua lunghezza.
- Una parola da censurare viene passata dall'utente tramite un form con metodo GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare.
-->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="style.css">

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Edu+VIC+WA+NT+Beginner:wght@400;500;600;700&family=Oregano:ital@0;1&display=swap" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Fascinate+Inline&display=swap" rel="stylesheet">
  <title>Badwords</title>
</head>
<body>

<?php
// NOT COMPOSED TEXT
$presentation = 'Hello World. Here the Unforgivable Curses: ';

$first_curse = 'Imperius: ';
$first_curse_description = 'the Imperius Curse places the victim in a trance or dreamlike state, leaving him or her under the complete control of the caster.';

$second_curse = 'Cruciatus: ';
$second_curse_description = 'the Cruciatus Curse, which inflicts excruciating pain upon the victim.';

$third_curse = 'Avada Kedavra: ';
$third_curse_description = 'the incantation of Avada Kedavra causes a blinding and intense green bolt of light, which, on contact with the victim, results in instant death.';
//////////////////////////////////////////////////

// FULL TEXT COMPOSED
$full_text = $presentation . ' ' . $first_curse . ' ' . $first_curse_description . ' ' . $second_curse . ' ' . $second_curse_description . ' ' . $third_curse  . ' ' . $third_curse_description;

//tools
$badword = "***";
$overshadow = $_GET['overshadow'];

//CENSORED FULL TEXT COMPOSED
$censured_full_text = str_ireplace($overshadow, $badword, $full_text);
?>

<!-- START -->
<div class="rotate"></div>
<h1>Welcome to BADWORD exercise.</h1>
<h2>Here's the text:</h2>

<div><h4><?= $full_text ?></h4></div>
<br>
<h5><?= "The text above is " . strlen($full_text) . " fonts long."; ?></h5>
<br>
<!-- <span>Choose a word to overshadow:</span> -->

<form action="" method="GET">
  <label for="overshadow">Choose a word to overshadow:</label>
  <input type="text" name="overshadow" id="overshadow" placeholder="Press the skull to die">
  <button><p>☠️</p></button>
</form>
<br>
<h4 id="forb">The forbidden word is: <span id="word"><?= $overshadow; ?></span></h4>
<br>
<h2>The same text but with the overshadow in action: </h2>

<div><h4><?= $censured_full_text ?></h4></div>
<br>
<h5><?= "The text is now " . strlen($censured_full_text) . " fonts long."; ?></h5>


<!-- END -->

</body>
</html>