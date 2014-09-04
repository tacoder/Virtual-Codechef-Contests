<?php require("../../includes/header.php"); ?><h1>Short II</h1><div class="content">

<p>Given a prime number <b>p</b>, find the number of pairs of integers (<b>a</b>, <b>b</b>) such that <b>p</b> &lt; <b>a</b>, <b>p</b> &lt; <b>b</b> and <b>ab</b> is divisible by <b>(a-p)(b-p)</b>.</p>
<h3>Input</h3>

<p>The first line contains the number of test cases <b>t</b> (1 ≤ <b>t</b> ≤ 5). Then <b>t</b> test cases follow, each test case consists of a line containing one prime integer <b>p</b> (1 &lt; <b>p</b> &lt; 10<sup>12</sup>).</p>
<h3>Output</h3>

<p>For each test case output one line containing the required number. It's guaranteed that this number won't exceed 2<sup>63</sup>-1.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
23
59

<b>Output:</b>
14
80
116

<b>Explanation:</b>
</pre>
<p>In the first test case the sought pairs are (3,3), (3,4), (3,5), (3,8), (4,3), (4,4), (4,6), (5,3), (5,12), (6,4), (6,8), (8,3), (8,6) and (12,5).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/pieguy">pieguy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2011</td>
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