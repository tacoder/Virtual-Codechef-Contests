<?php require("../../includes/header.php"); ?><h1>Digits Forest</h1><div class="content">

<p>Given a simple undirected graph containing N vertices numbered 1 to N, each vertex containing a digit from {1,2,..7}. Starting at the vertex 1 with an empty string S, we travel through some vertices (with no limitations) to the vertex N. For every vertex on the way, we add the respective digit to the right of the string S. At last we get S as a decimal integer. You are requested to find such a way satisfying S is divisible by all of its digits, and the sum of digits of S must be as small as possible.
</p>
<h3>Input</h3>
<p>There are several test cases (fifteen at most), each formed as follows:</p>
<ul>
<li>The first line contains a positive integer N (N ≤ 100).</li>
<li>The second line contains N digits (separated by spaces), the i-th digit is the value of the i-th vertex.</li>
<li>N last lines, each contains N values of {0, 1} (separated by spaces), the j-th value of the i-th line is equal to 1 if there is an edge connecting two vertices (i, j), otherwise 0.</li>
</ul>
<p>The input is ended with N = 0.
</p>
<h3>Output</h3>
<p>For each test case, output on a line the minimum sum of digits found, or <b>-1</b> if there's no solution.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1 2 1 4
0 1 1 1
1 0 0 1
1 0 0 1
1 1 1 0
0

<b>Output:</b>
7
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/subra">subra</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-08-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>