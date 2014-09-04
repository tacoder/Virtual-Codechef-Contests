<?php require("../../includes/header.php"); ?><h1>Collinear Points</h1><div class="content">

<p>Given N points on the plane, represented as (xi, yi) where both xi and yi are integers, you need to tell us the maximum number of distinct points that lie on a straight line.<br />
<br /><br />
Your algorithm needs to be really efficient.</p>
<h3>Input</h3>
<p>The first line of the input contains the number of test cases T, atmost 10. Each of the next T lines contains the description of a single test case. Each test case begins with the value of N, the number of points in the plane, at most 700. Each of the next N lines contains two space separated integers which specify the coordinates of the points in the plane. Each point (xi, yi) satisfies -1000 &lt;= xi, yi &lt;= 1000.</p>
<h3>Output</h3>
<p>For each test case in the input, print on a new line the maximum number of points that lie on a straight line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5
1 0
2 1
3 2
4 4
-8 -8

<b>Output:</b>
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/moneymachine">moneymachine</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>