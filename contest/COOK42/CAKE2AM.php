<?php require("../../includes/header.php"); ?><h1>Chef and the Cake II</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/mandarin/CAKE2AM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/russian/CAKE2AM.pdf">Russian</a> as well.</h3>
<p>Your friend Chef has made a cake for you on your birthday. Before having the cake you two have made some cuts on the cake. If you consider the cake as a rectangular grid with co-ordinates from (<b>0</b>,<b>0</b>) to (<b>n</b>,<b>n</b>), then each of the cut can be considered as a rectilinear polygon (a polygon with sides parallel to the axis and possibly self-intersecting). These cuts turn the cake into several pieces. Now you two want to distribute the pieces among yourself. Since it is your birthday, your friend has given you a choice of choosing some pieces for yourself. You are hungry and you want to have the whole cake. But you don't want to make your friend suspicious. So instead of having all the pieces you want to select the set of pieces such that no pair of pieces have a common side. You want to maximize the total amount of cakes you can have. This amount can be measured as the sum of the areas of the top surface for each piece (or the amount of cake in each piece is the area of the polygon that define that piece).</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows. Each test case starts with 2 integers <b>n</b> and <b>m</b> (the number of cuts). Each of the next <b>m</b> lines contains the description of a cuts. Each cut starts with an integer <b>p</b> denoting the number of points in the polygon, followed by <b>p</b> pairs of integers denoting the co-ordinates of the polygon.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing an integer denoting the maximum amount of cake you can have. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>50</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>m</b> ≤ <b>20</b></li>
<li>The polygons described by each cut will be rectilinear and will possibly be self intersecting.  Each non-empty segment on the plane belongs to the border of at most one polygon. Also, a single polygon cannot go through a single segment more than once. If any pair of polygons intersect, they will intersect only at a point (not a segment). It may happen that same pair of polygons intersect at multiple points. </li>
<li>The points describing the polygonal cuts will be between 1 to <b>n</b>-1 inclusive. </li>
<li>For each of <b>T</b> test cases the sum of number of points in the polygons defined by each cut will be at most 80.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
5 1
4 1 1 1 4 4 4 4 1
5 2
4 1 1 1 3 3 3 3 1
4 2 2 2 4 4 4 4 2

<b>Output:</b>
16
19
</pre><p> </p>
<h3>Explanation</h3>
<table>
<tr>
<td valign="top">
<p><b>Example 1:</b> You have only a single cut and the cake now have two pieces(as seen by the figure in the left). The amount of cake in piece 1 is 9 and the amount of cake in piece 2 is 16. So you will take the piece 2 and leave piece 1 for your friend. </p>
</td>
<td><img align="middle" src="https://codechef_shared.s3.amazonaws.com/download/CAKE2AM1.jpg" />
</td>
</tr>
<tr>
<td valign="top">
<p><b>Example 2:</b> You have two cuts and the cake now have four pieces(as seen by the figure in the left). The amount of cake in piece 1 is 18, the amount of cake in piece 2 is 3, the amount of cake in piece 3 is 1 and the amount of cake in piece 4 is 3. So you will take piece 1 and piece 3 for yourself and leave the piece 2 and piece 4 for your friend. </p>
</td>
<td><img align="middle" src="https://codechef_shared.s3.amazonaws.com/download/CAKE2AM2.jpg" />
</td>
</tr>
</table>    </div><table>
<tr>
<td valign="top">
<p><b>Example 1:</b> You have only a single cut and the cake now have two pieces(as seen by the figure in the left). The amount of cake in piece 1 is 9 and the amount of cake in piece 2 is 16. So you will take the piece 2 and leave piece 1 for your friend. </p>
</td>
<td><img align="middle" src="https://codechef_shared.s3.amazonaws.com/download/CAKE2AM1.jpg" />
</td>
</tr>
<tr>
<td valign="top">
<p><b>Example 2:</b> You have two cuts and the cake now have four pieces(as seen by the figure in the left). The amount of cake in piece 1 is 18, the amount of cake in piece 2 is 3, the amount of cake in piece 3 is 1 and the amount of cake in piece 4 is 3. So you will take piece 1 and piece 3 for yourself and leave the piece 2 and piece 4 for your friend. </p>
</td>
<td><img align="middle" src="https://codechef_shared.s3.amazonaws.com/download/CAKE2AM2.jpg" />
</td>
</tr>
</table><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/satej ">satej </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-01-2014</td>
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