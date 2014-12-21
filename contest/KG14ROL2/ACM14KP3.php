<?php require("../../includes/header.php"); ?><h1>Cyclic Prefix</h1><div class="content">
<p>Two strings <b>a[0..n-1]</b> and <b>b[0..n-1]</b> are called <b>cyclic equivalent</b> if and only if there exists an offset <b>d</b>, such that for all <b>0 &lt;= i &lt; n</b>, <b>a[i] = b[(i + d) mod n]</b>.</p>
<p>Given two strings <b>s[0..L-1]</b> and <b>t[0..L-1]</b> with same length <b>L</b>. You need to find the maximum <b>p</b> such that <b>s[0..p-1]</b> and <b>t[0..p-1]</b> are <b>cyclic equivalent</b>.Print 0 if no such valid <b>p</b> exists.</p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> indicating the number of test cases.</p>
<p>For each test case, there are two lines in total. The first line contains <b>s</b>. The second line contains <b>t</b>.</p>
<p>All strings contain only lower case alphabets.</p>
<h3>Output</h3>
<p>Output <b>T</b> lines in total. Each line should start with "Case #: " and followed by the maximum <b>p</b>. Here "#" is the number of the test case starting from 1.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b>
</li><li><b>1</b> ≤ <b>L</b> ≤ <b>1000000</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
abab
baba
abab
baac

<b>Output:</b>
Case 1: 4
Case 2: 3

</pre><h3>Explanation</h3>
<p>Case 1, <b>d</b> can be 1.</p>
<p>Case 2, <b>d</b> can be 2.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-09-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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