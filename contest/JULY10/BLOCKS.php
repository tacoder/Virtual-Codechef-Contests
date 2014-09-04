<?php require("../../includes/header.php"); ?><h1>Block Tower</h1><div class="content">

<p>Dave has several rectangular blocks with which he wishes to build a tower.  He may only<br />
place a block on another if its base fits within the other's base with the edges parallel.<br />
So he could place a block with a base of 1x9 on top of a block with a base of 2x9, but not on top of a block<br />
with a base of 8x8.  Help Dave make the tower as tall as<br />
possible.  Blocks may be rotated by any multiple of 90 degrees about any axis.  Each block may only be used once, and you must use at least 3 blocks.</p>
<h3>Input:</h3>
<p>Input begins with an integer T (about 500), the number of test cases.  Each test case<br />
begins with an integer N (chosen uniformly between 10 and 200, inclusive), the number of<br />
blocks.  N lines follow, each containing 3 integers that give the dimensions of a block.<br />
All dimensions are chosen uniformly between 1 and 100, inclusive.  A blank line separates<br />
each case.</p>
<h3>Output:</h3>
<p>For each case, first ouput an integer P&gt;=3, indicating the number of blocks you wish to<br />
use.  Follow with P lines, each containing the dimensions of a block, with the height of<br />
the block listed first (the order of the other 2 dimensions does not matter).  Output<br />
the blocks in order from the top of the tower to bottom of the tower.</p>
<h3>Scoring</h3>
<p>Your score for each test case is the height of your tower divided by N.  Your total score<br />
is the average of your scores on the individual test cases.</p>
<h3>Sample input:</h3>
<pre>1

10
7 2 10
8 8 8
7 1 1
2 7 9
6 8 1
6 6 5
3 2 5
10 3 9
10 10 8
4 4 1</pre><h3>Sample output:</h3>
<pre>5
4 1 4
1 1 7
10 2 7
2 7 9
8 10 10

</pre><p>Score: (4+1+10+2+8)/10 = 2.5</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-06-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>