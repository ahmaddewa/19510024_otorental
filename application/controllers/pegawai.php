<?php

class Pegawai extends CI_Controller{
	function __construct(){
		parent::__construct();
		$this->load->model('Model_Mobil');
		$this->load->model('Model_Pegawai');
		$this->load->model('Model_Penyewa');
		$this->load->model('Model_Print');
		$this->load->model('Model_Supir');

		if($this->session->userdata('status') != "login"){
			echo "<script>
					alert('Anda Harus Login Terlebih Dahulu ! ');
					window.location='".base_url('login')."';
				</script>";
		}
	}

	function index(){
		$data['mobils'] = $this->Model_Mobil->getAllMobil();
		$data['pegawais'] = $this->Model_Pegawai->getAllPegawai();
		$data['penyewas'] = $this->Model_Penyewa->getAllPenyewa();
		$data['supirs'] = $this->Model_Supir->getAllSupir();
		$this->load->view('view_pegawai', $data, array('error' => ''));
	}

	public function search_sewa(){
			$keyword = $this->input->post('keyword');
			$data['penyewas']=$this->Model_Penyewa->getPenyewaKeyword($keyword);
			$this->load->view('search_penyewa',$data);
		}

	public function search_mobil(){
			$keyword = $this->input->post('keyword');
			$data['mobils']=$this->Model_Mobil->getMobilKeyword($keyword);
			$this->load->view('search_mobil',$data);
		}

	public function search_sopir(){
			$keyword = $this->input->post('keyword');
			$data['supirs']=$this->Model_Supir->getSupirKeyword($keyword);
			$this->load->view('search_sopir',$data);
		}

	public function tambah_mobil(){
		$this->load->view('view_tambah_mobil');
	}

	public function tambah_supir(){
		$this->load->view('view_tambah_supir');
	}

	public function tambah_pegawai(){
		$this->load->view('view_tambah_pegawai');
	}

	public function print_laporan(){
		$data['laporans'] = $this->Model_Print->getAllPrint();
		$this->load->view('view_print_laporan', $data);
	}

	public function tambah_penyewa(){
		$this->load->view('view_tambah_penyewa');
	}

	public function tambah(){
		$config['upload_path']          = './img_mobil/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('berkas')) {
			echo "<script>
					alert('Image yang Anda Upload Tidak Sesuai ! ');
					window.location='".base_url('pegawai')."';
				</script>";
		}else{
			
			$mobil['gambar'] =  $this->upload->data('file_name');
			$mobil['nama_mobil'] = $this->input->post('nama_mobil');
			$mobil['nopol'] = $this->input->post('nopol');
			$mobil['warna'] = $this->input->post('warna');
			$mobil['jumlah_kursi'] = $this->input->post('jumlah_kursi');
			$mobil['tahun'] = $this->input->post('tahun');
			$mobil['merk'] = $this->input->post('merk');

			$query = $this->Model_Mobil->addMobil($mobil);
		
		}

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}

	}

	public function t_supir(){
		$config['upload_path']          = './img_mobil/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('berkas')) {
			echo "<script>
					alert('Image yang Anda Upload Tidak Sesuai ! ');
					window.location='".base_url('pegawai')."';
				</script>";
		}else{
			
			$supir['foto'] =  $this->upload->data('file_name');
			$supir['nama'] = $this->input->post('nama');
			$supir['no_hp'] = $this->input->post('no_hp');
			$supir['jenis_kelamin'] = $this->input->post('jenis_kelamin');
			$supir['alamat'] = $this->input->post('alamat');
			$supir['pengalaman'] = $this->input->post('pengalaman');
			$supir['no_ktp'] = $this->input->post('no_ktp');

			$query = $this->Model_Supir->addSupir($supir);
		
		}

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}

	}

	public function t_penyewa(){
		$config['upload_path']          = './img_mobil/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('berkas')) {
			echo "<script>
					alert('Image yang Anda Upload Tidak Sesuai ! ');
					window.location='".base_url('pegawai')."';
				</script>";
		}else{
		$penyewa['foto_ktp'] = $this->upload->data('file_name');
		$penyewa['nama'] = $this->input->post('nama');
		$penyewa['no_hp'] = $this->input->post('no_hp');
		$penyewa['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$penyewa['alamat_penyewa'] = $this->input->post('alamat_penyewa');
		$penyewa['mobil'] = $this->input->post('mobil');
		$penyewa['perjalanan'] = $this->input->post('perjalanan');
		$penyewa['jenis_bayar'] = $this->input->post('jenis_bayar');
		$penyewa['harga'] = $this->input->post('harga');
		$penyewa['tgl_pinjam'] = $this->input->post('tgl_pinjam');
		$penyewa['tgl_kembali'] = $this->input->post('tgl_kembali');

		$query = $this->Model_Penyewa->addPenyewa($penyewa);
		}
		
		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}

	}

	public function t_pegawai(){
		$config['upload_path']          = './img_mobil/';
		$config['allowed_types']        = 'gif|jpg|png';
		$config['max_size']             = 100;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;

		$this->load->library('upload', $config);

		if (! $this->upload->do_upload('berkas')) {
			echo "<script>
					alert('Image yang Anda Upload Tidak Sesuai ! ');
					window.location='".base_url('pegawai')."';
				</script>";
		}else{
		$pegawai['nama'] = $this->input->post('nama');
		$pegawai['username'] = $this->input->post('username');
		$pegawai['password'] = md5($this->input->post('password'));
		$pegawai['email'] = $this->input->post('email');
		$pegawai['foto'] = $this->upload->data('file_name');

		$query = $this->Model_Pegawai->addPegawai($pegawai);
		}


		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}

	}

	public function edit($id){
		$data['mobils'] = $this->Model_Mobil->getMobilId($id);
		$this->load->view('view_edit_mobil', $data);
	}

	public function e_penyewa($id){
		$data['penyewas'] = $this->Model_Penyewa->getPenyewaId($id);
		$this->load->view('view_edit_Penyewa', $data);
	}

	public function e_supir($id){
		$data['supirs'] = $this->Model_Supir->getSupirId($id);
		$this->load->view('view_edit_supir', $data);
	}

	public function update($id){
		$mobil['nama_mobil'] = $this->input->post('nama_mobil');
		$mobil['nopol'] = $this->input->post('nopol');
		$mobil['warna'] = $this->input->post('warna');
		$mobil['jumlah_kursi'] = $this->input->post('jumlah_kursi');
		$mobil['tahun'] = $this->input->post('tahun');
		$mobil['merk'] = $this->input->post('merk');

		$query = $this->Model_Mobil->updateMobil($mobil, $id);

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}
	}

	public function u_supir($id){
		$supir['nama'] = $this->input->post('nama');
		$supir['no_hp'] = $this->input->post('no_hp');
		$supir['jenis_kelamin'] = $this->input->post('jenis_kelamin');
		$supir['alamat'] = $this->input->post('alamat');
		$supir['pengalaman'] = $this->input->post('pengalaman');
		$supir['no_ktp'] = $this->input->post('no_ktp');

		$query = $this->Model_Supir->updateSupir($supir, $id);

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}
	}

	public function u_penyewa($id){
		$penyewa['nama'] = $this->input->post('nama');
		$penyewa['no_hp'] = $this->input->post('no_hp');
		$penyewa['jenis_kelamin'] = $this->input->post('warna');
		$penyewa['alamat_penyewa'] = $this->input->post('alamat_penyewa');
		$penyewa['mobil'] = $this->input->post('mobil');
		$penyewa['perjalanan'] = $this->input->post('perjalanan');
		$penyewa['jenis_bayar'] = $this->input->post('jenis_bayar');
		$penyewa['harga'] = $this->input->post('harga');
		$penyewa['tgl_pinjam'] = $this->input->post('tgl_pinjam');
		$penyewa['tgl_kembali'] = $this->input->post('tgl_kembali');

		$query = $this->Model_Penyewa->updatePenyewa($penyewa, $id);

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}
	}

	public function delete($id){
		$query=$this->Model_Mobil->deleteMobil($id);

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}
	}

	public function d_supir($id){
		$query=$this->Model_Supir->deleteSupir($id);

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}
	}

	public function d_penyewa($id){
		$query=$this->Model_Penyewa->deletePenyewa($id);

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}
	}

	public function e_pegawai($id){
		$data['pegawais'] = $this->Model_Pegawai->getPegawaiId($id);
		$this->load->view('view_edit_pegawai', $data);
	}

	public function u_pegawai($id){
		$pegawai['username'] = $this->input->post('username');
		$pegawai['nama'] = $this->input->post('nama');
		$pegawai['email'] = $this->input->post('email');
		

		$query = $this->Model_Pegawai->updatePegawai($pegawai, $id);

		if($query){
			header('location:' .base_url().'pegawai'.$this->index());
		}
	}

}

?>