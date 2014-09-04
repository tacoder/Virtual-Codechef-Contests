<?php require("../../includes/header.php"); ?><h1>Card Shuffle</h1><div class="content">

<p>Chef is organizing an online card game tournament and for this purpose he has to provide a card shuffling software. This software has to simulate the following shuffling process. A stack of N cards is placed face down on the table. Cards in the stack are ordered by value. Topmost card has value 1 and the one on the bottom has value N. To shuffle the cards we repeat the following steps M times:</p>
<ol>
<li>take A cards from the top of the deck.</li>
<li>take another B cards from the top of the deck.</li>
<li>put the A cards, which you removed in the first step, back on top of the remaining deck.</li>
<li>take C cards from the deck</li>
<li>put the B cards, which you're still holding from the second move, <b>card by card</b> on top of the deck.</li>
<li>finally, return the block of C cards on top</li>
</ol>
<p>Note: taking a block of cards from the top of the deck does not change their order. The entire block is removed in a single move and not card by card. The only exception is the fifth move, where you return cards one by one from the top.</p>
<h3>Input</h3>

<p>The first line contains integers N and M. The following M lines describe the moves by integers A<sub>i</sub>, B<sub>i</sub>, C<sub>i</sub> as described in the previous section.
</p>
<p>In the spirit of random card shuffling, all test cases were generated with uniform random distributions to select where to cut the deck of cards.</p>
<h3>Output</h3>

<p>In a single line output the cards in the deck after performing all the moves. Cards should be listed from top of the deck to bottom and separated by spaces.</p>
<h3>Constraints</h3>
<ul>
<li>1 &lt;= N, M &lt;= 100 000</li>
</ul>
<h3>Example</h3>
<pre>
<b>Input:</b>
10 2
6 2 2
5 3 6

<b>Output:</b>
1 2 8 7 3 9 6 5 4 10
</pre>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/thocevar">thocevar</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-12-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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