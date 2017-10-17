<?php
	echo $menu;
?>
<section id="content">

    <div class="page page-fullwidth-layout">
        <div class="tile">
        	<div class="tile-header dvd dvd-btm">
        		<h1 class="custom-font"><strong>Input</strong> Nilai</h1>
        	</div>
        	<div class="tile-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th colspan="12" class="text-center">
								<strong>Mata Kuliah Yang Akan Diinputkan Nilainya :</strong>
							</th>
						</tr>
						<tr>
							<th align="center">Kode MK</th>
							<th align="center">Mata Kuliah</th>
							<th align="center">Smstr</th>	
							<th align="center">SKS</th>
							<th align="center">Dosen</th>
							<th align="center">Kelas</th>
							<th align="center">Jadwal</th>
							<th align="center">Quota</th>
							<th align="center">Peserta</th>
							<th align="center">*</th>
							<?php
							if($status=='0')
							{
								echo '<th align="center">Batalkan</th>';
							}
							?>
						</tr>
					</thead>
					<tbody>
						<?php
							$no=1;
							$tot_sks = 0;
							foreach ($detailfrs->result_array() as $value) 
							{
							$tot_sks += $value['jum_sks'];
								
								echo '<tr class="content">
										<td>'.$value['kd_mk'].'</td>
										<td>'.$value['nama_mk'].'</td>
										<td>'.$value['semester'].'</td>
										<td>'.$value['jum_sks'].'</td>';
										
								echo '<td>'.$value['nama_dosen'].'</td>
										<td align="center">'.$value['kelas'].'</td>
										<td align="center">'.$value['jadwal'].'</td>
										<td align="center">'.$value['kapasitas'].'</td>
										<td align="center">'.$value['Peserta'].'</td>
										<td align="center"><a href="'.base_url().'admin/form_input_nilai/'.$value['nim'].'/'.$value['kd_jadwal'].'" class="link"
										rel="example_group">Input</a></td>';
									if($status=='0')
									{
										echo '<td align="center">
										<a class="delbutton" id="'.$value['nim'].'|'.$value['kd_jadwal'].'" href="#"><div id="box-link">Batalkan</div></a>
										</td>';
									}
							}
							echo '<tr><td colspan=3>Total SKS Yang Akan Ditempuh :</td><td colspan=8 id="jmlcart"><b>'.$tot_sks.' SKS</b></td></tr>';
						?>
					</tbody>
				</table>
				<br/><br/>
				<table class="table table-bordered">
					<?php 
						$temp='';
						$rows=array();
						$totalNH=0;	
						$totalSKS=0;
						$no=1;
					?>
					<thead>
						<tr>
							<th colspan="12" align="center" bgcolor="#fff" style="text-transform:uppercase;">
								<strong>Mata Kuliah yang Tersimpan :</strong>
							</th>
						</tr>
						<tr style="background-color:#000; color:#FFFFFF;">
							<th align="center">No</th>
							<th align="center">Kode Mata Kuliah</th>
							<th align="center">Mata Kuliah</th>
							<th align="center">Semester</th>
							<th align="center">SKS</th>
							<th align="center">Nilai</th>	
							<th align="center">Bobot</th>
							<th align="center">SKS x Bobot</th>
							<th colspan="2">Aksi</th>
						</tr>
					</thead>
					<tbody>
						<?php
							foreach($khs->result_array() as $value)
							{
								if($temp=='')
								{
									$rows[]='<tr>
									<td colspan="10" bgcolor="#fff"><strong>Semester : '.$value['semester_ditempuh'].'</strong></td>
									</tr>';
									$rows[]='<tr>
									<td>'. $no.'</td>
									<td>'. $value['kd_mk'].'</td>
									<td>&nbsp;'. $value['nama_mk'].'</td>
									<td align="center">'. $value['semester_ditempuh'].'</td>
									<td align="center">'. $value['jum_sks'].'&nbsp;</td>
									<td align="center">'. $value['grade'].'</td>
									<td align="center">'. $value['bobot'].'</td>
									<td align="center">'. $value['NxH'].'</td>
									<td align="center"><a href="'.base_url().'admin/edit_nilai/'.$value['nim'].'/'.$value['kd_mk'].'" class="link"
									rel="example_group">Edit</a></td>
									<td align="center"><a href="'.base_url().'admin/hapus_nilai/'.$value['nim'].'/'.$value['kd_mk'].'" class="link"
									onClick=\'return confirm("Anda yakin...??")\'>Hapus</a></td>';
									$no++;
									$totalNH=0;
									$totalSKS=0;
								}
								else if($value['semester_ditempuh']!=$temp)
								{
									$ip = 0;
									if($totalNH !=0)			
										$ip = round($totalNH/$totalSKS, 2);			
									$rows[]='<tr>
									<td colspan="6"><strong>Jumlah SKS : '.$totalSKS.'</strong></td>
									<td colspan="6"><strong>IP Semester : '.$ip.'</strong></td>';
						
									$rows[]='<tr>
									<td colspan="10" bgcolor="#fff"><strong>Semester : '.$value['semester_ditempuh'].'</strong></td>
									</tr>';
						
									$rows[]='<tr>
									<td>'. $no.'</td>
									<td>'. $value['kd_mk'].'</td>
									<td>&nbsp;'. $value['nama_mk'].'</td>
									<td align="center">'. $value['semester_ditempuh'].'</td>
									<td align="center">'. $value['jum_sks'].'&nbsp;</td>
									<td align="center">'. $value['grade'].'</td>
									<td align="center">'. $value['bobot'].'</td>
									<td align="center">'. $value['NxH'].'</td>
									<td align="center"><a href="'.base_url().'admin/edit_nilai/'.$value['nim'].'/'.$value['kd_mk'].'" class="link"
									rel="example_group">Edit</a></td>
									<td align="center"><a href="'.base_url().'admin/hapus_nilai/'.$value['nim'].'/'.$value['kd_mk'].'" class="link"
									onClick=\'return confirm("Anda yakin...??")\'>Hapus</a></td>
								</tr>';
								$no++;
								
									$totalNH =0;
									$totalSKS=0;
								}		
								else 
								{ 
									$rows[]='<tr>
									<td>'. $no.'</td>
									<td>'. $value['kd_mk'].'</td>
									<td>&nbsp;'. $value['nama_mk'].'</td>
									<td align="center">'. $value['semester_ditempuh'].'</td>
									<td align="center">'. $value['jum_sks'].'</td>
									<td align="center">'. $value['grade'].'</td>
									<td align="center">'. $value['bobot'].'</td>
									<td align="center">'. $value['NxH'].'</td>
									<td align="center"><a href="'.base_url().'admin/edit_nilai/'.$value['nim'].'/'.$value['kd_mk'].'" class="link"
									rel="example_group">Edit</a></td>
									<td align="center"><a href="'.base_url().'admin/hapus_nilai/'.$value['nim'].'/'.$value['kd_mk'].'" class="link"
									onClick=\'return confirm("Anda yakin...??")\'>Hapus</a></td>
								</tr>';
								$no++;
											
								}
								if($value['grade'] != 'T') {
									$totalNH +=$value['NxH'];
									$totalSKS+=$value['jum_sks'];
								}
								$temp=$value['semester_ditempuh'];	
							}
							$ip = 0;
							if($totalNH !=0)			
								$ip = round($totalNH/$totalSKS, 2);
							$rows[]='
									<tr>
									<td colspan="6"><strong>Jumlah SKS : '.$totalSKS.'</strong></td>
									<td colspan="6"><strong>IP Semester : '.$ip.'</strong></td>
									</tr>';
						
							foreach($rows as $row)
							{
								echo $row;
							}
							?>
					</tbody>
				</table>
        	</div>
        </div>

    </div>
    
</section>
