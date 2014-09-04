<?php require("../../includes/header.php"); ?><h1>Super Line Segments</h1><div class="content">
<p>You are given n points in 2 D plane. Let us represent the n points by p[1],p[2],....p[n]. No two points have same coordinates and no three points are colinear. <br /><br />
Consider the set of lines L = {L : L is a line segment made by connecting (p[i],p[j]) for all 1 ≤ i,j ≤ n and i!=j} <br /><br /><br />
Two line segments L1 and L2 are said to be related if they intersect at a point which is not an end point of either of segments.<br /><br /><br />
A set of lines L is said to be a ”super” set if it does not contain any two line segments which are related.<br /><br /></p>
<p>Now you wonder what could be the maximum possible size of a "super set" which belongs to L<br /><br /></p>
<h3>Input Format</h3>
<ul>
<li>The first line contains an integer T, representing the number of test cases.</li>
</ul>
<p><br /></p>
<ul>
<li>For each test case, first line will contain a single integer N. Then the next N lines, will contain two space separated integer x[i] and y[i].</li>
</ul>
<p><br /></p>
<h3>Output Format</h3>
<ul>
<li>The output consists of T lines, each line corresponding to a test case. For each test case, output the maximum possible size of a "super set".</li>
</ul>
<p><br /></p>
<h3>Constraints</h3>
<p><br /><br />
1 ≤ N ≤ 10<sup>5</sup><br /><br />
-10^9 ≤ x[i],y[i] ≤ 10<sup>9</sup><br /><br />
Sum of N over all test cases would be ≤ 2*(10<sup>5</sup>)<br /><br /></p>
<h3>Sample Input</h3>
<p><br /><br />
2<br /><br />
3<br /><br />
0 0 <br /><br />
1 0 <br /><br />
0 1 <br /><br />
4 <br /><br />
0 0<br /><br />
0 1 <br /><br />
1 0<br /><br />
1 1<br /></p>
<h3>Sample Output</h3>
<p><br /><br />
3<br /><br />
5<br /><br />
<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>2-02-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>