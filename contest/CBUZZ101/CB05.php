<?php require("../../includes/header.php"); ?><h1>Octagon Jumps</h1><div class="content">

<p>A regular octagon with vertices X1, X2,..., X8 is provided. A frog starts jumping from the vertex X1. It may jump to any of the two adjacent vertices in one jump except from X5. When it reaches X5, it stops and stays there. Let P(n) be the number of distinct paths of exactly n jumps ending at X5. Given the value of n, you need to print the value of P(n).</p>
<h3>Input</h3>
<p> The first line of the input contains the number of test cases T, at most 100. Each of the next T lines contain a single integer N, where 1 &lt;= N &lt;= 100.</p>
<h3>Output</h3>
<p>For each value of N in the input, print on a new line the number of distinct paths of exactly n jumps ending at X5.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
1
2
4

<b>Output:</b>
0
0
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/moneymachine">moneymachine</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>