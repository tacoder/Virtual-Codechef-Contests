<?php require("../../includes/header.php"); ?><h1>Lucky Game</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/mandarin/LUCKG.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JULY14/russian/LUCKG.pdf">Russian</a>.</h3>
<p>
Chef, to entertain customers, decided to establish some kind of game in his restaurant. And here is what he invented:<br />
n players sit around a round table. There is n * m cards with unique numbers of range <b>1..n*m</b>.<br />
Each player has m cards. In each set of the game each player selects some card and everyone shows his card at the same time. Card of <b>i<sup>th</sup></b> player is compared to card of player <b>p[i]</b>. If it’s number is greater than the number on card of player <b>p[i]</b>, then <b>i<sup>th</sup></b> gets a point. <b>P</b> is a permutation of sequence <b>0..n-1</b>.<br />
But all customers when playing this game want to win. Chef on his side wants to please his customers. So, he decided to give cards in such way, that each player gets a point with probability larger than <b>½</b>.<br />
But it appears to be a complicated task, so he asks you for help.
</p>
<p> </p>
<h3>Input</h3>
<p>First line of input contains <b>T</b> – number of test cases. Then <b>T</b> test cases follow. Each test case consists of two lines. First line contains two numbers – <b>n</b> and <b>m</b>. Second one – permutation <b>p</b>.</p>
<h3>Output</h3>
<p>For each test case, if there’s no solution output single line <i>“No Solution”</i> (without quotes), otherwise output <b>n</b> lines with cards for each player. <b>i<sup>th</sup></b> line should contain <b>m</b> numbers in increasing order – numbers on <b>i<sup>th</sup></b> player’s cards.<br /><br />
Extra spaces at the end of the line are not allowed.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10</b></li>
<li><b>1</b> ≤ <b>n, m</b> ≤ <b>10<sup>3</sup></b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
1 1
0
3 3
2 0 1

<b>Output:</b>
No Solution
2 6 7
3 4 8
1 5 9
</pre><p> </p>
<p><b>Explanation</b><br />
For second test case, probability is 5/9 for each player to get a point.</p>
<p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/witalij_hq ">witalij_hq </a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-04-2014</td>
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