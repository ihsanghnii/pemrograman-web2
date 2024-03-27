<?php require_once('assets/data.php') ?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Cek BMI</title>

    <!-- css -->
    <link rel="stylesheet" href="assets/praktikum5.css">

    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">

        <!-- form cek bmi-->
        <div class="form">
            <form method="POST">
                <h5 class="card-header bg-primary">Form Cek BMI</h5>
                <div class="card_form p-3">

                    <!-- nama -->
                    <div class="form-group row">
                        <label for="nama" class="col-3 col-form-label">Nama</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-address-card"></i>
                                    </div>
                                </div>
                                <input id="nama" name="nama" placeholder="Nama" type="text" class="form-control" required="required">
                            </div>
                        </div>
                    </div>

                    <!-- berat badan -->
                    <div class="form-group row">
                        <label for="beratBadan" class="col-3 col-form-label">Berat Badan</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-anchor"></i>
                                    </div>
                                </div>
                                <input id="beratBadan" name="beratBadan" placeholder="Berat Badan" type="number" class="form-control" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text">kg</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- tinggi badan -->
                    <div class="form-group row">
                        <label for="tinggiBadan" class="col-3 col-form-label">Tinggi Badan</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-blind"></i>
                                    </div>
                                </div>
                                <input id="tinggiBadan" name="tinggiBadan" placeholder="Tinggi Badan" type="number" class="form-control" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text">cm</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- umur -->
                    <div class="form-group row">
                        <label for="umur" class="col-3 col-form-label">Umur</label>
                        <div class="col-9">
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">
                                        <i class="fa fa-bell"></i>
                                    </div>
                                </div>
                                <input id="umur" name="umur" placeholder="Umur" type="number" class="form-control" required="required">
                                <div class="input-group-append">
                                    <div class="input-group-text">tahun</div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- jenis kelamin -->
                    <div class="form-group row">
                        <label class="col-3">Jenis Kelamin</label>
                        <div class="col-9">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenisKelamin" id="jenisKelamin" type="radio" class="custom-control-input" value="Laki - Laki" required="required">
                                <label for="jenisKelamin" class="custom-control-label">Laki-Laki</label>
                            </div>
                            <br>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input name="jenisKelamin" id="jenisKelamin_1" type="radio" class="custom-control-input" value="Perempuan" required="required">
                                <label for="jenisKelamin_1" class="custom-control-label">Perempuan</label>
                            </div>
                        </div>
                    </div>

                    <!-- button -->
                    <div class="form-group row">
                        <div class="offset-3 col-9">
                            <button name="submit" type="submit" class="btn btn-primary">Hitung BMI</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- hasil evaluasi bmi -->
        <div class="hasil">
            <h5 class="card-header bg-primary">Hasil Evaluasi BMI</h5>
            <div class="card_hasil p-3">
                <?php
                if (isset($_POST['submit'])) {
                    $nama = $_POST['nama'];
                    $jenisKelamin = $_POST['jenisKelamin'];
                    $umur = $_POST['umur'] . ' tahun';
                    $beratBadan = $_POST['beratBadan'] . ' kg';
                    $tinggiBadan = $_POST['tinggiBadan'] . ' cm';

                    $tinggiBadanMeter = $tinggiBadan / 100;
                    $bmi = $_POST['beratBadan'] / ($tinggiBadanMeter * $tinggiBadanMeter);

                    if ($bmi < 18.5) {
                        $keterangan = "Kekurangan Berat Badan";
                    } elseif ($bmi >= 18.5 && $bmi <= 24.9) {
                        $keterangan = "Normal (ideal)";
                    } elseif ($bmi >= 25 && $bmi <= 29.9) {
                        $keterangan = "Kelebihan Berat Badan";
                    } else {
                        $keterangan = " Kegemukan (obesitas)";
                    }
                }
                ?>
                <table class="table table-striped table-hover">
                    <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><?= $nama ?></td>
                    </tr>
                    <tr>
                        <td>Jenis Kelamin</td>
                        <td>:</td>
                        <td><?= $jenisKelamin ?></td>
                    </tr>
                    <tr>
                        <td>Umur</td>
                        <td>:</td>
                        <td><?= $umur ?></td>
                    </tr>
                    <tr>
                        <td>Berat Badan</td>
                        <td>:</td>
                        <td><?= $beratBadan ?></td>
                    </tr>
                    <tr>
                        <td>Tinggi Badan</td>
                        <td>:</td>
                        <td><?= $tinggiBadan ?></td>
                    </tr>
                    <tr>
                        <td>BMI</td>
                        <td>:</td>
                        <td>
                            <?php
                            if (isset($bmi) && $bmi != 0) {
                                echo round($bmi, 1);
                            } else {
                                echo "";
                            }
                            ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Keterangan</td>
                        <td>:</td>
                        <td><?= $keterangan ?></td>
                    </tr>
                </table>
            </div>
        </div>

        <!-- data bmi -->
        <div class="data">
            <h5 class="card-header bg-primary">Data BMI</h5>
            <div class="card_data p-3">
                <table class="table table-hover table-striped">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Umur</th>
                            <th>Berat Badan</th>
                            <th>Tinggi Badan</th>
                            <th>BMI</th>
                            <th>Keterangan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $dataBMI;
                        foreach ($data as $row) {
                            echo '<td>' . $row['nama'] . '</td>',
                            '<td>' . $row['jenisKelamin'] . '</td>',
                            '<td>' . $row['umur'] . '</td>',
                            '<td>' . $row['beratBadan'] . '</td>',
                            '<td>' . $row['tinggiBadan'] . '</td>',
                            '<td>' . $row['bmi'] . '</td>',
                            '<td>' . $row['keterangan'] . '</td>',
                            '</tr>';
                        }
                        ?>
                        <tr>
                            <td><?= $nama ?></td>
                            <td><?= $jenisKelamin ?></td>
                            <td><?= $umur ?></td>
                            <td><?= $beratBadan ?></td>
                            <td><?= $tinggiBadan ?></td>
                            <td>
                                <?php
                                if (isset($bmi) && $bmi != 0) {
                                    echo round($bmi, 1);
                                } else {
                                    echo "";
                                }
                                ?>
                            </td>
                            <td><?= $keterangan ?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    
    <!-- javascript -->
    <script>
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    </script>
</body>
</html>