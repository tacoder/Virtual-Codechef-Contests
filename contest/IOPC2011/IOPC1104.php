<?php require("../../includes/header.php"); ?><h1>Triangle equality</h1><div class="content">

<p>Consider three distinct points A,B,C on a plane. The sum of straight line distances from A to B and B to C is always greater than or equal to the straight line distance from A to C. Equality holds only when ABC is a degenerate triangle. This is the famous <b>triangle inequality</b></p>
<p>In this case, distance between points is measured by the Euclidean metric. ie, the distance between points (x<sub>1</sub>,y<sub>1</sub>) and (x<sub>2</sub>,y<sub>2</sub>) is given by sqrt((x<sub>1</sub>-x<sub>2</sub>)<sup>2</sup>+(y<sub>1</sub>-y<sub>2</sub>)<sup>2</sup>). However, this is not the only metric possible. Another common metric used is the <b>Manhattan metric</b> where the distance between the pair of points is given by |x<sub>1</sub>-x<sub>2</sub>|+|y<sub>1</sub>-y<sub>2</sub>|</p>
<p>You are given N distinct points on a plane where distances are measured using the Manhattan metric. Find the number of ordered triplets of distinct points (A,B,C) such that the sum of distances from A to B and B to C is equal to the distance from A to C.</p>
<h3>Input</h3>
<p>The first line of input contains an integer T (&lt;=10), the number of test cases to follow. </p>
<p>Following this are the descriptions of T test cases. Each test case description begins with an integer N (&lt;=50000), the number of points. Following this are N lines, each giving the x and y coordinates of a point (0&lt;=x<sub>i</sub>,y<sub>i</sub>&lt;=10<sup>8</sup>) separated by a space.</p>
<h3>Output</h3>
<p>Output T lines, each containing the number of ordered triplets of distinct points in every test case with the given property</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
0 0
1 1
2 2
3
0 0
1 2
2 1

<b>Output:</b>
2
0
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>