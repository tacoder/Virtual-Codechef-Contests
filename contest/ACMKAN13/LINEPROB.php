<?php require("../../includes/header.php"); ?><h1>Line Problem</h1><div class="content">
<p>A Sniper is standing at the point <b>(x<sub>1</sub>, y<sub>1</sub>)</b> on the 2D XY Plane. He shoots from his position towards the point <b>(x<sub>2</sub>, y<sub>2</sub>)</b>. You may assume that all points are integers.</p>
<p>Consider the 2D grid formed by integer points on the XY Plane. The position of the Sniper and the Target are lattice points in this grid. The bullet shot by the Sniper will follow a straight line trajectory from <b>(x<sub>1</sub>, y<sub>1</sub>)</b> to <b>(x<sub>2</sub>, y<sub>2</sub>)</b>. The bullet goes no further than <b>(x<sub>2</sub>, y<sub>2</sub>)</b>.</p>
<p>Consider the trajectory of the bullet when the Sniper is standing at <b>(1, 1)</b> and the Target lies at <b>(4, 3)</b>.</p>
<p><img src="http://www.codechef.com/download/line.png" /></p>
<p>Notice how the trajectory of the bullet touches 4 cells. A cell is considered touched by the trajectory <b>if and only if</b> the bullet will enter the cell. How many cells are touched by the trajectory of the bullet?</p>
<p>￼</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, the number of test cases. Each of the following <b>T</b> lines contain one test case each. Each test case contains 4 integers <b>x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub></b> and <b>y<sub>2</sub></b>. The integers are separated by single space characters.</p>
<h3>Output</h3>
<p>For each test case, output a single line, containing the number of cells touched by the trajectory of the bullet shot from <b>(x<sub>1</sub>, y<sub>1</sub>)</b> to <b>(x<sub>2</sub>, y<sub>2</sub>)</b>. Remember that a cell is considered touched by the trejectory if and only if the bullet enters the cell - only touching a side is not enough.</p>
<h3>Constraints</h3>
<pre>
<b>0 &lt; T &lt; 10100</b>
<b>0 ≤ x<sub>1</sub>, y<sub>1</sub>, x<sub>2</sub>, y<sub>2</sub> ≤ 1000000000</b>

</pre><h3>Sample Input</h3>
<pre>
3
0 0 3 2
0 0 2 2
0 0 1 0

</pre><h3>Sample Output</h3>
<pre>
4
2
0

</pre><h3>Explanation</h3>
<p>In the second test case, the trajectory of the bullet touches the point <b>(1, 1)</b>. The bullet does not enter the cells with bottom left corners at <b>(0,1)</b> and <b>(1,0)</b>. It directly enters the cell with the bottom left corner at <b>(1,1)</b>. Hence, we count only two cells as touched during its trajectory.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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
            <td>C, CPP 4.8.1, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>