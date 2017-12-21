<?php
session_start();
include_once("../lib/config.php");
include_once("../function/function_rekap.php");

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=reakp_penghasilan_pelanggan.xls");

?>
<table id="example" class="display" cellspacing="0" width="100%">
							<thead class="_css_font_default_11_b">
								<tr>
			                    	<th>No</th>
			                    	<th><div align='center'>Kode Area</div></th>
			                    	<th><div align='center'>Nama Area</div></th>
									<th><div align='center'>Kurang Rp. 1,5 Juta</div></th>
									<th><div align='center'>1,5 Juta s/d 5 Juta</div></th>
									<th><div align='center'>5 Juta s/d 8 Juta</div></th>
									<th><div align='center'>9 Juta s/d 15 Juta</div></th>
									<th><div align='center'>15 Juta</div></th>
									<th><div align='center'>Total Pelanggan</div></th>
									<th><div align='center'>Bulan Tahun</div></th>
								</tr>
							</thead>

							<tbody class="_css_font_default_11_b">
                
							<?php
							
							$rekap = rekap_penghasilan_pelanggan(); 
							$nomor=1;
							
							for ($i=0;$i<count($rekap);$i++) {
								
								$VAR_ID_MASTER		=$rekap[$i]['id_master'];
								$token 				= md5($key.$VAR_ID_MASTER);
								
								$VAR_KODE_AREA				=$rekap[$i]['kode_area'];
								$VAR_NAMA_AREA				=$rekap[$i]['nama_area'];
								$VAR_GOL_1					=$rekap[$i]['gol_1'];
								$VAR_GOL_2					=$rekap[$i]['gol_2'];
								$VAR_GOL_3					=$rekap[$i]['gol_3'];
								$VAR_GOL_4					=$rekap[$i]['gol_4'];
								$VAR_GOL_5					=$rekap[$i]['gol_5'];
								$VAR_JUMLAH					=$rekap[$i]['jumlah'];
								$VAR_BLTH					=$rekap[$i]['blth'];
		 					
								echo "<tr>";
									echo "<td><div align='center'>".$nomor."</div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_KODE_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_NAMA_AREA)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_GOL_1)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_GOL_2)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_GOL_3)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_GOL_4)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_GOL_5)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_JUMLAH)."</a></div></td>";
									echo "<td><div align='center'>".strtoupper($VAR_BLTH)."</a></div></td>";
								echo "</tr>"; 
								$nomor++;
		                    }
		                    ?>                
							</tbody>
						</table>