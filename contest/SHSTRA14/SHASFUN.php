<?php require("../../includes/header.php"); ?><h1>Art of Throwing</h1><div class="content">
<p>
Saikrishna is quite famous for his jargon deliverance. Sometimes people refer to this act as throwing(throwing of words!). Recently, he threw the following statement -<br />
"If both KV and Siddhartha go after the same girl S, then it doesn't form a Nash equilibrium" <br /></p>
<p>Confused were people. Amazed were others at his throwing<br />
ability. People couldn't understand what this term Nash equilibrium means. Hence to the lesser mortals he explained the term as follows: <br /><br />
Nash equilibrium is a state where any unilateral deviation<br />
by an individual, leads to a sub-optimal payoff for that individual. (told you, he is known for his throwing).<br />
To make things even simpler he described it for a simple game.
</p>
<p>
He said,<br />
"Let's consider just two player games. In this case KV is player 1 and Sidhartha is player 2. Let us consider for each player two possible actions. Going stalking S and not stalking S. Now we will call the value each player gets as payoff. So if KV stalks S and Sidhartha doesn't stalk S, then KV gets a payoff of 1 and Sidhartha gets a payoff of 0. Similarly, if Sidhartha goes behind S and KV doesnt go behind S, Sidhartha will get a payoff of 1 and KV will get a payoff of 0. In the other two cases, both will get a payoff of -1, since they will fight amongst themselves or upset S. " <br /><br />
He further claimed - "I now say if either KV goes behind S and Sidhartha doesn't go behind S or Sidhartha goes behind S and KV doesn't go behind S, it forms Nash equilibrium. This is because, let's assume there case where KV goes behind S and Sidhartha doesnt go behind S. Now if KV unilaterally deviates, i.e. doesn't go behind S, his payoff will become -1. Similarly, if Sidhartha unilaterally deviates, i.e. goes behind S, they will land up in case where both go behind S and hence, Sidhartha will get a payoff of -1. Hence, for both unilateral deviation reduces their payoff". <br /><br />
Deg being the smart fellow he is, immediately realizes this can be extended to multiple actions but two players.
</p>
<p> <br />
He claims, we can have a n*m matrix, where n represents number of actions player 1 can have and m represents number of actions player 2 can have. Each entry M(i,j) in the matrix can be a tuple (a,b) where a represents player 1 payoff and b represents player 2 payoff. Now finding Nash equilibrium boils down to finding cells (i,j) such that any unilateral deviation is equivalent to moving to a new cell (i,k1) or (k2,j) where 1&lt;=k1&lt;=m and 1&lt;=k2&lt;=n. <br />
</p>
<p>
Now that smit has learnt about Nash equilibrium he wants to practice on random games and find the Nash equilibrium. Since, there can be more than one Nash equilibrium he wants to find the one such that (i,j) index of the Nash equilibria cell is lexicographically smallest. Also, he quickly realizes there can be games without a Nash equilibria in that case he will  just say -1 and go ahead. Your task is to help him by writing a code to do the same.
</p>
<p>
To generate the random game this is the procedure Smit wishes you to follow: </p>
<ul>
<li>
You will be given integers n,m representing the actions sizes of player 1 and player 2 respectively.</li>
<li>Then smit will give you 5 integers a1,a2,b1,b2,M</li>
<li> The player 1 payoff in cell (i,j)(1-indexed) is<br />
(a1*i+a2*j)^(M-2) (mod M) . </li>
<li>
Similarly the payoff for player 2 in cell (i,j) is<br />
(b2*i + b1*j)^(M-2) (mod M) </li>
</ul>

<h3>Input</h3>
<p>Input description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</li>
<li>The first line of each test case contains a two integers <b>N,M</b> denoting the number of actions available to player 1 and player 2 respectively. The second line contains <b>5</b> space-separated integers <b>a<sub>1</sub></b>, <b>a<sub>2</sub></b>, <b>b<sub>1</sub></b> ,<b>b<sub>2</sub></b>,<b>M</b> denoting the parameters for the random game as Smit wants to generate. </li>
</ul>
<p> </p>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output two space separated integers containing the index i,j such that (i,j) is a Nash equilibria position in the matrix and it is the lexicographically smallest among all the cells(i.e. the lexicographic ordering is on the indices of the cells and <b>not</b> the payoff. The ordering of (action_player_1, action_player_2) is <b>defined</b> as follows (i,j) &lt; (a,b) if i &lt; a or (i == a and j &lt; b)). If no such position exists print "-1". (Quotes for clarity.Do not print them).</li>
</ul>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>75</b></li>
<li><b>1</b> ≤ <b>N, M</b> ≤ <b>300</b></li>
<li><b>1</b> ≤ <b>A<sub>1</sub>, A<sub>2</sub>, B<sub>1</sub>, B<sub>2</sub></b> ≤ <b>10^9</b></li>
<li><b>2</b> ≤ <b>M</b> ≤ <b>10^5</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 2
1 2 2 1 3
20 30
12 24 16 32 101

<b>Output:</b>
1 2
3 29
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b><br />
The cells of the game are [ {(0,0), (2,2)}, {(1,1), (0, 0)} ]. Here both (2, 2) and (1, ) are Nash equilibrium. But (2, 2) is lexicographically smallest and it denotes the action 1 of player 1 and action 2 of player 2. Hence answer is: <b>1 2</b><br /><br /></p>
<p><b>Warning:</b> Input text file contains large I/O. Consider using faster I/O techniques.
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>8 sec</td>
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