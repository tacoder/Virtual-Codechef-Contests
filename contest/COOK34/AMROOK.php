<?php require("../../includes/header.php"); ?><h1>Rook Placement</h1><div class="content">

<p style="text-align:justify"><b>Chef</b> and <b>Sous Chef</b> are playing a game. There are <b>N rooks</b> right next to a chessboard. The chessboard has <b>R</b> rows and <b>C</b> columns. The rows are numbered from <b>1</b> to <b>R</b> from top to bottom. The columns are numbered from <b>1</b> to <b>C</b> from left to right.</p>
<p style="text-align:justify">Chef will place the <b>N</b> rooks within the <b>R</b>*<b>C</b> cells of the chessboard. <b>He may keep multiple rooks on the same cell</b>. You may assume that each cell is large enough to hold all of the <b>N</b> rooks. After placing the <b>N</b> rooks, some of the cells may remain empty.</p>
<p style="text-align:justify">Note that not all possible placements of rooks within the <b>R*C</b> cells are <b>valid</b>. <b>If there is a rook at cell (r, c) then there should be no rooks in the cells (u, v)</b> where <b>u &lt; r AND v &gt; c</b>.</p>
<p style="text-align:justify">Following the Chef's placement of the rooks, the Sous Chef will make an <b>unlimited number of moves</b> - including, of course, the possibility of <b>no move at all</b>. In each move he may move a rook to <b>one cell up</b> or <b>one cell left</b> of its position. He cannot move a rook out of the chessboard. At the end of all the moves (<b>i.e. not necessarily at the end of each move, but at the end of all of them</b>), Sous Chef must also ensure that the board is <b>valid</b> according to the condition given above.</p>
<p style="text-align:justify">The Sous Chef will win, if he can move the rooks into a valid arrangement where <b>no pairs of rooks attack each other</b>. In other words, into a valid arrangement where <b>no pairs of rooks share the same row or the same column</b>.</p>
<p style="text-align:justify">Chef, being Chef - having such wonderful cooks for his advantage - has asked you to count the number of <b>valid</b> ways he can place <b>N</b> rooks in a chessboard with <b>R</b> rows and <b>C</b> columns such that the Sous Chef <b>cannot win</b>. 2 initial arrangements are considered different if there is at least one cell that contains different number of rooks.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Each test case contains 3 integers <b>R</b>, <b>C</b> and <b>N</b> respectively.</p>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output a single line containing the number of <b>valid</b> (see the problem statement for the definition of valid) ways Chef can place the rooks such that Sous Chef cannot win. Since this number can be quite large, print the number modulo <b>10007</b>.</p>
<h3>Constraints</h3>
<p><b>1 ≤ T ≤ 1000</b><br /> <b>1 ≤ R ≤ 10<sup>15</sup></b><br /> <b>1 ≤ C ≤ 10<sup>15</sup></b><br /> <b>1 ≤ N ≤ 10<sup>15</sup></b></p>
<h3>Sample</h3>
<pre><b>Input:</b>
4
2 2 1
2 2 2
3 2 2
3 3 2

<b>Output:</b>
0
5
8
11

</pre><h3>Explanation</h3>
<p style="text-align:justify"><b>Test Case 1:</b> Chef has to place a single rook on a 2*2 board. Of course the Sous Chef can always make sure that the rooks are not under attack from each other (since there is only 1). Hence the Chef cannot place the rook in any way in which the Sous Chef may not win.</p>
<p style="text-align:justify"><b>Test Case 2:</b> There are 9 ways the chef can place the rooks initially. The ways that are marked in bold below are those in which the Sous Chef cannot win. The notation used below is simply the number of rooks placed on each of the 2*2 cells.</p>
<pre><b>1 1
0 0</b>

<b>1 0
1 0</b>

1 0
0 1

0 1
0 1

0 0
1 1

<b>2 0
0 0</b>

<b>0 2
0 0</b>

<b>0 0
2 0</b>

0 0
0 2
</pre><p style="text-align:justify">Note that the following way to place the rooks was invalid.</p>
<pre>0 1
1 0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/satej ">satej </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-05-2013</td>
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