<?php require("../../includes/header.php"); ?><h1>Moving Coins</h1><div class="content">

<p>There is a line with 1000 cells numbered from 1 to 1000 from left to right and <b>N</b> coins placed on it. Coin <b>i</b> is placed at cell <b>X<sub>i</sub></b>, and no two coins are placed at the same cell.</p>
<p>Bob would like to move the coins to the <b>N</b> leftmost cells of the line. To do this, he is allowed to take a coin from any cell <b>T</b> and move it to cell <b>T</b>-<b>j</b>, where <b>j</b> is an integer between 1 and <b>K</b>, inclusive. This action is possible only if:</p>
<ul>
<li> cell <b>T</b>-<b>j</b> actually exists and doesn't contain a coin;
</li>
<li> each of the cells <b>T</b>-<b>j</b>+1, ..., <b>T</b>-1 contains a coin.</li>
</ul>
<p></p>
<p>One coin movement takes exactly one second. Find the smallest time in which Bob can achieve his goal.</p>
<h3>Input</h3>

<p>The first line of the input file contains one integer <b>T</b> -- the number of test cases (no more than 10). Then <b>T</b> test cases follow, and every test case is described by two lines: the first of them contains two integers <b>N</b> and <b>K</b> (1 &lt;= <b>N</b>, <b>K</b> &lt;= 1000), the second of them contains <b>N</b> integers <b>X<sub>1</sub></b>, ..., <b>X<sub>N</sub></b> in strictly increasing order (1 &lt;= <b>X<sub>i</sub></b> &lt;= 1000).</p>
<h3>Output</h3>

<p>For each test case output one line containing the requested minimal time for Bob to put all the coins to the left side of the line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3 2
2 4 7
5 3
1 2 3 4 5

<b>Output:</b>
5
0

<b>Explanation:</b>
</pre><p>In the first example Bob can move the coin from cell 7 consequently to cells 6, 5, 3 and 1, then move the coin from cell 4 to cell 3. In the second example there is nothing to move.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-11-2011</td>
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