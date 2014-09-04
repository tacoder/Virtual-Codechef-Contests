<?php require("../../includes/header.php"); ?><h1>Lucky Count</h1><div class="content">

<p> Chef loves lucky numbers. Everybody knows that lucky numbers are positive integers whose decimal representation contains only the lucky digits <b>4</b> and <b>7</b>. For example, numbers <b>47</b>, <b>744</b>, <b>4</b> are lucky and <b>5</b>, <b>17</b>, <b>467</b> are not.</p>
<p> Let <b>F<sub>d</sub>(x)</b> equals to the number of digits <b>d</b> in decimal representation of the positive integer <b>x</b>. Chef interests only in functions <b>F<sub>4</sub>(x)</b> and <b>F<sub>7</sub>(x)</b>. For the given positive integer <b>N</b> he wants to know the total number of different pairs <b>(L; R)</b> such that <b> F<sub>4</sub>(L) + F<sub>4</sub>(L + 1) + ... + F<sub>4</sub>(R)</b> equals to <b> F<sub>7</sub>(L) + F<sub>7</sub>(L + 1) + ... + F<sub>7</sub>(R)</b> and <b>1 ≤  L ≤ R ≤ N</b>.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T</b>, the number of test cases. <b>T</b> test cases follow. The only line of each test case contains a positive integer <b>N </b>.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing the answer for the corresponding test case.</p>
<h3>Constraints</h3>

<p>
1 ≤ <b>T</b> ≤ 100000
</p>
<p>
1 ≤ <b>N</b> ≤ 100000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3
10
100

<b>Output:</b>
6
31
1266
</pre>
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