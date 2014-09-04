<?php require("../../includes/header.php"); ?><h1>Quadrilaterals</h1><div class="content">

<p align="justify">You are given the coordinates of the vertices of a square in the 2-d plane. All vertex coordinates will be integers.</p>
<p align="justify">Now consider all convex quadrilaterals which also have integer coordinates for their vertices such that the midpoints of their edges are the vertices of the original square. Find the sum of areas of all such quadrilaterals.</p>
<h3>Input</h3>
<p align="justify">The first line of input gives T, the number of test cases (1≤T≤25000). Following this are the descriptions of the individual testcases. Each testcase consists of four lines, each line containing two space separated integers - the x and y coordinates of a distinct vertex of the square. The coordinate limits are -1000000000≤x<sub>i</sub>,y<sub>i</sub>≤1000000000. It is assured that the four vertices will correspond to a square.</p>
<h3>Output</h3>
<p align="justify">For each testcase output the total area of quadrilaterals with the given property. Since the answer could be very large, give the answer modulo 100000007.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
0 0
1 1
1 0
0 1
0 1
1 0
0 -1
-1 0

<b>Output:</b>
0
4
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-01-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>