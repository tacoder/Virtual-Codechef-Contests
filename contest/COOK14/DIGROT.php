<?php require("../../includes/header.php"); ?><h1>Digit Rotation</h1><div class="content">

<p>For any positive integer, we define a digit rotation as either moving the first digit<br />
to the end of the number (left digit rotation), or the last digit to the front of the number (right digit rotation).<br />
For example, the number 12345 could be left digit rotated to 23451, or right digit rotated to 51234.<br />
If there are any leading zeros after digit rotation, they must be removed.<br />
So 10203 could be left digit rotated to 2031, then left digit rotated again to 312.<br />
Given an integer N, determine the largest integer that can result from performing a series of one or more<br />
digit rotations on N.</p>
<h3>Input</h3>
<p>Input will begin with an integer T (at most 1000), the number of test cases.<br />
Each test case consists of a positive integer N&lt;100000000 (10^8) on a line by itself.</p>
<h3>Output</h3>
<p>For each test case, print the largest integer that can result from performing one or more<br />
digit rotations on N.</p>
<h3>Sample Input</h3>
<pre>6
12345
54321
10901
211011
7
90
</pre><h3>Sample Output</h3>
<pre>51234
54321
11090
211011
7
9
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-09-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>