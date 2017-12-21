<?php
session_start();
include_once("../lib/config.php");
include_once("../function/function_rekap.php");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=rekap_alasan_penghematan.xls");

?>
<table id="example" class="display" cellspacing="0" width="100%">
							<thead class="_css_font_default_11_b">
								<tr>
			                    	<th>No</th>
			                    	<th><div align='center'>Kode Area</div></th>
			                    	<th><div align='center'>Nama Area</div></th>
									<th><div align='center'>Listrik Mahal</div></th>
									<th><div align='center'>Prinsip Hemat</div></th>
									<th><div align='center'>Harga Naik</div></th>
									<th><div align='center'>Tidak Peduli</div></th>
									<th><div align='center'>Alasan Lain</div></th>
									<th><div align='center'>Total Pelanggan</div></th>
									<th><div align='center'>Bulan Tahun</div></th>
								</tr>
							</thead>

							<tbody class="_css_font_default_11_b">
                
							<?php
							
							$rekap = rekap_alasan_penghematan(); 
							$nomor=1;
							
							for ($i=0;$i<count($rekap);$i++) {
								
								$VAR_ID_MASTER		=$rekap[$i]['id_master'];
								$token 				= md5($key.$VAR_ID_MASTER);
								
								$VAR_KODE_AREA				=$rekap[$i]['kode_area'];
								$VAR_NAMA_AREA				=$rekap[$i]['nama_area'];
								$VAR_MAHAL					=$rekap[$i]['mahal'];
								$VAR_PRINSIP				=$rekap[$i]['prinsip'];
								$VAR_KEBUTUHAN				=$rekap[$i]['kebutuhan'];
								$VAR_TIDAK_PEDULI			=$rekap[$i]['tidak_peduli'];
								$VAR_LAINNYA				=$rekap[$i]['lainnya'];
								$VAR_JUMLAH					=$rekap[$i]['jumlah'];
								$VAR_BLTH					=$rekap[$i]['blth'];
		 					
								echo "<tr>";
									echo "<td><div align='center'>".$nomor."</div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_NAMA_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_MAHAL)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_PRINSIP)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_KEBUTUHAN)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_TIDAK_PEDULI)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_LAINNYA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_JUMLAH)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_BLTH)."</a></div></td>";
								echo "</tr>"; 
								$nomor++;
		                    }
		                    ?>                
							</tbody>
						</table>