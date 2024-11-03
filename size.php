<?php
  header('Content-Type: text/plain');
  header('Cache-Control: no-cache');
  $filename = 'db.txt';
  if (file_exists($filename)) { 
    clearstatcache(true, $filename);
    $fileSize = filesize($filename);
    clearstatcache(true, $filename);
    echo $fileSize;
  } else { 
    echo "File does not exist."; 
  }
?>