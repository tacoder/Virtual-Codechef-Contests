<?php require("../../includes/header.php"); ?><h1>Black Jack</h1><div class="content">

<p>Problem description.</p>
<p> Blackjack is a very well known gambling card game played against a<br />
dealer in a casino. In this card game, each player is trying to beat<br />
the dealer, by obtaining a sum of card values not more than 21<br />
which is greater than the sum of dealer card values. Player is initially<br />
given 2 cards, but he could choose to HIT (ask for 3rd card) or STAND<br />
(no more cards). If he chooses to hit for 3rd card and total score<br />
crosses 21 he get busted (loses irrespective of the total score of<br />
dealer cards). Face cards (Jacks, Queens and Kings) are worth 10<br />
points. Aces are worth 1 or 11, whichever is preferable. Other cards<br />
are represented by their number.<br />
Here, you have to implement a conservative player strategy of<br />
playing blackjack. This conservative player does not want to get<br />
busted and hit only when its safe to do so. He follows following<br />
strategy:<br />
HIT if (score&lt;=11) or (an ACE is held)<br />
STAND otherwise.<br />
Write a program to implement the above strategy given the initial 2<br />
cards of the player.
</p>
<h3>Input</h3>
<p>First line T, will have a single integer having number of test cases followed by T lines of input.</p>
<p><br /><br />
Second Line will have two space seperated inputs (value of first and second card).<br />
<br /><br />
and so on..</p>
<h3>Output</h3>
<p>For each test case, output a single line containing the result.</p>
<h3>Constraints</h3>
<p>
1) Color of the card does not affects the score of<br />
the card.<br />
<br /><br />
2) If the value of card is not valid then return INVALID.<br />
<br /><br />
3) Don't consider the card with value 10(print INVALID).<br />
<br /><br />
4) Input for Face cards must be capital<br />
letters('A','Q','J','K') else return INVALID.<br />
<br />
</p>
<h3>Example</h3>
<pre><b>Input</b> 
3
J 5
4 3
A F


<b>Output:</b>
STAND
HIT
INVALID
</pre>
<h3>Explanation</h3>
<p><b>1. Here the value of J (JACK) is<br />
10. so the sum of card values is 15, so he<br />
chooses to stand.<br />
<br /><br />
2. Here the sum of values of card<br />
4 and 3 is 7. It is less than 11, so it makes<br />
sense for him to draw another card.<br />
<br /><br />
3. Here F is an invalid card name.</b></p>
<p></p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/rajat_vig">rajat_vig</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>23-10-2013</td>
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