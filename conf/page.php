<?php
if(isset($_GET['page'])){
    $page = $_GET['page'];

    switch($page){
        //beranda
        case 'data_mahasiswa':
            include 'pages/mahasiswa/data_mahasiswa.php';
        break;
    }
}else{
    include "pages/beranda.php";
}
?>