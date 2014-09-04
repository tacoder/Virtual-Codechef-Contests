<?php require("../../includes/header.php"); ?><h1>Tree Sum</h1><div class="content">

<p style="text-align:justify;">
Let L<sub>x</sub> denote the level of a node x in a rooted tree. L<sub>x</sub> is 1 if x is the root, otherwise L<sub>x</sub> = 1 + L<sub>y</sub>, where y is the parent of x in the rooted tree. You need to calculate the sum L<sub>x</sub>^K for all nodes x in the tree. </p>
<h3>Input</h3>
<p style="text-align:justify;">
The first line contains the number of test cases T. T test cases follow. The first line of each test case contains N and K, where N is the number of nodes in the tree. The following N - 1 lines contain two integers a<sub>i</sub> and b<sub>i</sub>, indicating an edge between nodes a<sub>i</sub> and b<sub>i</sub> in the tree. There is a blank line after each test case. </p>
<h3>Output</h3>
<p style="text-align:justify;">Output N lines for each test case. The i<sup>th</sup> line should contain the required sum if the tree is rooted at node i. Output all values modulo 1000000007. Output a blank line after each test case.</p>
<h3>Example</h3>
<pre>
<b>Input</b>
2
3 2
0 1
1 2

3 3
0 1
0 2


<b>Output</b>
14
9
14

17
36
36

<h3>Constraints</h3>
<li>1 &lt;= T &lt;= 10</li>
<li>1 &lt;= N &lt;= 20000</li>
<li>1 &lt;= K &lt;= 20</li>
<li>0 &lt;= a<sub>i</sub>,b<sub>i</sub> &lt; N</li>
</pre><ul>
</ul>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divij">divij</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>10 - 15 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>