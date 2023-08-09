<?php
$ipAddress = $_SERVER['SERVER_ADDR'];
$hostname = $_SERVER['HTTP_HOST'];
echo "<h1>Hello from Kube</h1><br>";

echo "Server IP: $ipAddress", "<br><p>";
echo "Hostname: $hostname", "<br><p>";
?>
