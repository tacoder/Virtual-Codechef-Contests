<?php require("../../includes/header.php"); ?><h1>Mushroom Cave</h1><div class="content">

<p>Chef is exploring a large cave looking for exotic mushrooms.</p>
<p>It is very dark in the cave, so Chef uses torches to help him see.<br />
Torches do not last forever, so as Chef explores the cave he must find new torches to light.<br />
Specifically, once Chef picks up a torch, he may only travel K steps before it will burn out.<br />
If Chef doesn't find another torch within K steps, he will likely be eaten by a grue.<br />
Whenever Chef finds a torch, he immediately lights it, and drops any currently held torch to the ground, rendering it unusable.<br />
Chef wants to explore as much of the cave as possible before exiting.<br />
Chef begins at the northwest corner of the cave and must end at the southeast corner.
</p>
<p>You will be given the layout of the cave, including the locations of all torches.<br />
Your task is to plot a route through the cave from the northwest corner to the southeast corner that visits as many distinct cells of the cave as possible.<br />
Chef must be able to follow your route without running out of torch light.  Chef must also still have a burning torch when he finishes the route.<br />
Note that optimal routes are not required, and your submission will be scored relative to others' submissions.<br />
Any route that leads Chef from the northwest corner to the southeast corner will be accepted.
</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases (between 3 and 10).<br />
Each test case begins with 3 integers M, N, K (M, N ≤ 100, 2 ≤ K ≤ 15).<br />
M and N are the dimensions of the cave, K is the duration of each torch.<br />
M lines follow of N characters each, describing the cave.<br />
Rows proceed from north to south, and columns from west to east.<br />
A '.' character indicates an empty cell, a '#' character indicates an impassable cell, and a 't' character indicates a torch.<br />
The cell in the northwest corner will always be a 't', and the cell in the southeast corner will never be '#'.
</p>
<h3>Output</h3>
<p>For each test case, output a string of 'N', 'W', 'S', and 'E' characters<br />
(corresponding to the cardinal directions <b>N</b>orth, <b>W</b>est, <b>S</b>outh, and <b>E</b>ast, respectively)<br />
giving a route from the northwest corner to southeast.<br />
It is guaranteed that at least one such route will exist.</p>
<h3>Scoring</h3>
<p>Your score for each test case is the total number of cells visited by your route<br />
(visiting the same cell multiple times only counts once toward the total) divided by the total number of passable cells.<br />
Your score for each file is the average of your scores on the individual test cases.<br />
Your overall score is the average of your scores on the individual test files.
</p>
<h3>Sample Input</h3>
<pre><code>2
4 5 3
ttttt
.##..
.t...
##t..
6 6 4
tt#...
...##t
...tt.
..t.t#
....t.
..t..t
</code></pre><h3>Sample Output</h3>
<pre>SSEESEE
SENSSSESSENNNWEEENSWSSESWE

</pre><p>
The score for the first test case is 8/16=0.5.<br />
The score for the second test case is 23/32=0.71875.<br />
The overall score is thus (0.5+0.71875)/2=0.609375.<br />
Note that the solution to the first test case is unique (in particular, the solution "EEEESSS" is invalid because Chef would run out of torch light during his final step), but in the second test case there are many alternate solutions<br />
(including some that visit more than 23 distinct cells).
</p>
<h3>Test Case Generation</h3>
<p>
M and N are chosen randomly and uniformly between 10 and 100, inclusive,<br />
and K is chosen randomly and uniformly between 2 and 15.<br />
Additionally, a real number D is chosen randomly and uniformly between .05 and .2, inclusive.<br />
Each cell is chosen as '#' with probability D, 't' with probability (1-D)/K, and '.' with probability (1-D)*(K-1)/K.<br />
If no valid path exists from the northwest to southeast corner, the process is restarted with the same values of M, N, K, and D.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-02-2011</td>
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