<?php require("../../includes/header.php"); ?><h1>Primes in the GCD table</h1><div class="content">

<p>Johnny has created a table which encodes the results of some operation -- a function of two arguments. But instead of a boring multiplication table of the sort you learn by heart at prep-school, he has created a GCD (greatest common divisor) table! So he now has a table (of height a and width b), indexed from (1,1) to (a,b), and with the value of field (i,j) equal to gcd(i,j). He wants to know how many times he has used prime numbers when writing the table.</p>
<h3>Input</h3>

<p>First, t ≤ 10, the number of test cases. Each test case consists of two integers, 1 ≤ a,b &lt; 10<sup>7</sup>.</p>
<h3>Output</h3>

<p>For each test case write one number - the number of prime numbers Johnny wrote in that test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
10 10
100 100

<b>Output:</b>
30
2791
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>