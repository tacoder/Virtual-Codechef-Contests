<?php require("../../includes/header.php"); ?><h1>Chef Ash</h1><div class="content">

<p> Chef Ash wants a new game. He has created his own spin-off of a Bowling Alley. </p>
<p>He takes a rectangular area of edge mxn. This rectangle has mxn cells in it. Each cell may have either a bumper or a bowling pin.<br />
The ball may be rolled in any of the Four directions(input uses this notation 0=north, 1=east, 2=south, 3=west,) with any speed. Calculate the points scored subject to the following rules:</p>
<p>
1) Every bowling pin dropped, reduces the ball's speed by 1</p>
<p>2) When the ball hits a bumper, it's speed reduces by 1.5 and it changes direction to the right of the direction it was originally travelling in.</p>
<p>3) If the ball hits the edge of the rectangle, it rebounds back in the opposite direction with the same velocity.</p>
<p>4) The Bowling Pin falls, only the first time the ball passes through that cell.</p>
<p>5) Each Bowling Pin is worth 1 point. Each Bumper is assigned a set of points for its worth.</p>
<p>6)If there's no pin or bumper in the cell, the ball speed reduces by 0.5 . </p>
<h3>Input</h3>
<p>
The first line contains the horizontal length (n), vertical length (m) of the rectangle ,the number of bumpers (q) and number of balls(w). (n m q w)</p>
<p>The next q lines take the space separated input of the location of bumpers and their points. (X Y Points)</p>
<p>The next w lines take a space separated input of location of balls, starting direction and speed. (X Y DIRECTION SPEED)</p>
<p>The w balls are played sequentially after resetting the Alley at the end of the last ball. </p>
<p>Only speed is taken as float value, rest all data type is integer type.</p>
<h3>Output</h3>
<p> The score of each ball on a new line (totally w lines). </p>
<h3>Example</h3>
<pre>
<b>Input:
5 4 5 3
1 0 2
0 3 1
4 3 3
3 2 1
2 1 2
3 3 0 20
4 3 3 25
1 0 0 10
</b>


<b>Output:
13
25
10

</b>

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/raghupotluri">raghupotluri</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td> - 1 sec</td>
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