<?php require("../../includes/header.php"); ?><h1>Place the balloon</h1><div class="content">

<p>Given a set of points on a plane, find the largest possible disc which does not "cover" any of these points (i.e., they can lie on the boundary of the disc, but not inside it) and which is constrained by this set of points (i.e., the disc cannot be moved to infinity along a continuous trajectory).</p>
<h3>Input</h3>
<p>Input will be consist of several test cases. First will be given 1≤t≤20, then number of testcases. Then t testcases follow. Each testcase is of following form. First, 1≤n≤50000, the number of points. The following n lines define the points; the i-th line contains two integers: -10000≤x<sub>i</sub>,y<sub>i</sub>≤10000</p>
<p>.</p>
<h3>Output</h3>
<p>Output exactly one value: the radius of largest possible disc satisfying the given property. If there is no such disc, output the value -1. Answers should be exact up to 10<sup>-6</sup></p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2
3
0 1
-1 -1
1 -1
4
0 1
-1-1
1 -1
0 0

<strong>Output:</strong>
1.25
-1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-12-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>