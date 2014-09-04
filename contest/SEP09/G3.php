<?php require("../../includes/header.php"); ?><h1>A Coin Game</h1><div class="content">

<p>Once again, the smart friends Johnny and Mary have invented a new game. This time, the game is played with their coins and a strip of paper divided into cells. The cells are numbered from the left, starting from 1.</p>
<p>Before the game starts, Johnny and Mary put some coins at some random cells on the strip, each coin in a cell. They alternatively take their turn to play the game. At each step, a player must take a coin and move it to a cell to the left of it. There is at most one coin in a cell at any time of the game. Of course, a coin cannot jump over another coin.</p>
<p>The rule is simple: whoever cannot move loses the game. Mary takes her turn first.</p>
<p><img src='//codechef.com/content/coingame.png' /></p>
<p>Could you tell them who will win the game, provided that the winner will play the perfect strategy? If Mary could win the game, show her a winning move. If there are several winning moves, show her the winning move that uses the leftmost possible coin. If there are still several moves, show her the move that moves the coin as far as possible to the left.</p>
<h3>Input</h3>
<p>The first line contains t, the number of test cases (about 100). Each test case has the following form:</p>
<ul>
<li>The first line contains an integer N (1 ≤ N ≤ 10000) describing the number of coins on the strip.</li>
<li>The second line contains N integers p<sub>1</sub>, p<sub>2</sub>, ..., p<sub>n</sub> (1 ≤ p<sub>1</sub> &lt; p<sub>2</sub> &lt; ... &lt; p<sub>n</sub> ≤ 10) representing the initial position of the coins.</li>
</ul>
<p>Each test case is separated by a blank line.</p>
<h3>Output</h3>
<p>For each test case, print either the string "Mary wins" or "Johnny wins" depending on who will win the game. If Mary could win the game in the next line, print the string "Move <i>a</i> to <i>b</i>" describing the desired winning move, where a is replaced by the position of the coin to move and b is replaced by the new position of that coin.</p>
<p>Remember to print a blank line after the output for each test case.</p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3

2
2 3

3 
1 3 5

4
2 4 6 9

<strong>Output:</strong>
Johnny wins

Mary wins
Move 5 to 4

Mary wins
Move 2 to 1
</pre><h3>Output details</h3>
<p>Case 1: Mary's only possible move is to move the coin at position 2 to position 1. Johnny then moves 3 to 2 and wins the game.</p>
<p>Case 2: After Mary moves 5 to 4, the only possible move for Johnny is to move 3 to 2. Mary then finishes the game by moving 4 to 3.</p>
<p>Case 3: (see the above figure) Among the winning moves, moving 2 to 1 uses the leftmost possible coin.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-08-2009</td>
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
            <td>ADA, ASM, BASH, C, C99 strict, CAML, CLPS, CPP 4.8.1, CPP11, CS2, D, FORT, GO, HASK, ICON, JAR, JAVA, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>