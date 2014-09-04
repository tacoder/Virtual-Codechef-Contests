<?php require("../../includes/header.php"); ?><h1>Jumping Game</h1><div class="content">

<p>Alice and Bob are playing a game. There have a very large checker board whose rows and columns are numbered from 0 onwards. A single counter is placed at an initial square (X,Y). Alice plays first and they take alternate turns. In each turn, if the counter was initially at square (x,y) then it can be moved to any square (a,b) which satisifes the following conditions :</p>
<p>1) 0 &lt;= a &lt;= x and 0 &lt;= b &lt;= y (but a = x and b = y is not allowed, i.e the counter must be moved)</p>
<p>2) (a,b) must be VISIBLE from (x,y) . Two squares are VISIBLE to each other if, on joining the centres of these two squares by a straight line segment, no other centre of a square lies on that line segment in between these two centres.</p>
<p>The first person who cannot make a move loses (i.e. the person who has to make a move when the counter is at square(0,0) loses, the other person wins)</p>
<p>Your task is to determine who wins, and the number of moves the game lasts, if both players play optimally. Note that the winner tries to win as quickly as possible, while the loser tries to delay his loss for as long as possible.</p>
<h3>Input</h3>
<p>The first line contains a single number T (T&lt;=100) the total number of test cases.<br />
T lines follow, each containing a single test case. Each such line contains two space separated numbers X and Y, denoting the initial position of the counter. (0 &lt;= X &lt;= 10^18, 0 &lt;= Y &lt;= 10^18).</p>
<h3>Output</h3>
<p>Output T lines, one for each test case, containing the name of the winner and the number of moves the game lasts, if both players play optimally.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
2
1 1
2 0


<b>Output:</b>
Alice 1
Bob 2

<b>Explanation</b>
<p>In the first case Alice can directly move the counter to square (0,0) thereby winning the game in 1 move.
In the second case the only square Alice can move to is square (1,0). She cannot move the counter to <br />(0,0) because (1,0) lies on the line segment joining (2,0) and (0,0). After that Bob moves it  to (0,0),<br /> thereby winning in 2 moves.</p>
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
            <td>1 sec</td>
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