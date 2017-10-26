<?php
require("assets/modules/systeminfo.php");

?>


<!doctype html> 
<html lang="en-GB">
<head>
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="icon" href="assets/favicon.ico">
  <meta http-equiv="refresh" content="60" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>SysInfo: <?php echo $host; ?></title>
</head>
　
<div>
  <h1><?php echo $host; ?> System Info</h1>
</div>
　
<div>
  <h2>Pi Status</h2>
<table>
  <tr>
    <td>Kernal: </td>
    <td><?php echo $kernel; ?></td>
  <tr>
  <tr>
    <td>Processor: </td>    
    <td><?php echo $processor; ?></td>  
  <tr>
    <td>CPU Temp:</td>
    <td><?php echo $temp; ?></td>
  </tr>
  <tr>
    <td>Uptime: </td>
    <td><?php echo $uptime; ?></td>
  </tr>
</table>
</div>
　
<div>
  <h2>Disc Usage</h2>
  <table>
    <tr>
      <td>disc_free_space: </td>
      <td><? php echo $disc_free_space; ?></td>
    </tr>
    <tr>
      <td>Disc total: </td>
      <td><? php echo $disk_total; ?></td>
    </tr>
    <tr>
      <td>Disc Used: </td>
      <td><? php echo $disk_used; ?></td>
    </tr>
    <tr>
      <td>Disc Percent: </td>
      <td><? php echo $disk_percentage; ?></td>
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
