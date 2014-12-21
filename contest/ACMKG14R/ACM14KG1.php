<?php require("../../includes/header.php"); ?><h1>Cracker shops</h1><div class="content">
<p>Laxman is doing Diwali shopping. There are <b>N</b> shops numbered from <b>1</b> to <b>N</b>. Laxman wants to buy <b>M</b> different types of crackers. Crackers are numbered from <b>1</b> to <b>M</b>. Each shop sells many types of crackers. Laxman is currently at the <b>i'th</b> shop. Laxman want to find <b>j</b> and <b>k</b>, such that <b>j &lt;= i</b> and <b>k &gt;= i</b> and he can buy all <b>M</b> types of crackers only by visiting shops in the range of <b>j</b> to <b>k</b>. If there are multiple valid <b>j</b>, <b>k</b>, he then want to minimize the window size, that is, minimize the value of <b>k - j</b>. If there are still multiple valid <b>j</b>, <b>k</b>, then he wants to minimize the value of <b>j</b>. It is also known that, by visiting all the <b>N</b> shops, Laxman can surely buy all <b>M</b> types of crackers.</p>
<p>Write a program to output <b>j</b>, <b>k</b> values for all valid <b>i</b>.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. Each test case is described as follows,<br />
First line of each test case has 2 integers, <b>N</b> and <b>M</b>. Following <b>N</b> lines describe the shops.<br />
Each of the <b>N</b> lines starts with an integer <b>X</b>, which denotes the number of different types of crackers sold in that shop. <b>X</b> integers follow describing the cracker types. All the <b>X</b> integers are different.</p>
<h3>Output</h3>
<p>For each test case output <b>N</b> lines, One for each <b>i</b>, <b>1 &lt;= i &lt;= N</b>. Each line should contain two integers, <b>j</b> and <b>k</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>100000</b></li>
<li><b>0</b> ≤ <b>X</b> ≤ <b>100000</b></li>
<li><b>1</b> ≤ <b>Sum of N over all test cases</b> ≤ <b>500000</b></li>
<li><b>1</b> ≤ <b>Sum of M over all test cases</b> ≤ <b>500000</b></li>
<li><b>1</b> ≤ <b>Sum of X over all test cases</b> ≤ <b>500000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
2
3 3
1 1
1 2
1 3
3 3
1 1
2 2 3
1 1

<b>Output:</b>
1 3
1 3
1 3
1 2
1 2
2 3
</pre><h3>Explanation</h3>
<p><b>Test case #1:</b><br />
Laxman needs to visit all 3 shops to but all <b>M</b> types
</p>
<p><b>Test case #2:</b><br />
Laxman needs to visit shops 1, 2 to get all <b>M</b> types. Or he can visit shops 2, 3 to get all <b>M</b> types.<br />
For i = 2, we could have bought all types from shops 2 3, but we prefer 1 2 because 1 &lt; 2, as stated in the statement we want to minimize j in case of tie.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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