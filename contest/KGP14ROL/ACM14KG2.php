<?php require("../../includes/header.php"); ?><h1>The last cracker</h1><div class="content">
<p>Ram has <b>N</b> different crackers. These crackers are very special, each of them can fire infinite number of fire-balls. Ram made an arrangement with those <b>N</b> crackers. If the spark is currently with the <b>i</b>'th cracker, it will first fire a fire-ball, and then it will pass the spark to the <b>(i+1)</b>'th cracker. Note that the <b>N</b>'th cracker will pass spark to the <b>1</b>'st cracker. Ram initially placed the spark at the <b>a</b>'th cracker. However the spark will get exhausted after <b>M</b> passes, that is, it gets off during <b>M+1</b>'th pass. Ram want to know which cracker will fire the last fire-ball before spark goes off. Write a program to print this answer.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases.<br />
Following <b>T</b> lines describe the test cases, one per line.<br />
Each line contains 3 integers, <b>N</b>, <b>a</b> and <b>M</b>.</p>
<h3>Output</h3>
<p>For each test case output one line, which contains the required answer.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>0</b> ≤ <b>M</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>a</b> ≤ <b>N</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
5 1 3
5 1 5
5 1 19

<b>Output:</b>
4
1
5
</pre><h3>Explanation</h3>
<p><b>Test case #1:</b><br />
Spark is initially at the 1'st cracker. It fires a fire-ball and passes spark to the 2'nd cracker. The 2'nd cracker fires a fire-ball and passes the spark to the 3'rd cracker. The 3rd cracker fires a fire-ball and passes spark to the 4th cracker. The 4th cracker fires a fire-ball and passes the spark to the 5'th cracker, however, we already made 3 passes and this is 4th pass, so spark gets off. The last cracker to fire a fire-ball is the 4'th cracker.
</p>
<p><b>Test case #2:</b><br />
Spark is initially at the 1'st cracker. It fires a fire-ball and passes spark to the 2'nd cracker. After the 4'th pass, the spark is with the 5'th cracker. The 5'th cracker fires a fire-ball and passes it to the 1'st cracker (Read the statement carefully, the N'th cracker passes spark to the 1'st cracker). The 1'st cracker fires the fire-ball and passes to the 2'nd cracker, spark gets exhausted during this pass. So the last cracker to fire was the 1'st.
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