<?php require("../../includes/header.php"); ?><h1>Codeland</h1><div class="content">

<p>
The country of Codeland contains N cities and N - 1 bidirectional roads between them such that there is a path between any two cities. The roads in Codeland were built long ago and now they are in need of repair. You have been hired to repair all the roads. You intend to do this by dispatching robots on some of the roads. Each robot will repair the road he is currently on and then move to one of the adjacent unrepaired roads. After repairing that, he will move to another adjacent unrepaired road, repair that and so on.<br />
Two roads are adjacent if they have the same city at one of their endpoints. For the process to be efficient, no two robots can ever repair the same road, and no road can be visited twice. What is the least number of robots needed to accomplish the task?
</p>
<h3>Input</h3>
<p>
The first line contains the number of test cases T. T test cases follow. The first line of each testcase contains N, the number of cities in Codeland. The cities are numbered 0..N - 1. The following N - 1 lines contain the description of the roads. The ith line contains two integers ai and bi, meaning that there is a road connecting cities with numbers ai and bi.
</p>
<h3>Output</h3>
<p>
Output T lines, one corresponding to each test case containing the required answer for that test case.
</p>
<h3>Constraints</h3>
<p>
1 &lt;= T &lt;= 20 <br/><br />
1 &lt;= N &lt;= 10000 <br/><br />
0 &lt;= ai,bi &lt; N
</br/></br/></p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
4
0 1
0 2
0 3
6
0 1
1 2
2 3
2 4
4 5
7
0 1
1 2
2 3
2 4
4 5
3 6

<b>Output:</b>
1
1
2

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/coding_freak">coding_freak</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 - 10 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>