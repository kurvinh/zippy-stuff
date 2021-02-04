<?php
 
$zip = new ZipArchive();
$zip->open('archive.zip', ZipArchive::CREATE);

var_dump($zip);
 
// https://code.tutsplus.com/tutorials/file-compression-and-extraction-in-php--cms-31977 

$file_count = $zip->count();
 
// for($i = 0; $i < $file_count; $i++) {
//     $file_name = $zip->getNameIndex($i);
//     var_dump($file_name);
//     if(stripos($file_name, 'Italic') !== false) {
//        // $zip->deleteName($file_name);
//     }
// }

$zip->extractTo('uncompressed/', null);
  
$zip->close();
 
?>
