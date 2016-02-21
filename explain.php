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
	<h1>An attempt at explaining Shellshock in Laymans terms</h1>
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

	<div style="padding-top:25px; padding-left:300px; padding-right:300px; padding-bottom:30px; " align="left">
	<p>

	<h3>
	As the title suggests, this is an attempt at explaining Shellshock to people who don't have a background in computing. Obviously it won't be technically accurate and may not make sense, but bear with me.
	</h3>
	<br>
	So one of the first things you need to understand is the concept of <strong>Variables</strong> and <strong>Environmental Variables</strong>.
	<br>
	<br>
	<ol>
		<li>Put simply a <strong>Variable</strong> is a way of storing information. For example I could tell the computer that my variable named "pi" has a value of "3. 1415926535" or that the variable called "name" has a value of "miles". This makes programming easier, for example if i was to write a program that calculates the circumfrence and area of a circle, I would have to use pi a lot as C = 2piR and A = piR^2 . So instead of typing out 3. 1415926535 every time, at the <strong>start of the program i would tell the computer: Variable "Pi" has a value of "3. 1415926535" and the computer would remember this. So instead of typing "3. 1415926535" every time i need to use pi, i type "Pi" and the computer knows what i want!</strong></li>
		<br>
		<li>Now an <strong>Environmental Variable</strong> is similar but is slightly more complex than a regular variable. A normal variable is only present when the program that created it is running. An <strong>Environmental Variable</strong> is one that will last even if the software shuts down. Chances are you are utilising environmental variables wihtout knowing it! In the more popular operating systems Windows and Mac, your <strong>Environmental Variables</strong> would be remembering what your default printer is, or your favourite web browser or what program should be opening ".doc" files. In short an <strong>Environmental Variable</strong> is a variable that simplifies the way we use our applications and Operating Systems.</li>

	</ol>
	The next thing to understand is what a <strong>Vulnerability</strong> is and how it is different to a Virus, Trojan, Worm.
	<ol>
		<li> Vulnerabilities come from a bug in a piece of software. A bug is simply a mistake or error that the programmer didn't intend. It may lead to obvious things like the program not working or subtle things, like leaving the program open too attack. A vulnerability is simply something that leaves the software and the user at risk of attack because of a mistake made by the programmer. These should not be confused with Viruses, Trojans and Worms as these are generally programs that are sent to the user that have been <strong>developed with malicious intent</strong> that allow an attacker to access your system. Whereas a vulnerability is a mistake by the well-intentioned programmer that accidentally leaves user at risk of attack.</li>

	</ol>
	Now for the important part, we need to understand what piece of software is vulnerable and why?
	<ol>
		<li>The vulnerable software in this case is <strong>Bash</strong>. Bash stands for Bourne Again SHell. <br>
		Bash is what we call the <strong>Command Line Interface</strong> for Unix operating systems. Unix includes Linux and Mac OS X systems. If you have ever seen a TV show or a Movie representing Coding or Hacking, it's that, the plain text interface that looks very complicated(it's not really). The Shellshock vulnerability comes from a flaw in the way Bash handles environmental variables. As a security feature the program was designed to only allow environmental variables to be saved as text (i.e. you can't run or execute anything in an environmental variable). In Laymans terms the Shellshock vulnerability is that an attacker is able to trick Bash into running the code that is saved as an environmental variable. This means an attacker who successfuly exploits this vulnerability has access to your system and can do things like: Delete all your files or Take your files or Record your bank account login or Access your webcam.

		</li>
		</ol>
	<br>
	<br>
	I hope this has given you a firm understanding of the Shellshock vulnerability. Dont forget to run this command in your Terminal:
	<div align="center">
	<br>
	<code>env x='() { :;}; echo vulnerable' bash -c "echo this is a test</code> <br>
	If it says "vulnerable" after running, you're vulnerable! If you get some errors, you should be in the clear :)
	</div>
	
	</p>


	</div>
	</body>