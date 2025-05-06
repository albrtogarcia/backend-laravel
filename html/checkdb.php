<?php
try {
  new PDO('mysql:host=lm-backend-db;port=3306;dbname=laravel', 'laravel', 'secret');
  echo "OK";
} catch (Exception $e) {
  var_dump($e->getMessage());
  exit(1);
}
