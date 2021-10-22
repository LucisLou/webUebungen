<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8">
    <title>Mein erstes PHP Programm</title>
  </head>
  <body>
    <p>
      <?php
      // Zeichenkette
      print "mein erstes Programm";
      ?>
    </p>
    <p>
      <?php
      // Zahl
      print 255;
      ?>
    </p>
    <p>
      <?php
      // Zahl als String
      print "500";
      ?>
    </p>
    <p>
      <?php
      // Rechnen
      print 50*37;
      ?>
    </p>
  </body>
</html>

<!-- BSP 1 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Übung</title>
  </head>
  <body>
    <?php
    print "<h1>Willkommen</h1>";
    ?>
  </body>
</html>


<!-- BSP 2 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Übung</title>
  </head>
  <body>
    <?php
    print "<h1>Willkommen</h1>";
    print "<p>1. Absatz</p>";
    print "<p>2. Absatz</p>";
    ?>
  </body>
</html>


<!-- BSP 3 -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Übung</title>
  </head>
  <body>
    <?php
    // \n hat keine Auswirkung auf die Darstellung im Browser. Bewirkt aber einen Zeilenumbruch im Quellcode
    print "<h1>Willkommen</h1>\n";
    print "<p>1. Absatz</p>\n";
    print "<p>2. Absatz</p>\n";
    ?>
  </body>
</html>


<!-- BPS 4 -->
<!DOCTYPE html>
<html>
  <head>
  <?php
    print "<meta charset=\"UTF-8\">\n";
    print '<meta name="description" content="Beschreibung der Seite">';
    print "\n";
    print "<meta name='author' content='Beschreibung der Seite'>\n";
    ?>
    <title>Übung</title>
  </head>
  <body>
  <h1>Willkommen</h1>
  <?php
    print "<p>1. Absatz</p>\n";
    print "<p>2. Absatz</p>\n";
    ?>
  </body>
</html>