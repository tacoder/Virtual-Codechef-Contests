<?php require("../../includes/header.php"); ?><h1>Determine the Maximum Sum of Weights</h1><div class="content">
<p>You are given an undirected tree with <b>n</b> nodes numbered from 1 to <b>n</b> and <b>m</b> weighted tree paths.</p>
<p>If two tree paths share <b>at least one</b> common node, they are forbidden to be selected together, that is, only non-intersecting tree paths are allowed to be selected</p>
<p>Your task is to select a set of tree paths such that the sum of their weights is maximized.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> indicating the number of test cases.</p>
<p>For each test case, the first line contains <b>n</b> indicating the number of nodes. </p>
<p>Following <b>n-1</b> lines describe the tree. Each line contains two integer <b>a, b</b>, which represents an edge between node <b>a</b> and node <b>b</b>.</p>
<p>The next line contains an integer <b>m</b>, the number of the tree paths.</p>
<p>Next <b>m</b> lines contains three integers <b>a, b, c</b>, (<b>a!=b</b>), which represents a tree path from node <b>a</b> to node <b>b</b> and its weight is <b>c</b>.</p>
<h3>Output</h3>
<p>Output <b>T</b> lines in total. Each line starts with "Case #: " and followed by the maximum sum of weights. Here "#" is the number of the test case starting from 1.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b>
</li><li><b>1</b> ≤ <b>n, m</b> ≤ <b>100000</b>
</li><li><b>1</b> ≤ <b>a, b</b> ≤ <b>n</b>
</li><li><b>1</b> ≤ <b>c</b> ≤ <b>10000</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
7
1 2
1 3
2 4
2 5
3 6
3 7
3
4 7 10
2 5 6
6 7 5

<b>Output:</b>
Case 1: 11

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>19-09-2014</td>
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