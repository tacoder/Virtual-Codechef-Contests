<?php require("../../includes/header.php"); ?><h1>Subtraction Game</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/mandarin/GAMEAAM.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK42/russian/GAMEAAM.pdf">Russian</a> as well.</h3>
<p>Two players are playing a game. The game is played on a sequence of positive integer pairs. The players make their moves alternatively. During his move the player chooses a pair and decreases the larger integer in the pair by a positive multiple of the smaller integer in the pair in such a way that both integers in the pair remain positive. If two numbers in some pair become equal then the pair is removed from the sequence. The player who can not make any move loses (or in another words the player who encounters an empty sequence loses). Given the sequence of positive integer pairs determine whether the first player can win or not (assuming that both players are playing optimally).</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br />
Each test starts with an integer <b>N</b> denoting the number of pairs. Each of the next <b>N</b> lines contains a pair of positive integers. </p>
<p> </p>
<h3>Output</h3>
<p>For each test case, output a single line containing "YES" if the first player can win and "NO" otherwise. </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li>All other integers are between <b>1</b> to <b>10<sup>8</sup></b></li>
<li>The integers in each pair will be different</li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1
2 3
2
4 5
5 6
2
2 3
3 5

<b>Output:</b>
NO
NO
YES

</pre><p> </p>
<h3>Explanation</h3>
<p><b>Example case 1.</b> The first player don't have any choice other subtracting 2 from 3. So during the turn of the second player integer pair will be (2,1). The second player will win by subtracting 1 from 2. </p>
<p><b>Example case 2.</b> If the first player choose to move (4,5) to (4,1) the second player will make it to (1,1). If the first player choose to move (5,6) to (5,1) the second player will make it to (1,1). So regardless of the move of the first player, the second will always win.</p>
<p><b>Example case 3.</b> The first player will select pair (3,5) and make it to (3,2). Now both pairs are equal. So whatever the move of second player he will just mirror that move in another pair. This will ensure his win.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/satej ">satej </a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-01-2014</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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