<?php require("../../includes/header.php"); ?><h1>Lucky Number</h1><div class="content">

<p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.</p>
<p> Let <b>F(X)</b> equals to the number of lucky digits in decimal representation of <b>X</b>. Chef wants to know the number of such integers <b>X</b>, that <b>L ≤ X ≤ R</b> and <b>F(X)</b> is a lucky number. Help him and calculate that number modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Input</h3>

<p>First line contains one integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contains two space separated positive integers <b>L</b> and <b>R</b>.</p>
<h3>Output</h3>

<p>For each of the <b>T</b> test cases print one integer, the number of such <b>X</b>, that <b>L ≤ X ≤ R</b> and <b>F(X)</b> is a lucky number, modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>

<p>
1 ≤ <b>T</b> ≤ 10
</p>
<p>
1 ≤ <b>L</b> ≤ <b>R</b> ≤ 10<sup>1000</sup></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4
1 100
1 10000
1 100000
4444 4447

<b>Output:</b>
0
16
640
2
</pre><h3>Notes</h3>

<p>First test case: of course, any number of less than 4 digits can't contain lucky number of lucky digits, so the answer is 0.
</p>
<p>Second test case: 16 required numbers are <b>4444 4447 4474 4477 4744 4747 4774 4777 7444 7447 7474 7477 7744 7747 7774 7777</b>.
</p>
<p>Third test case: there are 640 required lucky numbers. Some of them are <b>4474, 14747, 41474, 77277, 44407, 74749</b>.
</p>
<p>Fourth test case: the only two required numbers are <b>4444</b> and <b>4447</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-11-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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