<?php
//koneksi database, sesuaikan dengan username dan password database Anda
$host = "localhost";
$user_name = "root";
$password = "";
$database = "buyung";

$koneksi = mysql_connect($host, $user_name, $password);
$pilihdatabase = mysql_select_db($database, $koneksi);



$id_abs = $_POST['id_abs'];
$nippos = $_POST['nippos'];
$tanggal = $_POST['tanggal'];
$kodeabsensi = $_POST['kodeabsensi'];
$jammasuk = $_POST['jammasuk'];
$statuspost = $_POST['statuspost'];

//perintah query insert ke table pembayaran
$query_insert = " INSERT into approve set 
				statuspost='$statuspost',
				";
				
//perintah query update pada table status				
$query_update = " UPDATE tb_absensi set 
				statuspost='APPROVE'
				where id_abs='$id_abs'
				";

//eksekusi query insert
$insert = mysql_query($query_insert);

//eksekusi query update
$update = mysql_query($query_update);

//hasil eksekusi query insert
if($insert)
	{
	echo "insert data ke table berhasil ...<br/> ";

	}
else
	{
	echo "Gagal insert ... ";
	}

//hasil eksekusi query update 	
if($update)
	{
	echo "update statuspost berhasil ... ";
	}
else
	{
	echo "Gagal Update ... ";
	}	
?>
