<?php require("../../includes/header.php"); ?><h1>Game Count</h1><div class="content">

<p>Tug of war is a sport that directly puts two teams against each other in a test of strength.</p>
<p>During school days, both Chef Shifu and Chef Po were champions of tug of war.<br />
On behalf of restaurant's anniversary, Chef Shifu and Chef Po have decided to conduct<br />
a tug of war game for their customers.</p>
<p></p><p><br />
Master Chef Oogway has decided the following rules for the game.</p>
<ol>
<li>
    Let <b>N</b> be the number of players participating in the game. All of these<br />
    players would stand in a circle in clock wise direction.
    </li>
<li>
    There are an infinite number of long ropes available.<br />
    When a rope is held by exactly two players, it is termed as bonding.
    </li>
<li>
    At least one bonding is necessary to conduct a game.
    </li>
<li>
    A player can play against multiple people simultaneously i.e he can have more than one bonding at<br />
    the same time.
    </li>
<li>
    Both members of a pair of players that have a bonding must have the same number of total<br />
    bondings. That is, if the player <i>A</i>  makes bonding with the player <i>B</i>,<br />
    then the number of total bondings of the player <i>A</i> must be the same as<br />
    that of the player <i>B</i>.
    </li>
<li>
    Bondings should be created in such a fashion that ropes must not intersect each other.
    </li>
<li>
    The number of bondings of every player must be no more than <b>K</b>.
    </li>
</ol>

<p>
Now Master Chef Oogway asked Chef Shifu and Chef Po to find out the number of possible games.<br />
Your task is to help them find this number. As this number might become huge,<br />
you've to find it modulo (10^14+7). Two games are different iff there is some<br />
bonding that is present in only of them. </p>
<h3>Input</h3>
<p>First line contains <b>T</b>, the number of test cases.<br />
Each of <b>T</b> lines contain 2 positive integers <b>N</b> and <b>K</b> separated by a space.
</p>
<p><h3>Output</h3>
</p><p>For each test case, output the number of ways to conduct the game modulo 100000000000007 (10<sup>14</sup>+7) in one line.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
3
3 2
4 0
2 1

<b>Output:</b>
4
0
1
</pre><p>
<b>Explanation:</b></p>
<p>For the 1st case, there are 3 players. Let's call them p1, p2, p3.<br />
Different games possible are:<br />
Game 1: p1-p2 (numbers of bondings of p1, p2 are 1 ≤ <b>K</b> = 2)<br />
Game 2: p1-p3 (numbers of bondings of p1, p3 are 1 ≤ <b>K</b> = 2)<br />
Game 3: p2-p3 (numbers of bondings of p2, p3 are 1 ≤ <b>K</b> = 2)<br />
Game 4: p1-p2, p1-p3, p2-p3 (numbers of bondings of p1, p2, p3 are 2 ≤ <b>K</b><br />
= 2)</p>
<p>For the 2nd test case, we cannot form the game, because K = 0 and hence no<br />
player is allowed to make any bonding. As any game must have atleast one<br />
bonding, no game is possible here. </p>
<p>For the 3rd case, only possible game is:<br />
Game 1: p1-p2 (number of bondings in p1, p2 are 1)</p>
<h3>Constraints</h3>
<p>1 ≤ <b>T</b> ≤ 10000<br />
0 ≤ <b>N</b> ≤ 10000<br />
0 ≤ <b>K</b> ≤ <b>N</b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/khadarbasha">khadarbasha</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>15-05-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
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