<?php require("../../includes/header.php"); ?><h1>Andrew and the Balls</h1><div class="content">

<p>Andrew likes colored balls very much.</p>
<p>He has <b>N</b> different colors of balls, all colors are numbered from <b>1</b> to <b>N</b>, inclusive. There are <b>C<sub>1</sub></b> balls of the first color, <b>C<sub>2</sub></b> balls of the second color, ..., <b>C<sub>N</sub></b> balls of the <b>N</b><sup>th</sup> color. All balls of the same color are identical.</p>
<p>Now he wants to arrange all the balls in a row in such a way that no two consecutive balls have the same color. But he wonders in how many ways can he arrange all the balls. Help him to find the number of ways of arranging all the balls. The number can be very large, so you must output this number modulo <b>1000000007</b> (<b>10<sup>9</sup>+7</b>).</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b>, denoting the number of test cases. The description of <b>T</b> test cases follows. The first line of each test case contains single integer <b>N</b>. The second line contains <b>N</b> space-separated integers <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, ..., <b>C<sub>N</sub></b>.</p>
<h3>Output</h3>
<p>For each test case, output an integer, denoting the number of ways that he arranges all the balls modulo <b>1000000007</b> (<b>10<sup>9</sup>+7</b>).</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>7</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>200</b></li>
<li><b>1</b> ≤ <b>C<sub>1</sub> + C<sub>2</sub> + ... + C<sub>N</sub></b> ≤ <b>200</b></li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
2
1 2
3
3 1 2

<b>Output:</b>
1
10
</pre><h3>Explanation</h3>
<p><b>Example case 1</b>: There is only one way to arrange all balls as follows<br />color-<b>2</b> color-<b>1</b> color-<b>2</b></p>
<p><b>Example case 2</b>: There are <b>10</b> ways to arrange all balls as follows<br />color-<b>1</b> color-<b>2</b> color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>3</b><br />color-<b>1</b> color-<b>2</b> color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>1</b><br />color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>2</b> color-<b>1</b> color-<b>3</b><br />color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>2</b> color-<b>3</b> color-<b>1</b><br />color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>2</b><br />color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>2</b> color-<b>1</b><br />color-<b>1</b> color-<b>3</b> color-<b>2</b> color-<b>1</b> color-<b>3</b> color-<b>1</b><br />color-<b>2</b> color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>1</b><br />color-<b>3</b> color-<b>1</b> color-<b>2</b> color-<b>1</b> color-<b>3</b> color-<b>1</b><br />color-<b>3</b> color-<b>1</b> color-<b>3</b> color-<b>1</b> color-<b>2</b> color-<b>1</b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-04-2013</td>
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