<?php require("../../includes/header.php"); ?><h1>A Magical Length</h1><div class="content">
<p>Given <b>n</b> points <b>A[1..n]</b> in the 2-D plane, where <b>i</b>-th point has two attributes <b>A[i].x</b> and <b>A[i].y</b> representing x-coordinate and y-coordinate.</p>
<p>Find 3 points <b>A[i]</b>, <b>A[j]</b>, <b>A[k]</b> (i, j, k are distinct) such that <b>distance(A[i], A[j]) + distance(A[j], A[k]) + distance(A[k], A[i])</b> is minimized. Here <b>distance(A[i], A[j])</b> means the Euclid Distance, which is equals to <b>sqrt( (A[i].x - A[j].x)^2 + (A[i].y - A[j].y)^2)</b><br />
You need to output the minimum possible distance.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> indicating the number of test cases.</p>
<p>Each test case starts with a positive integer <b>n</b> indicating the number of points.</p>
<p>The following <b>n</b> lines contain two real numbers <b>A[i].x</b> and <b>A[i].y</b> with at-most 6 digits after decimal point describing the coordinates of the point.</p>
<h3>Output</h3>
<p>Output <b>T</b> lines in total. Each line starts with "Case #: " and followed by minimum length. Here "#" is the number of the test case starting from 1.</p>
<p>Answers within an absolute or relative error of 10^-6 will be accepted</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b>
</li><li><b>3</b> ≤ <b>n</b> ≤ <b>100000</b>
</li><li><b>0</b> ≤ <b>A[i].x, A[i].y</b> ≤ <b>10000</b>
</li><li><b>A[i].x, A[i].y are real numbers with atmost 6 digits after decimal position.</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
4
0.0 0.0
2.0 2.0
2.0 0.0
1.0 1.0

<b>Output:</b>
Case 1: 4.8284271247
</pre><h3>Explanation</h3>
<p>One possible solution is to select these 3 points (0, 0), (2, 0), (1, 1), the length is <b>sqrt(2) + sqrt(2) + 2</b></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-09-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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