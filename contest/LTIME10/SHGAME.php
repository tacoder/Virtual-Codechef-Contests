<?php require("../../includes/header.php"); ?><h1>A Game With a Sheet of Paper</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/mandarin/SHGAME.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME10/russian/SHGAME.pdf">Russian</a>.</h3>
<p>Yuuko and Nagi like to play the following game:</p>
<p>Initially they take a checkered sheet of paper of the size of <b>N</b> x <b>M</b> cells. Then, one cell, let's call this cell (<b>X</b>, <b>Y</b>) is marked. Then, they take the moves alternately. A move consists of making a long horizontal or vertical cut. This cut should coincide with one of the lines that divide the sheet into cells. Then, a part that doesn't contain a marked cell is thrown away and another player takes her turn. A player who is unable to make a turn because after the opponent's turn the dimensions of the sheet became equal to <b>1</b> x <b>1</b> loses. Yuuko plays first.</p>
<p>Yuuko and Nagi have played a lot of games together so now they both know the optimal strategy and always use it. Today girls are going to play a game on a <b>N</b> x <b>M</b> cells sheet of paper, but they haven't yet decided, what is the cell (<b>X</b>, <b>Y</b>) to be marked. Yuuko is interested, in how many ways it's possible to choose this cell so the she can become a winner, regardless of Nagi's moves.</p>
<h3>Input</h3>
<p>The first line of input consists of an integer <b>T</b> - the number of test cases. Then, <b>T</b> lines describing the test cases follow. The <b>i</b>-th such line contains two integers <b>N</b> and <b>M</b>, separated by a single space.</p>
<h3>Output</h3>
<p>
For each test case, output a single line containing the number of ways to choose the marked cell in order to ensure Yuuko's win.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5 8
6 7

<b>Output:</b>
40
42
</pre><h3>Scoring</h3>
<p><b>T</b> = 100, 1 &lt;= <b>N</b>, <b>M</b> &lt;= 10 : 25 points.<br /><br />
<b>T</b> = 100, 1 &lt;= <b>N</b>, <b>M</b> &lt;= 1000 : 36 points.<br /><br />
<b>T</b> = 100, 1 &lt;= <b>N</b>, <b>M</b> &lt;= 10<sup>6</sup> : 39 points.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko‎">Rubanenko‎</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2014</td>
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