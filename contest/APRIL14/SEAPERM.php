<?php require("../../includes/header.php"); ?><h1>Sereja and Permutation</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/mandarin/SEAPERM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/APRIL14/russian/SEAPERM.pdf">Russian</a>.</h3>
<p> </p>
<p>Sereja have array <b>A'</b> that contain <b>N</b> integers. Now Sereja want to permute elements of the array, he want to use some permutation <b>p</b>, such that <b>A[i] = A'[p[i]]</b>, where <b>A</b> - new array. </p>
<p> </p>
<p>Lets function <b>f(A,i) = S - A[i] - A[i +1] - ... - A[j]</b>, where <b>j</b> is the maximum possible index, such that <b>A[i] + A[i + 1] + ... + A[j] &lt;= S</b>, if <b>A[i] &gt; S, f(A, i) = S</b>.</p>
<p> </p>
<p>Help Sereja to find such permutation <b>p</b>, such that <b>(f(A, 1) + f(A, 2) + ... f(A, k))/k</b> will be as low as possible. </p>
<h3>Input</h3>
<p> </p>
<p>First line of input contain integer <b>T</b> - number of testcases. Next lines contain <b>T</b> testcases. First line of each testcase contain three integers <b>N, k, S</b>. Next line contain <b>N</b> integers - array <b>A'</b>.</p>
<p> </p>
<h3>Output</h3>
<p> </p>
<p>For each testcase output <b>N</b> numbers in one line - permutation <b>p</b>. </p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li><b>1</b> ≤ <b>k</b> ≤ <b>N</b></li>
<li><b>1</b> ≤ <b>A'[i]</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>S</b> ≤ <b>10^9</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 2 4
3 4 1
4 4 1
1 1 1 1

<b>Output:</b>
2 1 3
4 3 2 1

</pre><p> </p>
<h3>Scoring</h3>
<p> </p>
<p>Suppose <b>Sum</b> will be sum of yours <b>(f(A, 1) + f(A, 2) + ... f(A, k))/k</b> per each testcase.<br />
Lets <b>B</b> will be the smallest such sum. Your score will be equal to <b>B/Sum</b>. Lower scores will earn more points.</p>
<p>We have 20 official test files. You must correctly solve all test files to receive OK. During the contest, your overall score is the sum of the scores on the first 4 test files. After the contest, all solutions will be rescored by the sum of the scores on the rest 16 test files. Note, that public part of the tests may not contain some border cases.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-11-2013</td>
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