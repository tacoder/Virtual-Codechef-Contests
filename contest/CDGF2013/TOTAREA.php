<?php require("../../includes/header.php"); ?><h1>Summing up the Areas</h1><div class="content">
<p><span>Omrita and Ouhi are two best friends. They both are very fond of Geometry. One day, Omrita was alone in the class and started scribbling in blackboard.  Ouhi walks in, and saw that there was a square of side <strong>N</strong> units drawn on the blackboard. Ouhi decided to step in and drew a straight line joining the midpoints of the opposite sides of the square (thus dividing it into two rectangles).</span></p>
<p><span> Omrita, chose one of the rectangle and joined the midpoint of a larger side to opposite vertices to form a triangle. Again, she joined the midpoints of the three sides of the triangle which form another triangle and keep repeating these steps.</span></p>
<p><span>Seeing Omrita doing all the drawing (and having all the fun), Ouhi, quickly joined the midpoints of the four sides (of the other rectangle) to form a rhombus. Again she joined the four sides of the rhombus to form a rectangle and so on.</span></p>
<p><span>Oriti, another talented peer of Omrita and Ouhi walks in the class and saw the figure in the blackboard. Being inquisitive, she asked what could the total area of all the figures (square, rectangles, triangles, and the rhombus constructed) so formed if both Omrita and Ouhi keeps drawing an infinite number of times. Of course, Omrita and Ouhi  were just playing and certainly have no idea about all these areas. So they asked for your help.</span></p>
<p><span><br /></span></p>
<h3><span>Input</span></h3>
<p><span>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows. The first and the only  line of each test case contains a single integer <strong>N</strong> denoting the length of the side of the square.</span></p>
<p><span><br /></span></p>
<h3><span>Output</span></h3>
<p><span><span>For each test case, output a single line containing the required total area that needs to be computed. Your answer should have six digits after decimal.</span></span></p>
<ul>
</ul>
<p><span><br /></span></p>
<h3><span>Constraints</span></h3>
<p><span></span></p>
<ul>
<li><span><strong>1</strong> ≤ <strong>T</strong> ≤ <strong>1000</strong></span></li>
</ul>
<ul>
<li><span><strong>1</strong> ≤ <strong>N</strong> ≤ <strong>1000</strong></span></li>
</ul>
<p><span><br /></span></p>
<h3><span>Example</span></h3>
<pre>1
5
</pre><pre><span><h3><span>Output:</span></h3><pre id="output-text">70.833333
</pre><p><span> </span></p></span>
</pre><h3> Explanation </h3>
<p> For the first test case, <strong>N = 5</strong>,</p>
<p>It can be shown that the required sum = Area of the original square + Area of the two rectangles  + Sum of the areas of all the triangles + Sum of the areas of all the rhombus =  <strong>70.8333333</strong></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/Debanjan">Debanjan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-09-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>