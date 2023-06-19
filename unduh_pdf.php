<?php
    require('fpdf.php');

    include "koneksi.php";

    $pdf = new FPDF("L", "mm", "A4");

    $pdf->AddPage();
    $pdf->SetFont("Times", "B", 16);
    $pdf->Cell(272, 7, "Pt. Panjang Tangan", 0, 1, "C");
    $pdf->Cell(272, 7, "", 0, 1, "C");

    $sql = $pdo->prepare("SELECT * FROM siswa");
    $sql->execute(); // Eksekusi querynya
    
    if ($sql) {
        $pdf->SetFont("Times", "B", 12);
            
        $pdf->Cell(16, 6, "ID", 1, 0, "C");
        $pdf->Cell(64, 6, "Nama", 1, 0, "C");
        $pdf->Cell(64, 6, "Jenis Kelamin",  1,  0,  "C");
        $pdf->Cell(64, 6, "Telepon", 1, 1, "C");

        $pdf->SetFont("Times", "", 12);
        while($data = $sql->fetch()) {

            $pdf->Cell(16, 6, $data["nis"], 1, 0);
            $pdf->Cell(64, 6, $data["nama"], 1, 0);
            $pdf->Cell(64, 6, $data["jenis_kelamin"],  1,  0);
            $pdf->Cell(64, 6, $data["telp"], 1, 1);

        }
    }
    else {
        die("Gagal mengakses basis data...");
    }


$pdf->Output();
?>