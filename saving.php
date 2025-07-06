<?php
require 'config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $data = json_decode(file_get_contents('php://input'), true);
    
    $tanggal_diinput = date('Y-m-d');
    $tanggal_surat = $data['Tanggal_Surat'];
    $no_surat = $data['No_Surat'];
    $jenis_surat = $data['Jenis_Surat'];
    $no_agenda = $data['No_Agenda'];
    $perihal = $data['Perihal'];
    $ringkasan = $data['Ringkasan'];
    $pengirim_eksternal = $data['Pengirim_Eksternal'];
    $pengirim_internal = $data['Pengirim_Internal'];
    $penerima = $data['Penerima'];

    // Simpan data ke database
    $sql = "INSERT INTO Surat (Tanggal_Diinput, Tanggal_Surat, No_Surat, Jenis_Surat, No_Agenda, Perihal, Ringkasan, Pengirim_Eksternal, Pengirim_Internal, Penerima)
            VALUES ('$tanggal_diinput', '$tanggal_surat', '$no_surat', '$jenis_surat', '$no_agenda', '$perihal', '$ringkasan', '$pengirim_eksternal', '$pengirim_internal', '$penerima')";

    if ($conn->query($sql) === TRUE) {
        echo "Data berhasil disimpan.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>
