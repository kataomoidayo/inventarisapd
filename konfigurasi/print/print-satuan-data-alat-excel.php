<?php
require '../vendor/autoload.php';
require '../database/koneksi.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet -> getActiveSheet();

//Headernya
$sheet -> setCellValue('A1', 'Kode Alat');
$sheet -> setCellValue('B1', 'Nama Alat');
$sheet -> setCellValue('C1', 'Lokasi Alat');
$sheet -> setCellValue('D1', 'Pemilik Alat');
$sheet -> setCellValue('E1', 'Jumlah Alat');
$sheet -> setCellValue('F1', 'Tahun Produksi');
$sheet -> setCellValue('G1', 'Kedaluwarsa');
$sheet -> setCellValue('H1', 'Safe Work Load');
$sheet -> setCellValue('I1', 'Merk Alat');
$sheet -> setCellValue('J1', 'Sertifikasi');
$sheet -> setCellValue('K1', 'Foto Alat');
$sheet -> setCellValue('L1', 'Kode QR');

//posisi baris tempat data pertama
$row = 7;



//konfig
if (isset($_GET['kode_alat'])) {
    $kode_alat = $_GET['kode_alat'];
} else {
    die("Error. Tidak ada kode yang terpilih");
}
$query = mysqli_query($koneksi, "SELECT * FROM tb_alat WHERE kode_alat='$kode_alat'");
while ($data = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $row, $data['kode_alat']);
    $sheet->setCellValue('B' . $row, $data['nama_alat']);
    $sheet->setCellValue('C' . $row, $data['lokasi_alat']);
    $sheet->setCellValue('D' . $row, $data['pemilik_alat']);
    $sheet->setCellValue('E' . $row, $data['jumlah_alat']);
    $sheet->setCellValue('F' . $row, $data['th_produksi']);
    $sheet->setCellValue('G' . $row, $data['kedaluwarsa']);
    $sheet->setCellValue('H' . $row, $data['safe_work_load']);
    $sheet->setCellValue('I' . $row, $data['merk_alat']);
    $sheet->setCellValue('J' . $row, $data['sertifikasi']); 

    //print foto
    $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
    $drawing -> setPath('../'.$data['foto_alat']);
    $drawing->setName('Kode QR');
    $drawing->setCoordinates('K3');
    $drawing->setWidthAndHeight(150, 150);
    $drawing->setWorksheet($spreadsheet->getActiveSheet());
    $drawing->setOffsetX(10);
    $drawing->setOffsetY(10);

 
   //print gambar QR
    $drawing = new \PhpOffice\PhpSpreadsheet\Worksheet\Drawing();
    $drawing -> setPath('../'.$data['kode_qr']);
    $drawing->setName('Kode QR');
    $drawing->setCoordinates('L3');
    $drawing->setWidthAndHeight(150, 150);
    $drawing->setWorksheet($spreadsheet->getActiveSheet());
    $drawing->setOffsetX(10);
    $drawing->setOffsetY(10);

    
}



//----------style excel----------

//alignment
$sheet->getStyle('A:L')->getAlignment()->setHorizontal('center');
$sheet->getStyle('A:L')->getAlignment()->setVertical('center');

//lebar kolom khusus untuk kolom gambar dan qr
$spreadsheet -> getActiveSheet() -> getColumnDimension('K') -> setWidth(23);
$spreadsheet -> getActiveSheet() -> getColumnDimension('L') -> setWidth(23);

//merge cell header
$spreadsheet->getActiveSheet()->mergeCells('A1:A2');
$spreadsheet->getActiveSheet()->mergeCells('B1:B2');
$spreadsheet->getActiveSheet()->mergeCells('C1:C2');
$spreadsheet->getActiveSheet()->mergeCells('D1:D2');
$spreadsheet->getActiveSheet()->mergeCells('E1:E2');
$spreadsheet->getActiveSheet()->mergeCells('F1:F2');
$spreadsheet->getActiveSheet()->mergeCells('G1:G2');
$spreadsheet->getActiveSheet()->mergeCells('H1:H2');
$spreadsheet->getActiveSheet()->mergeCells('I1:I2');
$spreadsheet->getActiveSheet()->mergeCells('J1:J2');
$spreadsheet->getActiveSheet()->mergeCells('K1:K2');
$spreadsheet->getActiveSheet()->mergeCells('L1:L2');

//merge cell tempat foto dan qr code nempel
$spreadsheet->getActiveSheet()->mergeCells('K3:K11');
$spreadsheet->getActiveSheet()->mergeCells('L3:L11');


//auto size
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('I')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('J')->setAutoSize(true);



//font, border, fill header
$styleArray = [
    'font' => [
        'bold' => true,
    ],
    'borders' => [
        'allBorders' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
    'fill' => [
        'fillType' => \PhpOffice\PhpSpreadsheet\Style\Fill::FILL_SOLID,
        'rotation' => 90,
        'startColor' => [
            'argb' => 'FFFF00',
        ],
        'endColor' => [
            'argb' => 'FFFF00',
        ],
    ],
];

$spreadsheet->getActiveSheet()->getStyle('A1:L1')->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->getStyle('A2:L2')->applyFromArray($styleArray);

//border foto + qr
$styleArray = [
    'borders' => [
        'outline' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];
$spreadsheet->getActiveSheet()->getStyle('K3:K11')->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->getStyle('L3:L11')->applyFromArray($styleArray);


//border data kiri
$styleArray = [
    'borders' => [
        'left' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$spreadsheet->getActiveSheet()->getStyle('A3:A11')->applyFromArray($styleArray);


//bottom border data
$styleArray = [
    'borders' => [
        'bottom' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$spreadsheet->getActiveSheet()->getStyle('A11:J11')->applyFromArray($styleArray);

//---------------------------------------------------------------------------


// cetak
date_default_timezone_set('Asia/Singapore');
$filename = 'Data-alat-' .date('d-m-Y H-i-s').'.xlsx';
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$filename.'"'); // Set nama file excelnya
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

?>
