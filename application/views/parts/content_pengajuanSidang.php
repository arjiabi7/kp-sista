W<html> 
<head> 
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
    <title></title> 
</head> 
<body class="mt-3">
<div class="container p-5 mb-5">
    <h3 class="mb-2">Data Pengajuan Sidang</h3>
    <div class="row">
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>IPK</th>
                <th>Judul Tugas Akhir</th>
                <th>Laporan</th>
                <th>Lanjut Sidang</th>
                <th>Tidak Lanjut</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>3.9</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td><a href="#">Laporan.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
        </tbody>
    </table>
    </div>
</div>
</body> 
</html>