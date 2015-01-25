<?php require_once("../../includes/header.php"); ?><h1>Gcd Queries</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/GCDQ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/GCDQ.pdf">Russian</a>.</h3>
<p>
You are given an array <b>A</b> of integers of size <b>N</b>. You will be given <b>Q</b> queries where each query is represented by two integers <b>L, R</b>. You have to find the <a href="http://en.wikipedia.org/wiki/Greatest_common_divisor">gcd</a>(Greatest Common Divisor) of the array after excluding the part from range <b>L</b> to <b>R</b> inclusive (1 Based indexing). You are guaranteed that after excluding the part of the array<br />
remaining array is non empty.</p>
<h3>Input</h3>
<ul>
<li>First line of input contains an integer <b>T</b> denoting number of test cases.  </li>
<li>For each test case, first line will contain two space separated integers <b>N, Q</b>.  </li>
<li> Next line contains <b>N</b> space separated integers denoting array <b>A</b>. </li>
<li>For next <b>Q</b> lines, each line will contain a query denoted by two space separated integers <b>L, R</b>. </li>
</ul>
<h3>Output</h3>
<p>For each query, print a single integer representing the answer of that query.</p>
<h3>Constraints</h3>
<p>
<b>Subtask #1: 40 points</b></p>
<ul>
<li><b>2 ≤ T, N ≤ 100, 1 ≤ Q ≤ N, 1 ≤ A[i] ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ L, R ≤ N and L ≤ R</b></li>
</ul>

<p>
<b>Subtask #2: 60 points</b></p>
<ul>
<li><b>2 ≤ T, N ≤ 10<sup>5</sup>, 1 ≤ Q ≤ N, 1 ≤ A[i] ≤ 10<sup>5</sup></b></li>
<li><b>1 ≤ L, R ≤ N and L ≤ R</b></li>
<li> Sum of <b>N</b> over all the test cases will be less than or equal to <b>10<sup>6</sup></b>.
</li></ul>

<h3>Example</h3>
<p><pre><b>Input:</b>
1
3 3
2 6 9
1 1
2 2
2 3

<b>Output:</b>
3
1
2
</pre></p>
<h3>Explanation</h3>
<p>
For first query, the remaining part of array will be (6, 9), so answer is 3.<br />
For second query, the remaining part of array will be (2, 9), so answer is 1.<br />
For third query, the remaining part of array will be (2), so answer is 2.
</p>
<p>
<b>Warning : </b> Large IO(input output), please use faster method for IO.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYPY, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM chicken, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>