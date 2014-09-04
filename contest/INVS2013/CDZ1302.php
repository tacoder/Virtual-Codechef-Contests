<?php require("../../includes/header.php"); ?><h1>ZooZooland Water Shortage</h1><div class="content">

<p> </p>
<p>There are N villages in zoozoo land. Every year it rains in only one village but all others need water. The water is sufficient to fill needs of all the villages but they have shortage of connecting pipes. So they take raw material from earth to build their pipeline system.
</p>
<p>The data is corrupted so we only have information about distances between M pairs of villages. It is guaranteed that each and every village is present in data.
	</p>
<p>Your task is to design a pipeline system connecting all the villages such that minimum length of pipes is used. You have to give that minimum length of pipes. </p>
<h3>Input</h3>
<p>The first line of the input contains an integer T, denoting the number of test cases. The description of T test cases follows. The first line of each test case contains two space-separated integers N and M, denoting the number of villages and the number of pairs of villages , respectively.  Then M lines follow containing three space separated integers A, B and  X, denoting the first village, second village and distance between these two villages respectively.</p>
<ul>
<h3>Output</h3>
<p>For each test case, output on a separate line the minimum length of pipeline to be used.</p>
</ul>
<p> </p>
<h3>Constraints</h3>
<p>Should contain all the constraints on the input data that you may have. Format it like:</p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10^4</b></li>
<li><b>1</b> ≤ <b>M</b> ≤ <b>6*10^5</b></li>
<p> <b>Sum of all the M's across a test file doesn't exceed 10^6 </b>
</p>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
9 14
1 2 4
1 8 8
2 3 8
2 8 11
3 9 2
3 4 7
3 6 4
4 5 9
4 6 14
5 6 10
6 7 2
7 9 6
7 8 1
8 9 7

<b>Output:</b>
37
</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> In the given test case the network that uses minimum pipeline length is as follows</p>
<pre>
1->2
2->3
3->4
3->6
3->9
4->5
6->7
7->8
</pre><p>NOTE :<b> Use fast Input Output. </b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tussharsingh13">tussharsingh13</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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