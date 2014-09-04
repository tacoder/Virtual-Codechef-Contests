<?php require("../../includes/header.php"); ?><h1>The Basketball Game</h1><div class="content">

<p>Bob has recently learnt how to play basketball and he was told by Alice that the rules in basketball were as follows :</p>
<p>• 1 point for a free throw</p>
<p>• 2 points for a throw from within the D </p>
<p>• 3 points for a throw from outside the D </p>
<p>
Being an inquisitive mind that Bob is, he would like to know how many combinations of 1-pointers, 2-pointers and 3-pointers can lead to a team score of N points.</p>
<p>
Now if a team has scored enough points, Bob wouldn't be able to remember the number of possible combinations long enough to show-off in front of your friends.</p>
<p>
So you decide to keep track of result modulo 100001.<br />
Help Bob to compute the number of combinations of 1-pointers, 2-pointers and 3-pointers that can lead to a team score of N points.
</p>
<h3>Input</h3>
<p>The first line contains single integer T - the number of test cases. T test cases follow.For each test case input will just be a number which denotes the team score N.</p>
<h3>Output</h3>
<p>Output should be number of combinations of 1-pointers, 2-pointers and 3-pointers that can lead to the given team score modulo <b>100001</b>.</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>0</b> ≤ <b>N</b> &lt; <b>10^8</b></li>
<p>Sum of all the N's across a test file doesn't exceed 10^8.</p>
<h3>Example</h3>
<pre><b>Input:</b>
4
8
12
1033
894755

<b>Output:</b>
10
19
89441
22727
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1:</b><br />For the 1st test case,following are the possible combinations for team score of 8</p>
<p>1x8</p>
<p>1x6 + 2x1</p>
<p>1x4 + 2x2</p>
<p>1x2 + 2x3</p>
<p>2x4</p>
<p>1x5 + 3x1</p>
<p>1x3 + 2x1 + 3x1</p>
<p>1x1 + 2x2 + 3x1</p>
<p>1x2 + 3x2</p>
<p>2x1 + 3x2 </p>
<p>NOTE :<b> Use fast Input Output. </b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-03-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>