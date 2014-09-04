<?php require("../../includes/header.php"); ?><h1>BOTS</h1><div class="content">
<h3>Problem description.</h3>

<p>Bots  is an artificial intelligence programming competition where participants strive<br />
to program games that shall defeat their opponent’s game.  Now you need to play a move to worsen the position of the opponent. You have calculated the value of the N possible moves of the opponent.  You have to calculate the maximum number of moves that has the cumulative value <b> less than K</b>.</p>
<h3>Input</h3>
<p>There is a single positive integer T on the first line of input. It stands for the number of cases to follow.  Each case consists of a number N, the number of total values of move calculated. Next line takes the N integers representing possible values of the moves calculated. Next line consist of Q, numbers of queries. Next line consists of Q integers where each integer represent value of K for a query.</p>
<h3>Output</h3>
<p>Output consists of T lines, each line has Q integers with a space in between, representing number of moves for each query</p>
<h3>Constraints</h3>
<p>1&lt;=T&lt;=10<br /><br />
1&lt;=N&lt;=100000<br /><br />
1&lt;=Q&lt;=100<br /><br />
1&lt;=K&lt;=10^18<br />
</p>
<h3>Example</h3>
<pre><b>Input:</b>
1
5
1 2 3 4 5
2
7 11<br />
<b>Output:</b>
3 4</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/behalgitanshu">behalgitanshu</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-01-2014</td>
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
            <td>C, CPP 4.3.2, CPP 4.8.1, CPP11, GO, JAVA</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>