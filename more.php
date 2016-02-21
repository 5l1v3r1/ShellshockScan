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
	<h1>Further Info about Shellshock</h1>
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
	<body>
	</head>


	<div style="padding-top:25px; padding-left:300px; padding-right:300px; padding-bottom:30px; " align="center">



	<h2>General Overview</h2>

	<p>
	CVE-2014-6271, otherwise affectionately known as Shellshock, is potentially the most devastating vulnerability we've seen this year. Shellshock is a bug in Bash (Bourne Again Shell) and has to do with the handling of environmetnal variables. Bash is a very common piece of software found in unix systems, therefore Linux users may be vulnerable and some OS X users may also be vulnerable. Windows users using CYGWIN <strong>are</strong>  vulnerable as well, but bash is not native to windows so must windows users have nothing to fear. The bug spawns from the fact that Bash doesn't check for trailing strings in function definitions for environmental variables. So instead of being treated as plain text they are treated as Bash commands. As many as 50 million machines are estimated to be vulnerable to Shellshock. This is a remote code execution vulnerability which means if exploited, a hacker will be able to execute their own (potentially malicious) code on the machine. The United States National Vulnerability Database classified this as a critical vulnerability with a 10/10 on the severity scale. <br> 
	<br>Tom Scott made a greeat video explaining Shellshock without too much technical prowess required too understand. Worth a watch!<br>

	<object width="420" height="315"
	data="https://www.youtube.com/v/aKShnpOXqn0">
	</object>
	</p>

	<h2>A Technical Explanation from NVD</h2>
	<p>
	Quote:
	<br>
		GNU Bash through 4.3 processes trailing strings after function definitions in the values of environment variables, which allows remote attackers to execute arbitrary code via a crafted environment, as demonstrated by vectors involving the ForceCommand feature in OpenSSH sshd, the mod_cgi and mod_cgid modules in the Apache HTTP Server, scripts executed by unspecified DHCP clients, and other situations in which setting the environment occurs across a privilege boundary from Bash execution, aka "ShellShock." NOTE: the original fix for this issue was incorrect; CVE-2014-7169 has been assigned to cover the vulnerability that is still present after the incorrect fix.

	</p>
	<h2>Testing if you're Vulnerable</h2>

	Run the command:<br> <code>env x='() { :;}; echo vulnerable' bash -c "echo this is a test</code><br> If it prints "vulnerable" on the next line, you are vulnerable and should update your system. If you get a bunch of errors, you should be in the clear.

	<h2>Background</h2>




	<h2>Why this is worse than Heartbleed</h2>
	There has been a lot of discussion in the media and in forums over whether or not Shellshock is a greater/worse/cooler/larger vulnerability then Heartbleed. My completely valuable and sought after opinion is Yes, Shellshock is more of risk. Shellshock and Heartbleed are estimated to effect approximately the same amount of devices, both in machines that store sensitive information and both bugs come from functions that were meant to make life easier for us. So there is only one substantial difference between Heartbleed and Shellshock, the outcome of exploitation. When exploiting Heartbleed you will send lots of commands and hopefully the server will give you some data that it shouldn't, such as logins. When exploiting Shellshock, if successful, the attacker can do whatever they want with the system, including harvest credentials. I believe Shellshocks is a greater risk simply because it is a Remote Code Execution bug compared to Heartbleed being an Information Disclosure bug.

	<h2>Potential Risks</h2>
	We are past the stage of hypothesising and theorising, exploits are already "out in the wild" and easily obtainable on the internet. So the main thing we are now worried about is somebody turning this into a worm. That is a possibility as it is an RCE. There is already a botnet made from Shellshock victims that has attacked DOD servers.

	<h2>An Infographic - Norton</h2>
	<img src="/img/shellshock_infographic.png"><br>
	© community.norton.com

	<h2>External Links</h2>
	The scanner is forked from <a href="https://github.com/dhaval17/ShellShock">https://github.com/dhaval17/ShellShock</a> . Thanks a lot! :) <br>

	<a href="http://web.nvd.nist.gov/view/vuln/detail?vulnId=CVE-2014-6271">http://web.nvd.nist.gov/view/vuln/detail?vulnId=CVE-2014-6271</a><br>
	<a href="https://community.rapid7.com/community/infosec/blog/2014/09/25/bash-ing-into-your-network-investigating-cve-2014-6271">https://community.rapid7.com/community/infosec/blog/2014/09/25/bash-ing-into-your-network-investigating-cve-2014-6271</a><br>
	<a href="http://community.norton.com/blogs/norton-protection-blog/shellshock-latest-mac-osx-and-linux-vulnerabilty%E2%80%94and-what-it-means-you">http://community.norton.com/blogs/norton-protection-blog/shellshock-latest-mac-osx-and-linux-vulnerabilty%E2%80%94and-what-it-means-you </a>
	<a href=" "> </a>
	<a href=" "> </a>


	</body>
	</div>




















