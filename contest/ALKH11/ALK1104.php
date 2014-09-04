<?php require("../../includes/header.php"); ?><h1>Game</h1><div class="content">

<p>BMEENA and BKUL are playing a game. There is a pile of N coins . BMEENA and BKUL make their moves alternately , BMEENA starts first . In first move BMEENA takes s coins such that 0 &lt; s &lt; N , from then on a player takes any number of coins which is a divisior of number of coins taken in previous move. One who makes the last move is winner . Find out who is the winner, assuming they both play optimally?</p>
<h3>Input</h3>
<p>First line contains the number of testcases T. Then each of next T lines contains an integer N.</p>
<h3>Output</h3>
<p>For each testcase output a line containing "BMEENA" or "BKUL"   ( quotes are for clarity ) accordingly who is the winner.</p>
<h3>Constraints</h3>
<p>1 &lt;= T &lt;= 10<br />
2 &lt;= N &lt;= 1,000,000</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
1
5

<b>Output:</b>
BMEENA
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/saabir">saabir</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-09-2011</td>
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
            <td>C, C99 strict, CPP 4.3.2, CPP 4.8.1, CPP11, GO, NODEJS</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>