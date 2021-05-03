<?php 
session_start();
if (empty($_SESSION['user'])) {
?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<style>
body {font-family: Arial, Helvetica, sans-serif;
background-color: #00aeef;}
* {box-sizing: border-box;}

input-container {
  wi.dth: 75%;
  margin-bottom: 15px;
}

.kotak_login{
  width: 450px;
  background: white;
  margin: 80px auto;
  padding: 30px 20px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
<head>
	<title>Login</title>
</head>
<body bgcolor="lightblue">
	<center><br>
<form class="kotak_login" action="" method="post">
	<h1><b>Form LOGIN</b></h1><br>
	<table width="270">
		<tr>
			<td>Email  :</td>
			<td><input type="email" name="email"></td>
		</tr>
		<tr>
			<td>Password  :</td>
			<td><input type="Password" name="password"></td>
		</tr>
		<tr>
			<td><a href="register.php">Buat Akun</a></td>
			<td><input type="submit" name="submit" value="Confirm"></td>
		</tr>
	</table><br><br>


</form>
</center>


<?php 
if (isset($_POST['submit'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  include_once 'config.php';
  $result = mysqli_query($conn, "SELECT * FROM login_mhs WHERE email='$email'");
  $row = $result->fetch_assoc();

  if (mysqli_num_rows($result) == 0 ){

    if ($password == $row["password"]) {
      $_SESSION["login"] = true;
      echo "<script>
      alert('Anda Berhasil Login');
      document.location.href ='utama.php';
      </script>";
    }
    else{
     echo "<script>
      alert('Password Anda Salah');
      </script>";
   }
  }else{
     echo "<script>
      alert('Anda Berhasil Login');
      document.location.href ='utama.php';
      </script>";
    }
}
?>
</body>
</html>
<?php	
} else{
	header("location: home.php");
} ?>