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
<center><br><br>
<h2>Masukkan Data IPK</h2>
<?php  
include("config.php");
$sql =mysqli_query($conn, "SELECT * FROM ipk WHERE semester='$_GET[semester]'");
$data =mysqli_fetch_array($sql);?>
<table width="350">
<div class="form-group">
<form action="koneksi.php?edit_ipk" method="post">
<tr>
	<td>Semester</td>
	<td><input type="text" class="form-control" placeholder="Semester" name="semester" 
    value="<?php echo $data['semester']?>"></td>
</tr>
	<td>IPK</td>
	<td><input type="text" class="form-control"  placeholder="Enter IPK" name="ipk"
    value="<?php echo $data['ip']?>"></td>
</tr>
<tr><td></td>
  <td><input type="submit" name="Submit"></td>
</tr>

</form></div></table>
<a href="utama.php">Back To Home</a>
</center>
</body>

<?php

if(isset($_POST['submit'])){
    $semester = $_POST['semester'];
    $ipk = $_POST['ipk'];
    

    $sql = "UPDATE `ipk` SET `semester`='$semester',`ip`='$ipk' WHERE semester=$_GET[semester]";
    $result = mysqli_query($conn, $sql);
    if($result){
    header("location:dataipk.php");
    }else echo "data gagal diedit";
}
?>
</html>