<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" type="image/png" href="<?php echo base_url(); ?>concept-master/assets/images/favicon.png" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="<?php echo base_url(); ?>concept-master/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/libs/css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/charts/chartist-bundle/chartist.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/charts/morris-bundle/morris.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/charts/c3charts/c3.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>concept-master/assets/vendor/fonts/flag-icon-css/flag-icon.min.css">
    <title>OTO RENTAL</title>
</head>

<body>
    <div class="dashboard-main-wrapper">
        <div class="dashboard-header">
            <nav class="navbar navbar-expand-lg bg-white fixed-top">
                <a class="navbar-brand" href="<?php echo base_url(); ?>pegawai">OTO RENTAL</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse " id="navbarSupportedContent">
                    <ul class="navbar-nav ml-auto navbar-right-top">
                     
                        <li class="nav-item dropdown nav-user">
                            <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="<?php echo base_url(); ?>concept-master/assets/images/avatar-1.png" alt="jpg" class="user-avatar-md rounded-circle"></a>
                            <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                <div class="nav-user-info">
                                    <h5 class="mb-0 text-white nav-user-name">hai, <?php echo $this->session->userdata("nama"); ?> </h5>
                                    <span class="status"></span><span class="ml-2">Available</span>
                                </div>
                               
                                <a class="dropdown-item" href="login/logout"><i class="fas fa-power-off mr-2"></i>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                             <li class="nav-item">
                                            <a class="nav-link active" href="<?php echo base_url(); ?>pegawai"><i class="fa fa-fw fa-home"></i>Home</a>
                                        </li>

                            <li class="nav-item ">
                                <a class="nav-link " href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-plus"></i>Tambah Data <span class="badge badge-success">6</span></a>
                                <div id="submenu-1" class="collapse submenu" style="">
                                    <ul class="nav flex-column">
                                        
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>pegawai/tambah_mobil">Tambah Unit Mobil</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>pegawai/tambah_penyewa">Tambah Transaksi</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>pegawai/tambah_supir">Tambah Supir</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="<?php echo base_url(); ?>pegawai/tambah_pegawai">Tambah Pegawai</a>
                                        </li>
                                        
                                    </ul>
                                </div>
                            </li>

                           
                                        <li class="nav-item">
                                            <a class="nav-link" href="login/logout">Log Out</a>
                                        </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>

        <div class="dashboard-wrapper">
            <div class="dashboard-ecommerce">
                <div class="container-fluid dashboard-content ">

                    <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                            <div class="page-header">
                                <h2 class="pageheader-title">OTO RENTAL </h2>
                                <p class="pageheader-text">Selamat datang,<?php echo $this->session->userdata("nama"); ?>, gunakan aplikasi OTO RENTAL dengan bijak!. </p>
                                <div class="page-breadcrumb">
                                    <nav aria-label="breadcrumb">
                                        <ol class="breadcrumb">
                                            
                                            <li class="breadcrumb-item active" aria-current="page">Selamat datang, <?php echo $this->session->userdata("nama"); ?> gunakan aplikasi OTO RENTAL dengan bijak!</li>
                                        </ol>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ecommerce-widget">

                        <div class="row">
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Unit Mobil</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php $query = $this->db->query('SELECT * FROM mobil');
echo $query->num_rows(); ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Penyewa</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php $query = $this->db->query('SELECT * FROM penyewa');
echo $query->num_rows(); ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                            <span><i class="fa fa-fw fa-arrow-up"></i></span><span>5.86%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue2"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Pegawai</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php $query = $this->db->query('SELECT * FROM pegawai');
echo $query->num_rows(); ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-primary font-weight-bold">
                                            <span>N/A</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue3"></div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h5 class="text-muted">Total Supir</h5>
                                        <div class="metric-value d-inline-block">
                                            <h1 class="mb-1"><?php $query = $this->db->query('SELECT * FROM sopir');
echo $query->num_rows(); ?></h1>
                                        </div>
                                        <div class="metric-label d-inline-block float-right text-secondary font-weight-bold">
                                            <span>-2.00%</span>
                                        </div>
                                    </div>
                                    <div id="sparkline-revenue4"></div>
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                
                                <div class="card">
                                    <h5 class="card-header">Edit Supir</h5>
                                    <div class="card-body">
                                        <?php extract($supirs); ?>
                                        <form action="<?php echo base_url(); ?>pegawai/u_supir/<?php echo $id; ?>" method="post">
                                            <div class="form-group">
                                                <label for="inputText3" class="col-form-label">Nama Supir</label>
                                                <input id="inputText3" type="text" name="nama" class="form-control" value="<?php echo $nama; ?>" >
                                            </div>
                                           <div class="form-group">
                                                <label for="inputText5" class="col-form-label">Nomor Handphone</label>
                                                <input id="inputText5" type="text" name="no_hp" class="form-control" value="<?php echo $no_hp; ?>">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputText4" class="col-form-label">Jenis Kelamin</label>
                                                <select class="form-control" name="jenis_kelamin">
                                                    <option value="<?php echo $jenis_kelamin; ?>"><?php echo $jenis_kelamin; ?></option>
                                                    <option value="Laki">Laki</option>
                                                    <option value="Perempuan">Perempuan</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Alamat</label>
                                                <input type="text" class="form-control" value="<?php echo $alamat; ?>" name="alamat">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Pengalaman</label>
                                                <input value="<?php echo $pengalaman; ?>" type="text" name="pengalaman" class="form-control" placeholder="15 Tahun">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword">Nomor KTP</label>
                                                <input value="<?php echo $no_ktp; ?>" id="inputPassword" type="text"  value="<?php echo $no_ktp; ?>" name="no_ktp" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label for="inputPassword"></label>
                                                <input type="submit" value="Simpan" class="btn btn-primary">
                                                <a href="<?php echo base_url(); ?>pegawai" class="btn btn-danger">Kembali</a>
                                            </div>
                                        </form>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                       
                        
                       
                       
                    </div>
                    <!-- ============================================================== -->
                    <!-- sidenavbar -->
                    <!-- ============================================================== -->
               
                </div>
            </div>
            <div class="footer">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Designed Copyright © 2018 Concept && <a href="https://github.com/ahmaddewa">Backend Copyright © 2021 Ahmad Dewa Fitrah</a>.
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/slimscroll/jquery.slimscroll.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/libs/js/main-js.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/charts/chartist-bundle/chartist.min.js"></script>    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/charts/sparkline/jquery.sparkline.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/charts/morris-bundle/raphael.min.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/charts/morris-bundle/morris.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/charts/c3charts/c3.min.j"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/charts/c3charts/d3-5.4.0.min.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/vendor/charts/c3charts/C3chartjs.js"></script>
    <script src="<?php echo base_url(); ?>concept-master/assets/libs/js/dashboard-ecommerce.js"></script>
    <script type='text/javascript' language='JavaScript'>

 function konfirmasi(nama)
 {
 tanya = confirm('Anda yakin menghapus data ini?');
 if (tanya == true) return true;
return false;
 }</script>
</body>
 
</html>
