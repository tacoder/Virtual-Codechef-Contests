<?php require("../../includes/header.php"); ?><h1>Alternating Permutations</h1><div class="content">

<p>
You are given K indices, A[1], A[2], ... , A[K].</p>
<p>A[1] &lt; A[2] &lt; ... &lt; A[K].</p>
<p>A[1] = 1 and A[K] = N.</p>
<p>A permutation of the numbers between 1 and N is called valid if :</p>
<p>The numbers in the permutation between indices A[1] and A[2] (inclusive) form an increasing sequence, the numbers in the permutation between indices A[2] and A[3] (inclusive) form a decreasing sequence, those between A[3] and A[4] (inclusive) form an increasing sequence and so on.</p>
<p>Count the number of valid permutations.</p>
<h3>Input:</h3>
<p>  There will be multiple test cases. The first line contains the number of test cases T.<br />
There follow 2*T lines, 2 lines for each test case. The first line for each test case contains the numbers N and K. The second line contains K space seperated numbers, ie. A[1] to A[K].</p>
<h3>Output:</h3>
<p>Output T lines, one for each test case.  All answers should be output modulo 1000000007.</p>
<h3>Constraints :</h3>
<p>T &lt;= 111</p>
<p>2 &lt;= N &lt;= 20000</p>
<p>2 &lt;= K &lt;= 22</p>
<p>K &lt;= N</p>
<p>A[1] &lt; A[2] &lt; ... &lt; A[K].</p>
<p> A[1] = 1 and A[K] = N.</p>
<p>Time Limit : 20 seconds.</p>
<h3>Sample Input :</h3>
<pre>
3
3 3
1 2 3
4 3
1 3 4
10 6
1 2 5 7 8 10
</pre><h3>Sample Output :</h3>
<pre>
2
3
6166
</pre><h3>Note :</h3>
<p>For the first test case, </p>
<p>(1 3 2) and (2 3 1) are the valid permutations.</p>
<p>For the second test case,</p>
<p>(1 2 4 3), (1 3 4 2) and (2 3 4 1) are the valid permutations.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-11-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>20 sec</td>
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