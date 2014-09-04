<?php require("../../includes/header.php"); ?><h1>Sum of Series</h1><div class="content">

<p>Given a function f(x) = a<sub>n</sub>x<sup>n</sup> + a<sub>n-1</sub>x<sup>n-1</sup> + .... + a<sub>1</sub>x<sup>1</sup> + a<sub>0</sub>, find SUM<sub>x=0</sub><sup>x=m</sup> f(x) mod 1009 (a prime number) for given n and m.</p>
<h3>Input</h3>
<p>First line contains two space separated integers n and m. Next line contains n+1 space separated integers (each non negative and less than 100) which are the co-efficients a<sub>n</sub>, a<sub>n-1</sub>, ... , a<sub>0</sub>. <br/></br/></p>
<p>0 &lt; m &lt; = 100000000 <br/><br />
0 &lt; n &lt;= 100</br/></p>
<h3>Output</h3>
<p>Output a single integer which is the sum mod 1009.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1 100
10 1

<b>Output:</b>
151

<b>Explanation:</b>
The function is 10x+1. The sum is 10(50)(101) + 101 = 50601 mod 1009 = 151
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