<?php
 $n = $_POST['n'];
 $nama = $_POST['nama'];

 $x= 1;
 while($x <=$n)
 {
   echo "$x. $nama <br> ";
   $x++;
 }

 ?>
