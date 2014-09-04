<?php require("../../includes/header.php"); ?><h1>Rectangles</h1><div class="content">
<p>
There are <b>N</b> rectangles and <b>M</b> points in a co-ordinate system such that no two rectangles have any common area between them, although they can have common point or a common line.<br /><br />
Each of the <b>M</b> points can belong to a single rectangle such that the point either lies inside the rectangle or on the rectangle.<br /><br />
<b>RPoint</b> of a rectangle is defined as the number of points which belong to the rectangle.<br /><br />
<b>MPoint</b> is the maximum possible value of RPoint of <b>N</b> rectangles.<br /><br />
Note that one point can belong to only one rectangle.<br />Find the value of <b>MPoint</b><br /></p>
<p>The input of rectangle will be given as <b>x<sub>1</sub> y<sub>1</sub> x<sub>2</sub> y<sub>2</sub></b> such that the line joining <b>(x<sub>1</sub>,y<sub>1</sub>)</b> and <b>(x<sub>2</sub>,y<sub>2</sub>)</b> is the diagonal of the rectangle and the sides of the rectangles will be parallel to the co-ordinate axes.<br /></p>
<h3>Input</h3>
<p>The first line contains two spaced integers <b>N</b> and <b>M</b> denoting the number of rectangles and the number of points in the co-ordintate geometry.<br /><br />
<b>N</b> lines follow each containing four spaced integers, denoting each rectangles<br /><br />
<b>M</b> lines follow each containing two spaced integers, denoting each point.<br /></p>
<p> </p>
<h3>Output</h3>
<p>Output a single line containing the maximum possible value of <b>MPoint</b>.</p>
<p> </p>
<h3>Constraints</h3>
<p><b>1</b>&lt;=<b>N</b>&lt;=<b>10^5</b><br /><br />
<b>1</b>&lt;=<b>M</b>&lt;=<b>10^5</b><br /><br />
<b>1</b>&lt;=<b>x<sub>1</sub></b>&lt;=<b>x<sub>2</sub></b>&lt;=<b>500</b><br /><br />
<b>1</b>&lt;=<b>y<sub>1</sub></b>&lt;=<b>y<sub>2</sub></b>&lt;=<b>500</b><br /><br />
<b>1</b>&lt;= <b>co-ordinates of points</b> &lt;= <b>500</b><br /></p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2 4
4 5 7 9
7 9 11 11
4 6
7 9
7 11
8 6


<b>Output:</b>
3
</pre><p> </p>
<h3>Explanation</h3>
<p>For the sample test <b>N=2</b> and <b>M=4</b> <br /></p>
<p>The points <b>(4,6)</b> and <b>(7,9)</b> can belong to the first rectangle.<br /><br />
And the points <b>(7,9)</b> and <b>(7,11)</b> can belong to the second rectangle.<br /><br />
Now if the point <b>(7,9)</b> belongs to first rectangle, then the value of <b>RPoint</b> for first rectangle will be <b>2</b>,<br />
and if the point <b>(7,9)</b> belongs to the second rectangle, then the value of RPoint for second rectangle will be <b>2</b>.<br />
So the maximum possible value of MPoint is <b>2</b>.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/wittyceaser">wittyceaser</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>12-05-2014</td>
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
            <td>ASM, C, C99 strict, CAML, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, GO, HASK, JAVA, PAS fpc, PAS gpc, PERL, PERL6, PYTH, PYTH 3.1.2, SCALA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>