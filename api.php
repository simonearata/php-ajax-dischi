<?php
  include_once __DIR__ . '/data/db.php';

  header('Content-Type: application/json');
  
  echo json_encode($database)
?>