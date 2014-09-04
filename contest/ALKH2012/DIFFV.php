<?php require("../../includes/header.php"); ?><h1>Different Vectors</h1><div class="content">

<p>You are given set of <b>N</b> vectors, each vector consists of <b>K</b> integers. Two vectors ex, ey are are equal <b>iff</b> there exist function bijection <b>f</b> and integer <b>r</b>, such that  ex[i] = f( ey[(i+r)%K] ), for each i in range [0, K><br />
Eg. (1, 2, 2, 3) == (22, 3, 4, 22), with r=2 and f(22)=2, f(3)=3 and f(4)=1. But (22,3,22,4) is not equal to (1, 2, 2, 3).</p>
<p>How many different vectors are there in set of N given vectors ?</p>
<p> Constraints :</p>
<p> n &lt;= 10000</p>
<p> k &lt;= 100</p>
<h3>Input</h3>
<p>First number contains T (T &lt;= 10), number of test cases. Each test cases consists of following. First line consists of N and K. N lines follows, the i-th containing K integers describing i-th vector. </p>
<h3>Output</h3>
<p>Output one number, number of different vectors.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 4
22 3 4 22
1 2 2 3
22 3 22 4
5 5
3 3 3 0 3
8 4 4 4 0
1 1 1 1 1
1 1 8 6 1
1 3 3 3 5

<b>Output:</b>
2
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/budabudimir">budabudimir</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-09-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>