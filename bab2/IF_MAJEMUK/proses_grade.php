<?php 
$nilai = $_POST['nilai'];

if ($nilai >=8 ) {
  echo "GRADE A";
}else if ($nilai >= 7 and $nilai < 8) {
echo "GRADE B";
}else if ($nilai >= 5 and $nilai < 7) {
  echo "GRADE C ";
} else {
  echo "GRADE D";
}
?>
