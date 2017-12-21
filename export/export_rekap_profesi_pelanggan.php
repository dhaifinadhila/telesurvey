<?php
session_start();
include_once("../lib/config.php");
include_once("../function/function_rekap.php");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=reakp_profesi_pelanggan.xls");

?>
<table id="example" class="display" cellspacing="0" width="100%">
							<thead class="_css_font_default_11_b">
								<tr>
			                    	<th>No</th>
			                    	<th><div align='center'>Kode Area</div></th>
			                    	<th><div align='center'>Nama Area</div></th>
									<th><div align='center'>Pegawai BUMN</div></th>
									<th><div align='center'>Pegawai Negeri</div></th>
									<th><div align='center'>Profesional</div></th>
									<th><div align='center'>Pengusaha</div></th>
									<th><div align='center'>Karyawan Swasta</div></th>
									<th><div align='center'>Wiraswasta</div></th>
									<th><div align='center'>Dosen/Guru</div></th>
									<th><div align='center'>Pensiunan</div></th>
									<th><div align='center'>Pelajar/Mahasiswa</div></th>
									<th><div align='center'>Ibu Rumah Tangga</div></th>
									<th><div align='center'>Pedagang/Petani</div></th>
									<th><div align='center'>Driver/Operator</div></th>
									<th><div align='center'>Lain-lain</div></th>
									<th><div align='center'>Total Pelanggan</div></th>
									<th><div align='center'>Bulan Tahun</div></th>
								</tr>
							</thead>

							<tbody class="_css_font_default_11_b">
                
							<?php
							
							$rekap = rekap_profesi_pelanggan(); 
							$nomor=1;
							
							for ($i=0;$i<count($rekap);$i++) {
								
								$VAR_ID_MASTER		=$rekap[$i]['id_master'];
								$token 				= md5($key.$VAR_ID_MASTER);
								
								$VAR_KODE_AREA				=$rekap[$i]['kode_area'];
								$VAR_NAMA_AREA				=$rekap[$i]['nama_area'];
								$VAR_PEGAWAI_BUMN			=$rekap[$i]['pegawai_bumn'];
								$VAR_PEGAWAI_NEGERI			=$rekap[$i]['pegawai_negeri'];
								$VAR_PROFESIONAL			=$rekap[$i]['profesional'];
								$VAR_PENGUSAHA				=$rekap[$i]['pengusaha'];
								$VAR_KARYAWAN_SWASTA		=$rekap[$i]['karyawan_swasta'];
								$VAR_WIRASWASTA				=$rekap[$i]['wiraswasta'];
								$VAR_DOSEN					=$rekap[$i]['dosen'];
								$VAR_PENSIUNAN				=$rekap[$i]['pensiunan'];
								$VAR_PELAJAR				=$rekap[$i]['pelajar'];
								$VAR_IRT					=$rekap[$i]['irt'];
								$VAR_PEDAGANG				=$rekap[$i]['pedagang'];
								$VAR_DRIVER					=$rekap[$i]['driver'];
								$VAR_LAINNYA				=$rekap[$i]['lainnya'];
								$VAR_JUMLAH					=$rekap[$i]['jumlah'];
								$VAR_BLTH					=$rekap[$i]['blth'];
		 					
								echo "<tr>";
									echo "<td><div align='center'>".$nomor."</div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_NAMA_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_PEGAWAI_BUMN)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_PEGAWAI_NEGERI)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_PROFESIONAL)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_PENGUSAHA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_KARYAWAN_SWASTA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_WIRASWASTA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_DOSEN)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_PENSIUNAN)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_PELAJAR)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_IRT)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_PEDAGANG)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_DRIVER)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_LAINNYA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_JUMLAH)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_BLTH)."</a></div></td>";
								echo "</tr>"; 
								$nomor++;
		                    }
		                    ?>                
							</tbody>
						</table>