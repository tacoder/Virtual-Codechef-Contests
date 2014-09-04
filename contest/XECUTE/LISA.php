<?php require("../../includes/header.php"); ?><h1>Maximum Longest Increasing Subsequence</h1><div class="content">

<p>
Given a sequence of integers, find the maximum difference between first and last element of the longest increasing subsequence.</p>
<h3>Input</h3>

<p>First line contains T, number of test cases followed by T test cases. For each test case first line contains an integer N , the next line contains sequence of N integers.</p>
<pre>
<b>Constraints:</b>
T&lt;=100
1&lt;=N&lt;=10000
All numbers in the sequence will fit into 64-bit integer
</pre><h3>Output</h3>

<p>For each test case print the maximum difference between first and last element of the longest increasing subsequence.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4
1 2 5 4

<b>Output:</b>
4

Explanation:(There are 2 Longest Increasing Subsequences:1 2 5 and 1 2 4.
But the first subsequence gives the maximum difference(5-1=4) 
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/styrofox">styrofox</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-03-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 2 sec</td>
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