<?php require("../../includes/header.php"); ?><h1>Lost Primes</h1><div class="content">

<p>The BSA (Bytelandian Security Agency) has intercepted several secret keys from the Trojan Kingdom.<br />
Each secret key is a prime number. But BSA was only able to retrieve some part of the digits, not all of them!
</p>
<p>Johnny's job is to help BSA recover these lost primes, and he has delegated the task to you!</p>
<h3>Input</h3>
<p>The first line contains a number t (about 15) which is the number of test cases. Then t test cases follow. Each test case is described in a single line containing the  patterns of the lost primes (the unknown digits are represented by '?'s.</p>
<p>Each pattern's length is at most 12.</p>
<h3>Output</h3>
<p>For each test case, print the recovered prime. If there are multiple solutions, print any of them. The recovered prime should have the same number of digits as the corresponding pattern and should contain no leading zeros.</p>
<p>You can assume that there is at least one solution for each test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
?
?3
1??

<b>Output:</b>
5
23
101
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-12-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>