<?php require("../../includes/header.php"); ?><h1>Equation Solver</h1><div class="content">

<p>
<div align="center"><b>x*y = a + b*lcm(x,y) + c*gcd(x,y)</b></div>
</p>
<p>It's easy: you are to write a program which for given <b>a</b>, <b>b</b> and <b>c</b> finds the number of pairs of positive integers (<b>x</b>, <b>y</b>) satisfying this equation.</p>
<p>Here <b>*</b> stands for multiplication, <b>gcd(x,y)</b> stands for the greatest common divisor of <b>x</b> and <b>y</b>, while <b>lcm(x,y)</b> stands for the least common multiple of <b>x</b> and <b>y</b>.</p>
<h3>Input</h3>

<p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Each of the next <b>T</b> lines contains exactly three space-separated integers <b>a</b>, <b>b</b> and <b>c</b> (0 ≤ <b>a</b>, <b>b</b>, <b>c</b> ≤ 10<sup>6</sup>).</p>
<h3>Output</h3>

<p>For each test case output one line containing the sought number of solutions to the equation. If there is an infinite number of solutions, output <b>-1</b> instead.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2 1 1
160 0 90
300 7 5

<b>Output:</b>
2
8
4

<b>Explanation:</b>
</pre><p>In the first test case, the only pairs are (2,4) and (4,2).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-01-2012</td>
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