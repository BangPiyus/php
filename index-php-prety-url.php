<?php
    $do = explode ("/", $_REQUEST['do']);
    $opsi = $do[0];
    $website = 'bangpiyus.com | 0822-9656-9339';
    define('PUB_DIR', dirname (__FILE__) . '/');
    switch($opsi) {
        default:
            $halaman=$opsi;
            if($halaman=='home'||$halaman==''){
            	$halaman = 'Home';
                require_once (PUB_DIR . 'bampi-home.php');    
            }else{
                $namafile = 'bampi-'.$halaman.'.php';
                if(file_exists($namafile)){
                    require_once (PUB_DIR . 'bampi-'.$halaman.'.php');        
                }else{
                    header("location:.");    
                }
            }
    }
?>
