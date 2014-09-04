<?php require("../../includes/header.php"); ?><h1>The Great Game</h1><div class="content">
<p> </p>
<p>Sherlock and his arch-enemy Moriarty are playing a game. Sherlock must defeat Moriarty to save the world. </p>
<p> The game consists of a 2-D board of dimensions <strong>N</strong>x<strong>N</strong>. The rows of the board are numbered <strong>1</strong> to <strong>N</strong> from top to bottom and the columns are numbered <strong>1</strong> to <strong>N</strong> from left to right. For each row, there is a button <strong>Ri</strong> to the left of that row and for each column, there is a button <strong>Ci</strong> to the top of that column. A cell is named <strong>(i,j)</strong> if it is the intersection of the <strong>i</strong>th row and the <strong>j</strong>th column. </p>
<p> Each cell contains a lightbulb. The lightbulb is in one of the two states: ON or OFF.  Initially, <strong>M</strong> lightbulbs are on. Pressing a button <strong>Ri</strong>, activates the row <strong>i</strong> and pressing the button <strong>Cj</strong>, activates the column j. If both the row and column buttons of a cell are activated, the state of the lightbulb in that cell is toggled.</p>
<p>In each turn, a cell <strong>(i,j)</strong> with a glowing lightbulb(on state) is chosen by the player. For that turn, the player has to choose the buttons <strong>Ri</strong> and <strong>Cj</strong>. Along with those 2 buttons a set of buttons {<strong>Rk</strong><strong>}</strong> and {<strong>Cm</strong>} can be chosen where each <strong>k</strong> divides <strong>i </strong>and each <strong>m</strong> divides <strong>j</strong>. All the chosen buttons are pressed simultaneously. </p>
<p> The player who cannot make a move loses. Assuming that both players play optimally and that Sherlock starts first, find out who will win the game.</p>
<p> </p>
<h3>Input</h3>
<ul>
<li>The first line of the input contains an integer <strong>T</strong> denoting the number of test cases. The description of <strong>T</strong> test cases follows.</li>
<li>The first line of each test case contains a single integer <strong>M</strong> </li>
<li> Each of the next M lines contains a pair of integers X, Y where (X, Y) is the name of a cell where the lightbulb is on.</li>
</ul>
<p> </p>
<h3>Output</h3>
<p>If Sherlock wins the game, output "<strong>The world is safe for now.</strong>" without quotes. Otherwise print "<strong>The end has begun.</strong>"</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> ≤ <strong>T</strong> ≤ <strong>3</strong></li>
<li><strong>N</strong> = <strong>10^7</strong></li>
<li><strong>1</strong> ≤ <strong>M</strong> ≤ <strong>10^5</strong></li>
<li><strong>1</strong> ≤ <strong>X,Y</strong> ≤ <strong>N</strong></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><strong>Input:</strong>
2
2
2 3
3 3
1
1 2

<strong>Output:</strong>
The end has begun.
The world is safe for now.</pre><p> </p>
<h3>Explanation</h3>
<p>An example of a sample game between Sherlock and Moriarty for case 1. <br /> O-on X-off </p>
<p> Initial state of board: <br /> XXX <br /> XXO <br /> XXO </p>
<p> Sherlock chooses lightbulb (3,3) <br /> He chooses rows = {3} <br /> Columns = {1, 3} </p>
<p> New state: <br /> XXX <br /> XXO <br /> OXX </p>
<p> Moriarty chooses bulb (2,3) <br /> rows = {2}, columns = {1, 3} </p>
<p> New state: <br /> XXX <br /> OXX <br /> OXX </p>
<p> Sherlock chooses bulb (2,1)<br /> rows = {1,2}, columns = {1} </p>
<p> Moriarty chooses bulb (3,1) <br /> rows = {1, 3}, columns = {1} and wins.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vshriram93">vshriram93</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2014</td>
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