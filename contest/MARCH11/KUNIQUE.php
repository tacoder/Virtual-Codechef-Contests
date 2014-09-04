<?php require("../../includes/header.php"); ?><h1>K-Unique Sequence</h1><div class="content">

<p>A sequence of N integers is called K-unique if, when it is split into N/K subsequences of K contiguous elements, each subsequence consists of K distinct integers.</p>
<p>For example, consider this sequence of 6 integers.<br />
(2, 10, 2, 8, 3, 6)</p>
<p>This sequence is 2-unique, because when you split it into 3 subsequences each of 2 contiguous elements as below,<br />
(2, 10), (2, 8), (3, 6),</p>
<p>each subsequence consists of 2 distinct integers.</p>
<p>You are given a sequence of N integers, and a positive integer K. Find a permutation of the sequence that is K-unique.</p>
<h3>Input</h3>
<p>The first line contains a single integer T, the number of test cases. T test cases follow. The first line of each test case contains two integers N and K. The next line contains a sequence of N integers a<sub>i</sub>, where a<sub>i</sub> is the i-th element of the sequence.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing a permutation of the sequence that is K-unique. The elements of the sequence should be separated by a single space. If there are several solutions, output the lexicographically smallest one. If there is no solution, output -1.</p>
<h3>Constraints</h3>
<ul>
<li>1 &lt;= T &lt;= 5</li>
<li>1 &lt;= N &lt;= 50000</li>
<li>1&lt;= K&lt;= N</li>
<li>N will be divisible by K</li>
<li>0 &lt;= a<sub>i</sub> &lt;= 1000000000</li>
</ul>
<h3>Example</h3>
<p><b>Input:</b></p>
<pre>
3
1 1
42
4 2
4 7 7 7
6 2
2 10 2 8 3 6
</pre><p>
<b>Output:</b></p>
<pre>
42
-1
2 3 2 6 8 10
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fushar">fushar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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