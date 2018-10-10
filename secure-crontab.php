<?php


$fn = fopen("test/crontab.php","r") or die("fail to open file");

while($row = fgets($fn)) {
  print_r(explode( ";", $row ));
}
fclose( $fn );
?>