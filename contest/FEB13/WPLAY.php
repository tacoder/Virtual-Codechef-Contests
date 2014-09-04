<?php require("../../includes/header.php"); ?><h1>Word Play</h1><div class="content">

<p>
<b>Alice</b> and <b>Bob</b> decide to play the game <b>"CCWordPlay"</b>.<br />
<b>CCWordPlay</b> is played as follows:</p>
<p>Initially, there is a <b>r * c</b> grid of <b>uppercase English alphabets</b>, where <b>r</b> denotes the number of rows, and <b>c</b> denotes the number of columns.<br />
In the player's turn, this player should make a <b>valid dictionary word</b> using the<br />
<b>active</b> alphabets on the board. Initially all the alphabets on the board are active.<br />
If a player is unable to make any such word, then the player lost the game. If a player makes a word, then all the alphabets used to make the word should be considered inactive till the end of the game. The turns of players alternate, until one of them loses. As usual <b>Alice plays first</b>.<br />
<br/><br />
You are to say, if both <b>Alice</b> and <b>Bob</b> play optimally, who will win the game?<br />
</br/></p>
<p><b>Note 1:</b></p>
<p>
The alphabets need not be adjacent in any way.</p>
<pre style="font-family:monospace">
IBC
DEF
AJN
</pre><p>
In the above configuration, <b>"CAN"</b>, is a valid word.
</p>
<p><b>Note 2:</b></p>
<p>
Consider a <b>2 * 2</b> of the grid</p>
<pre style="font-family:monospace">
BE
ED
</pre><p>
Let the dictionary be:</p>
<pre style="font-family:monospace">
BED
BEE
</pre><p>
Say a player made the word <b>"BED"</b>. This word can be make in two ways:</p>
<pre style="font-family:monospace">
--
E-

or

-E
--
</pre><p>
Note that after making <b>"BED"</b>, not all the <b>E</b>(s) are inactive. However, after <b>"BEE"</b> is created, both <b>E</b>s are inactive, namely the board will be</p>
<pre style="font-family:monospace">
--
-D
</pre><h3>Input</h3>
<p>
The first line of input contains <b>D</b> denoting the number of words in the dictionally.<br />
The next <b>D</b> lines contain words in the dictionally.<br />
Then the next line contains 2 space-separated integers denoting <b>r</b> and <b>c</b>.<br />
After that, the next line contains an integers <b>T</b> denoting the number of boards.<br />
Then the <b>T</b> boards are follow without any extra spaces and extra blank lines.
</p>
<h3>Output</h3>
<p>
For each board, print a single line containing,<br />
<b>"Alice"</b>, if Alice wins, or <b>"Bob"</b>, if Bob wins. (Quotes are only for clarity).
</p>
<h3>Constraints</h3>
<p>
1 ≤ <b>D</b> ≤ 500000</p>
<p>1 ≤ <b>T</b> ≤ 1000</p>
<p>1 ≤ <b>r</b>, <b>c</b> ≤ 4</p>
<p>1 ≤ The length of each word ≤ <b>r</b> * <b>c</b></p>
<p>The dictionary does not contain the same word more than once.</p>
<p>At least one of the following 3 conditions must be hold:</p>
<ul>
<li><b>r</b> = 4, <b>c</b> = 4, <b>T</b> ≤ 10</li>
<li><b>r</b> = 3, <b>c</b> = 4, <b>T</b> ≤ 100</li>
<li><b>r</b> ≤ 3, <b>c</b> ≤ 3, <b>T</b> ≤ 1000</li>
</ul>
<h3>Samples</h3>
<pre>
<b>Input:</b>
5
BED
BAD
RED
BREED
BEER
3 3
2
DER
RAD
FEE
BAR
BEE
RAN

<b>Output:</b>
Bob
Alice

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>1-01-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>4 sec</td>
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