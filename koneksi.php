<?php 

class Koneksi {
    function __construct(){
    $host = "localhost";
    $database = "ipksemester";
    $user = "root";
    $pass = '';

    $this->conn = mysqli_connect($host, $user, $pass, $database);
}
    

    public function register_admin(){
        $username = strtolower($_POST['username']);
        $password = $_POST['password'];
        $pass2= $_POST['password1']; 

        if ($pass2 !== $password) {
        echo "<script>
        alert('Password yang dimasukkan tidak sama');
        document.location.href = 'regisadmin.php';
        </script>";
        return false;
        }
        $password = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO useradmin(username,password) VALUES('$username','$password')";
        $result = $this->conn->query($sql);
        if ($result) {
        echo "<script>
        alert('Data berhasil dimasukkan');
        document.location.href = 'loginadmin.php';
        </script>";
        }else "<script>
        alert('Data Gagal dimasukkan');
        document.location.href = 'regisadmin.php';
        </script>";

    }

 public function register(){
    $nama  = $_POST['nama'];
    $email = $_POST['email'];
    $nohp  = $_POST['nohp'];
    $alamat = $_POST['alamat'];
    $password = md5($_POST['password']);
    $pass2    = md5($_POST['password1']);

    if ($pass2 !== $password) {
        echo "<script>
        alert('Password yang dimasukkan tidak sama');
        document.location.href = 'register.php';
        </script>";
        return false;
    }
    $sql = "INSERT INTO login_mhs(nama,email,nohp,password) VALUES('$nama','$email','$nohp',
    '$password')";
    $result = $this->conn->query($sql);
    if ($result == true) {
        echo "<script>
        alert('Pendaftaran Akun Berhasil');
        document.location.href = 'login.php';
        </script>";
        }else "<script>
        alert('Pendaftaran Akun Gagal');
        document.location.href = 'register.php';
        </script>";
    }

    public function insert_ipk(){
    $semester = $_POST['semester'];
    $ip  = $_POST['ipk'];

        $sql = "INSERT INTO ipk(semester,ip) VALUES('$semester','$ip')";
        $result = $this->conn->query($sql);
        if ($result == true) {
           header('location:tambah_data.php');
        } else {
            echo "<script> alert('Data gagal dikirimkan');</script>";
        }
        echo "<script> location='tambah_data.php'; </script>";
    }

    public function hapus_ipk($semester){
        $sql = "DELETE FROM ipk WHERE semester=$semester";
        $result = $this->conn->query($sql);
        if ($result == true) {
            echo "<script> alert('Data IPK berhasil dihapus');</script>";
        } else {
            echo "<script> alert('Data IPK gagal dihapus');</script>";
        }
        echo "<script> location='dataipk.php'; </script>";
    }

    public function edit_ipk($semester){
        $semester = $_POST['semester'];
        $ipk = $_POST['ipk'];

        $sql = "UPDATE `ipk` SET `semester`='$semester',`ip`='$ipk' WHERE semester=$_GET[semester]";
        $result = $this->conn->query($sql);
        if ($result == true) {
            echo "<script> alert('Data IPK berhasil diubah');</script>";
        } else {
            echo "<script> alert('Data IPK gagal diubah');</script>";
        }
        echo "<script> location='dataipk.php'; </script>";
    }

    
}
$koneksi = new Koneksi();
// if (isset($_GET['cari_pemesanan'])) {
//  $koneksi->cari_pemesanan();
// }
if (isset($_GET['insert_ipk'])) {
    $koneksi->insert_ipk();
}
if (isset($_GET['register'])) {
    $koneksi->register();
}
if (isset($_GET['hapus_ipk'])) {
    $koneksi->hapus_ipk($_GET['hapus_ipk']);
}
if (isset($_GET['edit_ipk'])) {
    $koneksi->edit_ipk($_GET['edit_ipk']);
}

?>