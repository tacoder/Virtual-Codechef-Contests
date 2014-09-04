<?php require("../../includes/header.php"); ?><h1>Cards</h1><div class="content">

<p>Dan Parker possesses a deck of N cards numbered 1...N and are arranged in random order. Danny decided to throw a challenge towards his friends and promised to give away 100$ as a prize money to the winner. At first, Dan shows the order in which the cards are arranged in the deck to all of his friends. The challenge is to come up with an algorithm that can help him select maximum number of cards from the deck if he is repeatedly allowed to pick a card until the deck is empty and provided that he can only choose the cards in either increasing or decreasing fashion based on the numbers on the cards. Make sure that being one of his friends, you get to be the winner.</p>
<h3>Input</h3>
<p>1st line contains number of test cases.</p>
<p>1st line of each test case will contain number of cards (N) in the deck.</p>
<p>2nd line of each test case will contain N integers denoting the card numbers in the order in which they are kept. (the first element is at the top of the deck)</p>
<h3>Output</h3>
<p>Output the maximum number of cards that can be chosen.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
10
3 2 6 7 4 1 9 10 8 5
8
8 2 1 6 4 7 5 3

<b>Output:</b>
5
4
</pre><p> Explaination : For the first test case the cards which we can select are 2 6 7 9 10 and for second test case 8 6 5 3 or 8 7 5 3 </p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/illume">illume</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>10-02-2011</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>