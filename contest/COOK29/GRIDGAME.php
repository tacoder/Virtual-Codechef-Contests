<?php require("../../includes/header.php"); ?><h1>Game on a Grid</h1><div class="content">

<p>Alice and Bob are playing a game. A single pawn is placed on a grid. The grid consists of cells <b>(X, Y)</b> for non-negative integers <b>X</b> and <b>Y</b>. Some cells of the grid have been marked as impassable. A move consists of choosing some positive integer <b>D</b> and moving the pawn from <b>(X, Y)</b> either to <b>(X − D, Y)</b> or to <b>(X, Y − D)</b>, of course, if this cell belongs to the grid. In other words, we move the pawn a positive number of steps along the row or column towards the origin. The pawn is not allowed to land on nor pass through an impassable cell. Alice and Bob alternate moves, with Alice going first. The first player unable to make a move loses.</p>
<p>Alice and Bob will play several games on the same grid, but with different starting positions of the pawn. Assuming both players play optimally, determine which player will win each game.</p>
<h3>Input</h3>
<p>Input will begin with an integer <b>T</b>, the number of test cases that follow. Each test case will begin with an integer <b>N</b>, the number of impassable cells. <b>N</b> lines follow with 2 integers each: the X and Y coordinates of an impassable cell. Following this is a line with an integer <b>Q</b>, the number of games to be played on this grid. <b>Q</b> lines follow with 2 integers each: the X and Y coordinates of the pawn.</p>
<h3>Output</h3>
<p>For each test case, print the winner of each of the <b>Q</b> games, one per line.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>T</b> ≤ 10000 (10<sup>4</sup>)</li>
<li>1 ≤ <b>N</b> ≤ 100000 (10<sup>5</sup>)</li>
<li>1 ≤ <b>Q</b> ≤ 100000 (10<sup>5</sup>)</li>
<li>The sum of <b>N</b> over all test cases will not exceed 100000 (10<sup>5</sup>)</li>
<li>The sum of <b>Q</b> over all test cases will not exceed 100000 (10<sup>5</sup>)</li>
<li>All coordinate values will be between 0 and 1000000000 (10<sup>9</sup>), inclusive</li>
<li>All impassable cells will be distinct</li>
<li>No starting position of the pawn will be impassable</li>
</ul>
<h3>Sample Input</h3>
<pre>1
2
1 1
4 2
4
2 2
1 2
3 4
6 5
</pre><h3>Sample Output</h3>
<pre>Alice
Bob
Alice
Bob
</pre><h3>Explanation</h3>
<p>In the first game, the pawn is at cell (2, 2). In order to win Alice can begin by moving the pawn to (1, 2). Bob's only available move is to (0, 2) since (1, 1) is impassable. Alice then moves the pawn to (0, 0), leaving Bob with no available moves.</p>
<p>Here is the small portion of the table of winning and losing positions. Here X-direction goes from the left to the right and Y-direction goes from the top to the bottom. Letter <b>'A'</b> at the cell <b>(X, Y)</b> means that Alice will win when <b>(X, Y)</b> is the starting position of the pawn and <b>'B'</b> means that Bob will win. We use different background color for Alice and Bob cells for convenience. Impassable cells have black background color.</p>
<p><table>
<tbody>
<tr>
<td></td>
<td>0</td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
</tr>
<tr>
<td>0</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>1</td>
<td bgcolor="yellow">A</td>
<td bgcolor="black"></td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>2</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="black"></td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>3</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>4</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>5</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
</tr>
</tbody>
</table>
</p>
    </div><table>
<tbody>
<tr>
<td></td>
<td>0</td>
<td>1</td>
<td>2</td>
<td>3</td>
<td>4</td>
<td>5</td>
<td>6</td>
</tr>
<tr>
<td>0</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>1</td>
<td bgcolor="yellow">A</td>
<td bgcolor="black"></td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>2</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="black"></td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>3</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>4</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
</tr>
<tr>
<td>5</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="yellow">A</td>
<td bgcolor="red">B</td>
</tr>
</tbody>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-11-2012</td>
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