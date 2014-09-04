<?php require("../../includes/header.php"); ?><h1>Game of Piles</h1><div class="content">

<p>Vicky and Mickey decide to play a game whose rules are as follows:</p>
<p> There are <b>n</b> pairs of piles of stones with both the piles in a pair containing the same number of stones, say <b>m</b>. For instance (3, 3) (12, 12) (70,70) are 3 pairs of piles of stones. Vicky and Mickey take alternate turns to execute the following action with Vicky always moving first.</p>
<p>1. Select any pair in which each of the piles have more than one stones and transfer some number of stones(&gt;0) from one pile to the other. Now one of the piles gets smaller than the other.<br />
2. If the number of stones transferred is &lt;= floor(m/2), where m is the number of stones in each pile of the pair before transfer, he can replace each pile by either smaller pile or the larger pile(as he wishes) else both the piles must be replaced by the larger one, so that again both have the same number of stones. However, for any player, the total number of replacement by larger piles should be less than or equal to 2^10.<br />
3. The one who cannot make a move loses the game.<br />
Given the initial configuration of each pair, predict the winner.</p>
<h3>Input</h3>

<p>The first line of the input contains <b>N</b> – the number of pairs of piles of stones, followed by a blank line followed by <b>N</b> lines. Each line consists of one integer <b>ni</b>, such that <b>ni</b> is the initial number of stones in each of the piles of the <b>i</b>th pair.</p>
<h3>Output</h3>

<p>Print “<b>Vicky</b>” (without quotes) if Vicky wins the game, else print “<b>Mickey</b>”(without quotes).</p>
<h3>Constraints</h3>
<pre>
1 &lt;= N &lt;= 2^20
1 &lt;= ni &lt;= 2^20
</pre><h3>Example</h3>
<pre>
<b>Input:</b>
1

2

<b>Output:</b>
Vicky

</pre><p>
<b>Explanation:</b>
</p>
<p>Initial configuration of the two pairs of piles {(2, 2)}. Vicky wins the game by changing the configuration to {(1, 1)}. Now no move is possible. So Vicky is the winner.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/the123abhishek">the123abhishek</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2012</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA, NODEJS, PYTH, PYTH 3.1.2</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>