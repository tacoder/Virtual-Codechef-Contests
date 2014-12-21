<?php require("../../includes/header.php"); ?><h1>Yet another substring problem</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/mandarin/GRIDCONN.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME18/russian/GRIDCONN.pdf">Russian</a>.</h3>
<p>The problem is completely unrelated to its problem code :).</p>
<p>Let us build an infinite string <b>D</b> that is simply a concatenation of the decimal representations of all positive integers without leading zeros. In other words, <b>D</b> = 12345678910111213141...</p>
<p>You are given a string <b>S</b>. Find the position of the first occurrence of <b>S</b> in <b>D</b> that satisfies one additional constraint: at least one integer that was concatenated to form <b>D</b> occurs entirely within <b>S</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a string of digits <b>S</b>.</p>
<p>It is guaranteed that <b>S</b> will occur satisfying the given condition somewhere in <b>D</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the minimal position number where <b>S</b> occurs in <b>D</b> under the given condition, modulo <b>10<sup>9</sup>+7</b>. Consider the string to be 1-indexed: '1' is in position 1.</p>
<h3>Constraints</h3>
<p><ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>|S|</b> ≤ <b>300</b></li>
<li>Subtask 1 (17 points): the answer won't exceed 10<sup>7</sup></li>
<li>Subtask 2 (23 points): the answer will fit in a signed 64-bit integer (before taking modulo).</li>
<li>Subtask 3 (60 points): no additional constraints.</li>
</ul>
</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
78910
9930

<b>Output:</b>
7
2679
</pre>
<h3>Explanation</h3>
<p>Please pay attention that in the second test case the answer is not 788, as it may seem at first glance. This is because the part 2982<b>9930</b>0301 doesn't contain any integer completely in it - neither 299, nor 300. But the part 92892<b>9930</b>931932 contains the integer 930 completely.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/white_king">white_king</a></td>
				</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-11-2014</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>