<?php 
// capture their IP address 
$ip = $_SERVER['REMOTE_ADDR']; 
// this is the path to the arp command used to get user MAC address 
// from it's IP address in linux environment. 
$arp = "/usr/sbin/arp"; 
// execute the arp command to get their mac address 
$mac = shell_exec("sudo $arp -an " . $ip); 
preg_match('/..:..:..:..:..:../',$mac , $matches); 
$mac = @$matches[0]; 
// if MAC Address couldn't be identified. 
if( $mac === NULL) { echo "Access Denied."; exit; } 
//process
if( isset( $ip) && isset ( $mac ) ) { 
exec("sudo iptables -I internet 1 -t mangle -m mac --mac-source $mac -j RETURN"$
exec("sudo rmtrack " . $ip);
header("Location: https://192.168.42.1/welcome.php");
die();
sleep(1);
print ("hallo!!!");
exit;
// allowing rmtrack to be executed 
// OK, redirection bypassed. 
// Show the logged in message or directly redirect to other website 
} else {
echo "Access Denied";
 exit;
}
