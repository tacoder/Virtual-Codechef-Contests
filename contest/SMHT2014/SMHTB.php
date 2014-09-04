<?php require("../../includes/header.php"); ?><h1>Gautam Vadai</h1><div class="content">
<h3>Problem Statement</h3>
<p> One day Gautam Khan was very eager to eat <a href="http://en.wikipedia.org/wiki/Vada_(food)"> Vadai. </a> </p>
<p>He wanted to eat as much vada as possible. There were infinite vadais in front of him which are arranged in a line and numbered from 1 (1 2 3 4 .....)and he decided to eat them in <b>N</b> steps.In each step he can eat <b>X</b> vadais , X is between 0 to N^2 vadai (eg N=2 , then he can eat 0 vadai or 1 vadai or 2 vadais or 3 vadais or 4 vadais) and after eating X vadais , he will sleep in the place where the last vadai in that step was kept( i.e., At each step , after eating the vadais he will sleep at the place where he ate the last vadai). But one of the vadai is rotten which is at position <b>M</b> and he will not sleep at that place but he can still eat it.Find maximum no of vadais Gautam can eat without sleeping at the place of rotten vadai at M.</p>
<h3>Input</h3>
<p>The first Line contains T , the no of test cases followed by T lines.<br />
  Each line has 2 integers N,M. </p>
<h3>Output</h3>
<p> Output has T lines ,with each line containing no of maximum vadai gautam can eat .Since answer A can be too large, print A modulo 1000000007.</p>
<h3>Example</h3>
<h3>Input</h3>
<pre>
5
1 1		
2 2			
3 2			
4 3			
</pre><h3>Output</h3>
<pre>
0
5
14
30
</pre><h3>Constraints</h3>
<pre>
 1&lt;= N &lt;=2,000
 1&lt;= M &lt;= 4,000,000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/arun08">arun08</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-01-2014</td>
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