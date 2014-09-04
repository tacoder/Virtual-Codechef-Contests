<?php require("../../includes/header.php"); ?><h1>Chess game</h1><div class="content">

<p>
Two children Bhima and Shiva are playing a chess game called DieHard. In the game they have a zero based indexing chess board of size (1001 x 1001). Position ( i , j ) on the board denotes i-th row and j-th column. Initially board is empty and  they put a  coin  on position ( x , y ).<br /><br /><br />
Now they start the game by alternating turns. In each turn a player can do one of the following:<br /></p>
<p>
<li>move coin   from ( x , y ) to  ( x-i , y ); where  1=&lt; i &lt;= x.</li>
</p><p>
<li>move coin   from ( x , y ) to ( x  , y-j ); where  1=&lt; j &lt;= y. </li>
</p><p>
<li>move coin  from ( x , y ) to ( x-i , y-j ); where  ( 1=&lt; i &lt;= x , 1=&lt; j &lt;= y ) and ( | i - j | &lt; 2 ).</li>
</p><p><br /></p>
<p>The game ends when no move is possible and the player who cannot make a move loses. Both players play optimally. Being smart, both players calculate the outcome of the game before the game begins. The player who loses tries to maximize the number of turns in the game and player who wins tries to minimize the turns. Bhima starts game.<br /></p>
<h3>Input</h3>
<p>First line contains the number of testcases T.<br />
Each of next T lines contains two integer ,  x and  y which  denotes position (x,y) of coin at start of game.</p>
<h3>Output</h3>
<p>Output one line per case.<br />
The name of the winner and the number of moves in the game separated by a single space.</p>
<pre>
<h3>Constraints</h3>
1 &lt;= T &lt;= 50
0 &lt;= x , y  &lt;= 1,000.

<h3>Example</h3>
<b>Input:</b>
2
4 4
3 4

<b>Output:</b>
Bhima 1
Bhima 1
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/saabir">saabir</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-09-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>7 - 11 sec</td>
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