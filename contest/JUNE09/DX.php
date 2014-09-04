<?php require("../../includes/header.php"); ?><h1>Pack the balls in a box!</h1><div class="content">

<p>Suppose we have a set of balls and a large cuboid box, with a rectangle as its base. The box has a fixed size at the base, but we can choose its height. We would like to place all the balls within the box, and at the same time try to minimize its height.</p>
<h3>Input</h3>

<p>First, 2 integers, 10 ≤ a,b ≤ 100 - the dimensions of the rectangular base of the box. Then, an integer 1 ≤ n ≤ 10000, representing the number of balls. The following  n  values 1 ≤ r<sub>i</sub> ≤ 5 are the radii of the respective balls.</p>
<h3>Output</h3>

<p>You should write to output n triples of floating-point numbers, the ith triple being the x,y, and z coordinates of the center of the ith ball.</p>
<p>If we want to be precise, the coordinates of the points written to output must fulfill the following constraints for the i-th point:<br />
x<sub>i</sub>-r<sub>i</sub> ≥ 0,<br />
y<sub>i</sub>-r<sub>i</sub> ≥ 0,<br />
z<sub>i</sub>-r<sub>i</sub> ≥ 0,<br />
x<sub>i</sub>+r<sub>i</sub> ≤ a,<br />
y<sub>i</sub>+r<sub>i</sub> ≤ b. Moreover, for each i ≠ j,<br />
(x<sub>i</sub> - x<sub>j</sub>)<sup>2</sup> + (y<sub>i</sub> - y<sub>j</sub>)<sup>2</sup> +<br />
(z<sub>i</sub> - z<sub>j</sub>)<sup>2</sup> ≥ (r<sub>i</sub> + r<sub>j</sub>)<sup>2</sup> (no two balls are allowed to overlap).</p>
<h3>Scoring</h3>

<p> The goal is to minimize the height h of the box, where h = max<sub>i</sub> (z<sub>i</sub>+r<sub>i</sub>).<br />
For each data set, your program will be scored by the proportion of the box volume actually used by the balls:
</p>
<p><i>score</i> = 4/3*π*(r<sub>1</sub><sup>3</sup>+..+r<sub>n</sub><sup>3</sup>)/(a*b*h).
</p>
<p>
The program is run independently for a number of data sets, and the displayed score is the mean of scores obtained for individual data sets.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
5 5
2
1.0
2.0

<b>Output:</b>
4.0 4.0 3.0
2.0 2.0 2.0

<b>Score:</b>
37.6991118/100.0 = 0.376991118
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-05-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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