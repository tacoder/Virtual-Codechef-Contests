<?php require("../../includes/header.php"); ?><h1>Team Split</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/mandarin/TMSLT.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/MARCH14/russian/TMSLT.pdf">Russian</a>.</h3>
<p>Chef wants to split a team of new chef into two teams to play a game. In order to make the split, he first designates two team captains who take alternate turns selecting players for their teams. During each turn, the captain selects a single player for his team. Since each captain wants to make the strongest possible team, he will always select the best available player. The players have strengths as integer number, where higher strength indicate better players. After all the players have been selected, the team strength is computed as the sum of the strengths of the players on that team.
</p>
<p>
For example, if <b>strengths</b> of 5 players are <b>5,7,8,4</b> and <b>2</b>, then the first captain selects the player with strength <b>8</b> for his team, the second captain gets the player with strength <b>7</b>, the first gets the one with strength <b>5</b>, the second the one with strength <b>4</b>, and the last one (strength <b>2</b>) goes to the first team. The first team now has a total strength <b>8+5+2=15</b>, and the second team has strength <b>7+4=11</b>.
</p>
<p>
Now Chef wants to find the absolute strength difference between the two teams. For the example above the answer is <b>4(=|15-11|)</b>.
</p>
<p>
But Chef does not know exact strengths of each player. He knows some parameter <b>a, b, c</b> and <b>d</b> and a formula to find the strength of each player. The formula is <br /><br />
<b><br />
	S<sub>0</sub> = d,<br /><br />
	S<sub>i</sub> = (a * S<sub>i-1</sub><sup>2</sup> + b * S<sub>i-1</sub> + c) mod 1000000, for i = 1 to N - 1<br />
</b>
</p>
<p>
There are <b>N</b> players numbering <b>0</b> to <b>N-1</b> and <b>S<sub>i</sub></b> is the strength of player <b>i</b>.
</p>
<h3>Input</h3>
<p>
First line of the input contains an integer T, number of test cases to follow. Each test consist of single line containing five integers <b>N, a, b, c and d</b>.
</p>
<h3>Output</h3>
<p>
For each test case, you have to print a single line containing the absolute strength difference between the two teams.
</p>
<h3>Constraints</h3>
<ul>
<b>
<li>1 ≤ T ≤ 50</li>
<li>1 ≤ N ≤ 3000000</li>
<li>0 ≤ a, b, c, d ≤ 100</li>
<p></p></b>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
4
1 1 1 1 1
2 1 1 1 1
3 1 2 3 4
4 2 3 4 1

<b>Output:</b>
1
2
763
74896
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/shiplu">shiplu</a></td>
		</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>18-12-2013</td>
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