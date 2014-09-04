<?php require("../../includes/header.php"); ?><h1>Careful Calculation</h1><div class="content">

<p>You are given a single integer <b>N</b>. It's very large, so it's given as a product of several prime powers: <b>N = p<sub>1</sub><sup>k<sub>1</sub></sup> p<sub>2</sub><sup>k<sub>2</sub></sup> ... p<sub>m</sub><sup>k<sub>m</sub></sup></b>.</p>
<p>Let's define <b>φ</b>(<b>N</b>) as <a href="http://en.wikipedia.org/wiki/Euler%27s_totient_function">Euler's totient function</a> -- the number of positive integers less than or equal to <b>N</b> that are relatively prime to <b>N</b>.</p>
<p>Let <b>N<sub>1</sub></b> = <b>φ</b>(<b>N</b>). Let <b>N<sub>2</sub></b> = <b>φ</b>(<b>N<sub>1</sub></b>). Further, let <b>N<sub>X</sub></b> = <b>φ</b>(<b>N<sub>X-1</sub></b>) for <b>X</b> &gt; 2.</p>
<p>Your task is to find the smallest positive integer <b>X</b> such that <b>N<sub>X</sub></b> = 1. Only careful calculation might help... or will it be enough?</p>
<h3>Input</h3>

<p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Each test case is described by a line containing one positive integer <b>m</b> followed by <b>m</b> lines, each containing two integers <b>p<sub>i</sub></b> and <b>k<sub>i</sub></b> (1 &lt; <b>p<sub>i</sub></b> &lt; 100000, 1 ≤ <b>k<sub>i</sub></b> ≤ 10<sup>9</sup>) separated by a single space. It's guaranteed that all <b>p<sub>i</sub></b> are pairwise distinct prime numbers in each test case (note that the upper limit on <b>m</b> can be determined from this constraint).</p>
<h3>Output</h3>

<p>For each test case output just one line containing the required smallest positive integer <b>X</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
2
2 2
3 1

<b>Output:</b>
3

<b>Explanation:</b>
</pre><p>In the example test case <b>N</b> = 2<sup>2</sup>*3<sup>1</sup> = 12. Then <b>N<sub>1</sub></b> = 4, <b>N<sub>2</sub></b> = 2 and <b>N<sub>X</sub></b> = 1 for <b>X</b> ≥ 3, so the answer is 3.</p>
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
            <td>17-01-2012</td>
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