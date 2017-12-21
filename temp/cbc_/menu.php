 
<div id="ddtopmenubar" class="mattblackmenu">
	<ul>
		 <li><a href="home.php">Home</a></li>
		 <? if (($_SESSION['hak_akses']=="400") || ($_SESSION['hak_akses']=="300") ) { ?>
		 <li><a href="upload_view.php">Upload Excell</a></li>  
		 <? } ?>
		 <? if (($_SESSION['hak_akses']=="400") || ($_SESSION['hak_akses']=="300") || ($_SESSION['hak_akses']=="200")) { ?>
         <li><a  href="#" rel="submenu_belum_cb">Belum Callback</a></li>
		 <? } ?>
		 <li><a  href="#" rel="submenu_sudah_cb">Sudah Callback</a></li>
         <li><a href="#" rel="submenu_rekap" >Rekapitulasi</a></li>
		 <li><a href="#" rel="submenu_analisa" >Analisa Callback</a></li>
		 <? if ($_SESSION['hak_akses']=="400") { ?>
		 <li><a href="#" rel="submenu_master" >Data Master</a></li> 
		 <? } ?>
		 <li><a href="logout.php">&nbsp;&nbsp;Logout&nbsp;&nbsp;</a></li>
		 
	</ul>
</div>

<script type="text/javascript">
ddlevelsmenu.setup("ddtopmenubar", "topbar") //ddlevelsmenu.setup("mainmenuid", "topbar|sidebar")
</script>

<ul id="submenu_master" class="ddsubmenustyle">
	<li><a href="#">Distribusi, Unit dan Rayon</a>
	  <ul>
	  <li><a href="distribusi.php">Kantor Distribusi</a></li>
	  <li><a href="unit.php">Kantor Unit atau Area</a></li>
	  <li><a href="rayon.php">Kantor Rayon</a></li>
	  </ul>	
	</li>
	<li><a href="hak_akses.php">Hak Akses Aplikasi</a></li>    
	<li><a href="pengguna.php">Daftar Pengguna </a></li>    
	<!-- <li><a href="tabel.php">File Excell Upload</a></li> -->
	<!-- <li><a href="tabel.php">Pertanyaan Callback</a></li> -->
</ul>

 
<ul id="submenu_belum_cb" class="ddsubmenustyle">
	<li><a href="belum_call.php?pbpd=1" >Pelanggan Pasang Baru</a></li>
	<li><a href="belum_call.php?pbpd=2">Pelanggan Perubahan Daya</a></li>    
</ul>

<ul id="submenu_sudah_cb" class="ddsubmenustyle">
	<li><a href="sudah_call.php?pbpd=1">Pelanggan Pasang Baru</a></li>
	<li><a href="sudah_call.php?pbpd=2">Pelanggan Perubahan Daya</a></li>    
</ul>


<ul id="submenu_rekap" class="ddsubmenustyle">
	<li><a href="#">Data Rekapitulasi Kinerja Petugas</a>
	  <ul>
	  <li><a href="rekap_petugas_kinerja.php?type=1">Berdasarkan Kontribusi</a></li>
	  <li><a href="rekap_petugas_target.php?type=2">Berdasarkan Target Individu</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Integritas</a>
	  <ul>
	  <li><a href="rekap_integritas_pb.php">Integritas Pasang Baru</a></li>
	  <li><a href="rekap_integritas_pd.php">Integritas Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi High Trust Society</a>
	  <ul>
	  <li><a href="rekap_hts_pb.php">HTS Pasang Baru</a></li>
	  <li><a href="rekap_hts_pd.php">HTS Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Kecepatan Layanan</a>
	  <ul>
	  <li><a href="rekap_kecepatan_pb.php">Kecepatan Pasang Baru</a></li>
	  <li><a href="rekap_kecepatan_pd.php">Kecepatan Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Rekapitulasi Resume</a>
	  <ul>
	  <li><a href="rekap_pb.php">Resume Pasang Baru</a></li>
	  <li><a href="rekap_pd.php">Resume Perubahan Daya</a></li>
	  </ul>
	</li>
  
	<li><a href="#">Rekapitulasi Adanya Tambahan Biaya</a>
	  <ul>
	  <li><a href="rekap_tambahan_biaya_pb.php">Tambahan Biaya Pasang Baru</a></li>
	  <li><a href="rekap_tambahan_biaya_pd.php">Tambahan Biaya Perubahan Daya</a></li>
	  </ul>
	</li>
	
 
</ul>

<ul id="submenu_analisa" class="ddsubmenustyle">
	<li><a href="#">Nomor Telepon Pelanggan dan Pihak Lain</a>
	  <ul>
	  <li><a href="analisa_telp_plg_pb.php">Telepon Pelanggan dan Pihak Lain Pasang Baru</a></li>
	  <li><a href="analisa_telp_plg_pd.php">Telepon Pelanggan dan Pihak Lain Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Diurus Sendiri dan Diurus Pihak Lain</a>
	  <ul>
	  <li><a href="analisa_diurus_pb.php">Diurus Sendiri dan Pihak Lain Pasang Baru</a></li>
	  <li><a href="analisa_diurus_pd.php">Diurus Sendiri dan Pihak Lain Perubahan Daya</a></li>
	  </ul>
	</li>

	<li><a href="#">Analisa Kecepatan Proses Pelayanan</a>

	  <ul>
	  <li><a href="analisa_kecepatan_sendiri_pb.php">Kecepatan Layanan Proses Pasang Baru Diurus Sendiri</a></li>
	  <li><a href="analisa_kecepatan_oranglain_pb.php">Kecepatan Layanan Proses Pasang Baru Diurus Orang Lain</a></li>
	  
	  <li><a href="analisa_kecepatan_sendiri_pd.php">Kecepatan Layanan Proses Perubahan Daya Diurus Sendiri</a></li>
  	  <li><a href="analisa_kecepatan_oranglain_pd.php">Kecepatan Layanan Proses Perubahan Daya Diurus Orang Lain</a></li>
 	  </ul>


	</li>

	<li><a href="#">Tambahan Biaya</a>
	  <ul>
		  <li><a href="analisa_tambahan_biaya_sendiri_pb.php">Tambahan Biaya Pasang Baru Diurus Sendiri</a></li>
		  <li><a href="analisa_tambahan_biaya_oranglain_pb.php">Tambahan Biaya Pasang Baru Orang Lain</a></li>
		  <li><a href="analisa_tambahan_biaya_sendiri_pd.php">Tambahan Biaya Perubahan Daya Diurus Sendiri</a></li>
		  <li><a href="analisa_tambahan_biaya_oranglain_pd.php">Tambahan Biaya Perubahan Daya Orang Lain</a></li>
	  </ul>
	</li>
	<!-- 
	<li><a href="#">Alasan Tambahan Biaya</a>
	  <ul>
	  <li><a href="#">Alasan Tambahan Biaya Proses Pasang Baru</a></li>
	  <li><a href="#">Alasan Tambahan Biaya Proses Perubahan Daya</a></li>
	  </ul>
	</li>
	-->
 
</ul>
 
 
 
 

 


