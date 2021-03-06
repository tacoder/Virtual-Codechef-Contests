<?php require("../../includes/header.php"); ?><h1>Building Ports</h1><div class="content">

<p>N ports are to be constructed on the bytelandian river. Since trade occurs only along a Y miles stretch of the river, the distance between the first and  the last port must be Y. </p>
<p>To optimize the ship movement between important ports, the distance between any two consecutive ports has been fixed to be within a range of possible distances.<br />
Also, distance between two consecutive ports can only be an integer number of miles. </p>
<p>As a programmer you have been assigned the job of evaluating the number of different possible arrangements of ports modulo 1000000007.</p>
<h3>Input</h3>
<p>First line of input contains t. The number of test cases. (t&lt;100)</p>
<p>First line of each test case contains two integers: N, the number of ports (N&lt;=20) and Y, the ditance between the first and the last port. (Y&lt;100000)</p>
<p>Next (N-1) lines of the test case contains the range of distances between consecutive ports, with ith line giving two integers, the minimum and maximum gap between (i-1)th and ith port.</p>
<h3>Output</h3>
<p>Print one of output for each test case which is the number of possible arrangements modulo 1000000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2 4
0 3
0 3


<b>Output:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mandark">mandark</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 2 sec</td>
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