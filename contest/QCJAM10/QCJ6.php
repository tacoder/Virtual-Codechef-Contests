<?php require("../../includes/header.php"); ?><h1>THE GAME</h1><div class="content">

<p>Tom and Hanks play the following game. On a game board having a line of squares labelled from 0,1,2 ... certain number of coins are placed with possibly more than one coin on a single square. In each turn a player can move exactly one coin to any square to the left i.e, if a player wishes to remove a coin from square i, he can then place it in any square which belongs to the set (0,1, ... i-1) . Given the description of the board and also assuming that Tom always makes the first move you have tell who wins the game (Assuming Both play Optimally).</p>
<h3>Input</h3>
<p>The first line will contain N the number of test cases and then 2N lines follow. For each test case the first line will have S the size of the board and in the next line S integers follow. The i<sup>th</sup> integer gives the the number of coins in the i<sup>th</sup> square. Atleast one of the S integers will be non zero. All the numbers in the input will be less than 25.</p>
<h3>Output</h3>
<p>For each test case output one line containing either "Tom Wins" or "Hanks Wins".</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1
1
1
2

<b>Output:</b>
Tom Wins
Hanks Wins
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhijith">abhijith</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>29-01-2010</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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