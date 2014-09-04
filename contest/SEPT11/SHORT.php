<?php require("../../includes/header.php"); ?><h1>Short</h1><div class="content">

<p>Given <b>n</b> and <b>k</b>, find the number of pairs of integers (<b>a</b>, <b>b</b>) such that <b>n</b> &lt; <b>a</b> &lt; <b>k</b>, <b>n</b> &lt; <b>b</b> &lt; <b>k</b> and <b>ab-n</b> is divisible by <b>(a-n)(b-n)</b>.</p>
<h3>Input</h3>

<p>The first line contains the number of test cases <b>t</b> (1 ≤ <b>t</b> ≤ 5). Then <b>t</b> test cases follow, each test case consists of a line containing two integers <b>n</b> and <b>k</b> (0 ≤ <b>n</b> ≤ 100000, <b>n</b> &lt; <b>k</b> ≤ 10<sup>18</sup>).</p>
<h3>Output</h3>

<p>For each test case output one line containing the required number.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 5
2 5

<b>Output:</b>
2
3

<b>Explanation:</b>
</pre><p>In the first test case, the only sought pairs are (2,2) and (3,3). In the second one, they are (3,3), (3,4) and (4,3).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-08-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
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