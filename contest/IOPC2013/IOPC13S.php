<?php require("../../includes/header.php"); ?><h1>Counting Subtrees</h1><div class="content">

<p> A <b>free subtree</b> is defined as a connected subgraph with no cycles.</p>
<p> Given a graph G on <b>N</b> vertices, output the number of free subtrees on <b>N</b> vertices in G.</p>
<h3>Input</h3>
<p>The first line contains a single integer <b>T</b>, which denotes the number of test cases.</p>
<p>Each test case begins with a line containing two space separated integers <b>N</b> and <b>M</b>, where <b>N</b> and <b>M</b> are the number of vertices and the number of edges, respectively.</p>
<p>The next <b>M</b> lines each contain two space separated integers <b>X</b> and <b>Y</b>, which denotes that there is an edge between vertices <b>X</b> and <b>Y</b>.</p>
<h3>Output</h3>
<p>A single line per test case containing an integer which denotes the number of free subtrees in the corresponding graph. Since the answer can be very large, output it modulo <b>10<sup>9</sup>+7</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>N*(N-1)/2</b></li>
<li><b>0</b> ≤ <b>X,Y</b> ≤ <b>N-1</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
5 6
0 1
1 4
3 4
2 3
1 3
0 2

<b>Output:</b>
11
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/iopc_admin">iopc_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>