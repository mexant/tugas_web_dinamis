<?php
//contoh 1
$nama="Muhammad Ikhsan Kh";
$nama_depan = explode(" ",$nama);
echo "Selamat Datang Mr. " ,$nama_depan[1];
echo '<br/>';

//contoh 2
$alamat="Perumnas Guwosari Pajangan Bantul";
$propinsi= explode(" ",$alamat);
echo "Propinsi : ",$propinsi[3];
echo '<br/>';

//contoh 3
$NIP="1973 03 28 1002 70 89";
$tgl_lahir = explode (" ",$NIP);
echo "Tanggal lahir : ",$tgl_lahir[2],"-",$tgl_lahir[1],"-",$tgl_lahir[0];
echo '<br/>';

//contoh 4
$email="m.ikhsan@gmail.com";
$nama_email = explode ("@",$email);
echo "Email : ",$nama_email[0];
echo '<br/>';

//contoh 5
$no_surat="11/APBD/2019";
$no_document = explode ("/",$no_surat);
echo "Surat no : ",$no_document[0];
?>
