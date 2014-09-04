<?php require("../../includes/header.php"); ?><h1>Solve the Puzzle</h1><div class="content">
<p>After crossing the maze, Eon has finally reached Codezilla's castle. But entering the castle is not going to be so easy. In his early days, Codezilla used to be an ace competitive programmer. He knew such a day would come when someone like Eon will rise against him. So instead of a password, Codezilla has set a programming problem to enter the castle. The puzzle is as follows:</p>
<p>You are given three integers N,X and M. Then there are M queries each containing two integers L and R. For each query you have to print the count of numbers Y such that <b>L&lt;=Y&lt;=R</b> and <b>GCD(N,Y)=X</b>.</p>
<p>Eon has always been more into development rather than competitive programming. So help him solve the puzzle.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. First line of each test case consists of three integers <b>N</b>, <b>X</b> and <b>M</b>. Each of the next <b>M</b> lines contains two integers <b>L</b> and <b>R</b>.</p>
<h3>Output</h3>
<p>Print the answer of each query in a separate line.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>X</b> ≤ <b>N</b> ≤ <b>10^9</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>L</b> ≤ <b>R</b> ≤ <b>10^9</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
10 2 2
1 10
5 5

<b>Output:</b>
4
0
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> From 1 to 10, there are 4 numbers 2, 4, 6 and 8 such that their GCD with 10 is 2.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-02-2014</td>
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