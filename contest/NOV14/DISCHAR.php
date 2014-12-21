<?php require("../../includes/header.php"); ?><h1>Distinct Characters Subsequence</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/mandarin/DISCHAR.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/NOV14/russian/DISCHAR.pdf">Russian</a>.</h3>
<p>You have initially a string of <b>N</b> characters, denoted by <b>A<sub>1</sub>,A<sub>2</sub>...A<sub>N</sub></b>. You have to print the size of the largest subsequence of string <b>A</b> such that all the characters in that subsequence are distinct ie. no two characters in that subsequence should be same.<br /><br />
A subsequence of string <b>A</b> is a sequence that can be derived from <b>A</b> by deleting some elements  and without changing the order of the remaining elements.
</p>
<h3>Input</h3>
<p>First line contains <b>T</b>, number of testcases. Each testcase consists of a single string in one line. Each character of the string will be a small alphabet(ie. 'a' to 'z').</p>
<h3>Output</h3>
<p>For each testcase, print the required answer in one line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li>Subtask 1 (20 points):<b>1</b> ≤ <b>N</b> ≤ <b>10</b></li>
<li>Subtask 2 (80 points):<b>1</b> ≤ <b>N</b> ≤ <b>10<sup>5</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
abc
aba

<b>Output:</b>
3
2

</pre><h3>Explanation</h3>
<p>For first testcase, the whole string is a subsequence which has all distinct characters.<br /><br />
In second testcase, the we can delete last or first 'a' to get the required subsequence.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>