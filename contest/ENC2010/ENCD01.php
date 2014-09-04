<?php require("../../includes/header.php"); ?><h1>Max Change</h1><div class="content">

<p>
Sam lives in a country "CoinLand" where there are n different types of coin. He wants to collect as many different types of coin as he can. Now if he wants to withdraw X amount of money from a Bank, the Bank will give him this money according to the following rule:</p>
<p>lets say sam needs to withdraw money 'x'.<br />
<br />
1. if X=0 no money withdrawn.<br />
2. Let Y be the highest valued coin that does not exceed X. Give the customer Y valued coin. Now he has to withdraw remaining X-Y amount.<br />
3. go to step 1.<br />
this goes on until x becomes = 0.</p>
<p>Now Sam can withdraw any amount of money from the Bank. He should maximize the number of different coins that he can collect in a single withdrawal.</p>
<h3>Input</h3>

<p>
Each of the test cases starts with n (1≤n≤1000), the number of different types of coin. Next line contains n integers C1, C2, ... , Cn the value of each coin type. C1 &lt; C2 &lt; C3 &lt;  …  &lt; Cn &lt; 1000000000. <br /> C1 equals to 1.<br />Terminate the input with n=0.</p>
<h3>Output</h3>

<p>For each test case output one line denoting the maximum number of coins that Sam can collect in a single withdrawal. He can withdraw infinite amount of money from the Bank.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
6
1 2 4 8 16 32
6
1 3 6 8 15 20
0

<b>Output:</b>
6
4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rscrbv">rscrbv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-01-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>