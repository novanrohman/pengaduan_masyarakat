<?php
class database{
    // digunakan untuk koneksi ke database
    var $host = "127.0.0.1";
    var $username = "root";
    var $password = "";
    var $database = "pengaduan_masyarakat";
    var $koneksi;

    function __construct()
    {
        $this->koneksi = mysqli_connect($this->host, $this->username, $this->password, $this->database);
    }

    //akhir koneksi database
    // 
    function register($nik,$name,$username,$telp,$email,$password)
    {
        $insert = mysqli_query($this->koneksi, "INSERT INTO masyarakat values ('$nik','$name','$username','$telp','$email','$password')");
        return $insert;
    }

    function login($username,$password,$remember)
    {
        $query = mysqli_query($this->koneksi,"select * from masyarakat where username='$username'");
		$data_user = $query->fetch_array();
		if(password_verify($password,$data_user['password']))
        {
            if($remember)
            {
                setcookie('username', $username, time() + (60 * 60 * 24 * 5), '/');
                setcookie('name', $data_user['name'], time() + (60 * 60 * 24 * 5), '/');
            }
            $_SESSION['username'] = $username;
            $_SESSION['name'] = $data_user['name'];
            $_SESSION['is_login'] = TRUE;
            return TRUE;
        }
    }

    function relogin($username)
    {
        $query = mysqli_query($this->koneksi, "select * from masyarakat where username='$username'");
        $data_user = $query->fetch_array();
        $_SESSION['username'] = $username;
        $_SESSION['name'] = $data_user['name'];
        $_SESSION['is_login'] = $TRUE;

    }

    
}