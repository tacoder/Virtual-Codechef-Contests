<?php require("../../includes/header.php"); ?><h1>Traversing Grid</h1><div class="content">

<p>
Given 2 points in 2 dimensional space (xs,ys) and (xd,yd), your task is to find whether (xd,yd) can be reached from (xs,ys) by making a sequence of zero or more operations.<br /><br />
From a given point (x, y), the operations possible are:<br /><br />
	a) Move to point (y, x)<br /><br />
	b) Move to point (x, -y)<br /><br />
	c) Move to point (x+y, y)<br /><br />
	d) Move to point (2*x, y)<br /></p>
<h3>Input</h3>
<p>
The first line of input contains T, the number of test cases. T lines follow, one for each test case.<br />
For each test case, the input contains one line denoting the 4 integers xs, ys, xd, yd </p>
<h3>Output</h3>
<p>
Output T lines, one for each test case. For each test case, output "YES" if (xd,yd) is reachable from (xs,ys) and "NO" otherwise. (quotes for clarity)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
1 1 2 2

<b>Output:</b>
YES

<b>Constraints:</b>
T &lt;= 25
-10^10 &lt;= xs, ys, xd, yd &lt;= 10^10
Note that, although the input values are constrained by the above inequality, the coordinates of the points
at the intermediate steps need not be.

</pre><p><b>Explanation:</b></p>
<p>Test case 1: We can move in the following manner: (1,1) -> (2,1), using the operation (x,y) -> (2*x,y). Then, move from (2,1) -> (1,2), using the operation (x,y) -> (y,x). Finally use the operation (x,y) -> (2*x,y) to move from (1,2) -> (2,2).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/suh_ash2008">suh_ash2008</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-02-2011</td>
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