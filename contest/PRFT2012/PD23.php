<?php require("../../includes/header.php"); ?><h1>Evaluate the polynomial</h1><div class="content">

<p>Your task consists of evaluate a polynomial of degree n (0 &lt;= n &lt;= 999) represented by its n+1 coefficients of the form:<br />
pn(x) = cnxn + cn-1xn-1 + … + c2x2 + c1x + c0</p>
<p>in each one of the k (1 &lt;= k &lt;= 100) points x1, x2, …, xk. The coefficients of the polynomial and the values where they will be evaluated are integers in the interval [-100, 100] that guarantees that the polynomial's evaluation is at the most 263 – 1.</p>
<h3>Input</h3>

<p>
There will be multiple test cases, each one with 4 lines that are described below</p>
<p>n: degree of polynomial.</p>
<p>cn cn-1 … c2 c1 c0: coefficients of the polynomial separated by a single space.</p>
<p>k: number of points to evaluate the polynomial.</p>
<p>x1 x2 … xk-1 xk: points to evaluate the polynomial separated by a single space.</p>
<p>The final test case is a single line where n = -1 and this case should not be processed.</p>
<h3>Output</h3>

<p>
For each test case you should print k + 1 lines of output, the very first line containing the case number and the following k lines with the result of the polynomial's evaluation in each one of the k given points. See the sample.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>

2
1 -2 -1
5
0 1 -1 2 -2
3
2 1 -2 -1
4
0 -1 2 -2
-1

<b>Output:</b>

Case 1:
-1
-2
2
-1
7
Case 2:
-1
0
15
-9

</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mani_yadav">mani_yadav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-02-2012</td>
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