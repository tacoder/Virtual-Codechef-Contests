<?php require("../../includes/header.php"); ?><h1>Circle Break</h1><div class="content">

<p>There are N cells in a circle numbered 1 to N in that order. Cell i is adjacent to cells (i-1) and (i+1) and cells 1 and N are also<br />
adjacent. You can cut the circle between two indices and you have to make two such cuts so that the circle breaks in to two arcs, with each<br />
cell in one of them. Each arc should have at least one cell in it.</p>
<p>Given a circular array of N cells, find the number of ways in which you can break it in to two arcs such that sum of values in the cells in<br />
the two arcs are same. Two ways of breaking are different if there is at least one pair of cells (i,j) such that, both i and j belong to<br />
the same arc in one and to different arcs in the other.</p>
<h3>Input</h3>
<p>The first line contains the number of test cases T. T cases follow. Each test case consists of N in the first line followed by N space<br />
separated integers on the next line denoting the values A[1..N]</p>
<h3>Output</h3>
<p>Output T lines, one for each case containing the required answer.</p>
<h3>Constraints</h3>
<pre>
1 &lt;= T &lt;= 10
3 &lt;= N &lt;= 100000
-1000 &lt; A[i] &lt; 1000

<b>Input:</b>
2
3
2 5 3
6
2 -1 0 1 1 1

<b>Output:</b>
1
4
<pre>

<b>Explanation of case 2:</b>
<p>The 4 possible breaks are shown below
{2} {-1,0,1,1,1}
{2,-1,0,1} {1,1}
{0,1,1} {1,2,-1}
{1,1} {1,2,-1,0}
</p></pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>5 sec</td>
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