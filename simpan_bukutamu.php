<?php

$txtnama    = $_POST['txtnama'];
$txtpesan   = $_POST['txtpesan'];


$tgl_isi =date('d-m-y');
$berkas =fopen("file_bukutamu.txt","a"); //membuat file txt , membuka , dan menuliskan kalimatnya
fputs($berkas, "*=====================================*\n"); //menuliskan data
fputs($berkas, "*----------------@ Data @-------------*\n");
fputs($berkas, "*=====================================*\n");
fputs($berkas, $txtnama ." => Nama \n");
fputs($berkas, $txtpesan ." => Pesan \n");
fputs($berkas, $tgl_isi ." <= Tanggal Diisi \n");
fputs($berkas, "*-------------------------------------*\n");
fclose($berkas); //keluar dari berkas

?>
<?php
    include"index.html";
?>