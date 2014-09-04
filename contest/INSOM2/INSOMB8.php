<?php require("../../includes/header.php"); ?><h1>Falling Snow</h1><div class="content">

<p>Mohit was an inquisitive physics student. When he saw snow falling from the sky (a rare phenomenon in Roorkee), he took his glass slides outside and kept them on a table. His aim was to obtain a sample of snow crystals for analysing their crystal structure. Nature was in a favorable mood - The snow falling was of a sticky sort and whenever any flake touched any part of the glass slide, it stuck to it in a flat mass. Later, while analysing the slides under a powerful microscope, Mohit was able to discern the precise order in which the snowflakes fell. By analysing the refractivity variations, he was also able to determine the boundaries of each snow crystal. However, some of his other experimental observations were not in sync with the commonly accepted properties of snow. To eliminate errors due to his glass slides, Mohit wants to determine if there exists any region of his slide that has remained uncovered by snow.</p>
<p>Given the coordinates of the edges of the snow crystals (assuming them to be flat bodies) in the order in which they drop onto the slides, determine if the slide surface that has been completely covered by snow crystals. Display Yes, if that is the case, No otherwise.</p>
<p> Note: A polygon may be split into multiple regions by having non-adjacent edges meeting at a point but not crossing.</p>
<p><b>Input Format:</b></p>
<p>Line 1: N – Number of snow crystals. (1 &lt;= N &lt;= 20) followed by <br /> Line 2 to N+1: K x1 y1 x2 y2 ... xk yk </p>
<p> Where K represents the number of sides of the polygon traced out by the flake on the glass slide and xi yi (i = 1 to K) are the 2D coordinates of the vertices of the polygon such that consecutive vertices form the end points of edges of the polygon with respect to an arbitrary coordinate system. (3 &lt;= K &lt;= 10). Abs(xi), Abs(yi) &lt; 1000.  No two non adjacent sides of the given polygon will intersect each other and the input vertices will always specify a valid polygon. </p>
<p> Line N+2: S x1 y1 x2 y2 ... xs ys <br /> Where S represents the number of sides of the glass slide and xj yj (j = 1 to s) are the coordinates of the corners of the glass slide in the same coordinate system. (3 &lt;= S &lt;= 10).  Abs(xj), Abs(yj) &lt; 1000.</p>
<p> <b>Output Format:</b></p>
<p>Line 1: Yes/No</p>
<p> <b>Sample Input:</b></p>
<pre>4
4 -30 0 100 0 100 72 0 72
4 0 35 50 35 50 200 0 200
4 30 12 30 100 200 200 500 12
4 70 0 70 20 200 20 200 0
4 0 0 0 100 200 100 200 0
</pre><p> <b>Sample Output:</b></p>
<pre>Yes
</pre><p><b>The figure for the sample input is:</b><br /> <img src="/download/fallingsnow.jpg" /></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2009</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>