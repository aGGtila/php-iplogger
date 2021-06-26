<?php
  $ip = $_SERVER["HTTP_CF_CONNECTING_IP"];
  $file = "ip.txt";
  $txtfile = fopen($file, "a");
  fwrite($txtfile, $ip."\n");
  fclose($txtfile);
?>
