<?php require("../../includes/header.php"); ?><h1>Many Left</h1><div class="content">

<p>
The classical game of OneLeft is played as follows. Some pegs are placed on an NxN grid. Initially, at least one cell is empty and at least one contains a peg (each cell contains at most one peg). A move consists of jumping one peg over an adjacent peg to an empty cell, and removing the peg that was jumped over. Formally, if there is a peg in cell (x1, y1), and cell (x2, y2) is empty, and (x1-x2, y1-y2) is one of (0, 2), (0, -2), (2, 0), or (-2, 0), and there is a peg in cell ((x1+x2)/2, (y1+y2)/2), then the peg in cell (x1, y1) may be moved to cell (x2, y2) and the peg in cell ((x1+x2)/2, (y1+y2)/2) removed.  The coordinate (0, 0) indicates the top-left corner, (N-1, 0) indicates the top-right corner, (0, N-1) indicates the bottom-left corner, and (N-1, N-1) indicates the bottom-right corner.
</p>
<p>
The game continues until no more moves are possible. Normally the goal of OneLeft is to leave a single peg on the grid. However, in this problem the goal is to leave <em>as many pegs as possible</em>. Optimal solutions are not required, but solutions that leave more pegs will score more points.
</p>
<h3>Input</h3>
<p>
Input begins with an integer N, the size of the grid. N lines follow with N characters each, representing the grid. A '.' character indicates an empty cell, and a '*' character indicates a peg.
</p>
<h3>Output</h3>
<p>
For each test case, first output the number of moves in your solution. Then output each move in the form "x1 y1 x2 y2", which indicates a peg moving from (x1,y1) to (x2,y2). Any whitespace in your solution will be ignored.
</p>
<h3>Scoring</h3>
<p>
Your score for each test case is the fraction of cells containing pegs after performing the moves in your solution. Your overall score is the average of your scores on the individual test cases. Invalid solutions will be judged as "wrong answer". In particular, if any legal moves exist after the moves in your solution have been performed, your solution will considered invalid.
</p>
<h3>Sample Input 1</h3>
<pre><code>6
..*..*
*..*.*
***.**
.***..
****..
**.*.*
</code></pre><h3>Sample Output 1</h3>
<pre>13
1 3 1 1
3 3 1 3
0 5 0 3
0 2 0 0
3 5 3 3
5 2 3 2
5 0 5 2
3 2 3 0
2 4 0 4
0 3 0 5
3 0 1 0
0 0 2 0
0 5 2 5
</pre><h3>Sample Input 2</h3>
<pre><code>5
.*.*.
..*..
*...*
...*.
.*...
</code></pre><h3>Sample Output 2</h3>
<pre>0

</pre><p>
The first sample output scores 8/36 = 0.2222.<br />
The second sample output scores 7/25 = 0.28.<br />
Recall that the goal is to maximize your score.
</p>
<h3>Test Case Generation</h3>
<p>
For each official test file, N is chosen randomly and uniformly between 10 and 30, inclusive. A real number D is chosen randomly and uniformly between 0.5 and 0.95, then each cell is independently chosen to contain a peg with probability D.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2012</td>
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