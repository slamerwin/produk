<?php
	class model{
		//inisialisasi awal untuk class biasa disebut instansiasi
		function __construct(){
			// $connect = mysql_connect("localhost", "root", "");
			// $db = mysql_select_db("mvc");

            $dbhost = 'localhost'; 
            $dbuser = 'root';     // ini berlaku di xampp
            $dbpass = '';         // ini berlaku di xampp
            $dbname = 'arkademy';

            // melakukan koneksi ke database
            $connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

            // cek koneksi yang kita lakukan berhasil atau tidak
            if ($connect->connect_error) {
            // jika terjadi error, matikan proses dengan die() atau exit();
                die('Maaf koneksi gagal: '. $connect->connect_error);
            }
		}
		
		function execute($query){
            
            $dbhost = 'localhost'; 
            $dbuser = 'root';     // ini berlaku di xampp
            $dbpass = '';         // ini berlaku di xampp
            $dbname = 'arkademy';

            // melakukan koneksi ke database
            $connect = new mysqli($dbhost,$dbuser,$dbpass,$dbname);

            // cek koneksi yang kita lakukan berhasil atau tidak
            if ($connect->connect_error) {
            // jika terjadi error, matikan proses dengan die() atau exit();
                die('Maaf koneksi gagal: '. $connect->connect_error);
            }
            
			return mysqli_query($connect,$query);
		}
		
		function selectAll(){
			$query = "select * from produk";
			return $this->execute($query);
		}
		
		function selectProduc($id){
			$query = "select * from produk where id='$id'";
			return $this->execute($query);
		}
		
		function updateProduc($id,$nama_produc, $keterangan, $harga, $jumlah){
			$query = "UPDATE `produk` SET `nama_produk`='$nama_produc',`keterangan`='$keterangan',`harga`=$harga,`jumlah`=$jumlah where id='$id'";
			return $this->execute($query);
		}
		
		function deleteProduc($id){
			$query = "delete from produk where id='$id'";
			return $this->execute($query);
		}
		
		function insertProduc($nama_produc, $keterangan, $harga, $jumlah){
			$query = "INSERT INTO `produk`(`nama_produk`, `keterangan`, `harga`, `jumlah`) values ('$nama_produc', '$keterangan', $harga, $jumlah)";
			return $this->execute($query);
		}
		
		function fetch($var){
			return mysqli_fetch_array($var);
		}
		
		function __destruct(){
		}
	}
?>