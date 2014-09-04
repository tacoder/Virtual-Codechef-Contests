<?php require("../../includes/header.php"); ?><h1>Am I a Fibonacci Number</h1><div class="content">
<h3>Read problems statements in Russian <a href="/download/translated/COOK40/russian/AMIFIB.pdf" target="_blank">here</a></h3>
<p>The Head Chef has been playing with Fibonacci numbers for long . He has learnt several tricks related to Fibonacci numbers . Now he wants to test his chefs in the skills . <br /><br /> A fibonacci number is defined by the recurrence :<br /><br /> f(n) = f(n-1) + f(n-2) for n &gt; 2 <br />and f(1) = 0 <br />and f(2) = 1 .  <br /><br /> Given a number <b> A </b> , determine if it is a fibonacci number.</p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The only line of each test case contains a single integer  <b>A</b> denoting the number to be checked . </li>
</ul>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing "YES" if the given number is a fibonacci number , otherwise output a single line containing "NO" . </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>number of digits in A </b> ≤ <b>1000</b></li>
<li> <b> The sum of number of digits in A in all test cases   &lt;= 10000. </b> </li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3
4
5

<b>Output:</b>
YES
NO
YES
</pre>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The first few fibonacci numbers are 0 , 1 , 1 , 2 , 3 ,5 , 8 , 13 and so on and the series is increasing . Only 3 and 5 appear in this series while 4 does not appear in the series .</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vineetpaliwal">vineetpaliwal</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/rubanenko">rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2013</td>
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