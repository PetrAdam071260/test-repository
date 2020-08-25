<?php
  // vytváříme zkrácené názvy proměnných
  $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Bobovy autodíly – Objednávky zákazníků</title>
  </head>
  <body>
    <h1>Bobovy autodíly</h1>
    <h2>Objednávky zákazníků</h2>
    <?php
      $orders = file("$document_root/../orders/orders.txt");
      $number_of_orders = count($orders);

      if ($number_of_orders == 0) {
          echo "<p><strong>Žádné nevyřízené objednávky.<br />
               Zkuste to prosím později.</strong></p>";
      }
   
      for ($i = 0; $i < $number_of_orders; $i++) {
        echo $orders[$i]."<br />";
      }
    ?>
  </body>
</html>
