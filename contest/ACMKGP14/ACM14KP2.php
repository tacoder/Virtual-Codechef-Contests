<?php require("../../includes/header.php"); ?><h1>Bye, inversions!</h1><div class="content">
<p>Given an array <b>a[1..n]</b> of <b>n</b> numbers. You need to swap <b>adjacent</b> numbers <b>exactly k</b> times. The goal is to minimize the number of inversions after <b>exactly k</b> swaps.</p>
<p>An inversion is a pair (<b>i</b>, <b>j</b>) such that <b>i</b> &lt; <b>j</b> and <b>a[i] &gt; a[j]</b></p>
<h3>Input</h3>
<p>The first line contains an integer <b>T</b> indicating the number of test cases.</p>
<p>For each test case, there are two lines in total. The first line contains two integer <b>n</b> and <b>k</b>. The second line contains <b>n</b> numbers describing the array.</p>
<h3>Output</h3>
<p>Output <b>T</b> lines in total. Each line should start with "Case #: " and followed by the minimum inversions after swaps. Here "#" is the number of the test case starting from 1.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b>
</li><li><b>2</b> ≤ <b>n</b> ≤ <b>100000</b>
</li><li><b>0</b> ≤ <b>k</b> ≤ <b>1000000</b>
</li><li><b>1</b> ≤ <b>a[i]</b> ≤ <b>n</b>
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 3
3 2 1
3 1
1 2 3
3 2
1 2 3

<b>Output:</b>
Case 1: 0
Case 2: 1
Case 3: 0

</pre><h3>Explanation</h3>
<p>Case 1, (3 2) 1 --&gt; 2 3 1 --&gt; 2 (3 1) --&gt; 2 1 3 --&gt; (2 1) 3 --&gt; 1 2 3.</p>
<p>Case 2, (1 2) 3 --&gt; 2 1 3.  You have to make exactly <b>k</b> swaps. </p>    </div><table cellspacing="0" cellpadding="0" align="left">
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