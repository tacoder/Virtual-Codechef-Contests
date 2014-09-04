<?php require("../../includes/header.php"); ?><h1>SuperFunction</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/mandarin/SFUNC.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME07/russian/SFUNC.pdf">Russian</a>.</h3>
<p>Mike likes to invent new functions. The latest one he has invented is called <i>SuperFunction</i>. Let's consider how it can be calculated:
</p>
<p>
You are given two integers <b>N</b> and <b>K</b>. <i>SuperFunction</i> of <b>N</b> and <b>K</b> equals to the sum of <b>K</b>'th powers of the positive numbers, which are coprime with <b>N</b> and also not greater than <b>N</b>.
</p>
<p>
I.e. <i>SuperFuntion</i> of 6 and 3 equals to <b>1<sup>3</sup> + 5<sup>3</sup> = 126</b>.
</p>
<p>
Mike knows how to calculate <i>SuperFunction</i> in case <b>N</b> and <b>K</b> are rather small integers. Now he wants you to write him a solution, which can calculate <i>SuperFuntion</i> for bigger constraints. As far as <i>SuperFunction</i> could be extremely huge, you are asked to do all the calculation under modulo <b>M</b>.
</p>
<p>Help Mike!</p>

<h3>Input</h3>
<p>
The first line contains three integers <b>N</b>, <b>K</b> and <b>M</b>.<br />
</p>

<h3>Output</h3>
<p>The first line of contains the only integer, denoting <i>SuperFuntion</i> of <b>N</b> and <b>K</b> under modulo <b>M</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
5 2 100
<b>Output:</b>
30
</pre>
<h3>Explanation</h3>
<p>
In the test case <b>N</b> equals to 5, <b>K</b> equals to 2, <b>M</b> equals to 100. The answer is (1<sup>2</sup> + 2<sup>2</sup> + 3<sup>2</sup> + 4<sup>2</sup>) mod 100 = 30.
</p>

<h3>Scoring</h3>
<p>
Subtask 1 (12 points): 1 ≤ <b>N</b> ≤ 100, 1 ≤ <b>K</b> ≤ 2, 1 ≤ <b>M</b> ≤ 40000;<br /><br />
Subtask 2 (28 points): 1 ≤ <b>N</b> ≤ 1 000 000, 1 ≤ <b>K</b> ≤ 2, 1 ≤ <b>M</b> ≤ 10<sup>9</sup>;<br /><br />
Subtask 3 (30 points): 1 ≤ <b>N</b> ≤ 1 000 000 000 000, 1 ≤ <b>K</b> ≤ 3, 1 ≤ <b>M</b> ≤ 10<sup>9</sup>;<br /><br />
Subtask 4 (30 points): 1 ≤ <b>N</b> ≤ 1 000 000 000 000, 1 ≤ <b>K</b> ≤ 10, 1 ≤ <b>M</b> ≤ 10<sup>18</sup>.<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-11-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>1 sec</td>
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