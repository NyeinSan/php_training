<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tutorial1</title>
  <style>
    table {
      border-collapse: collapse;
    }

    tr,
    td {
      width: 50px;
      height: 50px;
      border: 1px solid #000;
    }

    .white-row {

      background-color: white;
    }

    .black-row {
      background-color: black;
    }
  </style>
</head>

<body>
  <table>
    <tbody>
      <?php

      for ($row = 1; $row <= 8; $row++) {
        echo "<tr>";
        if ($row % 2 == 0) {
          for ($col = 1; $col <= 8; $col++) {
            if ($col % 2 == 0) {
              echo '<td class="white-row"></td>';
            } else {
              echo '<td class="black-row"></td>';
            }
          }
        } else {
          for ($col = 1; $col <= 8; $col++) {
            if ($col % 2 == 0) {
              echo '<td class="black-row"></td>';
            } else {
              echo '<td class="white-row"></td>';
            }
          }
        }
        echo "</tr>";
      }

      ?>
    </tbody>
  </table>
</body>

</html>