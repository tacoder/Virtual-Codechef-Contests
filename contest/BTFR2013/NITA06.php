<?php require("../../includes/header.php"); ?><h1>Binary Zero-One</h1><div class="content">

<p>Little Shocky very much likes playing with little Alice. Recently he has received a game called "Zero-One" as a gift from his mother. Shocky immediately offered Alice to play the game with him.</p>
<p>Before the very beginning of the game several cards are lain out on a table in one line from the left to the right. Each card contains a digit: 0 or 1. Players move in turns and Alice moves first. During each move a player should remove a card from the table and shift all other cards so as to close the gap left by the removed card. For example, if before somebody's move the cards on the table formed a sequence 01010101, then after the fourth card is removed (the cards are numbered starting from 1), the sequence will look like that: 0100101.</p>
<p>The game ends when exactly two cards are left on the table. The digits on these cards determine the number in binary notation: the most significant bit is located to the left. Alice's aim is to minimize the number and Shocky's aim is to maximize it.</p>
<p>An unpleasant accident occurred before the game started. The kids spilled juice on some of the cards and the digits on the cards got blurred. Each one of the spoiled cards could have either 0 or 1 written on it. Consider all possible variants of initial arrangement of the digits (before the juice spilling). For each variant, let's find which two cards are left by the end of the game, assuming that both Shocky and Alice play optimally. An ordered pair of digits written on those two cards is called an outcome. Your task is to find the set of outcomes for all variants of initial digits arrangement.</p>
<h3>Input</h3>
<p>The first line contains a sequence of characters each of which can either be a "0", a "1" or a "?". This sequence determines the initial arrangement of cards on the table from the left to the right. The characters "?" mean that the given card was spoiled before the game. The sequence's length ranges from 2 to 105, inclusive. </p>
<h3>Output</h3>
<p>Print the set of outcomes for all possible initial digits arrangements. Print each possible outcome on a single line. Each outcome should be represented by two characters: the digits written on the cards that were left by the end of the game. The outcomes should be sorted lexicographically in ascending order (see the first sample). </p>
<h3>Example</h3>
<pre><b>Input:</b>
????
<b>Output:</b>
00
01
10
11
</pre><pre><b>Input:</b>
1010
<b>Output:</b>
10
</pre><pre><b>Input:</b>
1?1
<b>Output:</b>
01
11
</pre><h3>Explanation</h3>
<p>In the first sample all 16 variants of numbers arrangement are possible. For the variant 0000 the outcome is 00. For the variant 1111 the outcome is 11. For the variant 0011 the outcome is 01. For the variant 1100 the outcome is 10. Regardless of outcomes for all other variants the set which we are looking for will contain all 4 possible outcomes.</p>
<p>In the third sample only 2 variants of numbers arrangement are possible: 111 and 101. For the variant 111 the outcome is 11. For the variant 101 the outcome is 01, because on the first turn Alice can remove the first card from the left after which the game will end.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/upendra1234">upendra1234</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-02-2013</td>
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