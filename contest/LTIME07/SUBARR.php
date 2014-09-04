<?php require("../../includes/header.php"); ?><h1>Perfect Subarrays</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/mandarin/SUBARR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/russian/SUBARR.pdf">Russian</a>.</h3>
<p>You are given an array <b>A</b>, which consists of <b>N</b> integers. Also, you have an integer <b>K</b>.
</p>
<p>Let's call a subarray <b>A[L..R]</b> perfect, if the average of the numbers <b>A<sub>L</sub></b>, <b>A<sub>L + 1</sub></b>, ..., <b>A<sub>R - 1</sub></b>, <b>A<sub>R</sub></b> is greater than or equal to <b>K</b>.
</p>
<p>
I.e. the average of the numbers <b>{2, 5, 9, -3}</b> equals to <b>3.25</b>.
</p>
<p>
So, your task is quite simple: you are to count the number of perfect subarrays of <b>A</b>.</p>

<h3>Input</h3>
<p>
The first line contains two integers <b>N</b> and <b>K</b>.<br /><br />
The second line contains <b>N</b> integers, <b>i</b>'th integer denotes <b>A<sub>i</sub></b>. The array <b>A</b> is 1-indexed.
</p>

<h3>Output</h3>
<p>The first line should contain an integer, denoting the number of perfect subarrays of <b>A</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4 2
1 2 3 -1
<b>Output:</b>
4
</pre>
<h3>Explanation</h3>
<p>
In the test case <b>N</b> equals to 4, <b>K</b> equals to 2, <b>A</b> equals to {1, 2, 3, -1}. The following subarrays are perfect: [2..2], [3..3], [2..3], [1..3].
</p>

<h3>Scoring</h3>
<p>
-10<sup>9</sup> ≤ <b>K</b> ≤ 10<sup>9</sup> for each test case;<br /><br />
-10<sup>9</sup> ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup> for each test case;
</p>
<p>
Subtask 1 (10 points): 1 ≤ <b>N</b> ≤ 100;<br /><br />
Subtask 2 (39 points): 1 ≤ <b>N</b> ≤ 6000;<br /><br />
Subtask 3 (11 points): 1 ≤ <b>N</b> ≤ 150 000, <b>K</b> = 0;<br /><br />
Subtask 4 (20 points): 1 ≤ <b>N</b> ≤ 150 000;<br /><br />
Subtask 5 (20 points): 1 ≤ <b>N</b> ≤ 1 000 000;<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-11-2013</td>
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