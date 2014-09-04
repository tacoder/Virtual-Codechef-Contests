<?php require("../../includes/header.php"); ?><h1>The Game Of Stacks</h1><div class="content">

<p>The game of stacks is played among K players as follows: Initially there are N stacks of coins where the i'th stack has X(i) coins. In his turn, each player can choose any stack and remove any number of coins ( greater than 0 ) from it. The player who is not able to pick any coin during his turn will be considered the worst ranked player. The players following him will be ranked 2nd worst, 3rd worst, and so on.<br />
<br /><br />
You have been asked to play first. You have decided to play the game if and only if your rank is not bound to be the worst assuming that each player plays optimally. You need to output "Play" if your rank is not bound to be the worst, and "Not Play" otherwise.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T, at most 20, followed by T test cases. Each test case begins on a new line containing the values of N and K, where 1 &lt;= N &lt;= 100,000 and 1 &lt;= K &lt;= 100,000. The next line contains N space separated integers X(1), X(2),..., X(N) where for each i, 1 &lt;= X(i) &lt;= 100,000,000.</p>
<h3>Output</h3>
<p>For each test case in the input, you need to output "Play" if you rank is not bound to be the worst, and "Not Play" otherwise. Print the result of each test case on a new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
5 3
1 2 3 4 5
5 3
5 6 3 1 6
<b>Output:</b>
Play
Not Play
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