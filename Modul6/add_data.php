<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>
    <style>
body{
  background: #456;
  font-family: 'Open Sans', sans-serif;
    }  
.login {
  width: 400px;
  margin: 16px auto;
  font-size: 16px;
  margin-top: 100px;
}
.login-header,
.login p {
  margin-top: 0;
  margin-bottom: 0;
}
.login-header {
  background: #28d;
  padding: 20px;
  font-size: 1.4em;
  font-weight: normal;
  text-align: center;
  text-transform: uppercase;
  color: #fff;
}
.login-container {
  background: #ebebeb;
  padding: 12px;
}
.login p {
  padding: 5px;
}
.login input {
  box-sizing: border-box;
  display: block;
  width: 100%;
  border-width: 1px;
  border-style: solid;
  padding: 16px;
  outline: 0;
  font-family: inherit;
  font-size: 0.95em;
}
.login input[type="text"],
.login input[type="password"] {
  background: #fff;
  border-color: #bbb;
  color: #555;
}
.login input[type="text"]:focus,
.login input[type="password"]:focus {
  border-color: #888;
}
.login input[type="submit"] {
  background: #28d;
  border-color: transparent;
  color: #fff;
  cursor: pointer;
}
.login input[type="submit"]:hover {
  background: #17c;
}
/* Buttons' focus effect */
.login input[type="submit"]:focus {
  border-color: #05a;
}
.error {
  color: red;
  margin-left: 570px;
}
.data {
  margin-left: 540px;
  color:red;

}
    </style>
</head>
<body>
    <div class="login">
    <h2 class="login-header">Tambah Data</h2>
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post" class="login-container">
    <p>
    <input type="text" name="nis" placeholder="NIS"></td>
    </p>
    <p>
    <input type="text" name="nama" size=40 placeholder="Nama"></td>
    </p>
    <p>
    <input type="text" name="alamat" placeholder="Alamat"></td>
    </p>
    <p>
    <input type="password" name="password" placeholder="Password"></td>
    </p>
    <p>
    <input type="submit" value="Simpan"></td>
    </p>
    </form>
    </div>
    <div class="data">
<?php
    require_once "connect.php";

    //jika field nis dan nama diisi lalu disubmit
    if(isset($_POST['nis']) && isset($_POST['nama'])){
        $nis = $_POST['nis'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $password = $_POST['password'];

        //tambahkan data baru ke tabel
        $sql = "INSERT INTO tb_siswa VALUES ('" .$nis. "','" .$nama. "', '" .$alamat. "','" .$password. "')";
        $result = mysqli_query($connect, $sql);
        if($result){
            echo '<h3>Data Berhasil Ditambahkan</h3>';
        }
        else {
            echo '<h3>Gagal Menambahkan Data <br>';
            echo mysqli_error($connect)."</h3>";
        }
    }
?>
</div>

</body>
</html>
