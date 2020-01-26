<?php 
$n = $_POST['n'];
$nama = $_POST['nama'];

for ($x=1;$x<=$n; $x++)
{
  echo "$x. $nama <br>";
}
?>
