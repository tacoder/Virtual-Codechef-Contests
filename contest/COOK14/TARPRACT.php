<?php require("../../includes/header.php"); ?><h1>Target Practice</h1><div class="content">

<p>Chef has recently taken up marksmanship, but he's not very good at it.<br />
Chef has set up a number of targets in a line.<br />
When Chef shoots at a target, he may hit the target, but he may instead hit<br />
the target to the left, or the target to the right<br />
(or if there is no such target, miss completely).<br />
Chef knows the probability of his shot going straight, left, or right,<br />
and wants to hit each target at least once using as few shots as possible.</p>
<p>Help Chef determine the expected number of shots required, provided an optimal strategy is followed.<br />
Note that Chef may only shoot at targets, but may shoot at a target that's already been hit.</p>
<h3>Input</h3>
<p>Input will begin with an integer T, the number of test cases.<br />
Each test case will consist of 4 integers:<br />
N, the number of targets,<br />
L, the probability of the shot veering to the left,<br />
S, the probability of the shot going straight,<br />
and R, the probability of the shot veering to the right.<br />
L, S, and R are given as percents.
</p>
<h3>Output</h3>
<p>For each test case, output the expected number of shots to hit all targets, rounded to 6 decimal places.
</p>
<h3>Sample Input</h3>
<pre>4
3 25 50 25
3 10 10 80
5 25 50 25
8 30 35 35
</pre><h3>Sample Output</h3>
<pre>4.666667
10.361111
7.541667
13.107725

</pre><p>In the first example, Chef shoots at the center target until any 2 targets have been hit,<br />
then he shoots at the remaining target.</p>
<h3>Constraints</h3>
<ul>
<li>T≤30</li>
<li>1≤N≤18</li>
<li>0&lt;L,S,R</li>
<li>L+S+R=100</li>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/chmel_tolstiy">chmel_tolstiy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-09-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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