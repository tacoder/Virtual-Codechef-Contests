<?php require("../../includes/header.php"); ?><h1>A Negative Base Problem</h1><div class="content">

<p>We knows about base->2 (binary) integers and base->10 (decimal) integers, and various other positive bases. But what about negative bases. OK! lets talk about the "base-> -2". An integer n written in base -2 is a sequence of digits written right-to-left. Each of which is either 0 or 1 (no negative digits!), and the following equality must hold:<br />
n = b0 + b1(-2) + b2(-2)2 + b3(-2)3 + ...<br />
The cool thing is that every integer (including the negative ones) has a unique "base-> -2" representation, with no minus sign required. Your task is to find this representation.</p>
<h3>Input</h3>
<p>The Input consists of the number of test cases. Each one is a line containing a decimal integer n, in the range from -1,000,000,000 to 1,000,000,000, excluding 0. Terminate the input with n=0.</p>
<h3>Output</h3>
<p>For each test case, output one line containing base -2 representation of the input number.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
7
-2
0

<b>Output:</b>
1
11011
10
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>