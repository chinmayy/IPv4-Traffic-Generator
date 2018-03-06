<?php
$sip=$_POST["sourceip"];
$dip=$_POST["destinationip"];
$protocol=$_POST["protocol"];
if($protocol=="TCP")
{
$proto="tcp";
}
else if ($protocol=="UDP")
{
$proto="udp";
}
else if ($protocol=="ICMP")
{
$proto="icmp";
}
$sapp=$_POST["appsrc"];
$dapp=$_POST["appdst"];
$sport=$_POST["sport"];
$dport=$_POST["dport"];
$app=array("ftp"=>21,"ssh"=>22,"telnet"=>23,"dns"=>53,"mail"=>25,"voip"=>17
19,"http"=>80);
if($sport)
$sapp_port=$sport;
else
$sapp_port=$app[$sapp];
if($dport)
$dapp_port=$dport;
else
$dapp_port=$app[$dapp];
$num_pac1=$_POST["packet"];
$number= $_POST["npacket"];
$counter=$number;
if($num_pac1=="continous")
{
$counter=1;
$number=1;
}
else $counter=0;
$pa=$_POST["length"];
if($pa=="min")
$payloadlength=8;
else if($pa=="max")
$payloadlength=512;
else if($pa="define")
{
$payloadlength=$_POST["payload"];
}
$pgap1=$_POST['ipgap'];
$poption=$_POST["packet"];
if($poption=="define")
{
$pdetail=$_POST["payload"];
}
if($pdetail)
{
exec("sh c 'echo $pdetail > payload.txt'");
exec("sh c 'echo > packet.txt'");
$file=fopen("payload.txt","r");
while($number>=1)
{
$i=0;
$ofile=fopen("packet.txt","w");
while($i<$payloadlength)
{
{
break;
}
$var=fgetc($file);
fputs($ofile,$var);
$i++;
}
shell_exec("cat packet.txt");
if($proto=="tcp")
{
shell_exec("sendip p
ipv4 is $sip1 p
$proto ts
$sapp_port td
$dapp_port
d\"$
detail\" v
$dip1");
}
else if($proto=="udp")
{

echo shell_exec("sendip pipv4 is $sip1 -p $proto us$dapp_port -d $detail -v $dip1");
echo "<br>";
}
else
{
shell_exec("sendip -p ipv4 is $sip1 -p icmp -d \"$detail\" -v $dip1");
}
usleep($pgap1);
if($counter==0)
$number;
fclose($file);
fclose($ofile);
}
else
{
$pdetail="pacjet sent";
echo "$detail";
while($number>=1)
{
if($proto=="tcp")
{
shell_exec("sendip -p ipv4 is $sip1 -p $proto -ts $sapp_port -td $dapp_port -d
\"$pdetail\" -v $dip1");
}
else if($proto=="udp")
else if($proto=="udp")
{
echo shell_exec("sendip -p ipv4 -is $sip1 -p $sapp_port -ud $dapp_port -d \"$detail\" -v $dip1");
}
else
{
shell_exec("sendip -p ipv4 -is $sip1 -p icmp -is $dip1");
}
}
}