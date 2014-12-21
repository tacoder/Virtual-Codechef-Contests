<?php require("../../includes/header.php"); ?><h1>Sereja and GCD</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/mandarin/SEAGCD.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/DEC14/russian/SEAGCD.pdf">Russian</a>.</h3>
<p>In this problem Sereja is interested in the number of arrays of integers, <b>A<sub>1</sub>, A<sub>2</sub>, ..., A<sub>N</sub></b>, with <b>1 ≤ A<sub>i</sub> ≤ M</b>, such that the greatest common divisor of all of its elements is equal to a given integer <b>D</b>.</p>
<p>Find the sum of answers to this problem with <b>D = L, D = L+1, ..., D = R</b>, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> - the number of test cases. <b>T</b> tests follow, each containing a single line with the values of <b>N, M, L, R</b>.</p>
<h3>Output</h3>
<p>For each test case output the required sum, modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>M</b></li>
</ul>

<h3>Subtasks</h3>
<ul>
<li>Subtask #1: <b>1</b> ≤ <b>N, M</b> ≤ <b>10 (10 points)</b></li>
<li>Subtask #2: <b>1</b> ≤ <b>N, M</b> ≤ <b>1000 (30 points)</b></li>
<li>Subtask #3: <b>1</b> ≤ <b>N, M</b> ≤ <b>10<sup>7</sup> (60 points)</b></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 5 1 5
5 5 4 5

<b>Output:</b>
3125
2

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 - 15 sec</td>
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