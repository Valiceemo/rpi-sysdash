<?php
require("assets/modules/systeminfo.php");
?>

<!doctype html> 
<html lang="en-GB">
<head>
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue-grey.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!--https://material.io/icons/ -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="/assets/css/style.css">
  <link rel="icon" href="assets/images/raspberry.png">
  <meta http-equiv="refresh" content="60" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
  <title>Rpi-SysDash</title>
</head>
  
<body class="w3-theme-l4" onload="updateDisplay()">
  <div class="container">
  <div style="min-width:400px">
<div class="w3-bar w3-large w3-theme-d4"><a href="#" class="w3-bar-item w3-button"><i class="fa fa-bars"></i></a>
  <span class="w3-bar-item">RPI-SYSDASH</span>
  </div>

<div class="w3-container w3-content">
  <p class="w3-opacity"><b>Pi Status</b></p>
  <div class="w3-panel w3-white w3-card w3-display-container">
  <span class="w3-display-topright w3-padding"><i class="material-icons blue600">build</i></span>
    <p class="w3-text-blue"><b>System</b></p>
   <table>
     <tr>
       <td>Kernal: </td>    
       <td><?php echo $kernel; ?></td>  
     </tr>
     <tr>
       <td>Processor: </td>       
       <td><?php echo $processor; ?></td>    
     </tr>    
     <tr>
       <td>CPU Temp:</td>
       <td><?php echo $temp; ?></td>  
     </tr>
     <tr>
       <td>Uptime: </td>
       <td><?php echo $uptime; ?></td>
     </tr>
    </table>
   <p class="w3-text-blue"><a href="javascript:location.reload(true);" title="Refresh">Refresh</a></p>
  </div>
 <div class="w3-panel w3-white w3-card w3-display-container">
   <p class="w3-text-blue"><b>Disk Usage</b></p>
   <span class="w3-display-topright w3-padding"><i class="material-icons blue600">memory</i></span>
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
   <p class="w3-text-blue"><a href="javascript:location.reload(true);" title="Refresh">Refresh</a></p>
  </div>
    </div>
    </div>
    </body>
  </html>
