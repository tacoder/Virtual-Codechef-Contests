<?php require("../../includes/header.php"); ?><h1>Curious case of Vatsan Mama</h1><div class="content">
<p> Guru prakash, Sabari and Srivatsan have recently qualified to participate in World Finals of International Chess Tournament to be held in Yekaterinburg, Russia.  Being new with the ruble currency, they wish to familiarize themselves with the coins(kopeks). So they decide to play a game. As usual Srivatsan being the kind guy he decides to be the referee while the other two play the game. He creates n piles numbered 0,1,..n-1(He places a board next to each pile denoting its number). In each pile he keeps c_i coins initially.<br />
<br />
The rules of the games are as follows:</p>
<ul>
<li>
For each pile Srivatsan sets an upper limit P_i
</li>
<li>
In any turn, a player can add at-most floor((P_i-c_i)/idx) coin to a pile numbered i. <br /><br />
idx is defined as i%K + 1. This value of K is initially decided by Srivatsan. <br />
<p>So if K = 3, idx= 0%3+1 for pile 0, idx = 1%3 + 1 for pile 1 and so on.
</p></li>
<li>
 If a particular player is not able to add coin to any pile, the game stops and the other player wins.
</li>
</ul>
<p>
Guru prakash being a muscular fellow, Sabari fears him and lets him start the game. But Guru prakash has some evil ideas. He doesn't want Sabari to win since he brags a lot. He also knows that Srivatsan can be quite lazy and will sometimes not concentrate on the game. In that mean time, Guru prakash can eliminate some of the piles in the game such that he can ensure his win. But since, removing piles in middle will leave holes, Guru has devised a strategy. He decided to remove only piles in the beginning and in the end (if at-all he decides to remove). Hence, the remaining piles will form a continuous segment of the original arrangement. Now he wants to know how many ways can he perform this so that he will always win. <br /><br />
<b>Note</b> both of them are smart people and they always play optimally
 </p>

<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains two integers <b>N, K</b> denoting the number of piles and the K value used in calculating idx respectively. The second line contains <b>N</b> space-separated integers <b>C<sub>1</sub></b>, <b>C<sub>2</sub></b>, ..., <b>C<sub>N</sub></b> denoting the number of coins placed by Srivatsan in each pile.<br />
The third line contains <b>N</b> space-separated integers <b>P<sub>1</sub></b>, <b>P<sub>2</sub></b>, ..., <b>P<sub>N</sub></b> denoting the upper limits given by Srivatsan for each pile.
</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output a single integer telling the number of Guru prakash can remove piles as described above.</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>C_i</b> ≤ <b>P_i</b>≤ <b>10^17</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
1
3 5
1 2 3
2 6 7

<b>Output:</b>
5
</pre><p>
<b>Explanation</b><br />
There are six ways in which guru can remove piles<br />
{1},{3},{1,2},{2,3},{1,3},null. <br /><br />
null implies not removing any pile. <br /><br />
Removing {1,2} alone leaves the game such that for optimal moves of both, Guru prakash loses.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/karthikabinav">karthikabinav</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>31-12-2013</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>