<?php require("../../includes/header.php"); ?><h1>Landing Platform</h1><div class="content">
<p>ISRO is planning to build a landing platform on MARS as a part of MOM. It has selected a small 2-D rectangular region for the same, and every point in the region has a strength associated with it. The landing platform should be in the form of a cross (see definition below for more details) and as strong as possible.</p>
<p>The selected 2-D rectangular region has <b>M</b> * <b>N</b> points represented by (x, y), for all <b>0</b> &lt;= x &lt; <b>M</b>, <b>0</b> &lt;= y &lt; <b>N</b>. Let <b>W[i][j]</b> denote the strength of the point (i, j). We define a cross as follows:</p>
<ul>
<li>
<p>
It consists of 2 line segments of equal length. The end points of the line segments should coincide with any of the given <b>M</b> * <b>N</b> points.</p>
</li>
<li>
<p>Each of the line segments are at an angle of 45° with both the <b>X</b> &amp; <b>Y</b> axis.</p>
</li>
<li>
<p>Both the line segments intersect exactly at one point, and their centres coincide. (i.e) if the 2 line segments are represented by { (<b>x<sub>11</sub></b>, <b>y<sub>11</sub></b>), (<b>x<sub>12</sub></b>, <b>y<sub>12</sub></b>) }, { (<b>x<sub>21</sub></b>, <b>y<sub>21</sub></b>), (<b>x<sub>22</sub></b>, <b>y<sub>22</sub></b>)  }, then (<b>x<sub>11</sub></b>+<b>x<sub>12</sub></b>) / <b>2</b> = (<b>x<sub>21</sub></b>+<b>x<sub>22</sub></b>) / <b>2</b> and (<b>y<sub>11</sub></b>+<b>y<sub>12</sub></b>) / <b>2</b> = (<b>y<sub>21</sub></b>+<b>y<sub>22</sub></b>) / <b>2</b>. The point where the 2 line segments intersect is called the center of the cross. </p>
</li>
<li>
<p>Each line segment of the cross should have a non-zero length. Hence, a single point cannot be considered as a cross.</p>
</li>
</ul>

<p>
The strength of a cross is defined as the sum of strengths of all points that lie on it. Your task is to find the cross with maximum strength, which ISRO would like to use as the landing platform.</p>

<h3>Input</h3>
<p>The first line contains an integer <b>T</b>, denoting the number of test cases.</p>
<p>Then for each test case, the first line contains two integers <b>M</b> and <b>N</b>.</p>
<p>Each of the following <b>M</b> lines, contain <b>N</b> space separated integers, where the j<sup>th</sup> integer on the i<sup>th</sup> line denotes <b>W[i-1][j-1]</b>, for all <b>1</b> &lt;= i &lt;= <b>M</b>, <b>1</b> &lt;= j &lt;= <b>N</b>.</p>

<h3>Output</h3>
<p>For each test case, output a single integer denoting the strength of the maximum-strength cross, on a separate line</p>

<h3>Constraints</h3>
<ul>
<li><b>T</b> &le; <b>100</b></li>
<li><b>2</b> &le; <b>M</b> &le; <b>100</b></li>
<li><b>2</b> &le; <b>N</b> &le; <b>100</b></li>
<li><b>-10<sup>6</sup></b> &le; <b>W[i][j]</b> &le; <b>10<sup>6</sup></b></li>
</ul>

<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
-1 -1 1
-1 -1 -1
1 -1 -1
2 3
0 1 -2
2 3 1

<b>Output:</b>
-1
6

</pre>
<h3>Explanation</h3>
<p>In the first case, the cross formed by the line segments {(0, 0), (2, 2)} and {(0, 2), (2, 0)} has the maximum strength = 1+(-1)+1+(-1)+(-1) = -1. <b><u>Note</u></b>: You cannot choose a cross with 0 strength (not passing through any of the given points) here, because it is given that each line segment of the cross should pass through atleast one of the given points</p>
<p>In the second case, the cross formed by the line segments {(0, 0), (1, 1)} and {(0, 1), (1, 0)} has the maximum strength = 0+3+1+2 = 6</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-10-2014</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>