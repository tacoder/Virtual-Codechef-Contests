<?php require("../../includes/header.php"); ?><h1>ATM</h1><div class="content">

<p>Problem description.</p>
<p>Pooja would like to withdraw X $US from an ATM. The cash machine will only accept the transaction if X is a multiple of 5, and Pooja's account balance has enough cash to perform the withdrawal transaction (including bank charges). For each successful withdrawal the bank charges 0.50 $US.<br />
Calculate Pooja's account balance after an attempted transaction.</p>
<h3>Input</h3>
<p>Input description.</p>
<p>Positive integer 0 &lt; X &lt;= 2000 - the amount of cash which Pooja wishes to withdraw.<br /><br />
Nonnegative number 0&lt;= Y &lt;= 2000 with two digits of precision - Pooja's initial account balance.
</p>
<h3>Output</h3>
<p>Output the account balance after the attempted transaction, given as a number with two digits of precision. If there is not enough money in the account to complete the transaction, output the current bank balance.</p>

<h3>Example - Successful Transaction</h3>
<pre><b>Input:</b>
<b>30 120.00</b>
<br />
<b>Output:</b>
<b>89.50</b>
</pre>
<h3>Example - Incorrect Withdrawal Amount (not multiple of 5)</h3>
<pre><b>Input:</b>
<b>42 120.00</b>
<br />
<b>Output:</b>
<b>120.00</b>
</pre>
<h3>Example - Insufficient Funds</h3>
<pre><b>Input:</b>
<b>300 120.00</b>
<br />
<b>Output:</b>
<b>120.00</b>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajat_vig">rajat_vig</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
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