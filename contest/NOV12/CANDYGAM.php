<?php require("../../includes/header.php"); ?><h1>Candy Collecting Game</h1><div class="content">

<p>Alice and Bob have come to spend their day in a FunFair which is close to their house. They have played almost all games and seen all the attractions. But there's one game left which has caught their attention. The winner of this game could get a LOT of candies! The game is as follows:</p>
<ul>
<li> The game is a two-player game which is played on an <b>NxM</b> grid. </li>
<li> Each cell of the grid has a certain number of candies. <b>A[i][j]</b> denotes the number of candies in the <b>j<sup>th</sup></b> column of the <b>i<sup>th</sup></b> row. </li>
<li> The players make alternate turns. </li>
<li> In each turn, a player <i>must</i> remove one <i>complete row</i> or one <i>complete column</i> from the grid. He will add all the candies in that row/column into his account. </li>
<li> The only possible rows that a player can remove in his/her turn are the top row or the bottom row. Similarly, only leftmost column or the rightmost column can be removed in one turn. </li>
<li> After removing the row or column, the game is played on the new reduced grid with one less row or column respectively. </li>
<li> When the entire matrix is emptied, the player with higher number of candies wins the game and can take all those candies with him/her. The loser has to give back the candies collected so far and return empty-handed. </li>
<li> If both players have equal number of candies, both of them are declared winners. </li>
</ul>
<p>Alice and Bob want to take as many candies home as possible. They don't have much time with themselves. So they come up with a strategy using which they want to increase Bob's share of candies and decrease Alice's share. This way, they plan to make Bob win and take his entire share of candies! The strategy is as follows:</p>
<ul>
<li> Alice decides to pick the row or column from the present grid which has the <i>least</i> number of candies in every  turn of hers. </li>
<li> If there are more than one such options, then her order of preference will be:<br /> 1) first row<br /> 2) last row<br /> 3) first column<br /> 4) last column.<br /> For example, if all these 4 rows/columns have the same number of candies, she will remove the first row in this turn. </li>
<li> Bob chooses an optimal strategy through which he maximizes his share of candies in the end of the game. Note that Bob's strategy maximizes the number of his candies, not winner's candies. Also note that Bob knows Alice's strategy, of course, and he will take into account her strategy when he decides his move. </li>
</ul>
<p>It's quite evident that their strategy is not optimal. It might happen that Bob loses a game. And sometimes, both might win (with equal number of candies). Given the grid and the number of candies in each cell, your task is to tell them how many candies will the winner get if they play with this combined strategy. Alice will always start the game (Ladies first!).</p>
<h3>Input:</h3>
<p>First line of the test data contains a single integer <b>T</b>, the number of test cases.<br /> Each test case starts with two space separated integers <b>N</b> and <b>M</b>, the number of rows and columns of the grid respectively.<br /> Then follow <b>N</b> lines containing <b>M</b> space separated integers <b>A[i][j]</b>. These lines describe the grid.</p>
<h3>Output:</h3>
<p>For each test case, output a single line containing the number of candies the winner(s) gets.</p>
<h3>Constraints:</h3>
<pre>1 ≤ <b>T</b> ≤ 25
1 ≤ <b>N, M</b> ≤ 50
0 ≤ <b>A[i][j]</b> ≤ 1000000000 

</pre><p> </p>
<h3>Example:</h3>
<p><b>Input:</b></p>
<pre>3
3 3
0 9 9
0 6 6
0 9 6
2 2
1 1
1 1
1 4
1 2 3 4

</pre><p><b>Output:</b></p>
<pre>39
4
9

</pre><p><b>Explanation:</b><br /> <i>1<sup>st</sup> case:</i> Alice picks the first column (with all 0's). We're left with a 3x2 grid now. Bob picks the first column (9+6+9=24). We're left with a 3x1 grid. Alice picks the last row (6). A 2x1 grid is left. Bob picks the entire column (9+6=15). Thus, Bob has 24+15=39 candies and Alice has 6. So clearly, Bob is the winner.<br /> <i>2<sup>nd</sup> case:</i> Here, both end up with two candies each. Hence both are the winners. Thus the winner(s) have 2+2=4 candies in all.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-08-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>