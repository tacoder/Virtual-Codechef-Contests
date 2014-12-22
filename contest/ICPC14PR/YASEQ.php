<?php require("../../includes/header.php"); ?><h1>Yet Another Sequence</h1><div class="content">

<p>
You are given the first N terms of a sequence.<br />
The remaining terms of the sequence are defined as follows:</p>
<blockquote><p>
A [ i ] = number of j such that 0 ≤ j &lt; i and A[ j ] ≥ i - j
</p></blockquote>
<p>The sequence is indexed starting at 0.<br />
The first N terms of the sequence will each be equal to N-1, N, or N+1.</p>
<p>In addition to the first terms of the sequence, you will be given a number of queries.<br />
For each query you are to calculate the value of the sequence at that index.</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.<br />
Each test case begins with 2 integers N and Q on a line,<br />
followed by a line with N integers (each equal to N-1, N, or N+1),<br />
then a line with Q non-negative integers.</p>
<h3>Output</h3>
<p>For each test case, output Q integers on a line, one per query,<br />
indicating the respective element of the sequence.</p>
<h3>Sample Input</h3>
<pre>3

3 4
3 3 3
100 1000 1000000 1

4 11
3 4 4 5
0 1 2 3 4 5 6 7 8 9 10

5 4
5 6 5 6 5
6 14 22 29
</pre><h3>Sample Output</h3>
<pre>3 3 3 3
3 4 4 5 3 4 4 4 4 4 4
5 5 5 5
</pre><h3>Constraints</h3>
<ul>
<li>T≤100</li>
<li>0&lt;N≤100000</li>
<li>0&lt;Q≤100000</li>
<li>Each query will be between 0 and 10^15, inclusive</li>
<li>The sum of N+Q over all test cases will not exceed 500000</li>
</ul>
<p><em>Warning: Large input/output.</em></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>7-09-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>