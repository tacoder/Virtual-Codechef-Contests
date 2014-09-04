<?php require("../../includes/header.php"); ?><h1>Long Subsequence</h1><div class="content">
<p> </p>
<p>Given a set of N distinct numbers, you need to find the length of the longest monotone increasing subsequence.<br />
A monotone increasing subsequence is a subset of numbers which are strictly increasing from left to right. However the numbers need not to be adjacent in the original set or the longest subsequence may/may not be unique.<br />
For example : Given a sequence 1,2,9,4,7,3,11,8,14,6 , the longest monotone subsequence will be 1,2,4,7,11,14.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line of input gives the number of cases, N.<br />
N test cases follow. For each test case there will be two lines – the first one representing the length of the sequence &amp; second one representing the sequence itself.
</p>
<ul>
</ul>
<p> </p>
<h3>Output</h3>
<p>For each test case, output one line containing the length of  the longest monotone subsequence for that test case..</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>Length</b> ≤ <b>20</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:<br />4
6
1 1 1 2 0 2
10
1 2 9 4 7 3 11 8 14 6
11
0 3 5 2 9 11 8 10 13 20 19
16
0  8  4  12  2  10  6  14  1  9  5  13  3  11  7  15
</b>
<b>Output:<br />2
6
7
6
</b>
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tejas02">tejas02</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-04-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, FORT, GO, JAR, JAVA, JS, LISP clisp, LISP sbcl, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PRLG, PYTH, PYTH 3.1.2, RUBY, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>