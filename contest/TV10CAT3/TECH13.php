<?php require("../../includes/header.php"); ?><h1>Board</h1><div class="content">

<p>You have been given a 4x4 board which consists of integers from 1 to 50. A two player game is played on this board with the following rules :</p>
<ol>
<li>The first player can pick any number from the board, this is added to his personal total.</li>
<li>Now the next person can only pick a number that was adjacent to the number picked by the earlier player. (Two cells are adjacent if they share a side). If all the adjacent cells are empty, the player can pick a number from any cell.</li>
<li>The game ends when all the numbers have been picked from the board, i.e. in exactly 16 moves.
</li>
</ol>

<p>
You task in this problem is given a board configuration, return the maximal difference in the personal totals of player 1 and player 2 , assuming they play optimally.
</p>
<h3>Input</h3>
<p>The first line of input would consist of a single integer 'T' denoting the number of test cases, T &lt; 1000. This is followed by 4T lines , where each set of 4 lines describe the board configuration with space separated integers. Each test case would be separated by a new line.</p>
<h3>Output</h3>
<p>You have to output a single integer denoting the maximal difference in the personal totals of player 1 and player 2 that is possible.
</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 1 1 1
1 1 1 1
1 1 1 1
1 1 1 1

1 1 1 1
1 1 5 1
1 1 2 1
1 1 1 1

<b>Output:</b>
0
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/technovanza10">technovanza10</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>24-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, FS, GO, JAVA, NODEJS, PERL6, PYTH 3.1.2, TEXT</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>