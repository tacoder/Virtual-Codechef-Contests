<?php require("../../includes/header.php"); ?><h1>Discount on crackers</h1><div class="content">
<p>Sita went to buy some crackers. They offered special discount for the ones who solve a puzzle. Sita could not solve it, she came to you for help. Following is the puzzle.</p>
<p>A mapping "<b>a-&gt;b</b>" means that you can transform letter <b>'a'</b> to letter <b>'b'</b>. You are given <b>M</b> such mappings.</p>
<p>You are given two strings <b>S</b> and <b>T</b>.<br />
Write a program which determines if <b>S</b> can be transformed to <b>T</b> using the provided mappings.<br />
You can select any position in <b>S</b> and apply any of the <b>M</b> mappings on it. You can do this any number of times. Each mapping can be used any number of times.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>P</b> denoting the number of test cases.<br />
First line of each test case has the string <b>S</b>. Second line of each test case has the string <b>T</b><br />
Third line of each test case has <b>M</b>. Following <b>M</b> lines describes the mappings, one per line.</p>
<h3>Output</h3>
<p>For each test case output one line, print "YES" if it is possible to transfrom <b>S</b> to <b>T</b>. print "NO" if not possible.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>P</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>|S|, |T|</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li><b>S</b> and <b>T</b> contain lower case English alphabet only
</li><li>All mappings are from lower case English alphabet to lower case English alphabet
</li><li>Length of <b>S</b> and <b>T</b> need <b>not</b> be equal.
</li></ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
aa
bb
1
a-&gt;b
ab
ba
2
a-&gt;b
b-&gt;a
a
b
1
b-&gt;a
<b>Output:</b>
YES
YES
NO
</pre><h3>Explanation</h3>
<p><b>Test case #1:</b><br />
Clearly 'a' can be transformed to 'b'. So "aa" can be transformed to "bb"
</p>
<p><b>Test case #2:</b><br />
'a' can be transformed to 'b' by using mapping 1. 'b' can be transformed to 'a' by using mapping 2</p>
<p><b>Test case #3:</b><br />
'b' can be transformed to 'a' but 'a' cannot be transformed to 'b'. So it is not possible.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-10-2014</td>
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