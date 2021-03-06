<?php require("../../includes/header.php"); ?><h1>Get a Clue</h1><div class="content">

<p>A group of 5 logicians are playing a game of Clue (also known as Cluedo).  The game is played with 18 cards:<br />
6 "suspect" cards, 6 "weapon" cards, and 6 "room" cards (the original game has 9 room cards, but the logicians<br />
have removed 3 in order for everyone to receive the same number of cards).  At the beginning of the game, 1 of each type of<br />
card is chosen at random and placed in an envelope, whose contents are kept secret.  The remaining cards are<br />
then dealt out randomly to the players, 3 cards each.  The goal of the game is<br />
to be the first player to determine which cards are in the envelope.  To make things more interesting, the<br />
logicians have modified the rules to the game as follows:</p>
<p>First of all, the cards are each given a unique number: The "suspect" cards are given numbers 1-6, the<br />
"weapon" cards numbers 7-12, and the "room" cards 13-18.  At the start of play, each logician announces<br />
the sum of his cards to the group.  Then, starting with the first logician and continuing in a circle, each logician<br />
will either pass, or declare himself the winner by announcing the contents of the secret envelope.  After the fifth<br />
logician's turn, it becomes the first logician's turn again.  The<br />
logicians are very smart, and will never pass if it's possible for them to deduce the contents of the<br />
envelope, nor will they ever attempt to guess the contents of the envelope when they don't know with certainty.<br />
Furthermore, all of the logicians are aware of the fact that none of them will pass if it's<br />
possible to win.</p>
<p>Your task is to determine, given the distribution of the cards, which logician will win (if any).</p>
<h3>Input:</h3>
<p>Input begins with an integer T (about 100), the number of test cases.<br />
Each test case consists of 5 lines of 3 integers each, indicating the cards held by each of the<br />
5 logicians.  Each integer will be between 1 and 18, inclusive, and exactly one integer from each<br />
of the ranges 1-6, 7-12, and 13-18 will be absent from each test case.  The first line corresponds<br />
to the logician whose turn is first, the second line to the logician whose turn is second,<br />
and so on.  Each test case is separated by a blank line</p>
<h3>Output:</h3>
<p>For each test case output a single integer, on a line by itself, indicating the (1-based) index of the<br />
logician who wins the game, or -1 if the game has no winner (i.e. continues forever).</p>
<h3>Sample Input:</h3>
<pre>2

6 10 16
3 2 11
8 9 12
15 17 18
4 5 14

1 4 5
7 10 11
3 6 9
12 14 15
16 17 18</pre><h3>Sample Output:</h3>
<pre>1
2</pre><h3>Explanation:</h3>
<p>In the first example, the cards in the envelope are 1, 7, and 13.  All of the logicians immediately know this,<br />
however the first logician wins because it must be one's turn in order to win.</p>
<p>In the second example, the cards in the envelope are 2, 8, and 13.  Note that initially the second player does not<br />
have enough information to determine which cards are in the envelope.  However, the fact<br />
that the first player passes is enough for the second player deduce the first player's cards (if the first player<br />
had been holding 2 3 5, for example, he would have won instead of pass), which in turn allows him to<br />
determine the secret cards and win.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/anshuman_singh">anshuman_singh</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>9-06-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>