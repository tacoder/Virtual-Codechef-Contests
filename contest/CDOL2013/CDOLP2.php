<?php require("../../includes/header.php"); ?><h1>Undisputed Best Team</h1><div class="content">

<p>
  There are <b>N</b> players named as 1,2,...,<b>N</b>. Each player has a skill value(call it <b>S</b>) which is a positive integer.<br />
 Higher the skill value better the player. All players are standing in a circle in the order 1,2,3...<b>N</b>.<br />
Each player have a dispute with some players standing next to him. Players standing next to 1 are {2,3,...,<b>N</b>}<br />
and players standing next to <b>N</b> are {1,2,3,...,<b>N</b>-1}<br />
<br/>You are given <b>N</b> the numbers of players, the skill value S of every player and <b>D</b> the player's dispute number.<br />
If the dispute number of a player is <b>D</b> then he has dispute with <b>D</b> players standing right next to him.<br />
You have to form a un-disputed(such that no player in the team has dispute with any other player in the team) team with maximum skill. The skill of a team is the sum of skill values of all the players in the team.<br />
</br/></p>
<h3>Input</h3>
<p>
First line will contain the number of test cases <b>T</b>.<br />
For each test case the first line will contain <b>N</b>, numbers of players.<br />
Second line of the test case will contain skill values(<b>S</b>) of all <b>N</b> players separated by space.<br />
Third line of the test case will contain the dispute numbers(<b>D</b>) of all <b>N</b> players separated by space.<br />
<br/>There is no empty line between different test cases.<br />
</br/></p>
<h3>Output</h3>
<p>
For each test case the output will be an integer in a new line, which will be the maximum skill of any non disputed team in the corresponding test case.
</p>
<h3>Input Constrain:</h3>
<pre>
1 &lt;= T &lt;= 20
2 &lt;= N &lt;= 100
1 &lt;= S &lt;= 1000000 (skill value)
0 &lt;= D &lt;= N-1 (dispute number)
</pre><h3>Example:</h3>
<pre>
<b>Input:</b>
3
4
4 1 5 3
1 1 2 0
3
2 10 5
1 1 1
4
8 7 4 6
1 1 1 1

<b>Output:</b>
7
10
13

</pre><p><b>Explanation:</b></p>
<p>
In 1st test case:<br/><br />
1 has dispute with {2}, 2 has dispute with {3}, 3 has dispute with {4,1} and 4 has dispute with none.<br />
So possible non disputed teams can be:<br/><br />
{1,4} skill=7<br/><br />
{2,3} skill=4<br/><br />
{3}   skill=5<br/><br />
Teams {1}, {2}, {4} are also possible.<br/><br />
So maximum skill of any un-disputed team = 7<br />
</br/></br/></br/></br/></br/></br/></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/abhics1">abhics1</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-02-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>2 sec</td>
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