<?php require("../../includes/header.php"); ?><h1>Time of collisions</h1><div class="content">

<p>Identical small balls are located on a straight line and can move along this line only. Each ball moves with a constant velocity, but velocities of different balls may be different. When two balls meet, a perfectly elastic collision occurs. It's a common-known physical fact that when two equal-mass physical bodies, say <b>A</b> and <b>B</b>, collide perfectly elastically, they swap their velocities. That is, <b>A</b>'s new velocity is <b>B</b>'s old velocity and <b>B</b>'s new velocity is <b>A</b>'s old velocity. Your task is to find the sum of all moments of time when collisions occur. If three or more balls collide at the same moment of time in the same place then the following will occur. Let the collision involves <b>k &gt;= 3</b> balls then you should consider this collision as simultaneous <b>k*(k-1)/2</b> collisions. It means that you should count the moment of time of this collision <b>k*(k-1)/2</b> times in you answer. The new velocities of these balls after all collisions have occurred will be as follows: the <b>1</b>-st and <b>k</b>-th balls swap their velocities, <b>2</b>-nd and <b>k-1</b>-th balls swap their velocities and so on. Explicitly, for each <b>i</b> between <b>1</b> and <b>k/2</b> balls <b>i</b> and <b>k+1-i</b> swap their velocities. Here we enumerate balls in order they were on the line in the moment of time just before the collision.</p>
<h3>Input</h3>

<p> The first line contains a single positive integer <b>T &lt;= 10</b>, the number of test cases. <b>T</b> test cases follow. The first line of each test case contains the number of balls <b>N (1 &lt;= N &lt;= 50000) </b>. Each of the following <b>N</b> lines contains 2 space-separated integers - the starting coordinate and the velocity of corresponding ball. All start coordinates are not greater than <b>1000000</b> in absolute value and all velocities are not greater than <b>20</b> in absolute value. All start coordinates are different.</p>
<h3>Output</h3>

<p> For each test case, output a single line containing number <b>S</b> - the sum of moments of time of all collisions. If there are infinitely many collisions then print <b>"INF"</b>. If there are only finitely many of them then it is guaranteed that the answer <b>S</b> is rational and you should print it in the form of a mixed number. That is if <b>S</b> is an integer then just print <b>S</b>, otherwise if it is less then one and equals to irreducible fraction <b>P/Q</b> then print "P/Q", otherwise print "A P/Q" where <b>A</b> is an integer part of <b>S</b> and <b>P/Q</b> is its fractional part in irreducible form. Note that for all fractions <b>P/Q</b> in output specifications we have <b>P &amp;lt Q</b>.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
2
-1 1
1 -1
2
0 1
1 -1
3
-1 1
2 -1
3 -5

<b>Output:</b>
1
1/2
2 5/12
</pre><h3>Explanation</h3>
<p>In the third test case we have collisions in the following moments of time: 1/4, 2/3 and 3/2.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/anton_lunyov">anton_lunyov</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-01-2011</td>
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