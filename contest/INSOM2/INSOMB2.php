<?php require("../../includes/header.php"); ?><h1>Timepass</h1><div class="content">

<p>Prakrati and Urja, the mascots of Cognizance, are quite excited as Vayu and Jal, their best friends, have joined them for an extended vacation. But vacations, as usual, have a nasty habit of becoming a den for boredom. Tired of lounging about, playing the regular card games, they embarked upon a journey to define their own card game. The rules of the games are as follows:</p>
<ul>
<li>Cards from a standard deck of 52 will be randomly &amp; equally dealt to all of them.</li>
<li>The cards dealt to each player will be kept face down in the form of a pile, so that the players can't look at them.</li>
<li>Each player in turn, will show the topmost card of his/her pile &amp; put it on the top of the central pile. This will be known as the &#8220;play&#8221; of that card.</li>
<li>Whenever someone "plays" a card of the same suit as the card lying on top of the central pile, that player's next turn will be skipped.  </li>
<li>Play continues as long as players have cards left with them.</li>
<li>The order in which the players finish off their cards decides the winning sequence. The objective of the game is to retain as many cards as possible.   The player who finishes his/her dealt cards first will be ranked 4th and the game will continue between other three players. The next player to finish the dealt cards will be ranked 3rd &amp; so on.</li>
<li>The game ends when only 1 player is left with K (> 0) cards in hand.</li>
</ul>
<p><br/></br/></p>
<p>It is agreed that play will proceed in the following order:<br/><br />
Prakrati, Urja, Vayu, Jal</br/></p>
<p>
Agni, their neighbour, wants to analyze some of these games to determine if Prakriti was unduly disadvantaged by starting first. In order to do so, he requests you to create a simulator for this game. You have to help Agni out by creating a simulator that produces the result sequence for a given initial distribution of cards.
</p>
<h3>Representation of Cards:</h3>
<p>Each card is represented by two character card code. <br/><br />
The first character will be one of '123456789TJQK' and represents the face value of each card (ace, 2&#8211;10, jack, queen, king) &amp; second character will be one of 'cdhs' and represents the suit of the card  - clubs, diamonds, hearts, and spades.
</br/></p>
<h3>Codes of Players</h3>
<p>
P - Prakrati, U - Urja, V - Vayu, J - Jal
</p>
<h3>Input</h3>
<p>Line 1-4 : Each line represents the pile of cards for players in the order of play. Each line contains thirteen card codes separated by single spaces. The cards have to be played in the given order i.e. for the given Sample Input Prakrati will play 3s first, then 5d &amp; so on.
</p>
<h3>Output</h3>
<p>Line 1: The rank list of players and the number of cards left with the last player (single space separated)</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3s 5d kc 9c 4h 6d kd 1s 1h 6h qh th 7h
4s 6s 3c tc js 6c qd 8d 2h ts kh 9h qs
4d 8s 4c jc 7d 7c jd 3d td 2s 5h 9s ks
3h 7s 5c qc 8c 2c 1c 1d 2d 9d 5s jh 8h

<b>Output:</b>
PVUJ 2
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/admin">admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-03-2009</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>