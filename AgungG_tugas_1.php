<?php
$nama = $_POST['nama'];
$nim = $_POST['nim'];
$kelas = $_POST['kelas'];
$jurusan = $_POST['jurusan'];
$kelamin = $_POST['kelamin'];
$alamat = $_POST['alamat'];
echo " <table>
			<tr>
				<td>nama </td>
				<td>: $nama</td>
			</tr>
			<tr>
				<td>Nim </td>	 
	  			<td> : $nim</td>
	  		</tr>
	  		<tr>
	  			<td>kelas</td>
				<td>: $kelas</td>
			<tr>
				<td>Jurusan</td>
	  			<td>: $jurusan</td>
	  		</tr>
	  		<tr>
	  			<td>Kelamin</td>
				<td>: $kelamin</td>
			</tr>";			
if(isset($_POST['proses']))    
{    
 echo "hobi anda : ";    
 if (isset($_POST['check1'])) {    
 echo $_POST['check1'].", ";    
 }    
 if (isset($_POST['check2'])) {    
 echo $_POST['check2'].", ";    
 }    
 if (isset($_POST['check3'])) {    
 echo $_POST['check3'].", ";    
 }    
 if (isset($_POST['check4'])) {    
 echo $_POST['check4'].", ";   
 }     
}

echo "<tr>
				<td>alamat</td>
				<td>: $alamat </td> 
			</tr>";
?>