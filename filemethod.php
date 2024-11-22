<?php
// echo  readfile("readme.txt");
// mkdir("imran");
// unlink("readme.txt")
$file="readme.txt";

// if(file_exists($file)){
//     echo readfile($file);
// }else{
//     echo "file not found";
// }

// unlink($file);
$file="readme.txt";
if(!file_exists($file)){
    mkdir("textdata");
}else{
    echo "file exist";
}

?>