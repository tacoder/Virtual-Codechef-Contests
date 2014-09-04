<?php require("../../includes/header.php"); ?><h1>Help</h1><div class="content">

<p> Tannenbaum Jr. is a diligent networks administrator. He takes care of the university dormitory's networks as though they were his little children. The dormitories are spread out across the university campus and each dorm has its own sub-network. The nodes on the network are directionally connected.<br /><br /><br />
In his effort to maintain the network, Tanny Jr. is interested in writing a little script. With his script, he wishes to find out the correctness of the interconnecting wires in his network. His script should send out a packet which should pass through each wire in the network just once, noting down the status of that wire. <br /><br /><br />
Before Tanny begins to write such a script, he wants you to determine if it's even possible to send out a packet which should pass through each wire in the network just once, given the university's network configuration.  Can you help him out?<br />
 </p>
<h3>Input</h3>
<p> First line contains, 1&lt;=t&lt;=5, the number of test cases, and then t cases follows, <br /><br />
The first line of each test case contains two integers n, number of nodes and m, number of wires connection the nodes, where 1&lt;=n&lt;=100 and 1&lt;=m&lt;=10000. <br /><br />
The next m lines contains two integers each, x y, which implies node x is directionally connected to the node y through wire.<br />
 </p>
<h3>Output</h3>
<p> Corresponding to each case, Print "POSSIBLE" (without accompanying double quotes), if possible and "NOT POSSIBLE" (without accompanying double quotes), if not possible. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
6 6
0 1
1 2
2 3
3 4
4 5
5 0
4 5
0 1
1 3
3 2
2 1
1 0

<b>Output:</b>
POSSIBLE
POSSIBLE

</pre><p><b>Explanation:</b> </p>
<p>One possible path to follow for case 1 is: 0 -> 1 -> 2 -> 3 -> 4 -> 5 -> 0. All the wires are covered and only once if the nodes in the network are visited in this sequence.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kunalsangwan">kunalsangwan</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-01-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>