<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>php-exercises-variable</title>
  </head>
  <body>
    <?php
        $nom = "Romain";
      echo("Bonjour " . $nom . " comment vas tu ?");
      echo "</br>";

    function nom($nom) {
      echo "</br>";
      echo("Bonjour " . $nom . " comment vas tu ?");
      echo "</br>";
    }
    nom("Ribis");
    nom("Lyorom");
    nom("Lodyechosisc");
    nom("Mildojos");
    ?>
  </body>
</html>
