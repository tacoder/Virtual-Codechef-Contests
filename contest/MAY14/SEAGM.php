<?php require("../../includes/header.php"); ?><h1>Sereja and Game</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/mandarin/SEAGM.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MAY14/russian/SEAGM.pdf">Russian</a>.</h3>
<p>Sereja and Dima play the game. The rules are as follows:</p>
<p>Initially, there are <b>n</b> cards on the table, each card has a positive integer written on it.<br />
At the beginning Sereja writes down the number <b>0</b> on the sheet of paper.<br />
Then players pick cards from the table alternately. When a player picks a card, he writes down the greatest common divisor of a number that is written on a card and a number that was last written on the sheet of paper.<br />
Then the player throws this card away, so it can never been taken again.<br />
A player loses if after his turn the number, written on the piece of the paper is <b>1</b>.<br />
A player also loses, if he isn't able to make a move. </p>
<p>
Now Sereja is interested in the following two things: </p>
<ul>
<li>what is the probability of Sereja's victory if he makes the first move and the both players play optimaly</li>
<li>what is the probability of Sereja's victory if he makes the first move and the both players make moves randomly</li>
</ul>

<p>If player makes moves <b>randomly</b>, he chooses a card with equal probability among those that remained on the table.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains the number <b>n</b> — the amount of cards present on the table at the beginning of the game. The second line contains integers <b>a<sub>1</sub>, a<sub>2</sub>, </b>..., <b>a<sub>n</sub></b> — the numbers written on the cards.</p>
<h3>Output</h3>
<p>For each test case output two numbers denoting answers on Sereja's questions.<br />
Output the integer part of the answer to the first question and the answer to the second question with exactly four digits after the decimal point.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>a<sub>j</sub></b> ≤ <b>100</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
5
6 10 15 22 28
5
2 4 8 16 32
4
2 4 8 16
4
1 2 3 4

<b>Output:</b>
0 0.4000
1 1.0000
0 0.0000
1 0.5833

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-05-2013</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>