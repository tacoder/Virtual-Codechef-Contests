<?php require("../../includes/header.php"); ?><h1>Classify</h1><div class="content">

<p>Internet Protocol version 4 (IPv4) is the fourth revision in the development of the Internet Protocol (IP) and it is the first version of the protocol to be widely deployed. Together with IPv6, it is at the core of standards-based internetworking methods of the Internet. IPv4 addresses may simply be written in any notation expressing a 32-bit integer value, but for human convenience, they are most often written in dot-decimal notation, which consists of the four octets of the address expressed separately in decimal and separated by periods.</p>
<p>IPv4 Addresses have been divided into 5 classes as follows:<br/><br />
Class A : 1.0.0.0 - 126.255.255.255<br/><br />
Class B : 128.0.0.0 - 191.255.255.255<br/><br />
Class C : 192.0.0.0 - 223.255.255.255<br/><br />
Class D : 224.0.0.0 - 239.255.255.255<br/><br />
Class E : 240.0.0.0 - 255.255.255.254<br/>
</br/></br/></br/></br/></br/></br/></p>
<p>You task is to write a  program which takes an IP address as input and prints the Class to which it belongs.</p>
<p>Problem Setter: <a href= " http://bit.ly/VG_MSP_Interview" >Vishal Gupta</a></p>
<h3>Input</h3>
<p>The input will contain the number of Test Cases 'T' where 0&lt; T &lt;1000; followed by T Lines containing IPv4 address in each lines. </p>
<h3>Output</h3>
<p>You have to print the class of the given IP address in new line. Print 'Invalid' incase where the IP Address does not belong to any class.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
192.168.102.11
10.87.78.0
189.09.89.98
225.78.98.89
25.98.268.09
0.0.0.0

<b>Output:</b>
Class C
Class A
Class B
Class D
Invalid
Invalid
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>