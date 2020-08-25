<?php
  // vytváříme zkrácené názvy proměnných
  $document_root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8" />
    <title>Bobovy autodíly – Objednávky zákazníků</title>

    <style type="text/css">
      table, th, td {
        border-collapse: collapse;
        border: 1px solid black;
        padding: 6px;
      }

      th {
        background: #ccccff;
      }
    </style>

  </head>
  <body>
    <h1>Bobovy autodíly</h1>
    <h2>Objednávky zákazníků</h2>

    <?php
      // Načítáme celý soubor.
      // Z každé objednávky se stane prvek pole.
      $orders = file("$document_root/../orders/orders.txt");
    
      // Počítáme objednávky v poli.
      $number_of_orders = count($orders);
    
      if ($number_of_orders == 0) {
        echo "<p><strong>Žádné nevyřízené objednávky.<br />
              Zkuste to prosím později.</strong></p>";
      }
    
      echo "<table>\n";
      echo "<tr>
              <th>Datum objednání</th>
              <th>Pneumatik</th>
              <th>Lahví olehe</th>
              <th>Zapalovacích svíček</th>
              <th>Celková cena</th>
              <th>Adresa</th>
            <tr>";
    
      for ($i = 0; $i < $number_of_orders; $i++) {
        // Rozdělíme sloupce řádku.
        $line = explode("\t", $orders[$i]);
    
        // Zachováme jen počet objednaných položek.
        $line[1] = intval($line[1]);
        $line[2] = intval($line[2]);
        $line[3] = intval($line[3]);
    
        // Vypíšeme objednávku.
        echo "<tr>
              <td>".$line[0]."</td>
              <td style=\"text-align: right;\">".$line[1]."</td>
              <td style=\"text-align: right;\">".$line[2]."</td>
              <td style=\"text-align: right;\">".$line[3]."</td>
              <td style=\"text-align: right;\">".$line[4]."</td>
              <td>".$line[5]."</td>
          </tr>";
      }    
      echo "</table>";
    ?>
  </body>
</html>
