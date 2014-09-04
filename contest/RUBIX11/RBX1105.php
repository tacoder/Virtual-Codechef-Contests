<?php require("../../includes/header.php"); ?><h1>Crumbling Numbers</h1><div class="content">

<p>In the game of Crumbling Numbers you will be given a number followed by some operations which are to be performed on this number. Once the operations start, if at any point the number is divisible by a prime number P<b>(5&lt;P&lt;10000)</b>, other than itself, then the number becomes the largest integer smaller than the quotient after division by the prime number. If it is divisible by multiple prime numbers you must divide by the largest prime number.<br/><br />
In case it is not meet the condition stated above, add the "answer to life, the universe and everything"+1 to the current number. After all queries are completed, if the number is the "answer to life, the universe and everything"+1 then output YES, otherwise output NO.</br/></p>
<h3>Input</h3>
<p>Input starts with T on one line stating the number of test cases. Each test case will start N and Q on a line stating the number and number of operations respectively. Then Q operations follow.</p>
<h3>Constraints</h3>
<p>Operations are addition(+), subtraction(-), multiplication(*), division(/) and modulo(%).<br/><br />
N will always be less than 2147483647 and greater than -2147483647.<br/><br />
1&lt;=Q&lt;=1000<br/><br />
After division N always becomes the largest integer &lt;= the quotient.<br />
Division and Modulo will always be with number greater than 0.<br/></br/></br/></br/></br/></p>
<h3>Output</h3>
<p>For each test case output either a YES or a NO on a new line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
49 6
+ 19
/ 7
* 357
% 42
+ 63
- 21
1 7
+ 19
/ 7
* 357
% 42
+ 63
- 21
-20

<b>Output:</b>
NO
YES
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/virai">virai</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>