<!DOCTYPE html>
<head>
    <title>Mahasiswa Oleh Muhammad Ridho (2110020056)</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            font-size: 12px;
        }
        table {
            width:100%;
            border-collapse:collapse;
        }

        th,td{
            border : 1px solid #ddd;
            padding : 8px;
            text-align: left;
        }

        th{
            background-color:#f2f2f2;

        }
    </style>
</head>
<body>
        <h1 class="text-center">Daftar Mahasiswa</h1>
        <table >
            <thead >
                <tr>
                    <th >NO</th>
                    <th >NIM</th>
                    <th >Nama</th>
                    <th >Program Studi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $no = 1;
                foreach ($mahasiswa as $row) { ?>
                <tr>
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $row->NIM ?></td>
                    <td><?php echo $row->nama_mhs ?></td>
                    <td><?php echo $row->nama_prodi ?></td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <script>
            window.print();
        </script>
</body>
</html>
