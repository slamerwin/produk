<?php 
//  require __DIR__ . '/config.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Berta Erwin SLAM</title>
  </head>
  <body>
    <div class="container">
 
        <center>
            <h3>Daftar Data Prodak</h3>
        </center>
        <br/><br/>
       <a href='index.php?i=add' class="btn btn-primary btn-lg">Tambah Data</a>
        <br/><br/>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Produk</th>
                    <th>Keterangan</th>
                    <th>Harga</th>
                    <th>Jumlah</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
            <?php $i=0; 
            while($row = $this->model->fetch($data)){
                $i=$i+1;
				echo "
					<tr>
						<td>$i</td>
						<td>$row[1]</td>
						<td>$row[2]</td>
						<td>$row[3]</td>
                        <td>$row[4]</td>
						<td><a href='index.php?e=$row[0]' class=\"btn btn-warning btn-xs\">Edit</a>
						<a href='index.php?d=$row[0]'class=\"btn btn-danger btn-xs\" onClick=\"return confirm('Hapus Data?')\"\>Delete</a></td>
					</tr>
				";
			}?>
            </tbody>
        </table>
        
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>