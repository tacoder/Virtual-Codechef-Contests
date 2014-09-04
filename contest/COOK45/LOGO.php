<?php require("../../includes/header.php"); ?><h1>McHefs 3D Logo</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/mandarin/LOGO.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK45/russian/LOGO.pdf">Russian</a> as well.</h3>
<p></p><p>Chef has opened a new fast food chain - <b>McHefs</b>. He engaged the best logo designers of country to build a cool 3D logo for the new restaurants. Later he realised that he can't print 3D logo on menu, neon signboard, website etc. So he has asked you to make a 2D version of the 3D logo. You will be using a 320px × 240px (columns × lines) canvas to produce the 2D logo.</p>
<p>The logo is made using only triangles and quadrilaterals (convex and concave, but not self-intersecting). These polygons meet the following rules:</p>
<p>1) They may be tilted in any direction.<br />2) They have a solid colour. There are 9 colours numbered from 1 to 9.<br />3) They are allowed to intersect.</p>
<p>One logo which appeared during designing:<br /><br /><img src="http://www.codechef.com/download/x2yqVkc.png" /><br />Notice the "jaggies"(jagged edges) in image; they are unavoidable hence acceptable in solution.<br />The XYZ axis are oriented as:<br /><img src="http://www.codechef.com/download/Xb82VFH.png" /><br />Note that +Z axis is coming out.</p>
<p><b>Important points:</b><br />1. If  value of 2 polygons are exactly same, then the greater color value of two will be visible. Example at end (in Notes)<br />2. The edges of triangle or quadrilateral should be as accurate as if drawn by <a href="http://en.wikipedia.org/wiki/Bresenham%27s_line_algorithm">Bresenham's algorithm</a>. Note that you don't have to implement Bresenham's algorithm, any approach which doesn't suffers from floating point error is acceptable. Also when rounding off <b>X or Y</b> whose decimal part is exactly <b>0.5</b>, you have to round up. Like 21.5 becomes 22.</p>
<h3>Input</h3>
<p>First line contains <b>N</b>, the number of polygons (triangles and quadrilaterals). Then <b>N</b> lines follow, each consists of <b>T</b> the type of polygon, <b>C</b> the color of polygon and 3D coordinates of polygon &lt;<b>X, Y, Z</b>&gt;.</p>
<p>When <b>T</b> is 1, the polygon is Triangle and 3 coordinates are given for the triangle's vertices. When <b>T</b> is 2, the polygon is Quadrilateral and 4 coordinates are given for the quadrilateral's vertices.</p>
<h3>Output</h3>
<p>Output 240 lines, each containing 320 characters to describe the canvas. The background color of canvas is '0'. The i<sup>th</sup>(i starts from 0) character on j<sup>th</sup>(j starts from 0) line should have color value visible at &lt;<b>i, j</b>&gt;</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>N</b> ≤ 1000</li>
<li>1 ≤ <b>T</b> ≤ 2</li>
<li>1 ≤ <b>C</b> ≤ 9</li>
<li>0 ≤ <b>X</b> ≤ 319</li>
<li>0 ≤ <b>Y</b> ≤ 239</li>
<li>-1000 ≤ <b>Z</b> ≤ 1000</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 1 120 50 10 50 130 20 180 140 -10
1 2 200 45 10 55 70 -20 140 150 15
2 5 20 20 0 200 20 0 200 200 0 20 200 0
2 8 30 30 1 50 50 1 70 30 1 50 90 1

<b>Output:</b>
<a href="/download/sample.out">Download the output</a>
</pre><h3>Notes</h3>
<p>If &lt;<b>X, Y, Z</b>&gt; value of 2 polygons are exactly same, then the greater color value of two will be visible. Example, for the following input:<br /></p>
<pre>2
2 1 10 10 0 10 110 0 110 110 0 110 10 0
2 2 50 50 0 50 150 0 150 150 0 150 50 0</pre><p><br />The (pictorial) output will be:<br /><img src="http://www.codechef.com/download/hR8s1dO.png" /><br />assuming color '0' is black, color '1' is red, color '2' is blue.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vinayak garg">vinayak garg</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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