<?php

require_once("config.php");

if(isset($_POST['register'])){

    //filter data yang diinputkan
    $nik = filter_input(INPUT_POST, 'nik', FILTER_SANITIZE_NUMBER_INT);
    $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    

    //enkripsi password
    $email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);
    

    //menyiapkan query
    $sql = "INSERT INTO masyarakat (nik, name, username, telp, email, password) VALUES (:nik, :name, :username, :telp, :email, :password)";

    $stmt = $db->prepare($sql);


    // bind parameter ke query
    $params = array(
        ":nik" => $nik,
        ":name" => $name,
        ":username" => $username,
        ":telp" => $telp,
        ":email" => $email,
        ":password" => $password
    );

    // eksekusi query untuk menyimpan ke database
    $saved = $stmt->excute($params);


    // jika query simpan berhasil, maka user sudah terdaftar
    // maka alihkan ke halaman login
    if($saved) header("Location: ../views/login.php");
}
?>