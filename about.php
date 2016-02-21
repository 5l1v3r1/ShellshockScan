<!DOCTYPE html>
<html lang="en-US">
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>ShellShock Vulnerability Scanner</title>

<meta name="description" content="Unknown Error" />
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="/favicon.ico">

<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/customx.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>

<h2 class="offscreen">ShellShockable</h2>
	<div id="hmenu">
	<ul>
	  <li><a href="index.php">Home</a></li>
	  <li><a href="more.php">More Info</a></li>
	  <li><a href="about.php">About</a></li>
	  <li><a href="update.php">Updates</a></li>
	  <li><a href="explain.php">Simpler Explanation</a></li>
	  <li><a href="attacks.php">Attack Vectors</a></li>
	</ul>
	</div>

</head>
<body>

<div style="float:right;width:450;height:338;padding-top:300px; padding-right:150px">

<img src="/img/Large_rocket.gif">

</div>
<div style="margin:100px; padding:30px; padding-top:10px; padding-right:500px; " align="left;">
<h2>About the Scanner</h2>

Essentialy what this scanner does is send a specially crafted http header to a website, if that website gives us a 200, 201, 202, 404, 403, 301, 302, 307 or 308 error that means it has rejected our header and therefore is unlikely to be vulnerable.
<br>
Here is a brief look at how the scanner achieves the aformentioned function.
<pre>
<code>if(preg_match("/(200|201|202|404|403|301|302|307|308)/", $http_response_header[0]))
{ echo "Your site doesn't appear to be vulnerable! We received the correct response. " ;}

else if(preg_match("/500/", $http_response_header[0]))
{
	echo "Server may be vulnerable, running another test";</code>
</pre>


</p>
</div>
</body>
</html>
