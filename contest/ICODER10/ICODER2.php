<?php require("../../includes/header.php"); ?><h1>Fusing Particles</h1><div class="content">

<p>
Imagine a n-sided regular polygon. At each vertex of the polygon lies a particle 'x'. Now, in a hypothetical experiment, starting at time </p>
<p>= 0s, each particle 'x' travels on the sides of polygon in clockwise manner with a constant speed. Therefore, a square with vertices A, </p>
<p>B, C, D ( in clock-wise direction) , a particle 'x' starting at 'A' would move along side 'AB' and reach 'B', then travel along 'BC' and </p>
<p>reach 'C' and so on.
</p>
<p>
Each particle has same properties except that they may or may not start with the same constant speed. Thus, a particle with a </p>
<p>higher speed would ultimately collide into the particle in front of it when going in clockwise manner. Collision of two or more particles </p>
<p>at a given time instant results in a fusion, thus giving rise to a single particle with same properties except that its speed is the average </p>
<p>of the speeds of the colliding particles. The experiment stops at time = t, when a stability point is reached i.e. when there is no </p>
<p>chance of further fusion.
</p>
<p>
Now given the total sides, length of the side of the regular polygon and speeds of different particles, you have to find 't' i.e. the time </p>
<p>taken to reach to the stability point and the final speed of the particle(s).
</p>
<p>
<b>Notes</b><br />
-	If the distance between two particles is less that 0.0000001 mts i.e. 1e-7 or 10 ^ -7, collision occurs.<br />
-	Particles follow the general kinematics rule( except for the collision rules stated above ).<br />
-	Assume there is no friction or air resistance.<br />
-	Assume that the time taken at edges and the time taken for fusion is negligible.
</p>
<p>
<b>Constraints</b><br />
- 	All calculations are to be done in meters and seconds.<br />
-	Use maximum precision wherever possible.
</p>
<h3>Input</h3>
<p>
1. Number of test cases = 'T' ( 1 &lt;= T &lt;= 500 ).<br />
2. For each test case, first line contains number of sides in regular polygon = 'D' ( 3 &lt;= D &lt;= 50 ).<br />
3. Next line contains length of a side = 'L' ( integer ) ( 5 &lt;= L &lt;= 10000 ) in meters.<br />
4. Next input contains speed of all D particles ( in clockwise direction, each speed on new line ) = 'S' ( integer ) ( 5 &lt;= S </p>
<p>&lt;= 1000 ) in meters per second.
</p>
<h3>Output</h3>
<p>
1. Each line of output contains total time 't' taken for the experiment to reach the stability point followed by a space and the final </p>
<p>speed of the particle(s). Give your answer up to 6 decimal places.
</p>
<h3>Example</h3>
<pre><b>Input:</b>
2

4
100
500
200
300
400

3
100
200
200
200

<b>Output:</b>
3.000000  350.000000
0.000000  200.000000
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/csirubix">csirubix</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2010</td>
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