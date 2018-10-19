<?php
session_start();


if(!isset($_SESSION['id_user'])){
	die("Anda belum login");//jika belum login jangan lanjut..
}

if($_SESSION['2']!="hrd") {
die("Anda bukan HRD");
}
?>
<tml>
<head>
<title> Halaman HRD </title>
</head>
<body>
<?php echo "<h3> WELCOME".$_SESSION['id_user']."</h3>";?>
Menu :
<a href = pulang.php> Halaman 1</a>
</body>
</html>