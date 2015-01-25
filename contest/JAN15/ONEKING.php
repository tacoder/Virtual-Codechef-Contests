<?php require_once("../../includes/header.php"); ?><h1>One Dimensional Kingdoms</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/mandarin/ONEKING.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JAN15/russian/ONEKING.pdf">Russian</a>.</h3>
<p><b>N</b> one dimensional kingdoms are represented as intervals of the form <b>[a<sub>i</sub> , b<sub>i</sub>]</b> on the real line.<br />
A kingdom of the form <b>[L, R]</b> can be destroyed completely by placing a bomb at a point <b>x</b> on the real line if <b>L<br />
≤ x ≤ R</b>.
</p>
<p>
Your task is to determine minimum number of bombs required to destroy all the one dimensional kingdoms.</p>
<h3>Input</h3>
<ul>
<li>
First line of the input contains <b>T</b> denoting number of test cases.
</li>
<li>
For each test case, first line contains <b>N</b> denoting the number of one dimensional kingdoms.<br />
</li>
<li>
For each next <b>N</b> lines, each line contains two space separated integers <b>a<sub>i</sub></b> and <b>b<sub>i</sub></b>.
</li>
</ul>
<h3>Output</h3>
<p>For each test case , output an integer denoting the minimum  number of bombs required.</p>
<h3>Constraints</h3>
<p>Subtask 1 (20 points) : <b>1 ≤ T ≤ 100 , 1 ≤ N ≤ 100 , 0 ≤ a<sub>i</sub> ≤ b<sub>i</sub> ≤500 </b> </p>
<p>Subtask 2 (30 points) : <b>1 ≤ T ≤ 100 , 1 ≤ N ≤ 1000 , 0 ≤ a<sub>i</sub> ≤ b<sub>i</sub> ≤ 1000  </b> </p>
<p>Subtask 3 (50 points) : <b>1 ≤ T ≤ 20 , 1 ≤ N ≤ 10<sup>5</sup>, 0 ≤ a<sub>i</sub> ≤ b<sub>i</sub> ≤ 2000</b> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3
1 3
2 5
6 9

<b>Output:</b>
2
</pre><h3>Explanation</h3>
<p>There are three kingdoms [1,3] ,[2,5] and [6,9]. You will need at least 2 bombs<br />
to destroy the kingdoms. In one of the possible solutions, you can place two bombs at x = 2 and x = 6 . </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/nssprogrammer">nssprogrammer</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-12-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.9.2, CPP14, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYPY, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM chicken, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require_once("../../includes/footer.php"); ?>