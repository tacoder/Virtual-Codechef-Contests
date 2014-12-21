<?php require("../../includes/header.php"); ?><h1>Cool Dude Laxman</h1><div class="content">
<p>Ram brought home <b>N</b> identical crackers, and arranged them in a row. He then numbered all the crackers with positive integer numbers such that product of any two numbers is less than or equal to <b>K</b>. He also ensured that the numbers read from left most cracker to right most cracker are in non-decreasing order.</p>
<p>Ravana took away all the crackers when Ram was not at home. To keep things simple, Cool dude Laxman brought <b>N</b> new identical crackers. Now he want to number them following the conditions Ram followed, but he realized that there are multiple ways to do it.</p>
<p>Given <b>N</b> and <b>K</b>, write a program to output the number of ways to number the crackers. If there are infinite ways to do it, output "<b>-1</b>" instead.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
Only line of each testcase contains two integer numbers <b>N</b> and <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case output one line. If the number of ways is infinite print "<b>-1</b>". If the number of ways is finite, print the required answer modulo <b>1000000007</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T, N, K</b> ≤ <b>100000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 1
2 2
<b>Output:</b>
1
2
</pre><h3>Explanation</h3>
<p><b>Test case #1:</b><br />
We need to number 2 crackers. And the product of any two numbers should not exceed 1. The only possible numbering is "1 1"
</p>
<p><b>Test case #2:</b><br />
In this case the product of any two numbers should not exceed 2. Two possible ways are "1 1" and "1 2".<br />
Note that "2 1" is invalid because Ram ensured that the numbering from left to right is non-decreasing.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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