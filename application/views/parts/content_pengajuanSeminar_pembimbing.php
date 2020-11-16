                            
    

<html> 
<head> 

    <meta charset="utf-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap/bootstrap.css">
    <title></title> 
</head> 
<body class="mt-5">
<div class="container-fluid p-5 mb-5">
    <h3>Data Pengajuan Seminar</h3>
    <div class="row">
        <br>
        <br>
    <table id="example" class="table table-striped table-bordered text-center" style="width:100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jumlah SKS Proses</th>
                <th>Jumlah SKS Lulus</th>
                
                <th>Jumlah Nilai D</th>
                <th>Jumlah Nilai E</th>
                <th>IPK</th>
                <th>Judul Tugas Akhir</th>
                <th>Lanjut TA</th>
                <th>Tidak Lanjut</th>
            </tr>
        </thead>
        <tbody>
            <?php 
                $no = 1;
                foreach($pengajuan_seminar as $row)
                {
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo$row->nama_lengkap;?></td>
                        <td><?php echo$row->nim;?></td>
                        <td><?php echo$row->jumlah_sks_proses;?></td>
                        <td><?php echo$row->jumlah_sks_lulus;?></td>
                        <td><?php echo$row->jumlah_nilai_D;?></td>
                        <td><?php echo$row->jumlah_nilai_E;?></td>
                        <td><?php echo$row->ipk;?></td>
                        <td><?php echo$row->judul_skripsi;?></td>
                        <td>
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-check-bold"></i><span class="nav-link-text"></span></button>
                             
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-fat-remove"></i><span class="nav-link-text"></span></button>
                           
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                    </tr>
                    <?php
                }
            ?>
           <!--  <tr>
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
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-check-bold"></i><span class="nav-link-text"></span></button>
                             
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-fat-remove"></i><span class="nav-link-text"></span></button>
                           
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
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
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-check-bold"></i><span class="nav-link-text"></span></button>
                              
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-fat-remove"></i><span class="nav-link-text"></span></button>
                           
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
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
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-check-bold"></i><span class="nav-link-text"></span></button>
                            
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-fat-remove"></i><span class="nav-link-text"></span></button>
                           
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
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
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-check-bold"></i><span class="nav-link-text"></span></button>
                           
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-fat-remove"></i><span class="nav-link-text"></span></button>
                              
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
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
                <button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-check-bold"></i><span class="nav-link-text"></span></button>
                             
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#exampleModalLong"><i class="ni ni-fat-remove"></i><span class="nav-link-text"></span></button>
                             
                    <div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                                    
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Komentar untuk mahasiswa</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Tuliskan komentar..."></textarea>
                                </div>
                                <div class="modal-footer">
                                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                                    <input type="submit" class=" btn btn-warning" data-toggle="collapse" data-target="#multiCollapseExample2"  name="submit" value="Kirim">
                                </div>
                            </div>
                        </div>
                    </div>
                </td> -->
            </tr>
        </tbody>
    </table>
    </div>
</div>

</body> 
</html>