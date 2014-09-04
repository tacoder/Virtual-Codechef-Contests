<?php require("../../includes/header.php"); ?><h1>Sum Divides Product</h1><div class="content">

<p>For a given positive integer <b>N</b> find the number of all pairs <b>(a, b)</b> of positive integers such that <b>1 &lt;= a &lt; b &lt;= N</b> and the sum <b>a + b</b> divides the product <b>a * b</b>.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 5</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a positive integer <b>N &lt;= 10<sup>9</sup></b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the answer for the corresponding test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
15

<b>Output:</b>
0
4

</pre><h3>Explanation</h3>
<p>In the second test case required pairs are (3, 6), (4, 12), (6, 12) and (10, 15).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-04-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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