<?php require("../../includes/header.php"); ?><h1>Sereja and Vectors</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/mandarin/SEAVEC.pdf"> Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV13/russian/SEAVEC.PDF"> Russian</a>.</h3>
<p>Sereja have <b>N</b> vectors <b>v[1], v[2], ..., v[N]</b>. Every vector is given by <b>K</b> numbers <b>(x[1], x[2], ..., x[K])</b>. Sereja want to choose few vectors, such that sum of those vectors will be smaller than or equal to vector A. </p>
<p>In other word you should find such numbers: <b>i[1] &lt; i[2] &lt; ...&lt; i[m]</b>, such that <b>v[i[1]]+v[i[2]]+...+v[i[m]] &lt;= A</b>.</p>
<p>Vector <b>Q</b> &lt;= vector <b>W</b> when <b>Q.x[1] &lt;= W.x[1], Q.x[2] &lt;= W.x[2], ..., Q.x[K] &lt;= W.x[K]</b>.</p>
<p>Help Sereja, find best subset of vectors in such way that all conditions will hold.</p>
<p> </p>
<h3>Input</h3>

<p>First line contain integer <b>T</b> - number of testcases.</p>
<p>First line of each testcase contain integer <b>N</b> - number of vectors and <b>K</b> - number of integers that contain every vector. Next <b>N</b> lines contain <b>K</b> numbers - next vector coordinates <b>(x[1], x[2], ..., x[K])</b>. Last line of input contain vector <b>A</b>, that also given by <b>K</b> numbers.</p>
<p> </p>
<h3>Output</h3>

<p>For each testcase in first line should contain number <b>q</b> - number of vectors in your subset.  Next line should contain <b>q</b> numbers - coordiates of vector: <b>1 &lt;= i[1] &lt; i[2] &lt; ... &lt; i[q] &lt;= N </b>. If <b>q</b> equal to 0, you shouldn't output second string.</p>
<p> </p>
<h3>Constraints</h3>

<p><b>1 &lt;= T &lt;= 10</b></p>
<p><b>1 &lt;= N*K &lt;= 100000</b></p>
<p>all corrdiantes are positive integers, that are not exceeded 1000000000.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2
1 2
2 1
1 1
3 3

5 3
10 20 30
30 20 10
10 30 10
10 30 40
40 10 20
80 60 40

1 1
10
20

<b>Output:</b>
2
1 2

3
2 3 5

0
</pre><h3>Scoring</h3>
<p>Lets <b>Sum</b> will be next value: <b>(A.x[1] - v[i[1]].x[1] - v[i[2]].x[1] - ... - v[i[q]].x[1]) + (A.x[2] - v[i[1]].x[2] - v[i[2]].x[2] - ... - v[i[q]].x[2]) + ... + (A.x[k] - v[i[1]].x[k] - v[i[2]].x[k] - ... - v[i[q]].x[k])</b></p>
<p> </p>
<p>Lets S will be the sum of values <b>q/(Sum + 1)</b> per each testcase. You should maximize <b>S</b>.<br />
The score will be counted as <b>S/B</b>, where <b>S</b> is your sum, and <b>B</b> will be the best sum.</p>
<p>We have 10 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 2 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 8 test files. </p>
<h3>Testcase generation</h3>
<p>There are tests with different <b>N</b>. Most of the tests are random, and some are made in special way.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-09-2013</td>
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