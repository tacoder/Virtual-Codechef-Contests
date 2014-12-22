<?php require("../../includes/header.php"); ?><h1>Changing Money</h1><div class="content">
<p>Nikhil wants to repay his debts to Sita but would like to do so using only highest denominations possible. Once he has decided to use a denomination, he wants to use as many notes/coins of that denomination as possible. Amounts to be paid are given as numbers with two decimal places. Available denominations are given in an array.</p>
<h3>Input</h3>
<p>The first line of the input will contain the number of test cases, <b>T</b>. The first line of each test case will contain 2 integers <b>N</b> and <b>M</b> denoting respectively the number of denomination values and the number of scenarios on that test case. Next line will contain the N denominations. Note that, a denomination can be either an integer <b>x</b> or a fractional number y, with exactly 2 digits after the decimal point and a zero (0) before the decimal point. It is guaranteed that there will always be a denomination of value 1 and 0.01.<br />
Then there will be <b>M</b> numbers in the next line. Each of these numbers <b>z</b> can either be an integer or a decimal number with exactly 2 digits after the decimal point (i.e. 100.50, 55.01). Each number represents the amount owed by Nikhil in the respective scenario.
</p>
<h3>Output</h3>
<p>For each case the first line of output will contain “Case :”. Then for each scenario the first line of output will be “Scenario :”. Then output how Nikhil should repay his debt – In each line output two integers representing respectively denomination and number of notes/coin of that denomination, in descending order of denomination. Please represent notes as integer values and coins as decimal values with exactly 2 digits after the decimal point a zero (0) before the decimal point.<br />
Please refer to the sample input and output for exact formatting.
</p>
<h3>Constraints</h3>
<p>1 &lt;= <b>T</b>, <b>M</b> &lt;= 50</p>
<p>2 &lt;= <b>N</b> &lt;= 50</p>
<p>1 &lt;= <b>x</b> &lt;= 10000 </p>
<p>0 &lt; <b>y</b> &lt; 1</p>
<p>0 &lt; <b>z</b> &lt;= 10000</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
17 2
1000 500 200 100 50 20 10 5 2 1 0.50 0.25 0.20 0.10 0.05 0.02 0.01
5878.83
1000
3 1
1000 1 0.01
1000

<b>Output:</b>
Case 1:
Scenario 1:
1000 5
500 1
200 1
100 1
50 1
20 1
5 1
2 1
1 1
0.50 1
0.25 1
0.05 1
0.02 1
0.01 1
Scenario 2:
1000 1
Case 2:
Scenario 1:
1000 1
</pre>
<p><b>
<p>Problem Setter : Dr. M. Kaykobad</p>
<p></p></b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shangjingbo">shangjingbo</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-12-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>