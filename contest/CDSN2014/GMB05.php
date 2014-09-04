<?php require("../../includes/header.php"); ?><h1>ICCProblem</h1><div class="content">
<p> </p>
<p>ICC is conducting a tournament in which 5 teams compete in one group in Round Robin format meaning that each team will play against all 4 other teams once. Thus each pair of teams will compete against each other once and only once. The top two teams at the end of the round will qualify for the knock out round. There will be a total of 10 matches and each team will play 4 matches. All matches have to be won by a single team and 2 points are awarded for a win. There is no possibility of a tie or no result. In case two teams end up with same points in the table, their position will depend upon the net run rate. In that case many teams (infact all 5 teams) can have a chance to qualify for next round at the end of current round. Our target is to make team "India" qualify for the next round by placing it in top 2. Take as input from user the current position of the scorecard and the remaining matches to be played and as an output print on screen the maximum number of matches out of the remaining matches India can afford to lose while still standing with a chance to qualify for the next round.</p>
<p> </p>
<h3>Input</h3>

<p>The first 5 lines of the input will contain the points table entries for the 5 teams in order India (I), Australia (A), Pakistan (P), England (E) and Bangladesh (B) respectively. Each line contains 2 space seperated numbers with first one representing number of matches played and second, number of matches won out of those played matches. Table data entered by the user must be consistent. The next n(&lt;=10) lines of the input contains the remaining matches in the tournament. Each line represents an upcoming match. For example "PI" or "IP" both represent an upcoming match between India and Pakistan.</p>
<p> </p>
<h3>Output</h3>

<p>The output is a single number which represents maximum number of matches India can lose out of the remaining matches while still having a chance to qualify for the next round. If India just can't qualify, print -1 as output.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>1000</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
3 2
3 1
4 2
4 2
4 2
AI
3 1
2 1
2 2
2 0
3 2
AE
PE
AP
IB
3 0
1 0
2 2
2 1
2 2
AE
IB
AP
PE
AB

<b>Output:</b>
1
0
-1
</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/gothicprakhar">gothicprakhar</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>30-04-2014</td>
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