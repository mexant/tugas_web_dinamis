<?php
//contoh 1
$nama = array ("Dr","Muhammad Ikhsan Kh","S.Kom");
$nama_lengkap = implode (". ",$nama);
echo "Nama : ",$nama_lengkap;
echo '<br/>';

//contoh 2
$alamat = array ("Perumnas Guwosari", "Rt.08", "Pajangan", "Bantul", "DIY");
$alamat_lengkap = implode (", ",$alamat);
echo "Alamat : ",$alamat_lengkap;
echo '<br/>';

//contoh 3
$ttl = array ("Semarang", "28-05-1987");
$lahir = implode (", ",$ttl);
echo "Tempat tanggal lahir : ",$lahir;
echo '<br/>';

//contoh 4
$email = array ("m.ikhsan","gmail.com");
$alamat_email = implode ("@",$email);
echo "Email : ",$alamat_email;
echo '<br/>';

//contoh 5
$kantor = array ("Staff","ITI","Infrastruktur","Kominfo");
$jabatan = implode (" ", $kantor);
echo "Jabatan : ",$jabatan;
?>