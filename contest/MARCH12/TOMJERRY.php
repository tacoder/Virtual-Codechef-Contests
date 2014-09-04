<?php require("../../includes/header.php"); ?><h1>Tom And Jerry</h1><div class="content">

<p align="justify"><strong>Note:</strong> The test data for this problem is not final yet. More tests may be uploaded later!</p>
<p align="justify">Here comes the famous story of Tom and Jerry again!</p>
<p align="justify">One day, Jerry is on his way back home. His home has lots of doors scattered at different cells in a rectangular board of size <b>M x N</b>. Entering any door leads Jerry to his home. There are obstacles in some cells of the board and Jerry cannot step on these cells. In each step Jerry will move to one of the four neighboring cells. Of course, Jerry is really clever, so he always goes home along a shortest path. If there are multiple choices, Jerry will prioritize his actions in the following order: moving upward, moving rightward, moving leftward and moving downward.</p>
<p align="justify">Needless to say that Tom does not want Jerry to get back home. And Tom is very clever too. In each step Tom will put an obstacle in an empty cell, and of course this empty cell cannot have Jerry standing in it. He cannot put an obstacle on top of an entrance to Jerry's house. Also, in each step Tom places exactly one obstacle. Tom wants to put obstacles so that there's no way for Jerry to come back home!</p>
<p align="justify">Write a program to help Tom put as few obstacles as possible to achieve his (cruel) objective! Given that, in the beginning of each step Tom will put an obstacle first and then Jerry makes a move. You may sympathize with poor Jerry, but nonetheless it is your job to write this program!</p>
<h3>Input</h3>
<p align="justify">The first line contains two space separated positive integers <b>M</b> and <b>N</b>, the sizes of the board.</p>
<p align="justify">Each of the next <b>M</b> lines contains <b>N</b> characters, representing the rectangular board. Each character can be '.' - an empty cell, '0' (zero) - a door to Jerry's home, '#' - an obstacle or '*' - the initial position of Jerry. The input is guaranteed to have a single '*' on the board. There will be at least one door to Jerry's home. There may or may not be any obstacles in the beginning.</p>
<p align="justify">You may assume that in each test case Jerry has a way to escape in the beginning; and there is a way for Tom to put obstacles such that Tom achieves his objective within 100 steps.</p>
<h3>Output</h3>
<p align="justify">The first line should contains a non-negative integer <b>K</b>, the number of obstacles that Tom will put. If <b>K</b> is more than 200, the judge will return Wrong Answer.</p>
<p align="justify">Each of the next <b>K</b> lines should contain two space separated positive integers <b>x</b> and <b>y</b> (1 ≤ <b>x</b> ≤ <b>M</b>, 1 ≤ <b>y</b> ≤ <b>N</b>), the coordinates of the obstacles that Tom will put in the current step. The rows of the board are numbered by numbers from 1 to <b>M</b> from top to bottom. The columns of the board are numbered by numbers from 1 to <b>N</b> from left to right. If at some move Tom will put obstacle outside the board or at already occupied cell (by Jerry or by door or by another obstacle), the judge will return Wrong Answer.</p>
<h3>Scoring</h3>
<p align="justify">Your score for each test case is <b>K*K</b> if Jerry does not have any route to escape after placing the obstacles. If in the end Jerry can still find his way back home, you will get 2000000 (2e6) score for the corresponding test case. The total score is the sum of score for all test cases (or files).</p>
<p align="justify">Your objective, of course, is to minimize the total score.</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>M, N</b> ≤ 50</p>
<h3>Example</h3>
<pre>
<b>Input</b>

3 3
..0
...
*..

<b>Output</b>

3
2 2
1 1
3 2

This sample output would score 3*3=9. Note that better scores may be possible.
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-04-2011</td>
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