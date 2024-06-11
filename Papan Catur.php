<head>
    <title>Kotak 5x5 hyz</title>
</head>
<body style='background:#A8CD9F'>
    <table border="1" width="250px">
    <?php
    for ($row=1; $row <= 5; $row++) {
        echo "<tr>";
        for ($col=1; $col <=5; $col++) {
            $total = $row + $col;
            if($total % 2 ==  0) {
                echo "<td height='47px' width '47px' style='background:#000000'></td>";
            } else {
                echo "<td height='47px' width '47px' style='background:#E2F4C5'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
    </table>
    <hr>
    <table border="1" width="250px">
      <?php
      for ($row=1; $row <= 10; $row++) {
        echo "<tr>";
        for ($col=1; $col <= 10; $col++) {
            $total = $row + $col;
            if ($total <= 10) {
                echo "<td height='20px' width='20px' style='background:#FFFF00'></td>";
            } else {
                echo "<td height='20px' width='20px' style='background:#FF0000'></td>";
            }
        }
        echo "</tr>";
    }
    ?>
    </table>
    <hr>
    <table border="1" width="350px" >
    <?php
    for ($row = 1; $row <= 7; $row++) {
        echo "<tr>";
        for ($col = 1; $col <= 7; $col++) {
            if (($row == 1 || $row == 7) && ($col == 4) ) {
                echo "<td height='47px' width='47px' style='background:#FF0000'></td>";
            } elseif (($row == 2 || $row == 6) && ($col == 3 || $col == 5)) {
                echo "<td height='47px' width='47px' style='background:#FF0000'></td>";
            } elseif (($row == 3 || $row == 5) && ($col == 2 || $col == 4 || $col == 6)) {
                echo "<td height='47px' width='47px' style='background:#FF0000'></td>";
            } elseif ($row == 4 && ($col == 1 || $col == 3 || $col == 5 || $col == 7)) {
                echo "<td height='47px' width='47px' style='background:#0000FF'></td>";
            } else {
                echo "<td height='47px' width='47px'style='background:#E2F4C5'></td>";
            }
        }

        echo "</tr>";
    }
    ?>
    </table>
    <hr>
</body>