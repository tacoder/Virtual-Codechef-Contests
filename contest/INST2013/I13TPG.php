<?php require("../../includes/header.php"); ?><h1>The Palindrome Game</h1><div class="content">

<p>
There was a big fight between the brothers Ram and Shyam as to who would play on the computer. Their mother got irritated and in order to quiten them thought up a game. <br />
They were given a string s, consisting of lowercase English letters. They play a game that is described by the following rules:</p>
<p>The players move in turns; In one move the player can remove an arbitrary letter from string s.<br />
If the player before his turn can reorder the letters in string s so as to get a palindrome, this player wins. A palindrome is a string that reads the same both ways (from left to right, and vice versa). For example, string "abba" is a palindrome and string "abc" isn't.<br />
Determine which player will win, provided that both sides play optimally well  the one who moves first(Ram) or the one who moves second(Shyam).The brother winning will play his favourite game!</p>
<p>
<strong>Input:</strong><br />
The input contains a single line, containing string s . String s consists of lowercase English letters.</p>
<p>
<strong>Output: </strong><br />
In a single line print word "Ram" if the first player wins (provided that both players play optimally well). Otherwise, print word "Shyam". Print the words without the quotes.</p>
<p>
<strong>Sample Input 1:</strong><br />
aba</p>
<p>
<strong>Sample Output 1:</strong><br />
Ram</p>
<p>
<strong>Sample Input 2:</strong><br />
abca</p>
<p>
<strong>Sample Output 2:</strong><br />
Shyam</p>
<p>
<strong>Constraints:</strong><br />
1&lt;=|s|&lt;=10^6<br />
Time Limit:1 s</p>
<p>You will also be judged on the size of your code.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sibashis">sibashis</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-03-2013</td>
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