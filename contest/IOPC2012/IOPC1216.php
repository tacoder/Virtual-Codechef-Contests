<?php require("../../includes/header.php"); ?><h1>Corruption again</h1><div class="content">

<p align="justify">After the first series of protests disrupted the road traffic in Dystopia, the government decided to take counter measures. It chose a few of the roads as high priority roads and sent military vehicles to patrol them. The roads were chosen in a way that it was possible to move from any junction to any other junction just using the patrolled roads. Also, the number of roads chosen was the minimum possible (N-1, where N is the number of junctions).</p>
<p align="justify">After this, people were able to travel without hindrance from the protestors and the protest wasn't taken seriously anymore. Hence the leader of the protest decided to take things to the next level. He decided that he would personally lead the group which blocks one of the patrolled roads - The military would not dare to touch the group then.</p>
<p align="justify">Blocking a patrolled road would divide the road network into two parts A and B such that it would be possible to travel between every pair of junctions in A (and every pair of junctions in B) using patrolled roads alone but it would not be possible to move from a junction in A to a junction in B using patrolled roads alone. People then have to take unpatrolled roads with one junction in A and the other in B. The leader terms the number of such inter-part roads as the inconvinence factor for the patrolled road being blocked.</p>
<p align="justify">Given the road network, find out the maximum inconvenience factor achievable by choosing the patrolled road to block.</p>
<h3>Input</h3>
<p align="justify">The first line of the input contains T, the number of test cases (T ≤ 5). Following this are the descriptions of the T test cases. The first line of each test case contains two space separated integers N and M - The number of junctions and <b>unpatrolled</b> roads in the network(1 ≤ N ≤ 10000; 0 ≤ M ≤ 30000). Following this are N-1 lines, describing the patrolled roads in the network. Each line will contain two space separated integers i and j, denoting that there is a patrolled road between i and j. This is followed by M lines describing the unpatrolled roads in a similar fashion. You are assured that there is not more than one direct road between any pair of junctions.</p>
<h3>Output</h3>
<p align="justify">For each test case, print the maximum value of inconvenience factor achievable among all the possible choices of the patrolled road to be blocked.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
6 3
0 1
1 2
1 3
3 4
3 5
0 2
0 4
4 5

<b>Output:</b>
2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/razimantv">razimantv</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-01-2012</td>
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
            <td>C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>