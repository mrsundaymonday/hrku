<?php
if (!function_exists('tanggal_indo'))
{
      function tanggal_indo($tanggal)
    {
      $bulan = array ('1' => 'Jan', 'Feb','Mar','Apr','Mei','Jun','Jul','Aug','Sept','Okt','Nov','Des');                
      $split = explode('/', $tanggal);
      return $split[0] . ' ' . $bulan[ (int)$split[1] ] . ' ' . $split[2];
    }
}

// create new PDF document
$pdf = new TCPDF(PDF_PAGE_ORIENTATION, PDF_UNIT, PDF_PAGE_FORMAT, true, 'UTF-8', false);
//encrypt pdf using password
//$pdf->SetProtection(array('print', 'copy','modify'), "123456", "rahasia", 0, null);

// remove default header/footer
$pdf->setPrintHeader(false);
$pdf->setPrintFooter(false);
// set margins
$pdf->SetMargins(10, 10, 5, true);
// set auto page breaks false
$pdf->SetAutoPageBreak(false, 0);
// add a page
$pdf->AddPage('L', 'A6');

ob_start();
//$pdf->Write(5, 'CodeIgniter TCPDF Integration');

/*$image_file = 'assets/img/tsm.png';
$pdf->Image($image_file, 170, 5, 25, 25, 'PNG', false, 'C', true, 300, 'C', false, false, 0, false, false, false);
*/
$pdf->setCellPaddings( $left = '0', $top = '0', $right = '2', $bottom = '2');
$pdf->SetFont('helvetica', 'B', 12);
 
$pdf->Cell(0, 0, 'E-Slip Payroll Koperasi Karyawan Parasejahtera', 0, false, 'C', 0, '', 0, false, 'M', 'M');
$pdf->ln(); 
$pdf->SetFont('helvetica', '', 7);
$pdf->Cell(0, 0, "=============================================================================================="); 
$pdf->ln(); 
$pdf->SetFont('helvetica', 'B', 7); 

$slip = <<<EOD

<style>
  .mytable td {border: 1px solid black; padding-left:25px;}
</style>
EOD;
$slip.='
<table>
<thead>

 <tr>
  <td width="80" align="left"><b>NIK</b></td>
  <td width="110" align="left"><b>: '.$sheet->nik.'</b></td>
  <td></td>
  <td><b>'.$sheet->periode.'</b></td>
 </tr>
 <tr>
  <td width="80" align="left"><b>Nama</b></td>
  <td width="110" align="left"><b>: '.$sheet->nama.'</b></td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td width="80" align="left"><b>Departemen</b></td>
  <td width="110" align="left"><b>: '.$sheet->dept.'</b></td>
  <td></td>
  <td></td>
 </tr>
 <tr>
  <td colspan="2" align="left"><u><br>Pendapatan</u></td>
  <td colspan="2" align="left"><u><br>Pengurang</u></td>
 </tr>
 <tr>
  <td width="80">Gaji Pokok</td>
  <td width="110" align="left">: Rp. '.number_format($sheet->gapok).'</td>
  <td>BPJS TK</td>
  <td>: Rp. '.number_format($sheet->bpjs_tk).'</td>
 </tr>
  <tr>
  <td width="80">Tunj. Transport</td>
  <td width="110" align="left">: Rp. '.number_format($sheet->tj_transport).'</td>
  <td>BPJS Kesehatan</td>
  <td>: Rp. '.number_format($sheet->bpjs_kesehatan).'</td>
 </tr>
 <tr>
  <td width="80">Tunj. Fungsional</td>
  <td width="110" align="left">: Rp. '.number_format($sheet->tj_fungsional).'</td>
  <td>Koperasi</td>
  <td>: Rp. '.number_format($sheet->koperasi).'</td>
 </tr>
 <tr>
  <td width="80">Tunj. Jabatan</td>
  <td width="110" align="left">: Rp. '.number_format($sheet->tj_jabatan).'</td>
  <td>Pot. Lain-lain</td>
  <td>: Rp. '.number_format($sheet->pot_lain2).'</td>
 </tr>
 <tr>
  <td width="80">T. KJK</td>
  <td width="110" align="left">: Rp. '.number_format($sheet->tj_kjk).'</td>
  <td>Pot. Kehadiran</td>
  <td>: Rp. '.number_format($sheet->pot_kehadiran).'</td>
 </tr>
 <tr>
  <td width="80">Lembur</td>
  <td width="110" align="left">: Rp. '.number_format($sheet->lembur).'</td>
  <td></td>
  <td></td>
 </tr> 
 <tr>
  <td width="80">T.Lain-lain</td>
  <td width="110" align="left">: Rp. '.number_format($sheet->tj_lain2).'</td>
  <td>Total Pengurang</td>
  <td>: Rp. '.number_format($sheet->total_pengurang).'</td>
 </tr>
 <tr>
  <td></td>
  <td></td>
  <td></td>
  <td></td>
 </tr>

 <tr>
  <td width="80" style="font-size:8px;">Total Penambahan</td>
  <td align="left" style="font-size:7px;">: Rp. '.number_format($sheet->total_penambahan).'</td>
  <td><b>Total yang diterima</b></td>
  <td>:<b> Rp. '.number_format($sheet->total_diterima).'</b></td>
 </tr>
 </thead>
</table>';

$pdf->writeHTML($slip, true, false, false, false, '');

$pdf->SetFont('helvetica', 'B', 5); 
$pdf->Cell(0, 0, '** E-Slip ini merupakan dokumen sah slip gaji Koperasi Karyawan Parasejahtera', 0, false, 'L', 0, '', 0, false, 'M', 'M');
$pdf->ln(); 
ob_end_clean();       
//$pdf->Output($value->nama_event.'.pdf', 'I');//download file
$pdf->Output('E-slip.pdf', 'I');//download file
// $pdf->Output('attachment/Memo_Event_TSM.pdf_server', 'F');//save file in the server
// $pdf->Output('pdfexample.pdf', 'I');    

        