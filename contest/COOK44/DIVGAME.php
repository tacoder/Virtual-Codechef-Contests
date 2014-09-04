<?php require("../../includes/header.php"); ?><h1>Game of Divisors</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/mandarin/DIVGAME.pdf">Mandarin Chinese</a> and <a target="_blank" href="http://www.codechef.com/download/translated/COOK44/russian/DIVGAME.pdf">Russian</a> as well.</h3>
<p>
Mike and his friend Tom are playing a very interesting game right now. Here is the description of the game:
</p>
<p><ul type="square">
<li>Initially, there is a positive integer <b>N</b> written on the desk, which is strictly greater than 1;
</li><li>Mike makes the first move, then players make moves alternatively;
</li><li>On each move the current player can either decrease the number on the desk by 1, or divide it by one of it's divisors except itself and 1; It's forbidden to decrease the number if it's equal to 1;
</li><li>If the current player can't make a move, then he loses. In other words, if there is "1" written on the desk right before his move, then he loses.
	</li></ul>
</p>
<p>
You are given a number <b>N</b>. You need to determine the winner of the game, if <b>N</b> is the number written of the desk initially. You may assume, that both players play optimally.
</p>
<h3>Input</h3>

<p>
There are multiple test cases in the input. The first line of the input contains one integer <b>T</b>, denoting the number of test cases in the input.
</p>
<p>The next <b>T</b> lines contain one integer each, denoting the initial number of the game.</p>
<p>All the test cases are independent and must be considered separately!</p>
<p> </p>
<h3>Output</h3>
<p>Your output should contain exactly <b>T</b> lines, each contains the name of the winner(Mike or Tom) of the corresponding game. You should output the verdicts of the games in the order they appear in the input.</p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10 000;</p>
<p>2 ≤ <b>N</b> ≤ 10<sup>8</sup>, for each test case appeared in the input.</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
4 
5 
3 
2 
4

<b>Output:</b>
Tom
Tom
Mike
Mike
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kostya_by">kostya_by</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gerald">gerald</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>8-02-2014</td>
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