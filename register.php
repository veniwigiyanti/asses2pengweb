<!DOCTYPE html>
<html>
<head>
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
	<title></title>
</head>
<body bgcolor="lightblue">
<center><br><br>
<form class="kotak_login" action="koneksi.php?register" method="post">
	<h2><b>Form Register</b></h2>
	<table>
		<tr>
			<td><br></td>
			<td><br></td>
		</tr>
		<tr>
			<td>Nama Lengkap:</td>
			<td><input type="name" name="nama"></td>
		</tr>
		<tr>
			<td>Email :</td>
			<td><input type="Email" name="email"></td>
		</tr>
		<tr>
			<td>No HP :</td>
			<td><input type="number" name="nohp"></td>
		</tr>
		<tr>
			<td>Password :</td>
			<td><input type="Password" name="password"></td>
		</tr>
		<tr>
			<td>Confirm Password :</td>
			<td><input type="Password" name="password1"></td>
		</tr>
		<tr>
			<td><a href="">Punya Akun?</a><br><br></td>
			<td><input type="submit" name="submit">&nbsp;&nbsp;
				<input type="reset" name="reset">
			</td>
		</tr>
	</table>
</form>
</center>

</body>
</html