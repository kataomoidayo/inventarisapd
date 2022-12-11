<?php
require '../vendor/autoload.php';
require '../database/koneksi.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet -> getActiveSheet();

//Headernya
$sheet -> setCellValue('A1', 'No');
$sheet -> setCellValue('B1', 'Id Peminjaman');
$sheet -> setCellValue('C1', 'Nama Peminjam');
$sheet -> setCellValue('D1', 'Kode Alat');
$sheet -> setCellValue('E1', 'Tanggal Peminjaman');
$sheet -> setCellValue('F1', 'Tanggal Kembali');
$sheet -> setCellValue('G1', 'Admin');
$sheet -> setCellValue('H1', 'Status Peminjaman');

//posisi baris tempat data pertama
$row = 3;

//penomoran
$no = 1; 


//konfig 
$query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman");

while ($data = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $row, $no++);
    $sheet->setCellValue('B' . $row, $data['id_peminjaman']);
    $sheet->setCellValue('C' . $row, $data['nama_peminjam']);
    $sheet->setCellValue('D' . $row, $data['kode_alat']);
    $sheet->setCellValue('E' . $row, $data['tanggal_peminjaman']);
    $sheet->setCellValue('F' . $row, $data['tanggal_kembali']);
    $sheet->setCellValue('G' . $row, $data['nama_admin']);
    $sheet->setCellValue('H' . $row, $data['status_pinjaman']);
    $row++;

    
}


//----------style excel----------

//alignment
$sheet->getStyle('A:H')->getAlignment()->setHorizontal('center');
$sheet->getStyle('A:H')->getAlignment()->setVertical('center');


//merge cell header
$spreadsheet->getActiveSheet()->mergeCells('A1:A2');
$spreadsheet->getActiveSheet()->mergeCells('B1:B2');
$spreadsheet->getActiveSheet()->mergeCells('C1:C2');
$spreadsheet->getActiveSheet()->mergeCells('D1:D2');
$spreadsheet->getActiveSheet()->mergeCells('E1:E2');
$spreadsheet->getActiveSheet()->mergeCells('F1:F2');
$spreadsheet->getActiveSheet()->mergeCells('G1:G2');
$spreadsheet->getActiveSheet()->mergeCells('H1:H2');



//auto size
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('H')->setAutoSize(true);

//Format  ID ke Number
$spreadsheet->getActiveSheet()->getStyle('B')
    ->getNumberFormat()
    ->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER);

//font, fill header
$styleArray = [
    'font' => [
        'bold' => true,
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

$spreadsheet->getActiveSheet()->getStyle('A1:H1')->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->getStyle('A2:H2')->applyFromArray($styleArray);



//all border
$styleArray = array(
    'borders' => array(
        'allBorders' => array(
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ),
    ),
);

$spreadsheet->getActiveSheet()->getStyle('A1:H'.$row)->applyFromArray($styleArray);



//---------------------------------------------------------------------------



// cetak
date_default_timezone_set('Asia/Singapore');
$filename = 'Data-peminjaman-full-' .date('d-m-Y H-i-s').'.xlsx';
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$filename.'"'); // Set nama file excelnya
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

?>
