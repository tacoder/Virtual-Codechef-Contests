<?php require("../../includes/header.php"); ?><h1>BITWO</h1><div class="content">
<p>Tanu's favourite number is 2. He only likes number made entirely of 2, like 2,22,222,2222,22222, etc. So much so that he is willing to change base of the number from 10 to a different one to make it entirely of 2s.</p>
<p>Now he wants to know which numbers are made entirely of 2s in atleast 2 different bases. Can you help him?</p>
<h3>INPUT</h3>
<p>First line contains Q, number of testcases. Then Q lines follow.<br />Each testcase is represented by two integers A and B.</p>
<h3>OUTPUT</h3>
<p>For each query, print a single line containing the number of integers in the inclusive range [A,B] that are made entirely of 2s in atleast 2 different bases.</p>
<h3>CONSTRAINTS</h3>
<pre>1≤Q≤10<sup>5</sup><br />1≤A,B≤10<sup>12</sup></pre><h3>SAMPLE INPUT</h3>
<pre>2<br />1 42<br />2 2</pre><h3>SAMPLE OUTPUT</h3>
<pre>3<br />1</pre><h3>SAMPLE EXPLANATION</h3>
<p>First three number of the given type are 2, 26 and 42. Thus the range [1,42] has 3 and range[2,2] has 1 such integers.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/techfest2k15">techfest2k15</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>