<?php require("../../includes/header.php"); ?><h1>Subnetting</h1><div class="content">

<p> A subnetwork, or subnet, is a logically visible subdivision of an IP network. The practice of dividing a network into sub-networks is called subnetting.</p>
<p>All computers that belong to a subnet are addressed with a common, identical, most-significant bit-group in their IP address. This results in the logical division </p>
<p>of an IP address into two fields, a network or routing prefix and the rest field. The rest field is a specific identifier for the computer or the network </p>
<p>interface.</p>
<p>The Network Administrator in our organization is on leave and we need to subnet our IP networks so that there are ‘m’ additional networks. Your job is to write a </p>
<p>program that provides a correct subnet mask for the given IP Address.</p>
<p>Problem Setter: <a href="//www.facebook.com/Aasthik">Vishal Gupta</a></p>
<h3>Input</h3>
<p>Each input line contains an IP Address and ‘m’ -  the number of additional networks. </p>
<h3>Output:</h3>
<p>For each corresponding IP and ‘m’ Output the subnet mask in a new line.</p>
<pre>

<b>Sample Input:</b>
204.175.220.0 5
129.150.0.0 11
192.168.100.20 17

<b>Sample Output:</b>
255.255.255.224
255.255.240.0
255.255.255.248

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ganesha">ganesha</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>