<?php
/* ---------- File Handling --------- */
/* 
  File handling is the ability to read and write files on the server.
  PHP has built in functions for reading and writing files.
*/

$file = 'extras/users.txt';

if (file_exists($file)) {
    // echo readfile($file);

    $f = fopen($file, 'r');
    $contents = fread($f, filesize($file));
    fclose($f);
    echo $contents;
} else {
    $handle = fopen($file, 'w');
    $contents = 'Jonny' . PHP_EOL . 'Susan' . PHP_EOL . 'Mike';
    fwrite($handle, $contents);
    fclose($handle);
}