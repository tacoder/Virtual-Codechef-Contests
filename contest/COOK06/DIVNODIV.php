<?php require("../../includes/header.php"); ?><h1>Divisors number divisibility</h1><div class="content">

<p>For a given positive integer <b>N</b> find the number of all positive integers <b>X</b> such that <b>N</b> divides <b>X</b> and the number of all positive divisors of <b>X</b> (including <b>1</b> and <b>X</b>) is equal to <b>N</b>. If there exist infinitely many such numbers print <b>-1</b>.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 100</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a positive integer <b>N </b>, where <b>N &lt;= 10^18</b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the answer for the corresponding test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
6
113
144

<b>Output:</b>
2
1
-1
</pre><h3>Explanation</h3>
<p>In the first test case only numbers 12 and 18 have 6 divisors and are divisible by 6.</p>
<p>In the second test case the only number is 113^112.</p>
<p>In the third test case there are infinitely many of them.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-01-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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