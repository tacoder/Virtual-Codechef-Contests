<?php require("../../includes/header.php"); ?><h1>Exponential Game</h1><div class="content">
<h3> Read problems statements in Russian <a target="_blank" href="http://www.codechef.com/download/translated/LTIME05/russian/EXPGAME.pdf">here</a></h3>
<p> Little Chef is trying to learn exponents. He is especially interested in a number raised to the power of itself. Head Chef being his mentor has decided to give him a two player game to play. The game is as follows: You are given n piles of stones. The piles have <b>a_1, a_2 .. a_n</b> number of stones . Each player on his/her turn can remove <b>x</b> number of stones where <b>x</b> = <b>n^n</b> (for some natural number <b>n &gt; 0</b>) from any one pile. The player who is unable to move loses. Head Chef is playing this game with the Little Chef and being senior he gives the first move to the Little Chef . </p>
<h3>Input</h3>
<p>Input Description.</p>
<ul>
<li>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows:</li>
<li>The first line of each test case contains a single integer <b>N</b> denoting the number of piles. The second line contains <b>N</b> space-separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the number of stones in each pile. </li>
</ul>
<h3>Output</h3>
<p>Output description.</p>
<ul>
<li>For each test case, output a single line containing the string "Head Chef" if Head Chef will win the game or the string "Little Chef" is Little Chef will win the game (assuming optimal play by both players). </li>
</ul>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>a_i</b> ≤ <b>100000</b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
1
4

<b>Output:</b>
Little Chef
</pre><h3>Explanation</h3>
<p><b>Example case 1.</b> Little Chef can remove all the four stones and Head Chef will lose. </p>
<h3> Scoring </h3>
<p> <b> Subtask 1 (16 points): </b> <b> N = 1 </b>  <br /><br />
<b> Subtask 2 (24 points): </b> <b> N = 2 </b> <br /><br />
<b> Subtask 3 (60 points):</b> <b> See constraints </b> <br />
</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vineetpaliwal">vineetpaliwal</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Rubanenko">Rubanenko</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>16-10-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>0.5 sec</td>
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