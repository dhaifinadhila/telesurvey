<?php
	$blth = date('Y').date('m');
  
?>

<div id="ddtopmenubar" class="mattblackmenu">
	<ul>
		 <li><a href="home.php">Home</a></li>
		 <?php if (($_SESSION['hak_akses']=="400") || ($_SESSION['hak_akses']=="300") ) { ?>
		 <li><a href="upload.php">Upload Excell</a></li>  
		 <?php } ?>
		 <?php if (($_SESSION['hak_akses']=="400") || ($_SESSION['hak_akses']=="300") || ($_SESSION['hak_akses']=="200")  ) { ?>
         <li><a  href="belum_call.php" >Belum Call</a></li>
		 <li><a  href="sudah_call.php" >Sudah Call</a></li>
		 
		 
		 <?php } ?>
		 
		<li><a  href="gagal_call.php">Gagal Call</a></li>
		<li><a href="#" rel="submenu_rekap" >Rekapitulasi</a></li>
		 <!-- <li><a  href="#" rel="submenu_gagal_cb">Gagal Callback</a></li>
         <li><a href="#" rel="submenu_rekap" >Rekapitulasi</a></li>
		 <li><a href="#" rel="submenu_analisa" >Analisa Callback</a></li> -->
		 <?php if ($_SESSION['hak_akses']=="400") { ?>
		 <li><a href="#" rel="submenu_master" >Data Master</a></li> 
		 <?php } ?>
		 <li><a href="ganti_password.php">&nbsp;&nbsp;Ganti Password&nbsp;&nbsp;</a></li>
		 <li><a href="logout.php">&nbsp;&nbsp;Logout&nbsp;&nbsp;</a></li>
		 
	</ul>
</div>

<script type="text/javascript">
ddlevelsmenu.setup("ddtopmenubar", "topbar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
</script>

<ul id="submenu_master" class="ddsubmenustyle">
	<li><a href="#">Distribusi dan Area</a>
	  <ul>
	  <li><a href="distribusi.php">Kantor Distribusi</a></li>
	  <li><a href="area.php">Kantor Area</a></li>
	  <!--<li><a href="rayon.php">Kantor Rayon</a></li>--> 
	  </ul>	
	</li>
	<li><a href="hak_akses.php">Hak Akses Aplikasi</a></li>    
	<li><a href="pengguna.php">Daftar Pengguna </a></li>    
	<!-- <li><a href="tabel.php">File Excell Upload</a></li> -->
	<!-- <li><a href="tabel.php">Pertanyaan Callback</a></li> -->
</ul>


<ul id="submenu_rekap" class="ddsubmenustyle">
	
	<li><a href="rekap_penerima_tlp.php">Rekapitulasi Penerima Telepon</a></li> 
	<li><a href="rekap_kepemilikan.php">Rekapitulasi Kepemilikan</a></li> 
	<li><a href="rekap_profesi_pelanggan.php">Rekapitulasi Profesi Pelanggan</a></li> 	
	<li><a href="rekap_penghasilan_pelanggan.php">Rekapitulasi Penghasilan Pelanggan</a></li>  
	<li><a href="rekap_kenaikan_tarif.php">Rekapitulasi Kenaikan Tarif</a></li>
	<li><a href="rekap_penghematan.php">Rekapitulasi Penghematan</a></li>
	<li><a href="rekap_alasan_penghematan.php">Rekapitulasi Alasan Penghematan</a></li>
	<li><a href="rekap_cara_penghematan.php">Rekapitulasi Cara Penghematan</a></li>
	<li><a href="rekap_pembelian_rt.php">Rekapitulasi Pembelian Peralatan Rumah Tangga</a></li>
	<li><a href="rekap_golongan_tarif.php">Rekapitulasi Golongan Tarif</a></li>
	<li><a href="rekap_gangguan_listrik.php">Rekapitulasi Gangguan Listrik</a></li>
	<li><a href="rekap_pemakaian_ac.php">Rekapitulasi Pengaruh Pemakaian AC</a></li>
	<li><a href="rekap_pemakaian_listrik.php">Rekapitulasi Pemakaian Listrik</a></li>
	<li><a href="rekap_gagal_call.php">Rekapitulasi Gagal Call</a></li>	
	<!--<li><a href="#">Distribusi dan Area</a>
	  <ul>
	  <li><a href="distribusi.php">Kantor Distribusi</a></li>
	  <li><a href="area.php">Kantor Area</a></li>
	   <li><a href="rayon.php">Kantor Rayon</a></li> 
	  </ul>	
	</li>
	-->
</ul>


 
 
 
 

 


