
<html>
<head>
    <title> data </title>
</head>
<body>
    <table border=1 width="30%">
        <tr>
            <th>NO </th>
            <th>NIP POS</th>
            <th>NAMA </th>
            <th>JABATAN</th>
            <th> TANGGAL </th>
            <th> JAM </th>
        </tr>
        <? include "koneksi.php";
 $query="select * from tb_absensi ";
            $exe=mysql_query($query);
            $no=1;
            while ($row=mysql_fetch_array($exe)) { ?>
        <tr>
            <td><? echo $no;?></td>
            <td><? echo $row[1];?></td>
            <td><? echo $row[2];?></td>
            <td><? echo $row[3];?></td>
        </tr>
        <? $no++; } ?>
    </table>
</body>
</html>
 



