<?php require("../../includes/header.php"); ?><h1>Something About Divisors</h1><div class="content">

<p>
For a given positive integers <b>B</b> and <b>X</b> find the number of positive integers <b>N</b> such that number <b>N*X</b> has at least one divisor <b>D</b> such that <b>N &lt; D &lt;= B</b>.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 40</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains two positive integers <b>B &lt;= 10<sup>12</sup></b> and <b>X &lt;= 60</b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the answer for the corresponding test case.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
5 1
10 3
100 6

<b>Output:</b>
0
5
63

</pre><h3>Explanation</h3>
<p>In the second test case required numbers are 1, 2, 3, 4, 6.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-07-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
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