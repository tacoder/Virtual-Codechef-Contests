<?php require("../../includes/header.php"); ?><h1>Stick Game</h1><div class="content">
<p> </p>
<p>You have <b>N</b> wooden sticks, which are labeled from 1 to N. The i-th stick has a length of <b>Li</b>. Your friend has challenged you to a simple game: you will pick three sticks at random, and if your friend can form a triangle with them (degenerate triangles included), he wins; otherwise, you win. You are not sure if your friend is trying to trick you, so you would like to determine your chances of winning by computing the number of ways you could choose three sticks (regardless of order) such that it is impossible to form a triangle with them.</p>
<h3>Input</h3>
<p>The input file consists of multiple test cases.</p>
<ul>
<li>Each test case starts with the single integer <b>N</b> followed by a line with the integers <b>L1, ..., LN</b>.</li>
<li>The input is terminated with <b>N = 0</b>, which should not be processed.</li>
</ul>
<p> </p>
<h3>Output</h3>
<ul>
<li>For each test case, output a single line containing the number of triplets.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>3</b> ≤ <b>N</b> ≤ <b>2000</b></li>
<li><b>1</b> ≤ <b>Li</b> ≤ <b>1000000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
4 2 10
3
1 2 3
4
5 2 9 6
0

<b>Output:</b>
1
0
2
</pre><p> </p>
<h3>Explanation</h3>
<p>For the first test case, 4 + 2 &lt; 10, so you will win with the one available triplet. For the second case, 1 + 2 is equal to 3; since degenerate triangles are allowed, the answer is 0.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vivekjha92">vivekjha92</a></td>
		</tr>
				        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-11-2014</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, JAVA, JS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>