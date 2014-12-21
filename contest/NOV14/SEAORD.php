<?php require("../../includes/header.php"); ?><h1>Sereja and Order</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/SEAORD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/SEAORD.pdf">Russian</a>.</h3>
<p>Sereja have <b>N</b> programs. Sereja should run every program on two computers. Program number <b>i</b> works <b>A[i]</b> seconds on first computer and <b>B[i]</b> seconds on second. On each computer Sereja isn't able to run two programs in parallel, also Sereja isn't able to run one program on two computers in one moment. Sereja need to run all programs on both computers in minimal time. Help Sereja in his problem.</p>
<h3>Input</h3>
<p>First line contain integer <b>T</b> number of test cases. <b>T</b> tests follow. First line of each test case contain integer <b>N</b>. Next <b>N</b> lines contain integers <b>A[i], B[i]</b>.</p>
<p> </p>
<h3>Output</h3>
<p>For each test case output optimal time in separated line. On the next <b>N</b> lines. In i-th line output pair of numbers <b>X, Y</b> <b>X</b> - start of working program number <b>i</b> on first computer, <b>j</b> - the same information for second computer.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>Sum of N over all the test cases</b> ≤ <b> 200000 </b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b> 10000 </b></li>
<li><b>1</b> ≤ <b>A[i], B[i]</b> ≤ <b> 100000 </b></li>
</ul>
<p> </p>
<h3>Subtasks</h3>
<li>Subtask #1: <b>1</b> ≤ <b>N</b> ≤ <b> 10 </b>, <b>1</b> ≤ <b>T</b> ≤ <b> 1000 </b>(16 points)</li>
<li>Subtask #2: <b>1</b> ≤ <b>N</b> ≤ <b> 500 </b>(21 points)</li>
<li>Subtask #3: <b>1</b> ≤ <b>N</b> ≤ <b> 10000 </b>(63 points)</li>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1
1 1
3
2 2
1 1
1 1


<b>Output:</b>
2
0 1
4
2 0
0 2
1 3

.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>