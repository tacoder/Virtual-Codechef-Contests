<?php require("../../includes/header.php"); ?><h1>Odd Binomial Coefficients</h1><div class="content">

<p align="justify"></p>
<p>If P(x) is a polynomial in x with integer coefficients, let W(P(x)) = number of odd coefficients of P(x).</p>
<p>Given a<sub>1</sub>, a<sub>2,</sub> ... , a<sub>m</sub>, find W( (1+x)<sup>a<sub>1</sub></sup> + (1+x)<sup>a<sub>2</sub></sup> + ... + (1+x)<sup>a<sub>m</sub></sup> ).</p>
<h3>Input</h3>
<p>First line contains TC, the number of test cases.<br />Each test case consists of a single line in the format: <br />m a<sub>1</sub> a<sub>2</sub> ... a<sub>m</sub></p>
<h3><strong>Limits</strong></h3>
<p>1 &lt;= m &lt;= 15<br />0 &lt;= a<sub>i</sub> &lt; 2<sup>60</sup><br />1 &lt;= TC &lt;= 1000</p>
<h3>Output</h3>
<p>Output one line per test case, the value W( (1+x)<sup>a<sub>1</sub></sup> + (1+x)<sup>a<sub>2</sub></sup> + ... + (1+x)<sup>a<sub>m</sub></sup> ).</p>
<h3>Example</h3>
<pre><strong>Input:</strong> <br />4<br />1 1<br />1 3<br />2 1 3<br />3 1 2 3
<br /><strong>Output:</strong> <br />2<br />4<br />2<br />2<br /><br /></pre><h3>Explanation</h3>
<pre>(1+x) + (1+x)<sup>3</sup> = 2 + 4x + 3x<sup>2</sup> + x<sup>3</sup>. Hence the output for "2 1 3" is 2. (2 odd coefficients)<br />(1+x) + (1+x)<sup>2</sup> + (1+x)<sup>3</sup> = 3 + 6x + 4x<sup>2</sup> + x<sup>3</sup>. Hence the output for "3 1 2 3" is 2.<br /></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/subra">subra</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-10-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>