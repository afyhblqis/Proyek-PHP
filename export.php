<?php
include('../inc/auth_admin.php');
include('../inc/config.php');

header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=pendaftaran.csv");

$output = fopen("php://output", "w");
fputcsv($output, ['No', 'Nama Peserta', 'Kursus', 'Tanggal Daftar']);

$query = mysqli_query($conn, "SELECT p.*, u.nama, k.nama_kursus FROM pendaftaran p 
    JOIN users u ON p.user_id = u.id 
    JOIN kursus k ON p.kursus_id = k.id");

$no = 1;
while ($row = mysqli_fetch_assoc($query)) {
    fputcsv($output, [$no++, $row['nama'], $row['nama_kursus'], $row['tanggal_daftar']]);
}
fclose($output);
exit;
?>
