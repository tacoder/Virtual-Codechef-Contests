<?php require("../../includes/header.php"); ?><h1>Graph on a Plane</h1><div class="content">

<p>Suppose you are given a graph as a set of pairs of numbers representing edges. What is the first thing you usually do with such a graph? Draw it, of course!</p>
<p>Today Caroline has got an undirected graph with <b>N</b> vertices numbered from 1 to <b>N</b> and <b>M</b> edges without loops or multiple edges between two vertices, and she would like to draw it on a Cartesian plane. She wants the edges to be straight line segments, so the only problem is to assign a point on the plane to each vertex. Caroline doesn't want to place any vertices on the coordinate axes -- so each vertex should be assigned to one of four <a href="http://en.wikipedia.org/wiki/Cartesian_coordinate_system#Quadrants_and_octants">quadrants</a>; moreover, if we count the number of vertices in each quadrant and write down these four numbers, no two of these numbers should differ by more than 1 (so Caroline wants to distribute the vertices among quadrants as equally as possible).  She would also like no two vertices to coincide.</p>
<p>Out of all drawings satisfying the given requirements, Caroline would like to choose a drawing with the minimal number of intersections between graph edges and coordinate axes. Note that if an edge intersects the origin (0;0), it's counted as one intersection, and if an edge intersects both axes at different points, it's counted as two intersections. Also note that if two edges intersect either of the axes in the same point, an intersection is counted for both edges.</p>
<p>Caroline doesn't care about the thing that the edges may intersect, overlap, contain vertices or even each other inside. She considers all the graphs satisfying all the requirements equally good.</p>
<p>It's easy to guess now what you are to do in this problem.</p>
<h3>Input</h3>

<p>The first line of the input file contains an integer <b>T</b> -- the number of test cases (no more than 3). Each test case is described by a line containing two integers <b>N</b> and <b>M</b> (2 ≤ <b>N</b> ≤ 18; <b>N</b> is even; 1 ≤ <b>M</b> ≤ <b>N</b>*(<b>N</b>-1)/2) followed by <b>M</b> lines, each containing two integers between 1 and <b>N</b>, inclusive, and describing an edge of the graph. There will be a blank line preceding each test case. It's guaranteed that no edge connects a vertex to itself, and also no two edges connect the same pair of vertices (remember that the graph is undirected, so <b>A B</b> and <b>B A</b> is essentially the same edge).</p>
<h3>Output</h3>

<p>For each test case output exactly <b>N</b>+1 lines. The first of them should contain the smallest possible number of intersection of graph edges with coordinate axes. The following <b>N</b> lines should contain a pair of integers <b>x<sub>i</sub></b> <b>y<sub>i</sub></b> corresponding to a point on the plane assigned to the <b>i</b>-th vertex of the graph (1 ≤ |<b>x</b>|, |<b>y</b>| ≤ 10000). You may separate the answers with empty lines.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3

2 1
1 2

4 4
1 2
2 3
3 4
4 1

4 2
1 3
2 4

<b>Output:</b>
1
1 2
3 -4

4
5 6
7 -8
-9 10
-11 -12

2
2 3
7 -5
-2 -3
-7 5
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anton_lunyov">anton_lunyov</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-11-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>