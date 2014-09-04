<?php require("../../includes/header.php"); ?><h1>Hardware upgrade</h1><div class="content">

<p align="justify">It is after years that Dystopian Institute of Technology has got funds for upgrading their computers. However, the people in charge of the upgrade have decided to make this a chance to fill their own pockets rather.</p>
<p align="justify">There are N computers in the DIT network, numbered 0 to N-1. Computer 0 is the main server which connects the network to the outer world. Some pairs of the computers are directly connected in the network. For other pair of computers to communicate with each other, they have to do it via some other computer. For example, if there are only 3 computers in the network and the only direct connections are 0-1 and 0-2, then 1 communicates with 2 using 0 as intermediate. There is no limit on the number of intermediate computers to be used for communication between a pair. Now, since the DIT network was built on the principle of minimum expenditure, the N computers have been made pairwise connected by using the minimum number of direct connections - ie, N-1.</p>
<p align="justify">The upgrade contractor has decided to not do the work properly but pocket the entire funds instead. However, to show that he has done something, he will rearrange the computers. For example he could move the computer number 3 to where 2 was earlier, 2 to 1, 1 to 3, 4 to 5 and 5 to 4. The computer number 0 is special and cannot be moved. Direct connections between computers depend on the locations though. Hence if there was a direct connection earlier between 3 and 5, it will now be between 1 and 4 (since they have been placed at the locations 3 and 5 were at earlier). However, he has noticed something strange : the new direct connection between computers i and j works if and only if there was a direct connection between i and j earlier. Hence he wants to rearrange the computers in such a way that the pairs of computers which are connected directly now are the same pairs which were connected earlier.</p>
<p align="justify">Given the computer network, count the number of ways the computers can be rearranged satisfying the conditions.</p>
<h3>Input</h3>
<p align="justify">The first line of the input contains T, the number of test cases (T ≤ 10). Following this are the descriptions of the test cases. Each description starts with a line containing the integer N, the number of computers in the network (1 ≤ N ≤ 10000). This is followed by N-1 lines, each containing a pair of integers i and j, denoting that computer i is directly connected to computer j. It is assured that these N-1 direct connections will make every pair of computers connected (via intermediates if needed).</p>
<h3>Output</h3>
<p align="justify">For each test case, output the number of rearrangements of the computers. A rearrangement (p<sub>0</sub>,p<sub>1</sub>,p<sub>2</sub>...p<sub>N-1</sub>) of (0,1,2...N-1) is valid if the following conditions are satisfied:</p>
<ul>
<li>p<sub>0</sub>=0</li>
<li>If there is a direct connection between i and j, there should also be a direct connection between p<sub>i</sub> and p<sub>j</sub></li>
</ul>
<p>
</p>
<p align="justify">Notice that (0,1,2...N-1) is considered a valid rearrangement of itself. Also, since the answer could be very big, output it modulo 1000000007</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
6
0 1
0 2
0 3
3 4
3 5

<b>Output:</b>
4
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PAS fpc, PAS gpc, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>