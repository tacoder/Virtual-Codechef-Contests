<?php require("../../includes/header.php"); ?><h1>Deadly Dilemma</h1><div class="content">

<p style="text-align:justify">Deadshot never missed a target. He was never unsure of when to pull the trigger... until now. He has several targets to shoot, and only so much ammo. He wants you to help him find the minimum number of shots he would need.</p>
<p style="text-align:justify">Deadshot's targets can be imagined as N (1 ≤ N ≤ 50) line segments in the XY plane. The line segments are parallel to the x-axis. The absolute value of the endpoints of the line segments is less than 1000. Deadshot, agile as he is, will take a position (x, 0), where x is a real number and the absolute value of x is less than 1000. Once he takes that position, he will fire the minimum number of shots needed to take down all the targets. Since he uses high quality piercing bullets, targets that are in the firing line, will all be hit at once.</p>
<p style="text-align:justify">You can think of the bullet's trajectory as a ray that emits from the position at which Deadshot is, at some angle. All the segments (targets) that this ray touches, or passes through, are considered hit.</p>
<p style="text-align:justify">Deadshot wants you to help him find the absolute minimum number of bullets he needs to carry to take down all the targets. Considering he will shoot from that (x, 0), for which, the minimum number of shots needed is the least among all points on the x-axis (with absolute value of x remaining less than 1000).</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of the input contains a number T (1 ≤ T ≤ 100), the number of test cases. Followed by T test cases. The first line of each test case contains a single integer N (1 ≤ N ≤ 50), the number of targets. This is followed by N lines, with 3 numbers on each line - x1 x2 y (separated by single space), describing the endpoints of a target. A target exists as the line segment between (x1, y) and (x2, y).</p>
<ul>
<li>Target segments may touch or intersect. In which case Deadshot could hit the point at which they touch, and get them all from any where he shoots!</li>
<li>Each number will contain exactly two decimal places.</li>
<li>The absolute value of all the numbers will be less than 1000.</li>
<li>The value of y will not be 0.</li>
<li>The value of x1 and x2 will not be the same.</li>
<h3>Output</h3>
<p style="text-align:justify">Print a single positive integer for each test case - the minimum number of bullets that Deadshot must carry to be able to hit all the targets, considering he will do so from the point on the x-axis (not necessarily integer, with absolute value of coordinates less than 1000) from which it takes the fewest shots.</p>
<h3>Sample Input</h3>
<pre>
1
7
1.00 10.00 10.00
4.00 7.00 5.00
100.00 120.00 10.00
105.00 108.00 5.00
2.00 115.00 100.00
100.00 120.00 -10.00
103.00 115.00 -5.00
</pre><h3>Sample Output</h3>
<pre>
4
</pre><h3>Explanation</h3>
<p style="text-align:justify">Deadshot can shoot from any point between (105.05, 0) among several other optimal points. He will make one shot at 90 degrees upwards and one shot at 90 degrees downwards to take care of all the targets except the first two. He will need to take separate shots from (110,0) to get both those targets. Thus he can get all of them in 4 shots. Note that it is not possible for Deadshot to do this in fewer shots than 4 from any other point between (-1000, 0) to (1000, 0).</p>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gamabunta">gamabunta</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>26-09-2012</td>
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