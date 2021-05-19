<?php
	//include class model
	include "model/model.php";
	
	class controller{
		//variabel public
		public $model;
		
		//inisialisasi awal untuk class
		function __construct(){
			$this->model = new model(); //variabel model merupakan objek baru yang dibuat dari class model
		}
		
		function index(){
			$data = $this->model->selectAll(); //pada class ini (controller), akses variabel model, akses fungsi selectAll (kalo bingung lihat di class model ada fungsi selectAll)
			include "view/view.php"; //memamnggil view.php pada folder view
		}
		
		function viewEdit($id){
			$data = $this->model->selectProduc($id); //select data mahasiswa dengan nim ...
			$row = $this->model->fetch($data); //fetch hasil select
			include "view/view_edit.php"; //menampilkan halaman untuk mengedit data
		}
		
		function viewInsert(){
			include "view/view_add.php"; //menampilkan halaman add data
		}
		
		//fungsi updata data
		function update(){
			$id = $_POST['id'];
			$nama_produc = $_POST['nama_produc'];
			$keterangan = $_POST['keterangan'];
			$harga = $_POST['harga'];
			$jumlah = $_POST['jumlah'];
			
			$update = $this->model->updateProduc($id, $nama_produc, $keterangan, $harga, $jumlah);
			header("location:index.php");
		}
		
		function delete($id){
			$delete = $this->model->deleteProduc($id);
			header("location:index.php");
		}
		
		function insert(){
			$nama_produc = $_POST['nama_produc'];
			$keterangan = $_POST['keterangan'];
			$harga = $_POST['harga'];
			$jumlah = $_POST['jumlah'];
			
			$insert = $this->model->insertProduc($nama_produc, $keterangan, $harga, $jumlah);
			header("location:index.php");
		}
		
		function __destruct(){
		}
	}
?>