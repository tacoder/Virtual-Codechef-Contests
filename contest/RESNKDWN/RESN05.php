<?php require("../../includes/header.php"); ?><h1>Summing Subsets</h1><div class="content">

<p>
Let G(S) denote the sum of the elements of set S and F(n) be the sum of G(s) for all subsets of the set consisting of the first n natural numbers. </p>
<p>For example, F(3) = (1) + (2) + (3) + (1 + 2) + (1 + 3) + (2 + 3) + (1 + 2 + 3) = 24.</p>
<p>Given n, calculate F(1) + F(2) + ... + F(n).</p>
<h3>Input</h3>
<p>
The first line contains the number of test cases T (&lt;= 1000). Each of the next T lines contains an integer n. (1 &lt;= n &lt;= 1000000000).</p>
<h3>Output</h3>
<p>
Output T lines, one corresponding to each test case. Since the answers can get very big, output the answer modulo 8388608</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
2
3
<b>Output:</b>
1
7
31
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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