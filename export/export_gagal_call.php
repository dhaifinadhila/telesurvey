<?php
session_start();
include_once("../lib/config.php");
include_once("../function/engine.php");
include_once("../function/function_master.php");
include_once("../function/function_call.php");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=gagal_call.xls");

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
									<th><div align='center'>Tarif</div></th>
									<th><div align='center'>Daya</div></th>
									<th><div align='center'>PemKWH</div></th>
									<th><div align='center'>Jam Nyala</div></th>
									<th><div align='center'>Jam Nyala 600</div></th>
									<th><div align='center'>Jam Nyala 400</div></th>
									<th><div align='center'>Hasil Konversi</div></th>
									<th><div align='center'>No Registrasi</div></th>
								</tr>
							</thead>

							<tbody class="_css_font_default_11_b">
			                
								<?php
								$master = gagal_call(); 
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
									$VAR_ID_PENGGUNA		=$sudah_call[0]['ID_PENGGUNA'];
									$VAR_CALL_ID_PELANGGAN	=$sudah_call[0]['ID_PELANGGAN'];
									$VAR_CALL_NAMA			=$sudah_call[0]['NAMA'];
									$VAR_CALL_ALAMAT		=$sudah_call[0]['ALAMAT'];
									$VAR_CALL_NOTELP		=$sudah_call[0]['NO_TELP'];
									$VAR_CALL_NO_HP			=$sudah_call[0]['NO_HP'];
									$VAR_KESESUAIAN			=$sudah_call[0]['KESESUAIAN_NAMA'];
									$VAR_KEPEMILIKAN		=$sudah_call[0]['KEPEMILIKAN'];
									$VAR_KESEDIAAN			=$sudah_call[0]['KESEDIAAN'];
									$VAR_JENIS_IDENTITAS	=$sudah_call[0]['JENIS_IDENTITAS'];
									$VAR_NOMOR_IDENTITAS	=$sudah_call[0]['NOMOR_IDENTITAS'];
									$VAR_SURAT_KUASA		=$sudah_call[0]['SURAT_KUASA'];
									$VAR_NO_REGISTRASI		=$sudah_call[0]['NO_REGISTRASI'];
									$VAR_TGL_CALL			=$sudah_call[0]['TGL_CALL'];

					
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
									
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_TARIF)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_DAYA)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_PEMKWH)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_JAM_NYALA)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_JAM_NYALA_600)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_JAM_NYALA_400)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_HASIL_KONVERSI)."</a></div></td>";
									echo "<td><div align='center'><a href='call_view.php?id=$VAR_ID_MASTER&token=$token'>".strtoupper($VAR_NO_REG)."</a></div></td>";
									
									
									
								echo "</tr>"; 
								$nomor++;
		                    }
                    		?>           
							</tbody>
						</table>	