<?php require("../../includes/header.php"); ?><h1>Three elements</h1><div class="content">
<p>Given an array <b>a[1..n]</b> with <b>n</b> positive integers. You can select any 3 different indices i, j, k and sum up the values <b>a[i], a[j], a[k]</b>. You need to output the maximum sum you can make by selecting some i, j, k.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> indicating the number of test cases.</p>
<p>For each test case, the first line contains <b>n</b> indicating the size of array <b>a</b>. </p>
<p>Second line of each test case contains <b>n</b> space separated integers representing the array <b>a</b>. </p>
<h3>Output</h3>
<p>Output <b>T</b> lines in total. Each line starts with "Case #: " and followed by the maximum sum of 3 values. Here "#" is the number of the test case starting from 1.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>30</b>
</li><li><b>3</b> ≤ <b>n</b> ≤ <b>100</b>
</li><li><b>1</b> ≤ <b>a[i]</b> ≤ <b>10000</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
4
1 2 3 4
4
1 2 1 1

<b>Output:</b>
Case 1: 9
Case 2: 4

<h3>Explanation</h3>
<b>Test Case 1:</b>
You can select 2, 3, 4 and get the sum 2+3+4 = 9.
<b>Test Case 2:</b>
You can select 2, 1, 1 and get the sum 2+1+1 = 4.
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>14-10-2014</td>
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
            <td>C, CPP 4.8.1, CPP11, JAVA</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>