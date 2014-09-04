<?php require("../../includes/header.php"); ?><h1>Chef and Rectangle Genome</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/GERALD091.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/GERALD09.pdf">Russian</a>.</h3>
<p>Chef has an empty matrix of <b>N</b>x<b>M</b>. He wants to construct rectangle genome. For this reason Chef should fill the matrix with letters G, С, A, T.</p>
<p>The genome will be stable if it contains <b>K</b> different submatrices. Of course, Chef wants to make his genome as stable as possible, that is the difference between the number of different submatrices in genome and number <b>K</b> should be as small as possible.</p>
<p>Please, write a program for Chef that constructs as stable genome as possible. Note, that you must fill each cell of the matrix. Two submatrices is different if either one of their dimensions differs or for some pair of corresponding cells their content differs.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, denoting the number of testcases. Each of the next <b>T</b> lines contains the description of the testcase: three integers <b>N</b>, <b>M</b>, <b>K</b>.</p>
<h3>Output</h3>
<p>For each testcase in the first <b>N</b> lines print <b>N</b>x<b>M</b> matrix. Each character of the matrix should be G, C, A or T.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>15</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>15</b></li>
</ul>

<h3>Test Generation</h3>
<p>All the tests contains manual (non-random) <b>N</b> and <b>M</b> values. Number <b>K</b> for each testcase was choosen uniformly from the range [1, <b>N*N*M*M</b>].</p>
<h3>Scoring</h3>
<p>Imagine that your matrix for some testcase contains <b>W</b> different submatrices. Your score for that testcase will be <b>|W-K|</b>/<b>K</b>. You score for all testcases is the sum of  the scores for each testcase.</p>
<p>There are 10 cases in total, and only 2 of them are evaluated during the contest, while others are tested but scored 0, and will be evaluated after the contest.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 3 5
1 1 1

<b>Output:</b>
AAA
AAA
T
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> In this testcase the output matrix contains 6 different submatrices. So, your scoring for this testcase will be 1/5.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gerald">gerald</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-04-2014</td>
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