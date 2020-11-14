
    

<html> 
<head> 
<<<<<<< HEAD
	<meta charset="utf-8"> 
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
	<link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script>
  $(document).ready(function() {
      $('#table_verifikasi_daftarTA2').DataTable();
  });
  </script>
</head> 
<body class="mt-5"> 
	<div class="container-fluid p-5">
		<h3>Data TA2</h3>
 		<div class="card">
 			

 				<table id="table_verifikasi_daftarTA2">
 					<thead>
 					<tr>
			 			<th>Nama</th>
			 			<th>NIM</th>
			 			<th>Jumlah SKS</th>
			 			<th>IPK</th>
			 			<th>Jumlah Nilai D</th>
			 			<th>Jumlah Nilai E</th>
			 			<th>Judul Tugas Akhir</th>
			 			<th>Pembimbing 1</th>
			 			<th>Pembimbing 2</th>
			 			<th>Penguji 1</th>
			 			<th>Penguji 2</th>
			 			<th>KHS</th>
			 			<th>KRS</th>
			 			<th>Status</th>
 					</tr>
 					</thead>
 					<tbody>
 						
 					</tbody>
 				<tr>
 						<td>Arji Abiyoga</td>
 						<td>3411171133</td>
 						<td>144</td>
 						<td>3.9</td>
 						<td>0</td>
 						<td>0</td>
 						<td>Sistem Pendukung Keputusan blabla...</td>
 						<td>WNI</td>
 						<td>ADK</td>
 						<td>WNI</td>
 						<td>ADK</td>
 						<td><a href="#">KHS.txt</a></td>
 						<td><a href="#">KRS.txt</a></td>
 						<td>
 						<button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
						  Setuju</button><button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
						  Tidak</button>
						</td>
 					</tr>
 					<tr>
 						<td>Arji Abiyoga</td>
 						<td>3411171133</td>
 						<td>144</td>
 						<td>3.9</td>
 						<td>0</td>
 						<td>0</td>
 						<td>Sistem Pendukung Keputusan blabla...</td>
 						<td>WNI</td>
 						<td>ADK</td>
 						<td>WNI</td>
 						<td>ADK</td>
 						<td><a href="#">KHS.txt</a></td>
 						<td><a href="#">KRS.txt</a></td>
 						<td>
 						<button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
						  Setuju</button><button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
						  Tidak</button>
						</td>
 					</tr>
 					<tr>
 						<td>Arji Abiyoga</td>
 						<td>3411171133</td>
 						<td>144</td>
 						<td>3.9</td>
 						<td>0</td>
 						<td>0</td>
 						<td>Sistem Pendukung Keputusan blabla...</td>
 						<td>WNI</td>
 						<td>ADK</td>
 						<td>WNI</td>
 						<td>ADK</td>
 						<td><a href="#">KHS.txt</a></td>
 						<td><a href="#">KRS.txt</a></td>
 						<td>
 						<button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
						  Setuju</button><button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
						  Tidak</button>
						</td>
 					</tr>
 					<tr>
 						<td>Arji Abiyoga</td>
 						<td>3411171133</td>
 						<td>144</td>
 						<td>3.9</td>
 						<td>0</td>
 						<td>0</td>
 						<td>Sistem Pendukung Keputusan blabla...</td>
 						<td>WNI</td>
 						<td>ADK</td>
 						<td>WNI</td>
 						<td>ADK</td>
 						<td><a href="#">KHS.txt</a></td>
 						<td><a href="#">KRS.txt</a></td>
 						<td>
 						<button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
						  Setuju</button><button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
						  Tidak</button>
						</td>
 					</tr> 
 				</table>
 			</div>
 		</div>
	</div>
 
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/jquery.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/bootstrap.js"></script>
	<script type="text/javascript" src="<?php echo base_url();?>assets/js/popper.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/datatables.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>assets/js/dataTables.bootstrap.min.js"></script>



   <!--  <script>
    var tabel = null;
    $(document).ready(function() {
        tabel = $('#table_verifikasi_daftarTA2').DataTable({
            "processing": true,
            "serverSide": true,
            "ordering": true, // Set true agar bisa di sorting
            "order": [[ 0, 'asc' ]], // Default sortingnya berdasarkan kolom / field ke 0 (paling pertama)
            "ajax":
            {
                "url": "<?php echo base_url('koordinator/koordinator/view') ?>", // URL file untuk proses select datanya
                "type": "POST"
            },
            "deferRender": true,
            "aLengthMenu": [[5, 10, 50],[ 5, 10, 50]], // Combobox Limit
            "columns": [
                { "data": "nis" }, // Tampilkan nis
                { "data": "nama" },  // Tampilkan nama
                { "render": function ( data, type, row ) {  // Tampilkan jenis kelamin
                        var html = ""
                        if(row.jenis_kelamin == 1){ // Jika jenis kelaminnya 1
                            html = 'Laki-laki' // Set laki-laki
              }else{ // Jika bukan 1
                            html = 'Perempuan' // Set perempuan
                        }
                        return html; // Tampilkan jenis kelaminnya
                    }
                },
                { "data": "telp" }, // Tampilkan telepon
                { "data": "alamat" }, // Tampilkan alamat
                { "render": function ( data, type, row ) { // Tampilkan kolom aksi
                        var html  = "<a href=''>EDIT</a> | "
                        html += "<a href=''>DELETE</a>"
                        return html
                    }
                },
            ],
        });
    });
    </script> -->
=======
    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
    <title></title> 
</head> 
<body class="mt-5">
<div class="container-fluid p-5 mb-5">
    <h3>Data TA2</h3>
    <div class="row">
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jumlah SKS</th>
                <th>IPK</th>
                <th>Jumlah Nilai D</th>
                <th>Jumlah Nilai E</th>
                <th>Judul Tugas Akhir</th>
                <th>Pembimbing 1</th>
                <th>Pembimbing 2</th>
                <th>Penguji 1</th>
                <th>Penguji 2</th>
                <th>KHS</th>
                <th>KRS</th>
                <th>Lanjut TA</th>
                <th>Tidak Lanjut</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
                <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-check-bold"></i></button>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="button" aria-pressed="false">
                <i class="ni ni-fat-remove"></i></button>
                </td>
            </tr>
            <tr>
                <td>Arji Abiyoga</td>
                <td>3411171133</td>
                <td>144</td>
                <td>3.9</td>
                <td>0</td>
                <td>0</td>
                <td>Sistem Pendukung Keputusan blabla...</td>
                <td>WNI</td>
                <td>ADK</td>
                <td>WNI</td>
                <td>ADK</td>
                <td><a href="#">KHS.txt</a></td>
                <td><a href="#">KRS.txt</a></td>
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
>>>>>>> dc187572e9df217fd94570803812ea8ea5a013d3
</body> 
</html>