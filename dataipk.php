<?php  include_once 'config.php';
// session_start();
// if (!isset($_SESSION["admin"])){
//     header("location: loginadmin.php");
// }

$sql = mysqli_query($conn, "SELECT * FROM ipk ORDER BY semester ASC");
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<title></title>
</head>
<body>
	<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">MyIPK</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="utama.php">Home</a></li>
      <li><a href="about.php">About</a></li>
      <li><a href="login.php">Logout</a></li>
    </ul>
  </div>
</nav>
	<br><br>
	<center>
		<table class="table table-bordered">
    <thead>
      <tr>
        <th>Semester</th>
        <th>Indeks Prestasi</th>
        <th>Aksi</th>
      </tr>
      <tbody>
    <?php $a=1; ?>
    <?php while ($data = $sql->fetch_assoc()) :?>
         <tr>
          <!--  <td><?= $a ?></td> -->
            <td><?= $data['semester'] ?></td>
            <td><?= $data['ip'] ?></td>
            <td align="center">
              <button><a href="koneksi.php?hapus_ipk=<?= $data['semester'] ?>" onclick="return confirm('Apakah yakin akan menghapus data ini?')" style="text-decoration: none;" >Hapus</button></a></button> 
              <button>
                <a href="edit.php?semester=<?= $data['semester']; ?>" style= "text-decoration: none;">Edit</a></button>
         </tr>
         <?php $a++; ?>
    <?php
    endwhile
    ?>
      </tbody>
    </thead>  
    </table>
	</center>
</body>
</html>