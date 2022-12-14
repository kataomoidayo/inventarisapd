<?php
require '../vendor/autoload.php';
require '../database/koneksi.php';

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet -> getActiveSheet();

//Headernya
$sheet -> setCellValue('A1', 'Id Peminjaman');
$sheet -> setCellValue('B1', 'Nama Peminjam');
$sheet -> setCellValue('C1', 'Kode Alat');
$sheet -> setCellValue('D1', 'Tanggal Peminjaman');
$sheet -> setCellValue('E1', 'Tanggal Kembali');
$sheet -> setCellValue('F1', 'Admin');
$sheet -> setCellValue('G1', 'Status Peminjaman');

//posisi baris tempat data pertama
$row = 3;


//konfig 
if (isset($_GET['id_peminjaman'])) {
    $kode_pinjaman = $_GET['id_peminjaman'];
} else {
    die("Error. Tidak ada kode yang terpilih");
}
$query = mysqli_query($koneksi, "SELECT * FROM tb_peminjaman WHERE id_peminjaman='$kode_pinjaman'");
while ($data = mysqli_fetch_array($query)) {
    $sheet->setCellValue('A' . $row, $data['id_peminjaman']);
    $sheet->setCellValue('B' . $row, $data['nama_peminjam']);
    $sheet->setCellValue('C' . $row, $data['kode_alat']);
    $sheet->setCellValue('D' . $row, $data['tanggal_peminjaman']);
    $sheet->setCellValue('E' . $row, $data['tanggal_kembali']);
    $sheet->setCellValue('F' . $row, $data['nama_admin']);
    $sheet->setCellValue('G' . $row, $data['status_pinjaman']);

    
}


//----------style excel----------

//alignment
$sheet->getStyle('A:G')->getAlignment()->setHorizontal('center');
$sheet->getStyle('A:G')->getAlignment()->setVertical('center');


//merge cell header
$spreadsheet->getActiveSheet()->mergeCells('A1:A2');
$spreadsheet->getActiveSheet()->mergeCells('B1:B2');
$spreadsheet->getActiveSheet()->mergeCells('C1:C2');
$spreadsheet->getActiveSheet()->mergeCells('D1:D2');
$spreadsheet->getActiveSheet()->mergeCells('E1:E2');
$spreadsheet->getActiveSheet()->mergeCells('F1:F2');
$spreadsheet->getActiveSheet()->mergeCells('G1:G2');


//auto size
$spreadsheet->getActiveSheet()->getColumnDimension('A')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('B')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('C')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('D')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('E')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('F')->setAutoSize(true);
$spreadsheet->getActiveSheet()->getColumnDimension('G')->setAutoSize(true);


//Format  ID ke Number
$spreadsheet->getActiveSheet()->getStyle('A')
    ->getNumberFormat()
    ->setFormatCode(\PhpOffice\PhpSpreadsheet\Style\NumberFormat::FORMAT_NUMBER);


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

$spreadsheet->getActiveSheet()->getStyle('A1:G1')->applyFromArray($styleArray);
$spreadsheet->getActiveSheet()->getStyle('A2:G2')->applyFromArray($styleArray);



//border data kanan
$styleArray = [
    'borders' => [
        'right' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$spreadsheet->getActiveSheet()->getStyle('G1:G5')->applyFromArray($styleArray);


//border data kiri
$styleArray = [
    'borders' => [
        'left' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$spreadsheet->getActiveSheet()->getStyle('A1:A5')->applyFromArray($styleArray);

//bottom border data
$styleArray = [
    'borders' => [
        'bottom' => [
            'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
        ],
    ],
];

$spreadsheet->getActiveSheet()->getStyle('A5:G5')->applyFromArray($styleArray);

//---------------------------------------------------------------------------



// cetak
date_default_timezone_set('Asia/Singapore');
$filename = 'Data-peminjaman-' .date('d-m-Y H-i-s').'.xlsx';
header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
header('Content-Disposition: attachment; filename="'.$filename.'"'); // Set nama file excelnya
header('Cache-Control: max-age=0');

$writer = new Xlsx($spreadsheet);
$writer->save('php://output');

?>
