<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Prodi oleh Muhammad Ridho (2110020056)</title>
    <!-- Bootstrap CSS -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .form-header {
            margin-bottom: 30px;
        }
        .btn-custom {
            background-color: black;
            color: #ffffff;
            border: none;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .school-theme {
            background-color: white;
            color: Black;
            padding: 20px;
            border-radius: 10px 10px 0 0;
        }
        .header-text {
            display: inline-block;
            vertical-align: middle;
            font-size: 24px;
            font-weight: bold;
        }
        .form-group label {
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="form-container">
                    <div class="school-theme text-center">
                        <span class="header-text">FORM EDIT PRODI</span>
                    </div>
                    <form action='<?= site_url('prodi/perbaharui/'.$prodi->id_prodi) ?>' method='post'>
                        <div class="form-group">
                            <label for="kode_prodi">Kode Prodi</label>
                            <input type="text" name="kode_prodi" value="<?php echo $prodi->kode_prodi ?>" id="kode_prodi" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_prodi">Nama Prodi</label>
                            <input type="text" name="nama_prodi" value="<?php echo $prodi->nama_prodi ?>"  id="nama_prodi" class="form-control" required>
                        </div>
                        <button type="submit" name="perbaharui" class="btn btn-custom btn-block">Perbaharui</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
