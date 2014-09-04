<?php require("../../includes/header.php"); ?><h1>No to corruption</h1><div class="content">

<p align="justify">Dystopians have realised that corruption is the root cause for all their problems. They have decided to launch their mass protest against corruption by blocking one of the highways in the Dystopian capital. To make sure that the government notices their agitation, they want to make sure that the Prime Minister is also affected by the blocking. Their aim is to force the Prime Minister to choose an alternate route from the parliament to his house, which makes his journey longer</p>
<p align="justify">All roads in the capital are two-way. The road network is such that no more than one road connects a pair of junctions directly. Also, every junction in the capital is connected to every other junction by some sequence of roads. Given the road map of the capital, find out the minimum distance the Prime minister has to travel to reach home from the parliament if the anti-corruption movement blocks one of the roads.</p>
<h3>Input</h3>
<p align="justify">The first line of the Input contains T, the number of test cases (T &le; 10). Following are the descriptions of the T test cases. Each starts with a line containing three space separated integers N, M and Q (1 &le; N &le; 1000; 1 &le; M &le; 20000; Q &le; 10000). N is the number of junctions in the capital and are numbered from 0 to N-1 (0 is the location of the Parliament and N-1 is the location of the Prime Minister's home). M is the number of roads in the capital (numbered from 0 to M-1) and Q, the number of queries you have to answer. Following this are M lines, each containing three space separated integers i, j and d (0 &le; i,j &lt; N; 1 &le; d &le; 10<sup>5</sup>), denoting that there is a road between junctions i and j having distance d. Q lines follow this, describing the queries you need to answer. Each query will contain a single integer m, the index of the road that will be blocked (0 &le; m &lt; M).</p>
<h3>Output</h3>
<p align="justify">For each query m in the input, output an integer - the minimum distance the Prime minister has to travel to reach home from the Parliament if the anti-corruption movement blocks only the road m. If blocking the road prevents the Prime Minister from reaching home, print "no route for corrupt ministers!!!" (quotes for clarity).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
4 4 2
0 1 2
1 2 2
0 2 3
2 3 4
2
3

<b>Output:</b>
8
no route for corrupt ministers!!!
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
            <td>1.5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>