<?php require("../../includes/header.php"); ?><h1>Exponentiation Commutativity</h1><div class="content">

<p>For a given prime number <b>p</b> find the number of all pairs <b>(m, n)</b> of positive integers such that <b>1 &lt;= m, n &lt;= p*(p-1)</b> and <b>p</b> divides <b>n<sup>m</sup> - m<sup>n</sup></b>. Output the result modulo <b>1000000007</b>.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 100</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a prime number <b>p </b>, where <b>2 &lt;= p &lt;= 10<sup>12</sup></b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the answer for the corresponding test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
3

<b>Output:</b>
2
14

</pre><h3>Explanation</h3>
<p>In the first test required pairs are (1, 1) and (2, 2).</p>
<p>In the second test case required pairs are (1, 1), (1, 4), (2, 2), (2, 4), (3, 3), (3, 6), (4, 1), (4, 2), (4, 4), (4, 5), (5, 4), (5, 5), (6, 3) and (6, 6).</p>
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
            <td>3-03-2011</td>
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