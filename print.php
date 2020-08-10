    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="icon.ico" type="image/x-icon">
        <!-- css -->
        <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/bootstrap-4.1/bootstrap.min.css">
        <link rel="stylesheet" href="assets/datatables/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" href="assets/fontawesome5/css/fontawesome.css">
        <link rel="stylesheet" href="assets/fontawesome5/css/fontawesome.min.css">
        <link rel="stylesheet" href="assets/fontawesome5/css/brands.css">
        <link rel="stylesheet" href="assets/fontawesome5/css/solid.css">
        <title>REKAPAN DATA KARYAWAN</title>
    </head>
    <body>
        <div class="container pb-5">
        <h1 class="text-center">REKAPAN DATA KARYAWAN</h1>
        <table id="dataSiswa" class="table table-bordered table-striped">
            <thead >
                <tr>
                    <th>No</th>
                    <th>Nis</th>
                    <th>Nama Siswa</th>
                    <th>Tempat Lahir</th>
                    <th>Tanggal Lahir</th>
                    <th>Alamat</th>
                </tr>
            </thead>
            <tbody>
            <?php
                include "functions.php";
                $no = 1;
                $ambilData = mysqli_query($conn,"SELECT * FROM tb_karyawan");
                while($rowData = mysqli_fetch_array($ambilData)) {
            ?>
            <tr>
            <td><?= $no?></td>
            <td><?= $rowData['nik']?></td>
            <td><?= $rowData['nama']?></td>
            <td><?= $rowData['tempat_lahir']?></td>
            <td><?= date('d M Y', strtotime ($rowData['tanggal_lahir']))?></td>
            <td><?= $rowData['alamat']?></td>
                </tr>
            <?php $no++; }?>
            </tbody>
        </table>
        </div>
        <script>
        window.print();
        </script>  
        <!-- javascript  -->
        <script src="assets/jquery-3.2.1.min.js"></script>
        <script src="assets/bootstrap-4.1/bootstrap.min.js"></script>
        <script src="assets/bootstrap-4.1/popper.min.js"></script>
        <script src="assets/datatables/jquery.dataTables.min.js"></script>
        <script src="assets/datatables/dataTables.bootstrap4.min.js"></script>
        <script src="assets/script.js"></script>
    </body>
    </html>