<?php require("../../includes/header.php"); ?><h1>Product of divisors</h1><div class="content">

<h3>A tutorial for this problem is now available on our blog. Click <a href="http://blog.codechef.com/2009/08/17/tutorial-for-problem-product-of-divisors//">here</a> to read it. </h3>
<p>Being in love with number theory, Johnny decided to take a number theory course. On the first day, he was challenged by his teacher with the following problem: given a number N, compute the product of its positive divisors. Johnny is desperate to impress his new teacher so he asks you for help.</p>
<p>In this problem, the divisors of N do not include the number N itself. For example, if N=12, the divisors of N (excluding N) are 1, 2, 3, 4, and 6. Thus, the product of divisors is 1x2x3x4x6=144. Since the result may be very large, if the result has more than 4 decimal digits, Johnny only needs to compute the <b>last 4 digits</b> of it.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 300,000). Then t test cases follow.</p>
<p>Each test case contains a single integer N (1 ≤ N ≤ 500,000) whose product of divisors needs to be computed.</p>
<h3>Output</h3>
<p>For each test case, print a single line containing the corresponding result of that test case.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
6
3
4
12
25
957
10000

<b>Output</b>
1
2
144
5
7493
0000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>2 sec</td>
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