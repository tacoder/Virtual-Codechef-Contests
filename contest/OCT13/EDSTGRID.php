<?php require("../../includes/header.php"); ?><h1>Edit Distance on Grid</h1><div class="content">
<h3>Read problems statements in Mandarin Chinese <a target="_blank" href="http://www.codechef.com/download/translated/OCT13/mandarin/EDSTGRID.pdf">here</a></h3>
<h3>Problem description.</h3>
<p> Recently, Chef is learning how to compute the edit distance between two strings.<br />
Today, Chef wants to generalize the concept of edit distance to 2D-grid(s).</p>
<p> Given a 2D-grid with <b>N</b> rows and <b>M</b> columns,<br />
each cell of the grid is either white or black.<br />
There are three operations to change the grid:<br /><br />
1) Swap two cells share a common edge, which takes 1 second, or <br /><br />
2) Change one white cell to black, which takes <b>C<sub>2</sub></b> seconds. <br /><br />
3) Change one black cell to white, which takes <b>C<sub>3</sub></b> seconds. <br /><br />
The parameters <b>C<sub>2</sub></b> and <b>C<sub>3</sub></b> are known, but may be different in different cases. </p>
<p> Now, Chef wants to know the minimal edit distance from the given grid to any connected grid.<br />
So, your job is to change the given grid by the three operations above, and make the grid connected as soon as possible. </p>
<p> One grid is connected if it contains no black cells or all black cells are connected.<br />
Two cells A and B are directly connected if their cells share a common edge.<br />
Two cells A and B are connected indirectly if there exists another cell C such that A and C are connected (indirectly or directly)<br />
and B and C are connected (indirectly or directly).</p>
<p> For scoring propose, your submission will get "Wrong Answer" if the number of operations for any test case exceeds 1000000. The task does not require minimality, but less time will score more points.</p>
<h3>Input</h3>
<p> The first line of the input file contains an integer <b>T</b>, the number of test cases. The description of <b>T</b> test cases follows. </p>
<p>The first line of each test case contains four integers <b>N</b>, <b>M</b>, <b>C<sub>2</sub></b> and <b>C<sub>3</sub></b><br />
denoting the size of the grid and time for Operation 2) and 3).<br />
The next <b>N</b> lines describe the board, each line contains an <b>M</b> characters string.</p>
<p>In the grid, rows are numbered from <b>1</b> to <b>N</b>, and columns are numbered from <b>1</b> to <b>M</b>.<br />
The <b>j</b>-th character of the <b>i</b>-th line can be either 'B' or 'W', representing the color of the cell in the <b>i</b>-th row and <b>j</b> column is black or white.</p>
<h3>Output</h3>
<p>For each test case, output the integer <b>C</b> on the first line, denoting the number of operations.<br />
Then output <b>C</b> lines for <b>C</b> operations. <br /><br />
For operation 1), please output '1' followed by the positions of the two cells<br />
<b>row<sub>1</sub></b>, <b>column<sub>1</sub></b>, <b>row<sub>2</sub></b> and <b>column<sub>2</sub></b>.<br />
The two cells must be in the board and share one edge.<br /><br />
For operation 2), please output '2' followed by two integers indicates the position of the cell.<br />
The cell must be in the board and white before the operation. <br /><br />
For operation 3), please output '3' followed by two integers indicates the position of the cell.<br />
The cell must be in the board and black before the operation.
</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>5</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>100</b></li>
<li><b>5</b> ≤ <b>C<sub>2</sub></b> ≤ <b>20</b></li>
<li><b>20</b> ≤ <b>C<sub>3</sub></b> ≤ <b>40</b></li>
</ul>
<h3>Scoring</h3>
<p>For each test case, suppose the total time used is <b>S</b>. Your score is <b>S / (N * M)</b>. The total score of the test file is the sum of the scores for each test case. The goal is to minimize your score. </p>
<p> We have 24 official test files. You must correctly solve all test files to receive <b>OK</b>.<br />
During the contest, your overall score is the sum of the scores on the first <b>4</b> test files. After the contest, all solutions will be rescored by the sum of the scores on the rest <b>20</b> test files. </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 4 10 40
BWWB
WWWW
BWWB
3 4 10 40
BWWB
WWWW
BWWB
3 4 10 40
BWWB
WWWW
BWWB

<b>Output:</b>
4
2 2 1
2 2 2
2 2 3
2 2 4
4
3 1 1
3 1 4
3 3 1
3 3 4
6
1 1 1 1 2
1 1 2 2 2
1 2 2 3 2
1 1 4 1 3
1 1 3 2 3
1 2 3 3 3

</pre><h3>Explanation</h3>
<p>The scores of the sample output is <b>40 / (3 * 4)</b> + <b>40 * 4 / (3 * 4)</b> + <b>6 / (3 * 4)</b>.</p>
<h3>Test Generation</h3>
<p> We have <b>24</b> official test files. Every input file contains exactly 5 (<b>T</b> = <b>5</b>) test cases. </p>
<p>Each test case is created as follows:<br /><br />
The size of the grid <b>N</b> and <b>M</b> are chosen from <b>[50, 100]</b> uniformly at random.<br /><br />
The parameter <b>C<sub>2</sub></b> is chosen from <b>[5, 20]</b> uniformly at random.<br /><br />
The parameter <b>C<sub>3</sub></b> is chosen from <b>[20, 40]</b> uniformly at random.<br /><br />
One real value <b>p</b> is chosen from <b>[0.05, 0.1]</b> uniformly at random.<br /><br />
Each grid is black with probability <b>p</b> and white with probability <b>1 - p</b>, independently.<br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/ACRush">ACRush</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shangjingbo">shangjingbo</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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