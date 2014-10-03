<?php require("../../includes/header.php"); ?><h1>A game of consecutive piles</h1><div class="content">
<p>
There are 6 piles of stones in a round configuration. In a single move, a player selects 3 consecutive piles, and removes some stones from 1 or more of these piles. (at least 1 stone must be removed from at least 1 pile).
</p>
<p>
A player loses if he can’t make any more moves in the current position. (equivalently, there do not exist any piles with non-zero amount of stones)
</p>
<p>
Given a starting position, output whether it is a winning or a losing position for the first player.
</p>
<p>
The game is a two players game and they play alternatively.
</p>
<p>
Note that even if a pile becomes empty, it still exists in the game as an empty pile. When selecting consecutive piles, one of them maybe an empty pile.
</p>
<h3>Input</h3>
<p>
6 space separated integers on a line containing the initial number of stones in each pile. The last pile rounds over to the first.
</p>
<h3>Output</h3>
<p>
“Winning“ (without quotes), if winning position
</p>
<p>
“Losing” (without quotes), if losing position </p>
<p>
(take care of the Case)
</p>
<h3>Constraints</h3>
<p>
0 ≤ Number of stones in each pile ≤ 10^6
</p>
<h3>Example</h3>
<pre><b>Input:</b>
1 0 0 0 0 0 
<b>Output:</b>
Winning

<pre><b>Input:</b>
1 0 0 1 0 0 
<b>Output:</b>
Losing

</pre></pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/"></a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-09-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>