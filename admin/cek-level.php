<?php
// https://phpdanmysql.com
session_start();
 
if ($_SESSION['level'] == "admin"){
include "admin/index.php";
}
else if ($_SESSION['level'] == "guru")
{
    include "petugas/index.php";
} else {
    include "index.php"
}