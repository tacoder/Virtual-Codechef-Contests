<?php require("../../includes/header.php"); ?><h1>FLAGS</h1><div class="content">

<p>
A new format of a robotic competition requires a participant to make a robot that touches flags to score points.  Initially, the robot can be set at any of the flags, facing any direction, with 2 parameters set: the distance it moves and a direction, left or right. The robot then moves that distance, turns 90 degrees in the direction set, then moves that distance again, turns again, and so on, alternating between move and turn until it reaches it's original flag.  If the robot touches a flag at each location where it turns, the robot scores a point.  The robot may then be set at any flag, and the process repeated.  The robot cannot go through the same sequence of flags to score multiple points.</p>
<h3>Input</h3>

<p>
The first line gives <i>t</i>, the number of test cases( <i>t</i> ≤ 300 ). Then <i>t</i> test cases follow.</p>
<p>For each test case:<br />
The first line gives <i>n</i>, the number of flags,<br /> <br />
The next <i>n</i> lines give 2 integers <i>x y</i> each, for the x and y coordinate of each flag.</p>
<p>(0 &lt; n ≤ 2000)<br />
(-30000 &lt; x &lt; 30000)<br />
(-30000 &lt; y &lt; 30000)</p>
<h3>Output</h3>

<p>
For each test case output a single line.<br /> <br />
print number x, denoting the maximum number of points a robot can score given a set of flags.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
6
0 0
0 1
0 2
1 0
1 1
1 2
7
0 1
9 9
3 6
2 1
1 2
5 7
1 0

<b>Output:</b>
16
8
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/fctrl">fctrl</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CLPS, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>