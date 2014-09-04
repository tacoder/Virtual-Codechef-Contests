<?php require("../../includes/header.php"); ?><h1>Shooting</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/mandarin2/SHOOTING.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK49/russian/SHOOTING.pdf">Russian</a> as well.</h3>
<p>
You are given a rectangular grid with <b>N</b> rows and <b>M</b> columns. Each its cell is either empty, contains an enemy, or contains a laser.
</p>
<p>
The lasers are capable of shooting. Each one can shoot in one of <b>three</b> directions: either left, right or up.When a laser shoots at some direction, it kills all the enemies on its way.
</p>
<p>
Find out whether it's possible to kill all the enemies on the grid. If it's possible, output "Possible", otherwise output "Impossible".
</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains the pair of integers <b>N</b> and <b>M</b> denoting the size of the grid.</p>
<p>The next <b>N</b> lines contain <b>M</b> characters each. The characters can be one of the following ones:</p>
<ul>
<li>'.' denoting an empty cell.</li>
<li>'E' denoting an enemy.</li>
<li>'L' denoting a laser.</li>
</ul>

<h3>Output</h3>
<p>For each test case, output a single line containing the answer to the corresponing test case.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b>, <b>M</b> ≤ <b>50</b></li>
<li>The number of lasers will be between <b>1</b> and <b>16</b>, inclusive.</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2 2
E.
L.
2 4
E.EL
LL..
3 3
EE.
L.L
L..

<b>Output:</b>
Possible
Possible
Impossible
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witua">witua</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-08-2014</td>
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