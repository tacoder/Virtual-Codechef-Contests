<?php require("../../includes/header.php"); ?><h1>Leaky containers</h1><div class="content">

<p>The acid manufacturing company has a special room to store leaky acid containers. The container holders in the room, which have the capacity to hold one leaky container each, are arranged in a rectangular grid of R rows and C columns such that the columns are in the North-South direction while the rows are in the East-West direction. Currently there are N leaky containers in some of the holders and M more have just arrived and need to be placed in the holders.</p>
<p>The company has realised that the containers being produced these days are exceptionally leaky. So much so that the acid that is leaking is corroding the holders completely.</p>
<p>Every acid container leaks either in the North-South direction or the East-West direction. Containers can be rotated by 90 degrees and thus a container that is leaking in the East-West direction can be made to leak North-South and vice versa. Given enough time, a leaky container can corrode the holder completely and start corroding the two adjacent holders in the leak direction and this process can go on.</p>
<p>The company employee has to make a decision fast. He needs to rotate some of the existing containers and place the new containers in proper holders and directions such that the total number of holders that will be corroded is minimised.</p>
<p>Find out the minimum number of holders that will be corroded after proper placement of the new containers and proper orientation of all containers.</p>
<h3>Input</h3>
<p>The first line of the input contains the number of test cases T (&lt;=10).</p>
<p>For each test case, the first line has four numbers R, C, N and M (1&lt;=R,C&lt;=100, 1&lt;=M,N&lt;=20, M+N&lt;=R*C). This is followed by N lines, each giving the location and leak direction of an existing container by 3 integers r (row number), c (column number) and d (1 if leakage is N-S, 0 if E-W). Numbering of rows and columns begins with 1.</p>
<h3>Output</h3>
<p>For each test case, output on a different line the smallest number of holders that will get corroded after rotating the existing containers and placing the newly arrived containers.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
4 6 4 4
1 2 0
2 4 0
3 2 1
3 5 1
50 50 5 10
1 35 1
17 44 0
17 46 1
42 35 1
42 46 0

<b>Output:</b>
12
148
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>5-02-2011</td>
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
            <td>C, CPP 4.3.2, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>