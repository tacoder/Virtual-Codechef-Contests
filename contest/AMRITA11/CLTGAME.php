<?php require("../../includes/header.php"); ?><h1>Collect Game</h1><div class="content">

<p>Alice and Bob are playing a game of moving coin on a N x N grid of 0s and 1s. Rows are numbered 1 to N from top to bottom and Columns are<br />
numbered 1 to N from left to right. Starting from a cell in the 1st row, they take turns alternately each time moving the coin to the next<br />
row. From a cell (i,j) they can move the coin to any of the cells (i+1,j-1), (i+1,j), (i+1,j+1) as long as it lies inside the grid.<br />
The game halts when the coin reaches the last row. Alice wants to collect as many 1s as possible along the path, while Bob wants to collect<br />
as many 0s as possible.</p>
<p>The game starts with Alice placing the coin in a cell in the 1st row, then Bob moving it from the 1st row to the 2nd row and then Alice<br />
moving it to the 3rd row and so on. In how many cells in the 1st row can Alice place the coin initially, such that the number of 1s<br />
encountered along the path from top to bottom is at least K, if both play optimally. Note that such a path covers exactly N cells, including<br />
a cell in the 1st Row.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T. T cases follow. Each test case consists of N K in the first line followed by the<br />
description of the grid in the next N lines. Each row of the grid is given as a string of 0s and 1s, without spaces in between. A blank<br />
line precedes each test case.</p>
<h3>Output</h3>
<p>Output T lines, one for each case containing the required answer.</p>
<pre>
<h3>Constraints</h3>
1 &lt;= T &lt;= 10
3 &lt;= N &lt;= 1000
1 &lt;= K &lt;= N

<h3>Example</h3>
<b>Input:</b>
2

3 2
010
100
101

4 2
1100
0000
0010
1101

<b>Output:</b>
1
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/flying_ant">flying_ant</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-11-2011</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>