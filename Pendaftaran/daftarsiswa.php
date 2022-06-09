<?php
include('koneksi-daftar.php');
require '../vendor/autoload.php';
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

$spreadsheet = new Spreadsheet();
$sheet = $spreadsheet ->getActiveSheet();
$sheet->setCellValue('A1', 'NIS');
$sheet->setCellValue('B1', 'No. Peserta Ujian');
$sheet->setCellValue('C1', 'No. SKHUN');
$sheet->setCellValue('D1', 'No. Ijazah');
$sheet->setCellValue('E1', 'Hobi');
$sheet->setCellValue('F1', 'Cita-cita');
$sheet->setCellValue('G1', 'Nama');
$sheet->setCellValue('H1', 'Jenis Kelamin');
$sheet->setCellValue('I1', 'NISN');
$sheet->setCellValue('J1', 'NIK');
$sheet->setCellValue('K1', 'Tempat Lahir');
$sheet->setCellValue('L1', 'Tanggal Lahir');
$sheet->setCellValue('M1', 'Agama');
$sheet->setCellValue('N1', 'Alamat');
$sheet->setCellValue('O1', 'RT');
$sheet->setCellValue('P1', 'RW');
$sheet->setCellValue('Q1', 'Dusun');
$sheet->setCellValue('R1', 'Desa');
$sheet->setCellValue('S1', 'Kecamatan');
$sheet->setCellValue('T1', 'Kabupaten');
$sheet->setCellValue('U1', 'Kode Pos');
$sheet->setCellValue('V1', 'Tempat Tinggal');
$sheet->setCellValue('W1', 'Transportasi');
$sheet->setCellValue('X1', 'Jarak');
$sheet->setCellValue('Y1', 'No. HP');
$sheet->setCellValue('Z1', 'Email');

$sql = mysqli_query($koneksi, "SELECT * FROM daftar ");
$i = 2;
$no = 1;
while ($row = mysqli_fetch_array($sql)) {
	$sheet->setCellValue('A'.$i, $row['nis']);
	$sheet->setCellValue('B'.$i, $row['nomer_peserta_ujian']);
	$sheet->setCellValue('C'.$i, $row['skhun']);
	$sheet->setCellValue('D'.$i, $row['ijazah']);
	$sheet->setCellValue('E'.$i, $row['hobi']);
	$sheet->setCellValue('F'.$i, $row['citacita']);
	$sheet->setCellValue('G'.$i, $row['nama']);
	$sheet->setCellValue('H'.$i, $row['jenis_kelamin']);
	$sheet->setCellValue('I'.$i, $row['nisn']);
	$sheet->setCellValue('J'.$i, $row['nik']);
	$sheet->setCellValue('K'.$i, $row['tempat_lahir']);
	$sheet->setCellValue('L'.$i, $row['tanggal_lahir']);
	$sheet->setCellValue('M'.$i, $row['agama']);
	$sheet->setCellValue('N'.$i, $row['alamat']);
	$sheet->setCellValue('O'.$i, $row['rt']);
	$sheet->setCellValue('P'.$i, $row['rw']);
	$sheet->setCellValue('Q'.$i, $row['dusun']);
	$sheet->setCellValue('R'.$i, $row['desa']);
	$sheet->setCellValue('S'.$i, $row['kecamatan']);
	$sheet->setCellValue('T'.$i, $row['kabupaten']);
	$sheet->setCellValue('U'.$i, $row['kode_pos']);
	$sheet->setCellValue('V'.$i, $row['tempat_tinggal']);
	$sheet->setCellValue('W'.$i, $row['transportasi']);
	$sheet->setCellValue('X'.$i, $row['jarak']);
	$sheet->setCellValue('Y'.$i, $row['hp']);
	$sheet->setCellValue('Z'.$i, $row['email']);
	$i++;

}

$styleArray = [
			'borders' => [
				'allBorders' => [
					'borderStyle' => PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
				],
			],
		];
	$i = $i - 1;
	$sheet->getStyle('A1:Z'.$i)->applyFromArray($styleArray);

	$writer = new xlsx($spreadsheet);
	$writer->save('Report Data Siswa.xlsx');
?>