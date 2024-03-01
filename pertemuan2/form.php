<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form PHP</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12 m-4">
                <form method="post" action="proses.php">
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label>
                        <div class="col-8">
                            <input id="nama" name="nama" placeholder="Masukkan Nama" type="text" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="matakuliah" class="col-4 col-form-label">mata kuliah</label>
                        <div class="col-8">
                            <select name="matakuliah" id="matakuliah" class="form-control" required>
                                <option value="">pilih mata kuliah</option>
                                <option value="ddp">ddp</option>
                                <option value="matkom">matkom</option>
                                <option value="b.indo">b.indo</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nilai_uts" class="col-4 col-form-label">nilai uts</label>
                        <div class="col-8">
                            <input id="nilai_uts" max="100" name="nilai_uts" placeholder="Masukkan nilai uts" type="number" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nilai_uas" class="col-4 col-form-label">nilai uas</label>
                        <div class="col-8">
                            <input id="nilai_uas" max="100" name="nilai_uas" placeholder="Masukkan nilai uas" type="number" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="nilai_tugas" class="col-4 col-form-label">nilai tugas</label>
                        <div class="col-8">
                            <input id="nilai_tugas" max="100" name="nilai_tugas" placeholder="Masukkan nilai tugas" type="number" class="form-control" required>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="offset-4 col-8">
                            <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>