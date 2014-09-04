<?php require("../../includes/header.php"); ?><h1>Knight Moving</h1><div class="content">

<p>
Consider an infinitely large chess table.<br />
From the cell (0, 0), our knight has to move to the cell (<b>X</b>, <b>Y</b>) by the rule:<br />
our knight could only move from a cell (<b>u</b>, <b>v</b>) to the cell (<b>u</b>+<b>A<sub>X</sub></b>, <b>v</b>+<b>A<sub>Y</sub></b>) or (<b>u</b>+<b>B<sub>X</sub></b>, <b>v</b>+<b>B<sub>Y</sub></b>) in one move.<br />
Note that it may be different from ordinary knight's move of chess.
</p>
<p>In addition, there is <b>K</b> blocked cell(s) on the table where the knight could not move on.</p>
<p>
Your task is to count how many distinct ways the knight could complete his mission.<br />
Two ways are called "distinct" if and only if they have different numbers of steps or there exists <b>i</b> such that they are in different cells after <b>i</b>-th step.<br />
Note that our knight may continue to move after he reaches the cell (<b>X</b>, <b>Y</b>).
</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b>, denoting the number of test cases. Each test case is described as follows:</p>
<ul>
<li>The first line contains 3 integer <b>X</b>, <b>Y</b>, <b>K</b>.</li>
<li>The second line contains 4 integers <b>A<sub>X</sub></b>, <b>A<sub>Y</sub></b>, <b>B<sub>X</sub></b>, <b>B<sub>Y</sub></b>.</li>
<li>The third line contains <b>K</b> pair(s) of integers, each represents co-ordinate of a blocked cell. This line does not exist if <b>K</b> = 0.</li>
</ul>
<h3>Output</h3>
<p>
For each test case, output on a line the number of ways found modulo 1000000007 (10<sup>9</sup>+7).<br />
If there are infinitely many ways, then output -1 instead.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 5<br />
0 ≤ <b>K</b> ≤ 15<br />
The absolute values of all other input values are at most 500.<br />
(0, 0) is not a blocked cell.<br />
(<b>X</b>, <b>Y</b>) is not a blocked cell.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3 3 0
1 2 2 1
9 9 2
1 2 2 1
1 2 6 6
1 1 0
0 0 0 0

<b>Output:</b>
2
4
0


</pre><p>
<b>Explanations:</b>
</p>
<p>
In the first and second examples, our knight's move is the similar to ordinary knight's, but only 2 directions are allowed. In the first example, there are 2 ways (0, 0) -&gt; (1, 2) -&gt; (3, 3) and (0, 0) -&gt; (2, 1) -&gt; (3, 3).
</p>
<p>
In the third example, our knight's cannot move toward, so our knight's cannot complete his mission.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anhdq">anhdq</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-07-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>9 sec</td>
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