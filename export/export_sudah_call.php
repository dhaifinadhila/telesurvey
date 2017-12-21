<?php
session_start();
include_once("../lib/config.php");
include_once("../function/engine.php");
include_once("../function/function_master.php");
include_once("../function/function_call.php");
include_once("../function/function_pengguna.php");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=sudah_call.xls");

?>
<table id="example" class="display" cellspacing="0" width="100%">
							<thead class="_css_font_default_11_b">
								<tr>
			                    	<th>No</th>
									<th><div align='center'>Kode Distribusi</div></th>
									<th><div align='center'>Kode Area</div></th>
									<th><div align='center'>Kode Rayon</div></th>	
									<th><div align='center'>ID Pelanggan</div></th>		
									<th><div align='center'>Nama</div></th>
									<th><div align='center'>Alamat</div></th>
									<th><div align='center'>No Telepon</div></th>
									<th><div align='center'>No Handphone</div></th>		
									<th><div align='center'>Kesesuaian Nama</div></th>						
									<th><div align='center'>Kepemilikan</div></th>

									<th><div align='center'>Nama Petugas</div></th>						
									<th><div align='center'>Tanggal Call</div></th>
								</tr>
							</thead>
				
							<?php 
							$BULAN_THN= $_GET['VAR_BLTH'];
							
							$THN	= substr($BULAN_THN,0,4);
							$BLN	= substr($BULAN_THN,5,2);
							
							$BLN_THN	= $THN.$BLN;
							// /echo $BLN_THN;
							?>
				
							<tbody class="_css_font_default_11_b">
                
              				<?php
							$master = call_blth($BLN_THN); 
							$nomor=1;
							
							for ($i=0;$i<count($master);$i++) {
								
								$VAR_ID_MASTER		=$master[$i]['id_master'];
								$token 				= md5($key.$VAR_ID_MASTER);
								
								$VAR_ID_PELANGGAN	=$master[$i]['id_pelanggan'];
								$VAR_NAMA			=$master[$i]['nama'];
								$VAR_ALAMAT			=$master[$i]['alamat'];
								$VAR_NOTELP			=$master[$i]['no_telp'];
								$VAR_NO_HP			=$master[$i]['no_hp'];
								$VAR_PEMKWH			=$master[$i]['pemkwh'];
								$VAR_TARIF			=$master[$i]['tarif'];
								$VAR_DAYA			=$master[$i]['daya'];
								$VAR_JAM_NYALA 		=$master[$i]['jam_nyala'];
								$VAR_JAM_NYALA_600	=$master[$i]['jam_nyala_600'];
								$VAR_JAM_NYALA_400	=$master[$i]['jam_nyala_400'];
								$VAR_HASIL_KONVERSI =$master[$i]['hasil_konversi'];
								$VAR_NO_REG			=$master[$i]['no_registrasi'];

								$VAR_KODE_DISTRIBUSI=$master[$i]['kode_distribusi'];
								$VAR_KODE_AREA		=$master[$i]['kode_area'];
								$VAR_KODE_RAYON		=$master[$i]['kode_rayon'];
		 					
							$sudah_call	= get_call_by_id_master($VAR_ID_MASTER);
								$VAR_ID_PENGGUNA		=$sudah_call[0]['id_user'];
								$VAR_CALL_ID_PELANGGAN	=$sudah_call[0]['id_pelanggan'];
								$VAR_CALL_NAMA			=$sudah_call[0]['nama'];
								$VAR_KESESUAIAN			=$sudah_call[0]['kesesuaian_nama'];
								$VAR_KEPEMILIKAN		=$sudah_call[0]['kepemilikan'];
								$VAR_KESEDIAAN			=$sudah_call[0]['profesi'];
								$VAR_JENIS_TRANSAKSI	=$sudah_call[0]['profesi_lain'];
								$VAR_JENIS_IDENTITAS	=$sudah_call[0]['jumlah_gaji'];
								$VAR_NOMOR_IDENTITAS	=$sudah_call[0]['pemakaian_bln'];
								$VAR_SURAT_KUASA		=$sudah_call[0]['penghematan'];
								$VAR_NO_REGISTRASI		=$sudah_call[0]['no_registrasi'];
								$VAR_TGL_CALL			=$sudah_call[0]['tgl_call'];

								
							$pengguna = search_by_id_pengguna($VAR_ID_PENGGUNA);
								$nama_pengguna	= $pengguna[0]['nama'];
							
								echo "<tr>";
									echo "<td><div align='center'>".$nomor."</div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_KODE_DISTRIBUSI)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_KODE_AREA)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_KODE_RAYON)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_ID_PELANGGAN)."</a></div></td>";
									
									echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_NAMA)."</a></div></td>";
									echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_ALAMAT)."</a></div></td>";
									echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_NOTELP)."</a></div></td>";
									echo "<td><div align='left'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_NO_HP)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_KESESUAIAN)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_KEPEMILIKAN)."</a></div></td>";
									
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($nama_pengguna)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_TGL_CALL)."</a></div></td>";
									
								echo "</tr>"; 
								$nomor++;
		                    }
		                    ?>  
							</tbody>
						</table>