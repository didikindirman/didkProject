<?php
//index.php
//include autoloader

require_once 'dompdf/autoload.inc.php';
include "koneksi.php";

// reference the Dompdf namespace

use Dompdf\Dompdf;

//initialize dompdf class

$document = new Dompdf();

$sql=mysql_query("SELECT * FROM tamu") or die(mysql_error());//order by
$no=0;
$output = "

<p align='center'><img src='logo.png' style='width:222px;height:118px;'/></p>
<p align='center'><strong>Laporan Tamu</strong></p>
<table table border='1' width='100%'>
	<tr>
		<th>No</th>
		<th>id_KTP</th>
		<th>nama</th>
		<th>alamat</th>
		<th>no_telepon</th>

	</tr>
";
while($row = mysql_fetch_array($sql))
{
	$no++;
	$output .= '
		<tr>
			<td>'.$no.'</td>
			<td>'.$row["id_KTP"].'</td>
			<td>'.$row["nama"].'</td>
			<td>'.$row["alamat"].'</td>
			<td>'.$row["no_telepon"].'</td>

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

$document->stream("Lap_Tamu", array("Attachment"=>0));
//1  = Download
//0 = Preview


?>