<?php

$homepage = file_get_contents('http://www.yahoo.com');

utf8_decode($homepage);

$my_file = fopen("test_get.txt", "w");

fwrite($my_file, $homepage);

?>