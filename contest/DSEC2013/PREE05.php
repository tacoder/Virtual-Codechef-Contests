<?php require("../../includes/header.php"); ?><h1>Sum of Values</h1><div class="content">
<h3>Problem Statement</h3>
<p>
George is fond of playing with balls. One day he found a bag at his home with N number of balls each having a particular value Vi. He started picking up pair of balls from the bag randomly and if value of both balls is less than or equal to M then he increased their value by K and<br />
placd them in the bag again. He perform this until he was unable to choose 2 balls with value less than or equal to M. After performing all this stuff, he calculated the final total value he get from the bag.<br /><br />
TOTAL VALUE- It is equal to the sum of the values of all the balls.</p>
<p>
Now he wants to know, how many unique or different total values he can obtain by playing with balls in the bag.
</p>
<h3>Input</h3>
<p>
First line contain T, number of testcases. T test cases follow.<br /><br />
Every test case contain two lines -<br /><br />
first  contains three integers N, M and K,<br /><br />
second line contains N space separated integers, i.e. values written on the ball.
</p>
<h3>Output</h3>
<p>Output an integer for each test case---(answer should be in modulo (10^9 + 7))</p>
<h3>Constraints</h3>
<pre>
1&lt;=t&lt;=10
1&lt;=N&lt;=10^5
1&lt;=Vi&lt;=M
1&lt;=M&lt;=10^12

<h3>Example</h3>
<h3>INPUT
2
3 3 2
1 2 3
4 6 2
2 2 3 4

<h4>OUTPUT</h4>
2
2
</h3></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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