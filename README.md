# ShellshockScan
Essentialy what this scanner does is send a specially crafted http header to a website, if that website gives us a 200, 201, 202, 404, 403, 301, 302, 307 or 308 error that means it has rejected our header and therefore is unlikely to be vulnerable.


# About Shellshock
CVE-2014-6271, otherwise affectionately known as Shellshock, is potentially the most devastating vulnerability we've seen this year. Shellshock is a bug in Bash (Bourne Again Shell) and has to do with the handling of environmetnal variables. Bash is a very common piece of software found in unix systems, therefore Linux users may be vulnerable and some OS X users may also be vulnerable. Windows users using CYGWIN are vulnerable as well, but bash is not native to windows so must windows users have nothing to fear. The bug spawns from the fact that Bash doesn't check for trailing strings in function definitions for environmental variables. So instead of being treated as plain text they are treated as Bash commands. As many as 50 million machines are estimated to be vulnerable to Shellshock. This is a remote code execution vulnerability which means if exploited, a hacker will be able to execute their own (potentially malicious) code on the machine. The United States National Vulnerability Database classified this as a critical vulnerability with a 10/10 on the severity scale. 

# NVD Explanation
GNU Bash through 4.3 processes trailing strings after function definitions in the values of environment variables, which allows remote attackers to execute arbitrary code via a crafted environment, as demonstrated by vectors involving the ForceCommand feature in OpenSSH sshd, the mod_cgi and mod_cgid modules in the Apache HTTP Server, scripts executed by unspecified DHCP clients, and other situations in which setting the environment occurs across a privilege boundary from Bash execution, aka "ShellShock." NOTE: the original fix for this issue was incorrect; CVE-2014-7169 has been assigned to cover the vulnerability that is still present after the incorrect fix.


# Contact
milesbench@protonmail.ch
