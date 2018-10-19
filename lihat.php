<?

 include "koneksi.php"; 

 $nippos=$_POST['nippos'];
 $datenow=$_POST['tanggal'];
 $jammasuk=$_POST['jammasuk'];

 
 $query="insert into approval values('','$nippos','$datenow','$jammasuk')";
 $exe=mysql_query($query);


  echo"<a href='view.php'>Input Lagi</a></br>";
 
?>


<?