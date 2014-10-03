<?php require("../../includes/header.php"); ?><h1>Chef and easy problem</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/mandarin/CHEFA.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/LTIME16/russian/CHEFA.pdf">Russian</a>.</h3>

<p>
Chef and Roma are playing a game. Rules of the game are quite simple.<br />
Initially there are <b>N</b> piles of stones on the table.<br />
In each turn, a player can choose one pile and remove it from the table.<br />
Each player want to maximize the total number of stones removed by him.<br />
Chef takes the first turn.
</p>
<p>
Please tell Chef the maximum number of stones he can remove assuming that both players play optimally.</p>
<h3>Input</h3>
<p>The first line of the input contains an integer <b>T</b> denoting the number of test cases. The description of <b>T</b> test cases follows.</p>
<p>The first line of each test case contains a single integer <b>N</b> denoting the number of piles.</p>
<p>The second line contains <b>N</b> space separated integers <b>A<sub>1</sub></b>, <b>A<sub>2</sub></b>, ..., <b>A<sub>N</sub></b> denoting the number of stones in each pile.</p>
<h3>Output</h3>
<p>For each test case, output a single line containg the maximum number of stones that Chef can remove.</p>
<h3>Constraints</h3>
<ul>
<li>1 ≤ <b>A<sub>i</sub></b> ≤ 10<sup>9</sup></li>
<li>Subtask 1 (35 points): <b>T</b> = 10, 1 ≤ <b>N</b> ≤ 1000</li>
<li>Subtask 2 (65 points): <b>T</b> = 10, 1 ≤ <b>N</b> ≤ 10<sup>5 </sup></li>
</ul>

<h3>Example</h3>
<pre>
<b>Input:</b>
2
3
1 2 3
3
1 2 1

<b>Output:</b>
4
3
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/furko">furko</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/stzgd">stzgd</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>17-09-2014</td>
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
    </table><?php require("../../includes/footer.php"); ?>