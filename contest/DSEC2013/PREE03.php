<?php require("../../includes/header.php"); ?><h1>Shop Associations</h1><div class="content">
<h2>Problem Statement</h2>
<p>
Himesh, who is the student of NITJ went to buy textbooks from market. In the market the shops are arranged in a serial order each at a distance of 1m. Each shop has its own price for the textbook. The shop from which he has bought are categorised as type I. The shop from which he has not brought are categorised as type II. <br /><br />
Each shop has initially its own association. One assosciation will merge with another assosciation to form a new assosciation if the shops in both assosciations are of same type (i.e either of type I or type II) and there exists any two shops in the merging assosciations(one in each), distance between whome is 1m.<br /><br />
At the end, Himesh should be left with one assosciation of type I (i.e all the shops in that assosciation should be of type I) and  with maximum of 2 assosciation of type II (i.e all the shops in that assosciation should be of type II).<br /><br />
Himesh wants you to help him to maximise the the sum of the prices by shops of asscosciation of type I by helping him choosing the shops to pick for buying the book. You should provide him the desired sum.
</p>
<h3>Input</h3>
<p>First line contain single integer T - the number of test cases. T test cases follow. First line of each test case contains single integer n - number of shops, next line contains n single spaced integers representing price of each shop.
</p>
<h3>Output</h3>
<p>In T lines print T integers - the answers for the corresponding test cases i.e the desied sum</p>
<h3>Constraints</h3>
<pre>
1 &lt;= T &lt;= 1000
1 &lt;= n &lt;= 7000
-2000 &lt;= prices&lt;= 2000
</pre><h3>Example</h3>
<h4>Input:</h4>
<pre>
1
3
-1 3 3
</pre><h4>Output:</h4>
<pre>
6
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ratish1992">ratish1992</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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