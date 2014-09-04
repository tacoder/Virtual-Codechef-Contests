<?php require("../../includes/header.php"); ?><h1>Best board fill</h1><div class="content">

<p><strong>The following a tie breaker problem.  The best solution will receive one point.  All other successful answers will be scored on a curve and receive a fraction of a point based on how close they come to the best answer.</strong></p>
<p>Given a large board (with holes) and set of tetris-like figures (an unlimited source, capable of generating any number of them), try to cover the board as exactly as possible.<br />
The source is capable of generating the following pieces:</p>
<p style="font-family: monospace">
<pre  style="font-family: monospace">
1)
###
.#.
</pre></p><p>
<pre style="font-family: monospace">
2)
##.
.##
</pre></p><p>
<pre style="font-family: monospace">
3)
#.#
###
</pre></p><p>
<pre style="font-family: monospace">
4)
###
#..
</pre></p><p>
<pre style="font-family: monospace">
5)
..#
###
#..
</pre></p><p>
<pre style="font-family: monospace">
6)
#.#
###
.#.
</pre></p><p><br/></br/></p>
<p>
You are allowed to flip and rotate pieces before placing them on the board.</p>
<h3>Input</h3>
<p>
The first line contains two numbers - 100&lt;=<var>n</var>,<var>m</var>&lt;=1000 - the height and the width of the board.<br />
The next <var>n</var> lines, each containing <var>m</var> space-separated numbers, are the board description. The symbol '<b>0</b>' is a square which should be filled, the symbol '<b>1</b>' is a square which should not be filled.</p>
<h3>Output</h3>
<p>
First output the number of pieces used, <var>k</var> &lt; 10<sup>6</sup>. Then write <var>k</var> successive descriptions of the used pieces. Each description should be of the form: <var>t</var> - the number of full squares of the piece, followed by <var>t</var> pairs of integers denoting the coordinates of the respective squares (using 0-based offsets, with the top-left of input written as (0,0) ).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3 3
0 0 0
0 1 0
0 0 0


<b>Output:</b>
2
4
0 0
0 1
1 1
0 2
4
0 2
1 2
2 2
2 1

</pre><h3>Scoring</h3>
<p>
For each square you will receive a penalty, calculated in the following way:<br />
Let <var>a</var> be the number a square should be covered by (either 0 or 1), and let <var>b</var> be the actual number <i>of times</i> the square has been covered by a # piece (pieces <b>may overlap</b>). If <var>a</var> > <var>b</var> (the square should have been covered, but was not), the penalty is <b>3</b>. If <var>b</var> > <var>a</var> (the square should not have be covered and was covered, or should have been covered, but was covered more than once), the penalty is <b><var>b</var>-<var>a</var></b>.<br />
The total penalty is the sum of individual penalties, taken over all squares.</p>
<p>
In the example the penalty is 3+3+1+1 = 8.</p>
<h3>Tests</h3>
<p>
All tests have been randomly generated, with <b>1</b> covering less than 40% of the total number of squares.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-04-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>