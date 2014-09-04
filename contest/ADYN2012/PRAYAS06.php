<?php require("../../includes/header.php"); ?><h1>Million Dollar Vicky</h1><div class="content">

<p>Vicky wishes to be the richest ice cream parlor owner of Varanasi. For this he must install ice cream parlors on the roads such that every road has at least one such parlor. Vicky has figured out that the obvious optimal strategy would be to install them on the junctions of roads so that more than one road gets covered by a single ice cream parlor (A junction, as considered here, can also be the end point of a single road such that installing an ice cream parlor there will cover just that single road). Vicky wishes to install exactly <b>k</b> Ice cream parlors and yet cover every road in Varanasi. Help Vicky figure out whether it is possible to cover every road in Varanasi by installing exactly <b>k</b> ice cream parlors.</p>
<p><b>Note:</b> Don’t waste your time finding a polynomial time algorithm for the problem as none are known to exist for this question till now. Instead use smart optimization to achieve a good enough solution as the test cases have been designed in a way that a good heuristic should do the needful well within time.</p>
<h3>Input</h3>

<p>The first line contains the number of test-cases <b>T</b>, followed by a blank line, followed by <b>T</b> test cases each separated from the previous one by a blank line. The first line of each test-case contains three space separated integers – <b>n</b> - Number of road junctions in Varanasi, <b>e</b> – Number of roads in Varanasi and <b>k</b> – Number of ice cream parlor Vicky wishes to install.<br />
Thereafter follows <b>e</b> lines, each containing two integers <b>xi</b> and <b>yi</b> which are the road junctions connected by the <b>i</b>th road.<br />
 There is no road which connects a junction to itself, nor are there multiple roads connecting the same pair of road junctions.</p>
<h3>Output</h3>

<p>For each test case output a “<b>YES</b>” in case such an arrangement is possible, otherwise “<b>NO</b>”, on a separate line. (without quotes)</p>
<h3>Constraints</h3>
<pre>
T &lt;=6
1&lt;= n &lt;=100 
1&lt;= e &lt;= n(n-1)/2
1&lt;= k &lt;= n
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
1
3 3 2
0 1
1 2
2 0

<b>Output:</b>
YES

</pre><p>
<b>Explanation:</b>
</p>
<p>Selecting any two cities will help cover all the roads.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/the123abhishek">the123abhishek</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>