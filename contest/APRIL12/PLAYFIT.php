<?php require("../../includes/header.php"); ?><h1>Fit to Play</h1><div class="content">

<p><i>Who's interested in football?</i></p>
<p>Rayne Wooney has been one of the top players for his football club for the last few years. But unfortunately, he got injured during a game a few months back and has been out of play ever since.</p>
<p>He's got proper treatment and is eager to go out and play for his team again. Before doing that, he has to prove to his fitness to the coach and manager of the team. Rayne has been playing practice matches for the past few days. He's played N practice matches in all.</p>
<p>He wants to convince the coach and the manager that he's improved over time and that his injury no longer affects his game. To increase his chances of getting back into the team, he's decided to show them stats of any 2 of his practice games. The coach and manager will look into the goals scored in both the games and see how much he's improved. If the number of goals scored in the 2nd game(the game which took place later) is greater than that in 1st, then he has a chance of getting in. Tell Rayne what is the maximum improvement in terms of goal difference that he can show to maximize his chances of getting into the team. If he hasn't improved over time, he's not fit to play. Scoring equal number of goals in 2 matches will not be considered an improvement. Also, he will be declared unfit if he doesn't have enough matches to show an improvement.</p>
<p>
<h3>Input:</h3>
</p><p>The first line of the input contains a single integer T, the number of test cases.<br />
Each test case begins with a single integer N, the number of practice matches Rayne has played.<br />
The next line contains N integers. The ith integer, gi, on this line represents the number of goals Rayne scored in his ith practice match. The matches are given in chronological order i.e. j &gt; i means match number j took place after match number i.</p>
<p>
<h3>Output:</h3>
</p><p>For each test case output a single line containing the maximum goal difference that Rayne can show to his coach and manager. If he's not fit yet, print "UNFIT".</p>
<p>
<h3>Constraints:</h3>
</p><p>1&lt;=T&lt;=10<br />
1&lt;=N&lt;=100000<br />
0&lt;=gi&lt;=1000000 (Well, Rayne's a legend! You can expect him to score so many goals!)</p>
<h3>Example:</h3>
<p><b>Input:</b><br />
3<br />
6<br />
3 7 1 4 2 4<br />
5<br />
5 4 3 2 1<br />
5<br />
4 3 2 2 3</p>
<p><b>Output:</b><br />
4<br />
UNFIT<br />
1</p>
<p><b>Explanation:</b><br />
In the first test case, Rayne can choose the first and second game. Thus he gets a difference of 7-3=4 goals. Any other pair would give him a lower improvement.<br />
In the second test case, Rayne has not been improving in any match. Thus he's declared UNFIT.</p>
<p><b><i>Note:</i></b> Large input data. Use faster I/O methods. Prefer scanf,printf over cin/cout.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-01-2012</td>
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