<?php require("../../includes/header.php"); ?><h1>Table Tilt</h1><div class="content">

<p>Chef recently discovered a game called "Table Tilt".<br />
The game consists of a rectangular table which has several holes in it, and several balls placed on the table.<br />
The goal is to tilt the table so that the balls will roll into the holes.<br />
The edges of the table are blocked so that a ball cannot fall off the edge of a table.<br />
By careful tilting of the table, Chef is able to precisely control the movement of the balls.<br />
Chef controls the tilting so that each second, each ball will simultaneously attempt to<br />
roll 1 unit in the same direction parallel to an edge of the table.<br />
A ball will fail to move if doing so would cause it to fall off the table,<br />
or if doing so would result in 2 balls in the same location after the move.</p>
<p>There are different types of balls, and they have different effects when they roll into a hole.<br />
The ball types, along with their shorthand notations, and effects, are as follows:</p>
<ul>
<li>Neutral (=): no effect</li>
<li>Positive (+): score increases by 5</li>
<li>Negative (-): score decreases by 5</li>
<li>Inverter (%): all positive balls become negative, and vice versa</li>
</ul>
<p>Additionally, the score decreases by 1 every second until all of the balls have rolled into holes,<br />
at which point the game ends.<br />
Note that multiple balls may roll into holes simultaneously.<br />
In this case, inverter balls are processed last.<br />
That is, if a negative ball and an inverter ball simultaneously roll into holes, the score is decreased by 5 before the<br />
remaining negative balls become positive.<br />
Additionally, inverter balls are processed one at a time,<br />
so if 2 inverter balls simultaneously roll into holes there is no net effect.
</p>
<p>Since Chef has mastered his tilting skill, he now needs strategy to improve his score.<br />
He has tasked you with finding a sequence of tilts that gives a good score.<br />
Chef is in a good mood and is not demanding an optimal sequence of tilts,<br />
but merely requires you find one that yields a positive score<br />
(of course, the higher the score, the more appreciative Chef will be).</p>
<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases.<br />
Each test case begins with 2 integers H and W on a line, giving the height and width, respectively,<br />
of the table.<br />
H lines follow of W characters each, giving the initial layout of the table.<br />
A '*' character indicates a hole.<br />
All other characters will be '=', '+', '-', or '%',<br />
indicating neutral, positive, negative, and inverter balls, respectively.
</p>
<h3>Output</h3>
<p>For each test case, output a single line with a sequence of 'U', 'L', 'D', and 'R' characters,<br />
corresponding to tilts up, left, down, and right, respectively.<br />
This sequence of tilts must be one that completes the game with a positive score.</p>
<h3>Scoring</h3>
<p>Your total score is the sum of the scores for the individual test cases.<br />
Note that if the score for any individual test case is non-positive, the submission will be judged "Wrong Answer".
</p>
<h3>Sample Input</h3>
<pre><code>2
3 3
%+-
=*+
-=+
3 4
+==-
--%*
+%-*
</code></pre><h3>Sample Output</h3>
<pre>LDRDLRULR
RDLRRRDR


</pre><p>
The score for the first test case after each tilt is: 4, 8, 7, 6, 10, 9, 8, 2, 6.<br/><br />
The score for the second test case after each tilt is: -6, -2, -3, 1, 5, 14, 13, 12.<br/><br />
The total score is therefore 18.<br />
Note that better scores may be possible, but the only requirement is that the score be positive.<br />
</br/></br/></p>
<h3>Test Case Generation</h3>
<p>
For each official input file, T is 5.<br />
For each test case, H and W are chosen randomly and uniformly between 8 and 20.<br />
Each cell of the table is chosen with the following probabilities:</p>
<ul>
<li>Hole: 2%</li>
<li>Inverter ball: 2%</li>
<li>Neutral ball: 32%</li>
<li>Positive ball: 32%</li>
<li>Negative ball: 32%</li>
</ul>

<p>Furthermore, it is guaranteed there will be at least one hole and one inverter ball.
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
            <td>4-08-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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