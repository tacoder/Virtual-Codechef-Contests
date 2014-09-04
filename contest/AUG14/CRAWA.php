<?php require("../../includes/header.php"); ?><h1>The Leaking Robot</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/mandarin/CRAWA.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/AUG14/russian/CRAWA.pdf">Russian</a>.</h3>
<p>
Oh no! Chef’s robot from problem "Reach The Point" (<a href="http://www.codechef.com/JULY14/problems/RETPO">RETPO</a>) has broken up.<br />
It's old oil tank has got leaked, it is leaking oil now.
</p>
<p>
The robot start doing the following weird moves. While moving it keeps leaving a trace of oil on the path it's been tracing.
</p>
<p>Note that in a single step robot will move by one unit in the current direction it is moving.</p>
<p><ul>
<li>Initially the robot is at position <b>(0, 0)</b>.</li>
<li>In the beginning it goes <b>1</b> step to the East (i.e. In a single step, its x coordinate will increase by 1 unit.)  </li>
<li>then <b>2</b> steps to the North, (i.e. In a single step, its y coordinate will increase by 1 unit.) </li>
<li>then <b>3</b> steps to the West, (i.e. In a single step, its x coordinate will decrease by 1 unit.)</li>
<li>then <b>4</b> steps to the South, (i.e. In a single step, its y coordinate will decrease by 1 unit.)</li>
<li>then <b>5</b> steps to the East, </li>
<li> and so on.
</li>
</ul>
</p>
<p>
Thus each time the robot turns <b>90</b> degrees anti clockwise, and it will go one more step than before. Please view the following image to<br />
understand the moves. The red line in the example shows the path traced by the robot having traces of oil on it.
</p>
<p>
<img src="https://codechef_shared.s3.amazonaws.com/download/AUG14/robot2.jpg" />
</p>
<p>
Now chef wants to know whether the point <b>(X, Y)</b> will have traces of oil on it or not. 
</p>

<h3>Input</h3>
<p>
The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.
</p>
<p>
For each test case, there is a single line containing two space-separated integers <b>X</b> and <b>Y</b>.
</p>
<h3>Output</h3>
<p>For each test case, output a single line containing “YES” (without quotes) if robot will reach point <b>(X, Y)</b> and “NO” otherwise.</p>
<h3>Constraints</h3>
<ul>
<li><b>1 ≤ T ≤ 100000 = 10<sup>5</sup></b></li>
<li><b>-1000000000 ≤ X, Y ≤ 1000000000</b>, i.e., <b>-10<sup>9</sup> ≤ X, Y ≤ 10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
3 5
0 0

<b>Output:</b>
YES
NO
YES

</pre><p>
<b> Explanation </b></p>
<p>
The points <b>(0, 0)</b> and <b>(3, 3)</b> will be having trace of oil while point <b>(3, 5)</b> will not have any trace of oil because point <b>(3, 5)</b> does not lie on the trajectory of robot.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witalij_hq ">witalij_hq </a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-04-2014</td>
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