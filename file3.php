<?php
session_start();
echo 'Halo '.$_SESSION['nama'].' Tentara Nasional Indonesia :D halaman tiga' ;
session_destroy();
//Hasil nya tidak ada(kosong)
echo $_SESSION['nama'];
?>