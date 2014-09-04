<?php require("../../includes/header.php"); ?><h1>Barcelona Gameplay Tactics</h1><div class="content">

<p>As we all know, F.C. Barcelona is the best soccer team of our era! Their entangling and mesmerizing game style usually translates into very high ball possession, consecutive counter-attack plays and goals. Lots of goals, thanks to the natural talent of their attacker and best player in history, Lionel Andres Messi.</p>
<p>However, at the most prestigious tournament of individual teams, the UEFA Champions League, there are no guarantees and believe it or not, Barcelona is in trouble.... They are tied versus Chelsea, which is a very defending team that usually relies on counter-strike to catch opposing teams off guard and we are in the last minute of the match. So Messi decided to settle things down for good and now he is conducting the ball on his teams' midfield and he will start a lethal counter-attack :D</p>
<p>After dribbling the <b>2</b> strikers from Chelsea, he now finds himself near the center of the field and he won't be able to dribble the entire team on his own, so he will need to pass the ball to one of his teammates, run forward and receive the ball once again to score the final goal.</p>
<p>Exactly <b>K</b> players are with him on his counter-attack and the coach, Tito Villanova knows that this counter-attack will end in a goal only if after <b>exactly</b> <b>N</b> passes are performed between the players, Messi ends up with the ball.</p>
<p><b>(Note that the ball only needs to end with Messi after exactly N passes are performed between all the K+1 players, i.e. Messi can receive the ball several times during the N passes. See the 2nd test case explanation for further clarification. )</b></p>
<p>However, he realized that there are many scenarios possible for this, so he asked you, his assistant coach, to tell him in how many ways can Messi score the important victory goal. So help him!!</p>
<h3>Input</h3>
<p>Input will contain a number <b>T</b> denoting the number of test cases.</p>
<p>Then <b>T</b> test cases follow, each one consisting of two space-sparated integers <b>N</b> and <b>K</b>.</p>
<h3>Output</h3>
<p>For each test case, output a single integer, the number of ways the winning play might happen modulo <b>1000000007 (10<sup>9</sup>+7)</b>.</p>
<h3>Constraints</h3>
<p> </p>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>1000</b></li>
<li><b>1</b> ≤ <b>K</b> ≤ <b>10</b></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
2
2 4
4 2

<b>Output:</b>
4
6
</pre><h3>Explanation</h3>
<p>In the first test case, say four players with Messi are Xavi, Busquets, Iniesta and Jordi Alba. Then the ways of the winning play to happen when <b>exactly</b> 2 passes are to be performed are:<br />1) Messi - Xavi - Messi<br />2) Messi - Busquets - Messi<br />3) Messi - Iniesta - Messi<br />4) Messi - Alba - Messi</p>
<p>In the second test case, also say that two players with Messi are Xavi and Iniesta. There are <b>6</b> ways for the winning play to happen when exactly <b>4</b> passes are performed. All the examples of such winning play are:<br />1) Messi - Xavi - Messi - Iniesta - Messi<br />2) Messi - Xavi - Iniesta - Xavi - Messi<br />3) Messi - Xavi - Messi - Xavi - Messi<br />4) Messi - Iniesta - Messi - Iniesta - Messi<br />5) Messi - Iniesta - Messi - Xavi - Messi<br />6) Messi - Iniesta - Xavi - Iniesta - Messi</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kuruma">kuruma</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>28-10-2012</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>