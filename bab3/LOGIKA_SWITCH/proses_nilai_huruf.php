<?php
$nilai = $_POST['nilai'];
switch ($nilai) {
  case 'A':
    echo "sangat baik";
  break;
  case 'B':
    echo "Baik";
    break;
  case 'C':
    echo "Cukup";
    break;
  case 'D':
    echo "kurang";
    break;
  case 'E':
    echo "Sangat Kurang";
    break;
}
 ?>
