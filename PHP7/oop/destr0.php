<?php 
 require_once "File/Logger0.php";

 for($n = 0; $n < 10; $n++) {
  $logger = new FileLogger0("test$n", "test.log");
  $logger->log("Hello!");

  //$logger->close();
 }
?>
