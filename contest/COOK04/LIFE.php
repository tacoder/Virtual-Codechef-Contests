<?php require("../../includes/header.php"); ?><h1>One Dimensional Game of Life</h1><div class="content">

<p>In Conway's Game of Life, cells in a grid are used to simulate biological cells.<br />
Each cell is considered to be either alive or dead.<br />
At each step of the simulation<br />
each cell's current status and number of living neighbors is used to determine the status<br />
of the cell during the following step of the simulation.</p>
<p>In this one-dimensional version, there are N cells numbered 0 through N-1.<br />
The number of cells does not change at any point in the simulation.<br />
Each cell i is adjacent to cells i-1 and i+1.<br />
Here, the indices are taken modulo N meaning cells 0 and N-1 are also adjacent to eachother.<br />
At each step of the simulation, cells with exactly one living neighbor change their status<br />
(alive cells become dead, dead cells become alive).<br />
For example, if we represent dead cells with a '0' and living cells with a '1', consider<br />
the state with 8 cells:</p>
<pre>01100101</pre><ul>
<li>Cells 0 and 6 have two living neighbors.</li>
<li>Cells 1, 2, 3, and 4 have one living neighbor.</li>
<li>Cells 5 and 7 have no living neighbors.</li>
</ul>
<p>Thus, at the next step of the simulation, the state would be:</p>
<pre>00011101</pre>
<p>Given some state of the game, your task is to determine the state immediately preceding it.<br />
In some cases there may be more than one answer or no possible answer.</p>
<h3>Input</h3>
<p>Input will begin with an integer T&lt;100, the number of test cases.<br />
Each test case consists of a single line, with between 3 and 50 characters, inclusive.<br />
Each character will be either '0' or '1'.<br />
Each '0' represents a dead cell, and each '1' represents an alive cell.</p>
<h3>Output</h3>
<p>For each test case, output the state of the game that precedes the given state.<br />
If there is no possible solution, print "No solution" (quotes for clarity only).<br />
If there are multiple possible solutions, print "Multiple solutions" (quotes for clarity only).
</p>
<h3>Sample Input</h3>
<pre>4
00011101
000
000001
11110
</pre><h3>Sample Output</h3>
<pre>01100101
Multiple solutions
No solution
10010
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-11-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>