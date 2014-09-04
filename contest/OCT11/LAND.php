<?php require("../../includes/header.php"); ?><h1>The Great Plain</h1><div class="content">

<p>You have been hired to create a map of The Great Plain. The first thing to do is to find out how the land's height changes, and that's exactly what you are to do.</p>
<p>The plain can be imagined as a rectangular grid with N rows and M columns consisting of N*M equal cells. The height of each cell is an integer number between 1 and 50, inclusive.</p>
<p>You have already explored some of the cells, and now you know the height of these cells. Unfortunately, the budget is quite tight, so you have no opportunity to explore the remaining cells. With no other choice, you decided to fill the information about the unknown cells with fake data. But you wouldn't like to be quickly caught, so you want the resulting grid to resemble a 'plain' as much as possible.</p>
<p>Formally speaking, you are to fill the empty cells of a grid with integers between 1 and 50, inclusive, so that the neighboring cells don't differ too much (see the 'Scoring' part of the problem statement for the exact explanation on how the scoring works). Note that this is a challenge problem: you don't have to find the optimal solution, it's enough to find any of them (but the better is your solution, the more points you receive).</p>
<h3>Input</h3>

<p>Input will begin with an integer T, the number of test cases (no more than 10). Each test case consists of 2 integers N and M (N, M ≤ 100), which denote the dimensions of the grid, and then N lines containing M integers each, representing the heights of the cells of the grid, which are between 1 and 50, inclusive. The value of 0 means that the corresponding cell is actually empty.</p>
<h3>Output</h3>

<p>For each test case output exactly N lines containing exactly M integers (between 1 and 50, inclusive) each, representing the resulting grid. Note that you aren't allowed to change the values in the cells with non-zero values of the given grid. You may separate the answers for consecutive test cases with empty lines.</p>
<h3>Scoring</h3>

<p>Let S be the sum calculated as follows: for each pair of side-by-side neighboring cells the value of 2<sup>K</sup> is added to S, where K is the absolute difference of heights of these two cells. Then your score for the test case is equal to log<sub>2</sub> S. Your score for each file is the average of your scores on the individual test cases. Your overall score is the average of your scores on the individual test files.</p>
<p>Your goal is to minimize this score.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 4
0 0 0 0
0 3 0 0
0 0 0 7
9 0 0 0
5 8
0 0 0 0 0 0 0 0
0 4 0 0 0 0 4 0
0 0 0 4 0 0 0 4
0 0 0 0 0 4 0 0
0 4 0 4 0 0 0 0

<b>Output:</b>
3 3 3 4
3 3 4 5
4 5 6 7
9 7 6 6

4 4 4 4 4 4 4 4
4 4 4 4 4 4 4 4
4 4 4 4 4 4 4 4
4 4 4 4 4 4 4 4
4 4 4 4 4 4 4 4

</pre><p>In the first test case S = 81, so the score is equal to approximately 6.33985. In the second test case S = 67, so the score is equal to approximately 6.06609. The overall score is thus the average of these values, or approximately 6.20297. </p>
<h3>Test Case Generation</h3>

<p>Every official input file contains exactly 10 test cases. In every test case M and N are chosen randomly and uniformly between 10 and 100, inclusive, and the values of all cells are set to zero. Then, a random integer K between 1 and 10, inclusive, is chosen. Then the following operation is executed exactly N*M*K/100 (rounded down) times: a random cell with zero value is chosen among cells which don't have any side-by-side neighboring cells with non-zero value, and the chosen cell is filled with a random integer between 1 and 50, inclusive.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/masked_zorro">masked_zorro</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-08-2011</td>
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