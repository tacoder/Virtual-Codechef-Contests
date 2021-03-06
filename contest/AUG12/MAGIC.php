<?php require("../../includes/header.php"); ?><h1>Two Magicians</h1><div class="content">

<p>Two magicians are playing a funny game in a system of <b>N</b> rooms and <b>M</b> two-way passages between them. The rooms are small and the passages are straight, so no pair of rooms can ever be connected by more than one passage. Moreover, no two passages can ever intersect. The rooms are situated in 3D pretty well, so it's still possible for all pairs of rooms to be connected by passages at once.</p>
<p>Initially the first magician is located at room 1 and the second magician is located at (a candy for guessing!) room 2. Each magician has <b>P</b> <i>telepoints</i> before the start. The game consists of <i>turns</i>, with the first magician taking the first turn and then both magicians taking turns alternately. Each turn consists of three <i>phases</i>. We'll call the magician taking the turn the <i>current</i> magician.</p>
<p>In the first phase, the current magician can walk between rooms through the existing passages as much as he wants (he can choose not to move at all as well). Residing at one of the rooms, he announces that the phase is finished. If after this phase both magicians are found residing at the same room, the game ends and the current magician wins. Otherwise, the turn is continued.</p>
<p>In the second phase, the current magician must create a passage between any two rooms of the system which are not directly connected by a passage yet. If there is no such pair of rooms, the game ends and the current magician loses. Otherwise, the turn is continued.</p>
<p>In the third phase, the current magician can either stay at the same room or, if he has a strictly positive number of telepoints remaining, he can teleport into any of the rooms. In case of  teleportation the current magician loses <b>1</b> telepoint. If after this phase the current magician turns out to be residing at the same room as the other one, nothing happens (though the current magician is likely to lose pretty soon).</p>
<p>You are given the information about the system of rooms and passages before the game. You'll get a point in the contest rankings if you find out which of the magicians is going to win considering them both playing optimally, that is, winning whenever there exists a guaranteed winning strategy.</p>
<h3>Input</h3>

<p>The first line contains a single integer <b>T</b> -- the number of test cases (no more than 100). Each test case is described by an empty line followed by a line containing three integers <b>N</b>, <b>M</b> and <b>P</b> (2 ≤ <b>N</b> ≤ 7777, 0 ≤ <b>M</b> ≤ 10000, 0 ≤ <b>P</b> ≤ 10000) followed by <b>M</b> lines containing two integers <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b> each (1 ≤ <b>X<sub>i</sub></b>, <b>Y<sub>i</sub></b> ≤ <b>N</b>, <b>X<sub>i</sub></b> ≠ <b>Y<sub>i</sub></b>). Each of these <b>M</b> lines describes a single two-way passage between rooms <b>X<sub>i</sub></b> and <b>Y<sub>i</sub></b>. It's guaranteed that no two rooms are directly connected by more than one passage.</p>
<h3>Output</h3>

<p>For each test case output a single line with a single word <i>First</i> if the first magician has a winning strategy in this game, and <i>Second</i> otherwise.</p>
<h3>Example</h3>
<pre>
<b>Input:</b>
4

2 0 0

3 1 0
1 3

4 0 1

4 1 1
3 4

<b>Output:</b>
Second
Second
Second
First

<b>Explanation:</b>
</pre><p>In the first two test cases, the game ends after the second turn (which is the first turn of the second magician) as the passage created by the first magician hands a win to the second magician. In the third test case, the game ends after the fourth turn (the second magician may need to use <b>1</b> telepoint here). In the fourth test case, the game ends after the third turn (the first magician has to use <b>1</b> telepoint here).</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gennady.korotkevich">gennady.korotkevich</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>27-02-2012</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>5 sec</td>
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