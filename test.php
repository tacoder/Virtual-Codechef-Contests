<?php 

$cout = fopen("testing.test","w+");

fwrite($cout, "abcd");
fseek($cout,-1,SEEK_CUR);
fwrite($cout, "defg");
?>















