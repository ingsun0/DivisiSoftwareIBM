<?php 
	$nama = $_POST['nama'];
	$nim = $_POST['nim'];
	$jurusan = $_POST['jurusan'];
	$jk = $_POST["jk"];

	/**
	 * Validasi Hobby
	 */
	$hobi1 = "";
	$hobi2 = "";
	$hobi3 = "";
	$hobi4 = "";
	$hobi5 = "";
	$hobi6 = "";

	if (isset($_POST['gitar'])) {
		$hobi1 = $_POST['gitar'].",";
	}
	if (isset($_POST['code'])) {
		$hobi2 = $_POST['code'].",";
	}
	if (isset($_POST['baca'])) {
		$hobi3 = $_POST['baca'].","; 
	}
	if (isset($_POST['baca'])) {
		$hobi3 = $_POST['baca'].","; 
	}
	if (isset($_POST['nonton'])) {
		$hobi4 = $_POST['nonton'].",";
	}
	if (isset($_POST['bola'])) {
		$hobi5 = $_POST['bola'].",";
	}
	if (isset($_POST['musik'])) {
		$hobi6 = $_POST['musik'].",";
	}
	//	 
	$alamat = $_POST['alamat'];
	
	echo "<h1 align='center'>Data Mahasiswa</h1> <br>";
	echo "<hr width='50%'>";
	echo "<center>Nama anda adalah $nama dengan NIM $nim Jurusan $jurusan UNIKOM,<br> Jenis kelamin $jk, Hobby 
	      $hobi1 $hobi2 $hobi3 $hobi4 $hobi5 $hobi6<br>Alamat di $alamat </center>";
	echo "<hr width='70%'>";
 ?>