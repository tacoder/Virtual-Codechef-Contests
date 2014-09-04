<?php require("../../includes/header.php"); ?><h1>Lucy and the Number Game</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME06/russian/NUMBERS.pdf">here</a></h3>
<p>Lucy had recently learned the game, called Natural Numbers.</p>
<p>The rules of the game are really simple. There are <b>N</b> players. At the same time, every player says one natural number. Let's call the number said by the <b>i</b>-th player <b>A<sub>i</sub></b>. The person with the smallest unique number (that is, the smallest number that was not said by anybody else) wins. Sometimes, there is a case when there are no unique numbers at all. Then the game is obviously a draw, so nobody wins it.</p>
<p>Sometimes, it's hard to determine the winner, especially, when the number of players is enormous. So in this problem, your assignment will be: given the names of the players and the numbers every of them have said. Please, tell the name of the winner, or determine that nobody wins.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.<br /><br />
The first line of every test case consists of a single integer <b>N</b> - the number of players. Then, <b>N</b> lines will follow. Each of these <b>N</b> lines will consist of the player's name and the number <b>A<sub>i<sub></sub></sub></b> said by her, separated by a single space.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing an answer to the corresponding test case - the name of the winner, or a string "Nobody wins.", if nobody wins the game.</p>
<h3>Example</h3>
<pre><b>Input:</b>
2
5
Kouta 1
Yuka 1
Mayu 3
Lucy 2
Nana 5
2
Lucy 2
Nana 2

<b>Output:</b>
Lucy
Nobody wins.
</pre><h3>Scoring</h3>
<p>Subtask 1 (17 points): <b>T</b> = 10000, 1 &lt;= <b>N</b> &lt;= 10, 1 &lt;= <b>A<sub>i</sub></b> &lt;= 10 <br /><br />
Subtask 2 (19 points): <b>T</b> = 10000, 1 &lt;= <b>N</b> &lt;= 10, 1 &lt;= <b>A<sub>i</sub></b> &lt;= 2*10<sup>9</sup><br /><br />
Subtask 3 (30 points): <b>T</b> = 100, 1 &lt;= <b>N</b> &lt;= 1000, 1&lt;= <b>A<sub>i</sub></b> &lt;= 2*10<sup>9</sup><br /><br />
Subtask 4 (34 points): <b>T</b> = 10, 1 &lt;= <b>N</b> &lt;= 10000, 1 &lt;= <b>A<sub>i</sub></b> &lt;= 2*10<sup>9</sup><br /><br />
You can safely assume that in all the test cases the length of any name will not exceed five letters. All the players'  names  are unique.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/xcwgf666">xcwgf666</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>13-10-2013</td>
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