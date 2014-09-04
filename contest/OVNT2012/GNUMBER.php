<?php require("../../includes/header.php"); ?><h1>Game with Numbers</h1><div class="content">

<p>
Young Matt and Jeff loved playing with numbers. One fine day, when Matt's little brother Paul, was at his math lesson with plastic number toys i.e. plastic toys in shape of digits 0 to 9, Matt and Jeff decided to play a game.<br />
Paul had left the plastic numbers arranged to form a number <b>N</b>. <br />The rules of the game were as follows:</p>
<ul>
<li>The first player has to rearrange the digits to form a larger number than the current number, after that the game will be played turn-wise.</li>
<li>After the first turn, each player has to rearrange the digits so that it is smaller than the current number in that turn and greater than the original number <b>N</b>.</li>
<li>
The player loses if he cannot arrange a number.</li>
</ul>
<p>What number should the first player form, so that he always wins?</p>
<h3>Input</h3>
<p>An integer T (1 ≤ T ≤ 100) denoting number of test cases followed by T lines each containing an  integer N, the number Paul has formed. The number of digit in N is D(1 ≤ D ≤ 100000).</p>
<h3>Output</h3>
<p>
For each test case, output a number which first player should form so that he wins, in a separate line.<br />If there is no winning strategy for first player, then output -1. </p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
17
81
123

<b>Output:</b>
71
-1
132
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/amitpandeykgp">amitpandeykgp</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-01-2013</td>
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