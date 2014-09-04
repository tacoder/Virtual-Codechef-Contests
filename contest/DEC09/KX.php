<?php require("../../includes/header.php"); ?><h1>Park tour</h1><div class="content">

<p>Imagine a large nxn square park composed of small unit squares. Some squares are occupied by trees, and the rest is free to walk through them. Your job is to create a visiting route which should be as long as possible. The route should be a closed curve with no self-intersections, and is defined by describing the sequence of squares through which it passes. From one square, the route can only proceed to a square which shares a common edge with it. The route enters and leaves each square in the central points of two of its edges. If those two points lie on opposing edges of the square (N - S or E - W), the fragment of the route within the square is a straight line segment of length l=1. Otherwise, if the two points lie on adjacent edges, the route within the square is an arc of the circle (1/4th of the full circle of radius 1/2, centered at the common corner of the edges) and its length is l=pi/4.</p>
<h3>Input</h3>
<p>In the first line of input there is an integer n (100≤n≤800), denoting the size of park. The following n lines of n characters each describe the park: the character '*' represents a square with a tree, and the character '.' means that the square is empty.</p>
<h3>Output</h3>
<p>First, an integer k (0&lt;k), corresponding to the number of lines of the subsequent description of the output. The following k pairs of numbers should describe the squares of the route: i<sub>1</sub>,j<sub>1</sub> ... i<sub>k</sub>,j<sub>k</sub>, where i is the row number (counting from 0) and y is the column number (counting from 0) of a square.</p>
<h3>Correctness of the output</h3>
<p>For each i&lt;k, squares i and i+1 of the route should share a common edge, and moreover the first and the k-th squares should also share a common edge. The route may not make a U-turn at any square, and may not lead through any squares with trees. The route should not self-intersect or touch itself. The route is not allowed to lead outside the park. Note that it is possible for the route to be twice in the same square (i.e. once enter from N exiting due E, later enter from S exiting due W).</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3
..*
...
*..

<strong>Output:</strong>
8
0 0
0 1
1 1
1 2
2 2
2 1
1 1
1 0
<strong>Score:</strong>
0.897598
</pre><h3>Test distribution</h3>
<p>n will be chosen uniformly from the range [100,800] range. The number of trees will be chosen uniformly from the range [n<sup>2</sup>*alfa,n<sup>2</sup>*2*alfa), where alfa = 0.1 for 1/3 of the testcases, alfa = 0.02 for 1/3 of the testcases, and alfa = 0.004 for 1/3 of the testcases. Positions of trees are chosen uniformly at random.</p>
<h3>Scoring</h3>
<p>The score is given as l / f, where l is the total length of the route and f is the total number of squares without trees.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-11--0001</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>