<?php require("../../includes/header.php"); ?><h1>Fun with known problems</h1><div class="content">

<p>String comparison is an age old concept. We have the same simple task<br />
for you too, just expected to be performed many-many times.<br />
Given an array A containing N strings a0,a2 ... an-1, each of length M, you are expected to handle queries of the type:</p>
<p>0 x y: Output the index of the lexicographically smallest string in A[x...y]. (if there is more smallest ones, pick one with smallest index)</p>
<p>1 x: Pop the starting letter of the string at index x (if string is empty do nothing).</p>
<p> <b>Note</b> : IO is huge </p>
<p> Constraints : </p>
<p> N &lt;= 1000</p>
<p> M &lt;= 1000</p>
<p> Q &lt;= 10^5</p>
<p> T &lt;= 20</p>
<h3>Input</h3>
<p>First line contains T (T &lt;= 20), number of test cases. T test cases follows. First line contains N and M. N lines follow each containing string of length M. Number  Q follows donating number of queries. Q lines follow describing query as in problem statement.</p>
<h3>Output</h3>
<p>Output only answers for queries of first type</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5 5
ktyeu
ktyeh
yjsdb
bonye
ktngm
5
1 1
1 3
0 0 3
1 2
0 2 4


<b>Output:</b>
0
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/budabudimir">budabudimir</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-09-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>20 sec</td>
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