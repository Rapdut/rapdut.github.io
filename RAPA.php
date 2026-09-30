<?php

date_default_timezone_set('Asia/Jakarta');

$hari = [
    'Minggu',
    'Senin',
    'Selasa',
    'Rabu',
    'Kamis',
    'Jumat',
    'Sabtu'
];

$bulan = [
    1 => 'Januari',
    'Februari',
    'Maret',
    'April',
    'Mei',
    'Juni',
    'Juli',
    'Agustus',
    'September',
    'Oktober',
    'November',
    'Desember'
];

$tanggal = date('j');
$namaHari = $hari[date('w')];
$namaBulan = $bulan[date('n')];
$tahun = date('Y');

echo "Dikunjungi pada $namaHari, $tanggal $namaBulan $tahun";

?>
