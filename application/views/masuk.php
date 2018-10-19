<!DOCTYPE html>
<html>
<head>
<script>

$( document ).ready(function() {
 $("#nippos").keyup(function(event){
    	if(event.keyCode == 13){
        	 cekMasuk();
    	}
	});
});
function cekMasuk(){
			var nippos=$("#nippos").val();
		$.ajax({
			url:'<?php echo base_url(); ?>home/cekMasuk/',		 
			type:'POST',
			data:"nippos="+nippos,
			success:function(data){ 
			  	if(data==''){
					 $( "#infodlg" ).html('Nik Tidak tersedia Harap Periksa Kembali ...');
					 $( "#infodlg" ).dialog({ title:"Info...", draggable: false});					 
				} else {
				   $("#notification").html(data);
				   $("#nippos").val("");
				}
			 }
		});		
}

function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout(function(){startTime()},500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
</head>

<body onLoad="startTime()">
<label style="font-size:60px;font-family:calibri">MASUK (TGL <?php echo(date('d-m-Y')); ?>)</label>
<div id="txt" style="font-family:calibri;font-size:100px;text-align:left;margin-bottom:30px;float:right;width:400px"></div><hr>
 <table>
	<tr>
    	<td></td>
        <td></td>
        <td><input type="hidden" disabled value = "<?php echo $this->session->userdata('id_user');?>" name="nippos" id="nippos" style="height:50px;width:400px;font-size:30px" placeholder="NIP PEGAWAI"></td>
        <td><input type='button' value='Masuk' onclick='cekMasuk()' style="height:50px;width:400px;font-size:30px"></td>
 
   </tr>
</table>
<div id="notification">
</div>
</body>
</html>
