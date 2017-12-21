<?php
session_start();
include_once("../lib/config.php");
include_once("../function/function_rekap.php");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekap_gagal_call.xls");

?>
<table id="example" class="display" cellspacing="0" width="100%">
							<thead class="_css_font_default_11_b">
								<tr>
			                    	<th>No</th>
			                    	<th><div align='center'>Kode Area</div></th>
			                    	<th><div align='center'>Nama Area</div></th>
									<th><div align='center'>Telepon Tidak Valid</div></th>
									<th><div align='center'>Salah Sambung</div></th>			
									<th><div align='center'>Telepon Sambung dg Kantor PLN</div></th>
									<th><div align='center'>Sudah PD</div></th>
									<th><div align='center'>Total Pelanggan</div></th>
									<th><div align='center'>Bulan Tahun</div></th>
								</tr>
							</thead>

							<tbody class="_css_font_default_11_b">
                
							<?php
							
							$rekap = rekap_gagal_call(); 
							$nomor=1;
							
							for ($i=0;$i<count($rekap);$i++) {
								
								$VAR_ID_MASTER		=$rekap[$i]['id_master'];
								$token 				= md5($key.$VAR_ID_MASTER);
								
								$VAR_KODE_AREA				=$rekap[$i]['kode_area'];
								$VAR_NAMA_AREA				=$rekap[$i]['nama_area'];
								$VAR_TELEPON_TIDAK_VALID	=$rekap[$i]['telepon_tidak_valid'];
								$VAR_SALAH_SAMBUNG			=$rekap[$i]['salah_sambung'];
								$VAR_TELEPON_PLN			=$rekap[$i]['telepon_pln'];
								$VAR_SUDAH_TAMBAH_DAYA		=$rekap[$i]['sudah_tambah_daya'];
								$VAR_JUMLAH					=$rekap[$i]['jumlah'];
								$VAR_BLTH					=$rekap[$i]['blth'];
		 					
								echo "<tr>";
									echo "<td><div align='center'>".$nomor."</div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_NAMA_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_TELEPON_TIDAK_VALID)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_SALAH_SAMBUNG)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_TELEPON_PLN)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_SUDAH_TAMBAH_DAYA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_JUMLAH)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_BLTH)."</a></div></td>";
								echo "</tr>"; 
								$nomor++;
		                    }
		                    ?>                
							</tbody>
						</table>