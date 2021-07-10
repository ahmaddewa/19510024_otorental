<!doctype html>
<html lang="en">
 
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

<CENTER><h1>LAPORAN TRANSAKSI OTO RENTAL</h1></CENTER>
<CENTER><h4>&copy; 2021 Ahmad Dewa Fitrah</h4></CENTER>
<br><br>


    <script>
        window.print();
    </script>
<div class="card-body p-0">
                                        <div class="table-responsive">
                                            <table class="table">
                                                <thead class="bg-light">
                                                    <tr class="border-0">
                                                        <th class="border-0">#</th>
                                                        <th class="border-0">Nama Penyewa</th>
                                                        <th class="border-0">No Hp</th>
                                                        <th class="border-0">Jenis Kelamin</th>
                                                        <th class="border-0">Alamat Penyewa</th>
                                                        <th class="border-0">Mobil</th>
                                                        <th class="border-0">Perjalanan</th>
                                                        <th class="border-0">Jenis Bayar</th>
                                                        <th class="border-0">Harga</th>
                                                        <th class="border-0">Tanggal Pinjam</th>
                                                        <th class="border-0">Tanggal Kembali</th>
                                                        
                                                    </tr>
                                                </thead>
                                                <?php
		foreach ($laporans as $print_laporan) {
			?>
                                                <tbody>
                                                   <tr>
				<td><?php echo $print_laporan->id_penyewa; ?></td>
				<td><?php echo $print_laporan->nama; ?></td>
				<td><?php echo $print_laporan->no_hp; ?></td>
				<td><?php echo $print_laporan->jenis_kelamin; ?></td>
				<td><?php echo $print_laporan->alamat_penyewa; ?></td>
				<td><?php echo $print_laporan->mobil; ?></td>
				<td><?php echo $print_laporan->perjalanan; ?></td>
				<td><?php echo $print_laporan->jenis_bayar; ?></td>
				<td><?php echo $print_laporan->harga; ?></td>
				<td><?php echo $print_laporan->tgl_pinjam; ?></td>
				<td><?php echo $print_laporan->tgl_kembali; ?></td>
				
			</tr>
		<?php
		}?>
                                                </tbody>
                                            </table>
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