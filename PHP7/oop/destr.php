<?php 
 require_once "File/Logger.php";

 for($n = 0; $n < 10; $n++) {
  $logger = new FileLogger("test$n", "test.log");
  $logger->log("Hello!");
 }
 exit();
?>
