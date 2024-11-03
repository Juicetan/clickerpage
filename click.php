<?php
  header('Content-Type: text/plain');
  header('Cache-Control: no-cache');
  $filename = 'db.txt';
  $file = fopen($filename, 'a');

  if($file){
    while(!flock($file, LOCK_EX)){
      usleep(100000);
    }

    fwrite($file, '1');
    flock($file, LOCK_UN);
    fclose($file);
    echo 'tada';
  } else{
    echo "Couldn't open the file.";
  }
?>