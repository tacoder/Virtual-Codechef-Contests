<?php require("../../includes/header.php"); ?><h1>Ciel and Ball Guessing Game</h1><div class="content">

<p>
Tomya is a girl. She loves Chef Ciel very much.
</p>
<p>
Since Tomya has completed collecting the stamps in Ciel's restaurant, she now challenges the bonus game in her restaurant.<br />
There are colored balls in a box.<br />
The number of colors is <b>N</b>, and the number of balls color <b>i</b> in the box is <b>S<sub>i</sub></b> for <b>i</b> = 1, 2, ..., <b>N</b> initially.<br />
At first, Tomya has <b>M</b> coins.<br />
And Tomya's aim in this game is to get many coins at the end of the game.<br />
This game will run as follows.
</p>
<p>
Tomya chooses a color, and Tomya bets some coins (suppose <b>x</b> coins are bet) on the color.<br />
Here <b>x</b> must be non-negative integer at most <b>L</b>, and Tomya must have <b>x</b> coins before betting.<br />
Then Ciel chooses a ball from the box, checks its color and discards the ball.<br />
If the ball has the same color as Tomya's bet, then Tomya gets <b>B</b>·<b>x</b> coins, otherwise Tomya must pay <b>x</b> coins. Note that, if Tomya wins, then she receives back her bet as well as <b>B</b>·<b>x</b> coins.<br />
While the box has at least one ball, the above process are repeated.<br />
When the box is empty, the game is over.
</p>
<p>
The game is very kind, because Tomya always can increase her coins.<br />
Instead of this, Ciel is not kind in this game, she chooses the balls which minimize Tomya's coins at the end of the game (Yes, she can choose balls as she likes!).<br />
Your task is to calculate the maximum number of coins that can be obtained by Tomya at the end of the game.
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
The first line of each test case contains 4 integers <b>N</b>, <b>B</b>, <b>M</b>, <b>L</b>.<br />
Then the next line contains <b>N</b> integers <b>S</b><sub>1</sub>, <b>S</b><sub>2</sub>, ..., <b>S<sub>N</sub></b>.
</p>
<h3>Output</h3>
<p>
For each test case, print the maximum number of coins that can be obtained by Tomya at the end of the game.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>T</b> ≤ 5<br />
1 ≤ <b>N</b>, <b>B</b> ≤ 30<br />
1 ≤ <b>M</b>, <b>L</b> ≤ 1000000000000 (10<sup>12</sup>)<br />
1 ≤ <b>S<sub>i</sub></b> ≤ 30
</p>
<h3>Sample Input</h3>
<pre>2
2 1 30 100
2 2
3 1 1 58
30 28 2</pre><h3>Sample Output</h3>
<pre>80
2</pre><h3>Explanations</h3>
<p>
In the first sample, one of the strategy to obtain 80 coins is as follow:<br />
At first, Tomya bets 0 coins. Let the color 2 be chosen by Ciel. (Now, <b>S</b><sub>1</sub> = 2, <b>S</b><sub>2</sub> = 1, Coins = 30)<br />
Then, Tomya bets 10 coins on the color 1.<br />
--- If the color 1 is chosen, she will get 10 coins.<br />
--- (Now, <b>S</b><sub>1</sub> = 1, <b>S</b><sub>2</sub> = 1, Coins = 40)<br />
------ In next turn, Tomya bets 0 coins, and let color 2 be chosen.<br />
------ (Now, <b>S</b><sub>1</sub> = 1, <b>S</b><sub>2</sub> = 0, Coins = 40)<br />
------ Lastly, Tomya bets all 40 coins on the color 1, and she will get 40 coins.<br />
------ (Game over with <b>S</b><sub>1</sub> = 0, <b>S</b><sub>2</sub> = 0, Coins = 80)<br />
--- If the color 2 is chosen in the second turn, she must lose 10 coins.<br />
--- (Now, <b>S</b><sub>1</sub> = 2, <b>S</b><sub>2</sub> = 0, Coins = 20)<br />
------ In this case, Tomya bets all 20 coins on the color 1, and she will get 20 coins.<br />
------ (Now, <b>S</b><sub>1</sub> = 1, <b>S</b><sub>2</sub> = 0, Coins = 40)<br />
------ Then, once more, Tomya bets all 40 coins on the color 1, and she will get 40 coins.<br />
------ (Game over with <b>S</b><sub>1</sub> = 0, <b>S</b><sub>2</sub> = 0, Coins = 80)
</p>
<p>
In the second sample, Tomya has only 1 coin.<br />
Therefore Tomya must not bet her coin while the box contains balls of at least 2 different colors.<br />
Ciel must always choose a ball of the most popular color. So while the box has at least two balls there always exist two balls of different colors in the box.<br />
So Tomya can bet her coin only on the last ball.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>4-07-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>