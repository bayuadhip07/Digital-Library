<?php

$nama = $_POST['nama'];
$npm = $_POST['nim'];
$jenjang = $_POST['jenjang'];
$prodi = $_POST['prodi'];
$alamat = $_POST['alamat'];

require_once("dompdf/dompdf_config.inc.php");

$html =
  '<html><body>'.
  '	<table border="0" width="100%" >
			<tr>
				<td width="6%"></td>
				<td rowspan="4" align="center" width="18%"><img src="assets/img/bebaspustaka.png" sizes="10px"></td>
				<td colspan="2"> <center><b>KEMENTRIAN RISET, TEKNOLOGI, DAN PERGURUAN TINGGI</b></center></td>
				<td width="6%"></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2"> <center><b>UNIVERSITAS SINGAPERBANGSA KARAWANG</b></center></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2"> <center><b>UNIT PELAKSANA TEKNIS PERPUSTAKAAN</b></center></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td colspan="2"> <center>Jl. HS. Ronggo Waluyo, Puseurjaya, Teluk Jambe Timur</center></td>
				<td></td>
			</tr>
	</table>'.
	'<hr width="90%" color="black"><br>'.
  '<h3 align="center">SURAT BEBAS PUSTAKA</h3>'.
  '<h4 align="center">Nomor : ....... / UNSIKA / BP / 2020 </h4><br>'.
  '<table border="0" width="100%">
			<tr>
				<td width="5%"></td>
				<td colspan="3">Saya yang bertanda tangan dibawah ini menerangkan bahwa : </td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td width="8%"></td>
				<td width="17%">Nama </td>
				<td width="0.5%"> : </td>
				<td>'.$nama.'</td>
				<td width="5%"></td>
			</tr>
			<tr>
				<td></td>
				<td>NPM </td>
				<td> : </td>
				<td>'.$npm.'</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>Program Studi </td>
				<td> : </td>
				<td>'.$jenjang.'  '.$prodi.'</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td>Alamat </td>
				<td> : </td>
				<td>'.$alamat.'</td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td colspan="3">Mahasiswa tersebut tidak mempunyai pinjaman pustaka milik Perpustakaan Universitas Singaperbangsa Karawang.</td>
			</tr>
			<tr>
				<td></td>
			</tr>
			<tr>
				<td width="5%"></td>
				<td colspan="3">Demikian surat keterangan ini dibuat agar dapat digunakan sebagai mana mestinya.</td>
			</tr>
	</table>'.
	'<br><br><br><br>'.
	'<table border="0" width="100%">	
			<tr>
				<td width="45%"></td>
				<td width="30%" align="center">Karawang, ............................................</td>
				<td width="5%"></td>
			</tr>
			<tr>
				<td ></td>
				<td align="center"><b>Kepala UPT Perpustakaan UNSIKA</b></td>
				<td></td>
			</tr>
			</table>
			<br><br><br><br><br><br>
			<table border="0" width="100%">
			<tr>
				<td width="45%"></td>
				<td width="30%" align="center"><b><u>BAYU ADHI PAMUNGKAS</b></u></td>
				<td width="5%"></td>
			</tr>
			<tr>
				<td ></td>
				<td align="center"><b>NIP : 1710631170067 </b></td>
				<td ></td>
			</tr>
			</table>'.
	'</body></html>';

$dompdf = new DOMPDF();
$dompdf->load_html($html);
$dompdf->render();
$dompdf->stream('SURAT BEBAS PUSTAKA_'.$nama.'.pdf');
redirect('home');
?>