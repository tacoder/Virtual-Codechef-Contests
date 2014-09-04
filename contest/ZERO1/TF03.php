<?php require("../../includes/header.php"); ?><h1>Increasing Subsequence</h1><div class="content">

<p>Given n numbers, find whether there exists an increasing subsequence of length k.</p>
<h3>Input</h3>
<p>First line of input contains T. T test cases follow. <br/><br />
Each test case space separated integers n and k. i<sup>th</sup> number is (i*i)%10000 (1 &lt;=i &lt;= n). (Take care of i*i going out of integer range)<br/><br />
0 &lt; T &lt;= 5 <br/><br />
0 &lt; n &lt;= 10000000 (10^7) <br/><br />
0 &lt; k &lt;= 10000</br/></br/></br/></br/></p>
<h3>Output</h3>
<p>Output T lines, one for each test case. Every line contains either 0 or 1, depending on whether there exists such a subsequence or not.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 6
5 4

<b>Output:</b>
0
1

<b>Input:</b>
4
9928664 4719
7374604 60
4648375 9969
2626697 8608

<b>Output:</b>
0
1
0
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shivamagarwal">shivamagarwal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-11-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>