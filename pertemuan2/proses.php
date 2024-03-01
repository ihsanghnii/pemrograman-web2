<?php
if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $matakuliah = $_POST['matakuliah'];
    $nilai_uas = $_POST['nilai_uas'];
    $nilai_uts = $_POST['nilai_uts'];
    $nilai_tugas = $_POST['nilai_tugas'];
    $total_nilai = ($nilai_uts + $nilai_uas + $nilai_tugas) / 3;

    echo "nama : $nama <br>";
    echo "mata kuliah : $matakuliah <br>";
    echo "nilai uts : $nilai_uts <br>";
    echo "nilai uas : $nilai_uas <br>";
    echo "nilai tugas : $nilai_tugas <br>";
    switch ($total_nilai) {
        case $total_nilai >= 85:
            echo "Grade A";
            break;
        case $total_nilai >= 70:
            echo "Grade B";
            break;
        case $total_nilai >= 60:
            echo "Grade C";
            break;
        case $total_nilai >= 40:
            echo "Grade D";
            break;
        default:
            echo "Grade E";
            break;
    }
} else {
    echo "<script>alert('kamu harus isi form terlebih dahulu!')</script>";
    echo '<meta htt[-equiv="refresh content="0; url=form.php">';
}
