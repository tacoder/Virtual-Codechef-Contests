<?php require("../../includes/header.php"); ?><h1>Special Digit</h1><div class="content">
<h2>Problem Statement</h2>
<p>
You have a number N and you want to calculate how many divisors of N are special.
</p>
<p>
A number is said to be special if it is possible to remove some digits from it to get a number having 3, 5 or 6 only.For exemple number 38597 is special since it is posible to  remove digits 8, 9, 7 to get 35. You can remove some digits but not all digits. You can remove digits from left, right or middle.
</p>
<h3>Constraints</h3>
<pre>
1 &lt;= T &lt;= 10
1 &lt;= N &lt;= 10^9
</pre><h3>Input</h3>
<p>
First line of input containes an integer T, number of test cases and then t test cases follow. Each test case is of one line containing an integer N.
</p>
<h3>Output</h3>
<p>
Output is of T lines, one for each test case. Each line contains number of special devisiors of respective test case.
</p>
<h3>Example</h3>
<h4>Input:</h4>
<pre>
2
15
75
</pre><h4>Output</h4>
<pre>
3
5
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