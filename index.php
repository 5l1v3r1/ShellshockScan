<!DOCTYPE html>
<html lang="en-US">
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Bashbug aka ShellShock Vulnerability Scanner</title>   

<meta name="description" content="Unknown Error" /> 
<link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>
<link rel="shortcut icon" href="/favicon.ico">

<link href="/css/bootstrap.min.css" rel="stylesheet">
<link href="/css/customx.css" rel="stylesheet" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="/js/bootstrap.min.js"></script>
<script>
function check()
{
	var count = 1;
	var url = document.getElementById('url').value;

	//Check for NULL
	if(!url) 
	{ 
		document.getElementById("data").innerHTML="Input Field cannot be NULL";
		$('.bs-example-modal-sm').modal('show');
		count = 0;
	}
	//Check for proper URL
	if(!url.match(/^http([s]?):\/\/.*/) && count)
	{
		document.getElementById("data").innerHTML="Please use correct URL starting with http or https"
		$('.bs-example-modal-sm').modal('show');
		count = 0;
	}
	//Sending AJAX request
	if(count)
	{
		document.getElementById('loading').style.display = "block";

		if (window.XMLHttpRequest)
		{
			xmlhttp=new XMLHttpRequest();
		}
	else
	{
		xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
	xmlhttp.onreadystatechange=function()
	{
		if (xmlhttp.readyState==4 && xmlhttp.status==200)
		{
			document.getElementById("data").innerHTML=xmlhttp.responseText;
			$('.bs-example-modal-sm').modal('show');
			document.getElementById('loading').style.display = "none";
	
		}
	}
	xmlhttp.open("GET","check.php?url="+url,true);
	xmlhttp.send();
}
}
</script>

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
<div class="container">
<div class="middle">
<div class="row">
		<h1 class="title">ShellShock Scanner</h1>
		
		<h2><a href="http://web.nvd.nist.gov/view/vuln/detail?vulnId=CVE-2014-6271">CVE-2014-6271</a></h2>
		
		<h4>CVE-2014-6271 is a critical Remote Code Execution vulnerability in the very common Bash software (Bourne Again Shell). The National Vulnerability Database scores it 10/10 on the severity scale. The bug comes from the way Bash handles environmental variables.It is estimated to effect as much as 500 million machines. Currently an estimated 80% of those machines haven't been patched.<a href="https://community.rapid7.com/community/infosec/blog/2014/09/25/bash-ing-into-your-network-investigating-cve-2014-6271">More Info</a></h4>
		
		<input type="text" name="url" placeholder="URL" id="url" class="form-control"/>
		<br />
		<button name="check" onclick="check()" class="btn btn-primary btn-lg" >Check</button>
		<br /><h4>Input should direct to a website with a .cgi extension  Example : http://wesbsite.com/cgi-bin/check.cgi </h4><br />
		<br>Note: The results of this scanner shouldn't be taken as gospel and I am not liable for your use of the scanner.
		<div id="loading" style="display: none;"><img src="/img/spinner.gif" /></div>

</div>
<div class="row">
                <h2 class="title"><u>Contact</u></h2>
                <h3 class="title-description">Email me at  : <a href="mailto:milesbench@protonmail.ch">milesbench@protonmail.ch</a></h3>
</div>
</div>
</div>

<div aria-hidden="true" aria-labelledby="mySmallModalLabel" role="dialog" tabindex="-1" class="modal fade bs-example-modal-sm in" style="display: none;">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">

        <div class="modal-header">
          <button data-dismiss="modal" class="close" type="button"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
          
          
          <b id="mySmallModalLabel" class="modal-title">Info</b>
        </div>
        <div class="modal-body" id="data">
          
        </div>
      </div>
    </div>
  </div>
</body>
</html>
