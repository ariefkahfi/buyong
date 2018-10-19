<?php
$sql = mysqli_connect('localhost','root','','buyung');

$query = "UPDATE tb_absensi  SET statuspost ='APPROVE' WHERE statuspost = 'NOT APPROVE' ";

if (mysqli_query($sql, $query)) { 
	echo 'berhasil';

	header("location:http://localhost/buyong/absensi");

}else{
	echo 'gagal';

}
?>