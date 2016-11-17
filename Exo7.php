<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php-exercises-variable</title>
  </head>
  <body>
    <?php
      $nom = "Quet";
      $prenom = "Romain";
      $age = 20;

      echo "Bonjour ".$nom." ".$prenom." tu as ".$age." ans";
      echo "</br>";
    ?>

  <?php
    function test($nom, $prenom, $age) {
      echo "</br>";
      echo "Bonjour ".$nom." ".$prenom." tu as ".$age." ans";
      echo "</br>";
    }

    test("quet", "elodie", 26);
    test("martinez", "renée", 51);
    ?>

  </body>
</html>
