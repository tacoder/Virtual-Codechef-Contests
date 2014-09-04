<?php require("../../includes/header.php"); ?><h1>Before Kurukshetra</h1><div class="content">

<p>Krishna and Arjuna are to play an unusual game before the battle of Kurukshetra because they wanted to get a bit relaxed before the war. This game is played this way: both players chose a non-negative number and they alternate turns until there are no more possible moves. The player who can't make a move is considered the loser, and the other one the winner. A turn consists of chosing one or two non-adjacent digits of one of the numbers on play (initially there is only one number) and removing those digits, leaving exactly two or three new numbers, respectively. And for the next turn, all these numbers will be on the game.</p>
<p>For example, if the chosen number is 12345712, a turn would be to remove the first 2 and the last 1, leaving 3 new numbers: 1, 3457 and 2. It is not valid to remove the first 1, the last 2 or to remove two adjacent digits (remove 3 and 5 is invalid).</p>
<p>Krishna thought that this game was quite simple for him, so he added a new restriction: if at some point of the game there is a prime number, that number is taken out of the game. For example, we had 12345100000007 and after making a move we have 1, 34 and 100000007. 1 will be part of the game, as well as 34, but 100000007 is out of the game. Also, for this game 0007 is not reduced to 7.</p>
<p>Arjuna, as a mortal, knew that Krishna, a god, was far better than him with prime numbers, but not with game theory, a field developed by humans, so he added a new restriction to the game in order to have a chance to win. If a number is split in 2 new numbers, he will put on the game A copies of the first number and B copies of the second, instead of just one copy of each one. And if a number is split in 3 new numbers, he will put on the game A copies of the first number, B copies of the second and C copies of the third.</p>
<p>Sadly, Arjuna realized that this game was very complicated for him, so he secretly asked for your help. So, you, as a great programmer, have to help Arjuna by giving him information about the game. He will give you the first number on play and he also said you that he was the first to play.<br />
If the game is winnable for Arjuna, you have to say to him "WIN", and also give the indices (0-indexed) of the two or three digits of the number that are going to be removed in the first turn in order to win. These two or three numbers should be preceded by 1 or 2, according to the number of chosen digits. If there are several possible options to win, you should give the one that minimizes the number of digits that are going to me removed, and if now there are several options, you should give the one that comes first lexicographically. If the game is not winnable for Arjuna, you should say "AT LEAST YOU WILL WIN THE WAR :)".<br />
Don't forget that Krishna always plays perfectly!</p>
<h3>Input</h3>
<p>
You will be given a number T in the first line representing the number of test cases. After that, there are T lines, each one consisting of a number X, the first number on play, and after that A, B and C.</p>
<h3>Output</h3>
<p>For each test case output a single line containing first the number of digits to remove, and after that the digit(s).</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
150 111 111 111
395233716872471639 1192467086 1412716779 1223932479
554122894796788090 1369132585 1582995723 1775301948

<b>Output:</b>
1 1
AT LEAST YOU WILL WIN THE WAR :)
2 1 3 
<h3>CONSTRAINTS:</h3>
0 &lt;= A, B, C &lt;= 1000000001
1 &lt;= X &lt;= 10^20, and X doesn't contain leading zeroes.

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/encoded_admin">encoded_admin</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>21-02-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>8 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, C, C99 strict, CLOJ, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, FORT, FS, GO, ICON, JAR, JAVA, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PHP, PIKE, PYTH, PYTH 3.1.2, RUBY, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>