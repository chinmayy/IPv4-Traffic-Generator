<form method="POST" action="traffic.php">
Sourse ip address:<input type="text" name="sourceip"><br>
Destination ip address:<input type="text" name="destinationip"><br>
Protocol:<select name="protocol">
<option value="UDP">UDP</option>
<option value="TCP">TCP</option>
<option value="ICMP">ICMP</option>
source port:<input type="text" name="appsrc">
<select name=sport>
<option value="ftp">FTP</option>
<option value="ssh">SSH</option>
<option value="telnet">TELNET</option>
<option value="dns">DNS</option>
<option value="mail">MAIL</option>
<option value="voip">VOIP</option>
<option value="http">HTTP</option>
Destination port:<input type="text" name="appdst">
<select name="dport">
<option value="ftp">FTP</option>
<option value="ssh">SSH</option>
<option value="telnet">TELNET</option>
<option value="dns">DNS</option>
<option value="mail">MAIL</option>
<option value="voip">VOIP</option>
<option value="http">HTTP</option>
no. of packets:<input type="text" name="npacket">
<select name=packet>
<option value="non_cotinous">Non-continous</option>
<option value="continous">continous</option>
length:<input type="text" value="payload">
<select name="length">
<option value="min">min</option>
<option value="max">max</option>
<option value="define">define</option>
packet gap:<input type="text" value="ipgap">