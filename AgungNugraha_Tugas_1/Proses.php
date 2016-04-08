<?php
	
//var
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$kelas = $_POST['kelas'];
	$alamat = $_POST['alamat'];
	$jurusan = $_POST['jurusan'];
	$kelamin = $_POST['kelamin'];
	
	//validasi hobi
	$hobi1 = "";
	$hobi2 = "";
	$hobi3 = "";
	$hobi4 = "";
	
	if (isset($_POST['Ngoding'])) {
		$hobi1 = $_POST['Ngoding']."";
	}
	if (isset($_POST['BacaBuku'])) {
		$hobi2 = $_POST['BacaBuku']."";
	}
	if (isset($_POST['Diskusi'])) {
		$hobi3 = $_POST['Diskusi']."";
	}
	if (isset($_POST['Olahraga'])) {
		$hobi4 = $_POST['Olahraga']."";
	}
	
	//-->	
//-->
	echo "<body bgcolor=#00FFFF>";
	echo "<div align=center>";
	echo "<h2><font color=maroon> Data Mahasiswa </font></h2>";
	echo "<hr width=500px color=#FFFFFF>";
	
	echo "<table width = 500 border=1> 
			<tr> 
				<td> NAMA </td><td> $nama </td></tr> 
			<tr>
				<td> NIM </td><td> $nim </td></tr>
			<tr> 
				<td> KELAS </td><td> $kelas </td></tr>
			<tr>
				<td> ALAMAT </td><td> $alamat </td></tr>
			<tr>
				<td> HOBI </td><td>$hobi1<br>
								   $hobi2<br>
								   $hobi3<br>
								   $hobi4	  </td></tr>
			<tr>
				<td> JURUSAN </td><td> $jurusan </td></tr>
			<tr>
				<td> KELAMIN </td><td> $kelamin </td></tr></table>";
	echo "</div>";
	echo "</body>";
?>