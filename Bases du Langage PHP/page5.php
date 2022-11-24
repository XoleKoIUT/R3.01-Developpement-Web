<?php
  $i = "Bonjour";

  echo 'Essai $i<br>'; // Essai $i
  echo 'Essai 2 $i<br>\n'; // Essai 2 $i
  echo "Essai $i<br>"; // \nEssai Bonjour
  echo "Essai 2 $i\n<br>"; // Essai 2 Bonjour
  echo 'Essai '.$i.'<br>'; // Essai Bonjour
  echo 'Essai 2 '.$i."<br>\n"; // Essai 2 Bonjour
  echo 'Un texte avec "des guillemets"<br>'; // Un texte avec "des guillemets"
  echo "Un texte avec \"des guillemets\"<br>"; // Un texte avec "des guillemets"
?>
