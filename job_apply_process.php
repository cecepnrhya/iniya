<?php
    include("koneksidatabase.php");

    $namaLengkap = $_POST['nama-lengkap'];
    $nomorKontak = $_POST['nomor-kontak'];
    $jurusan = $_POST['jurusan'];
    $nilaiAkhir = $_POST['nilai-akhir'];
    $cv = $_POST['cv'];
    $jobId = $_POST['job-id'];

    echo $namaLengkap;
    echo $nomorKontak;
    echo $jurusan;
    echo $nilaiAkhir;
    echo $cv;
    echo $jobId;

    $result = mysqli_query($conn, "INSERT INTO apply_job (`nama_lengkap`, `nomor_kontak`, `jurusan`, `nilai_akhir`, `cv`, `kategori_job_id`) VALUES ('$namaLengkap', '$nomorKontak', '$jurusan', '$nilaiAkhir', '$cv', '$jobId')");
    header("location:index.php");
?>