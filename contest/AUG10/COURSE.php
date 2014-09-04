<?php require("../../includes/header.php"); ?><h1>Obstacle Course</h1><div class="content">

<p>A number of traffic cones have been placed on a circular racetrack to form<br />
an obstacle course.  You are asked to determine the largest sized car that can<br />
navigate the course.  For simplicity, the cones are assumed to have zero width<br />
and the car is perfectly circular and infinitely maneuverable.  The track itself<br />
is the area between 2 concentric circles.</p>
<p>Formally, the course can be navigated by a car of radius c if there exists a<br />
closed loop around the center of the track which lies between the circles forming the track, and<br />
every point on the loop is at least c distance away from each cone and each<br />
boundary of the track.</p>
<h3>Input:</h3>
<p>Input begins with an integer T (about 25), the number of test cases.<br />
Each test case begins with 2 integers r and R (1&lt;=r&lt;R&lt;=25000).  The racetrack is<br />
the area between the circles centered at (0,0) with radii r and R.<br />
The next line of input contains an integer N (0&lt;=N&lt;=500), the number of cones.<br />
N lines follow, each containing the coordinates of a cone.  The coordinates are<br />
integers, and are guaranteed to lie within the track, and be distinct.<br />
Cases are separated by a blank line.</p>
<h3>Output:</h3>
<p>For each input, output on a single line the diameter of the largest car that<br />
can navigate the course, rounded to 3 decimal places.</p>
<h3>Sample input:</h3>
<pre>1

5 10
3
6 0
5 7
-2 -7</pre><h3>Sample output:</h3>
<pre>2.720</pre><h3>Explanation:</h3>
<p>The image below shows the course corresponding to the sample input.  The black circles represent the boundaries of the racetrack, the small dots the cones, and the filled red circle the car.  Also shown is one possible path of the car through the course.</p>
<p><img src="http://www.codechef.com/download/course.png" alt="sample course" /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/innocentboy">innocentboy</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-06-2010</td>
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