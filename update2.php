<?php
$sql = mysqli_connect('localhost','root','','buyung');
$abs = $row['id_abs'];
echo "najib";
$query = "UPDATE tb_absensi  SET statuspost ='APPROVE' WHERE id_abs = '$abs' ";

if (mysqli_query($sql, $query)) { 
	echo 'berhasil';

	header("location:http://localhost/buyong/absensi");

}else{
	echo 'gagal';

}
?>