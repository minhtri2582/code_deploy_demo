<?php
function getUserIP()
{
    $client  = $_SERVER['HTTP_CLIENT_IP'];
    $forward = $_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];
    $ip = '';

    if($client)
    {
        $ip .= $client;
    }

    if($forward)
    {
        $ip .=  ' -  ' . $forward;
    }

    $ip .= ' -  ' .$remote;

    return $ip;
}


$user_ip = getUserIP();

echo $user_ip; // Output IP address [Ex: 177.87.193.134]
echo "<br";
echo "<br";

$headers =  getallheaders();
foreach($headers as $key=>$val){
    echo $key . ': ' . $val . '<br>';
}