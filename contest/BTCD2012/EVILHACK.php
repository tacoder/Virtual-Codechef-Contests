<?php require("../../includes/header.php"); ?><h1>Evil hacker</h1><div class="content">

<p>After reading the book Digital Fortress, one evil computer programmer was so inspired that he decided to steal information from the FBI servers themselves. He was able to create a virus, using polymorphic code mutations, just as it was written in the book, that even the FBI filters were unable to detect it. He knew about the FBI servers, that they were arranged in a X by Y grid. The virus was self-propagating, which means he have to release it to only 1 computer to affect the whole grid. The virus made complex hacks to break down firewall and other securities, and that too without raising any security alarm, so that it took almost 1 hour to break into a server. After it affects a server, it spreads to nearby servers adjacent to it and start hacking them, which takes another hour on their own:</p>
<p>Go fellow hackers! Given X and Y, It's our task to find the minimum time to shut down all the FBI servers.</p>
<h3>Input</h3>
<p>The first line contains A, the number of test cases. Each of the next A lines contain two integers X and Y.<br />
<br />A &lt;= 1,000<br />
<br />0 &lt;= X &lt;= 10,00,000<br />
<br />0 &lt;= Y &lt;= 10,00,000</p>
<h3>Output</h3>
<p>The minimum time in hours it takes to shut down all servers in the grid.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 1
3 3

<b>Output:</b>
2
3</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajatkhanduja">rajatkhanduja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-08-2012</td>
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