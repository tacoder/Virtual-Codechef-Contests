<?php require("../../includes/header.php"); ?><h1>Game</h1><div class="content">
<p> </p>
<p>Alice and Bob are playing a game. They have 3 bags, each consisting a certain number of balls. Alice starts the game by picking a ball from any one of the bag.Then Bob picks a ball from one of the other 2 bags. That is, in their turn they have to pick a ball from any of the bags, except the bag from which the other player picked up in their last turn. The player who cannot make a move loses. Given that both Alice and Bob play optimally, you are supposed to tell who is going to win.
</p>
<p> </p>
<h3>Input</h3>
<p>The first line contains a number T, the number of testcases. Next T lines contain 3 space separated integers A,B,C each of which depicts the number of balls in the three bags.</p>
<h3>Output</h3>
<p>For each test case output a single line with the winner, "Alice" or "Bob" without the quotes.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>A,B,C</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 1 1
1 1 2
2 2 2

<b>Output:</b>
Alice
Bob
Bob
</pre><p> </p>
<h3>Explanation</h3>
<p><b>case 1:</b> <br /><br />
1. Alice picks up a ball from bag 1<br /><br />
2. Bob picks up a ball from bag 2<br /><br />
3. Alice picks up a ball from bag 3<br /><br />
Now Bob cannot make a move since there are no more balls left, hence Bob loses and Alice wins.<br /><br /></p>
<p><b>case 3:</b> <br /><br />
1. Alice picks from bag 1<br /><br />
2. Bob picks from bag 2<br /><br />
3. Alice picks from bag 1<br /><br />
4. Bob picks from bag 3<br /><br />
5. Alice picks from bag 2<br /><br />
6. Bob picks from bag 3<br /><br />
Bob wins<br /></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/tavan_edla">tavan_edla</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2013</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>