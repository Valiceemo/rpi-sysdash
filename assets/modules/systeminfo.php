<?php
	include_once('./include/config.php');
	
	$temp = shell_exec('cat /sys/class/thermal/thermal_zone*/temp');
	$temp = round($temp / 1000, 1);
	
	$cpuusage = 100 - shell_exec("vmstat | tail -1 | awk '{print $15}'");
	
	$clock = '';
	/*$clock = shell_exec('cat /sys/devices/system/cpu/cpu0/cpufreq/scaling_cur_freq');
	$clock = round($clock / 1000);*/
	
	
	
	//disk usage
	$bytes = disk_free_space("."); 
	$si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
	$base = 1024;
	$class = min((int)log($bytes , $base) , count($si_prefix) - 1);
	$disk_free =  sprintf('%1.2f' , $bytes / pow($base,$class));
	$bytes = disk_total_space("."); 
	$si_prefix = array( 'B', 'KB', 'MB', 'GB', 'TB', 'EB', 'ZB', 'YB' );
	$base = 1024;
	$class = min((int)log($bytes , $base) , count($si_prefix) - 1);
	$disk_total = sprintf('%1.2f' , $bytes / pow($base,$class));
	
	$disk_used = $disk_total - $disk_free;
	$disk_percentage = round($disk_used / $disk_total * 100);
	
  #$servicesArray = shell_exec('/usr/sbin/service --status-all');
	
	$operating_system = shell_exec('uname -a');
	
	$cpu_info = shell_exec('lscpu');
	$cpu_info = str_replace("\n", '. ', $cpu_info);
	
	//$uptime = shell_exec("cat /proc/uptime");
	//$uptime = explode(" ", $uptime);
	//$uptime = gmdate("H:i", $uptime[0]);
	
	$uptime = shell_exec('uptime -p');
	
	$load = sys_getloadavg();
	
	$processes = shell_exec("ps aux | wc -l");
	
	$top = shell_exec("top -b -n 1 | head -n 30  | tail -n 30");
	
	$users = shell_exec("w");
	$users = preg_replace('/^.+\n/', '', $users);
	
	$disks = shell_exec("df");
	
	$date = shell_exec("date");
	
	
	//memory usage
	$top_lines = preg_split("/\\r\\n|\\r|\\n/", $top);
	preg_match_all('/\s+([0-9]+)\s+([A-z]+)/', $top_lines[3], $matches);
	//list($memory_total, $memory_used, $memory_free, $memory_buffers) = $matches[1];
	//previous version didnt work properly on different linux versions
	for($i=0;$i<count($matches[1]);$i++)
	{
		if(strtolower($matches[2][$i])=='total')
		{
			$memory_total = $matches[1][$i];
		}
		else if(strtolower($matches[2][$i])=='free')
		{
			$memory_free = $matches[1][$i];
		}
		else if(strtolower($matches[2][$i])=='used')
		{
			$memory_used = $matches[1][$i];
		}
		else
		{
			$memory_buffers = $matches[1][$i];
		}
	}
	
	preg_match_all('/\s+([0-9]+)\s+([A-z]+)/', $top_lines[4], $matches);
	//list($swap_total, $swap_used, $swap_free, $memory_cached) = $matches[1];
	//previous version didnt work properly on different linux versions
	for($i=0;$i<count($matches[1]);$i++)
	{
		if(strtolower($matches[2][$i])=='total')
		{
			$swap_total = $matches[1][$i];
		}
		else if(strtolower($matches[2][$i])=='free')
		{
			$swap_free = $matches[1][$i];
		}
		else if(strtolower($matches[2][$i])=='used')
		{
			$swap_used = $matches[1][$i];
		}
		else
		{
			$memory_cached = $matches[1][$i];
		}
	}
	
	$memory_percentage = round(($memory_used - $memory_buffers - $memory_cached) / $memory_total * 100);
	
	//https://unix.stackexchange.com/questions/152299/how-to-get-memory-usedram-used-using-linux-command
	//$memory_percentage = round(shell_exec("free | awk 'FNR == 3 {print $3/($3+$4)*100}'"));
	
?>
