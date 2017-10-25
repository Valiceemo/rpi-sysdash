<?php
require("assets/modules/systeminfo.php");
$s = new Stats();
$n = $s->Network();
?>


<!doctype html> 
<html lang="en-GB">
<head>
  <link rel="stylesheet" href="assets/style.css">
  <link rel="icon" href="assets/favicon.ico">
  <meta http-equiv="refresh" content="60" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>SysInfo: <?php echo $host; ?></title>
</head>
　
<div>
  <h1><?php echo $host; ?>System Information</h1>
</div>
　
<div>
  <h2>Pi Status</h2>
<br>
<br>
<table>
  <tr>
    <td>CPU Load:</td>
    <td>$cpuusage</td>
  </tr>
  <tr>
    <td>CPU Temp:</td>
    <td>$temp</td>
  </tr>
</table>
</div>
　
<div>
  <h2>Network</h2>
  <p>Hostname <?php echo $host; ?></p>
  <h3>Interfaces</h3>
<table>
  <tr>
    <td>eth0:</td>
    <td><b>MAC:</b>$mac-addr</td>
  </tr>
  <tr>
    <td></td>
    <td><b>IP ADDR:</b>$ip-addr</td>
  </tr>
  <tr>
    <td></td>
    <td><b>MASK:</b>$mask-addr</td>
  </tr>
  <tr>
    <td></td>
    <td><b>BCAST:</b>$bcast-addr</td>
  </tr>
</table>
</div>
　
