<?php
//index.php
//include autoloader

require_once 'dompdf/autoload.inc.php';
include "koneksi.php";

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();

$sql=mysql_query("SELECT * FROM reservasi") or die(mysql_error());//order by
$no=0;
$output = "

<p align='center'><img src='logo.png' style='width:222px;height:118px;'/></p>
<p align='center'><strong>Laporan Reservasi</strong></p>
<table table border='1' width='100%'>
	<tr>

					<th>kode_reservasi</th>
					<th>tgl_masuk</th>
					<th>tgl_keluar</th>
					<th>tarif</th>
					<th>id_KTP</th>
					<th>nomor_kamar</th>
					<th>id_resepsionis</th>
					<th>id_fasilitas</th>
					

	</tr>
";
while($row = mysql_fetch_array($sql))
{
	$no++;
	$output .= '
		<tr>

			<td>'.$row["kode_reservasi"].'</td>
			<td>'.$row["tgl_masuk"].'</td>
			<td>'.$row["tgl_keluar"].'</td>
			<td>'.$row["tarif"].'</td>
			<td>'.$row["id_KTP"].'</td>
			<td>'.$row["nomor_kamar"].'</td>
			<td>'.$row["id_resepsionis"].'</td>
			<td>'.$row["id_fasilitas"].'</td>
			

		</tr>
	';
}
$output .= '</table>';



//echo $output;

$document->loadHtml($output);

//set page size and orientation

$document->setPaper('Legal', 'landscape');

//Render the HTML as PDF

$document->render();


//Get output of generated pdf in Browser

$document->stream("Lap_Reservasi", array("Attachment"=>0));
//1  = Download
//0 = Preview


?>