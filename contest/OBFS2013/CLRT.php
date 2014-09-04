<?php require("../../includes/header.php"); ?><h1>Cluster Response Time</h1><div class="content">

<p>Saurabh recently did a project on HA-Linux in which he was given a task to configure it on a computer cluster. Each node/server in the cluster was assigned some kind of priority so as to form a hierarchy like structure. Assume we need to provide continuous services of IIT Mandi's website to the clients. </p>
<p>
After configuring HA- Linux on a bunch of computers or cluster, he now thinks of measuring the response time of any number of servers to pick up the web application which was initially running on some other server(at the top level of hierarchy) before it fails. Let <b>n</b> be the number of nodes/server in the cluster. Each node is assigned a number from 1 to n (inclusive). Let <b>a</b> and <b>b</b> be two nodes of the cluster and <b>ti</b> be the response time when either one fails with respect to other.<br />
Let <b>m</b> be the number of queries for which response times between the two nodes are measured.</p>
<p>
Now your task in this question is to find the subset of nodes such that every node is reachable or connected to every other node in the cluster and there must only be single way to establish connection between every pair of nodes.  Finally, you have to output the minimum sum of the response times among all directly connected nodes in the sub-set chosen. </p>
<p>
<b>Note:</b> It is not necessary that if node x is directly connected to node y and node y is directly connected to node z then node x is also directly connected to node y. Node x will be assumed to be connected to node z via node y.</p>
<p>
<h3><b>Input :</b></h3>
</p>
<p>The first line of input contains an integer <b>T</b>, the number of test cases. Then T test cases follow.
</p>
<p>
Each test case consists of a line containing <b>n</b>, number of nodes, and <b>m</b>, number of queries, separated  by single space. Then m lines follow. Each consists of 3 numbers – <b>a</b>, <b>b</b> and <b>ti</b> as described in the problem statement and separated by single space.</p>
<h3><b>Output :</b></h3>

<p>Output on a new line the minimum sum of the sub-set (round to 2 decimal places)of nodes chosen.</p>
<h3><b>Constraints :</b></h3>

<p>1 &lt;= T &lt;=10</p>
<p>1 &lt; n &lt;= 250</p>
<p>n-1 &lt;= m &lt;= <sup>n</sup>C<sub>2</sub></p>
<p>ti - floating point integer , less than 100.00 (ms)</p>
<p>
<h3>Example</h3>
<pre>
<h3><b>Input:</b></h3>
1
3 3
1 2 2.30
1 3 1.70
2 3 2.10

<h3><b>Output:</b></h3>
3.80
</pre></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/prog_iitmandi">prog_iitmandi</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.2 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP11, GO</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>