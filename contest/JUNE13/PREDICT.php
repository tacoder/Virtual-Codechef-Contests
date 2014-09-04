<?php require("../../includes/header.php"); ?><h1>Predictopus</h1><div class="content">

<p>Chef Datta likes betting in Indian Premier League very much.</p>
<p>He has <b>10000</b> rupees. Today the match is between <i>team A</i> and <i>team B</i>. The winning probability of <i>team A</i> is <b>P<sub>A</sub></b>, and hence winning probability of <i>team B</i> is <b>P<sub>B</sub> = 1 − P<sub>A</sub></b>. </p>
<p>Datta is free to bet any integral amount of money on any of the two teams as long as the total amount of money bet is at most <b>10000</b> rupees.<br />
Help him know the expected amount of money he will eventually have if today he places his bet(s) optimally. </p>
<h3>Rules of the game:</h3>
<p>If <i>team X</i> with winning probability <b>P<sub>X</sub></b> actually wins and someone bets <b>M</b> rupees on this team, he will gain <b>(2*(1−P<sub>X</sub>)) * M</b> rupees.</p>
<p>If <i>team X</i> with winning probability <b>P<sub>X</sub></b> actually loses and someone bets <b>N</b> rupees on this team, he will just lose <b>N</b> rupees.</p>
<h3>Input</h3>
<p>First line contains single integer <b>T</b>, the number of testcases. Then <b>T</b> lines follow, each line contains <b>P<sub>A</sub></b> the probability that <i>team A</i> wins.</p>
<h3>Output</h3>
<p>For each test case output single line containing the expected amount of money Datta will eventually have today if he places his bet(s) optimally. Your answer will be accepted if the absolute error is less than <b>10<sup>−6</sup></b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100001 (10<sup>5</sup>+1)</b></li>
<li><b>0.0</b> ≤ <b> P<sub>A</sub> </b> ≤ <b>1.0</b></li>
<li><b>P<sub>A</sub></b> has at most <b>5</b> digits after the decimal point.</li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
1
0.510

<b>Output:</b>
10098
</pre><p></p>
<h3>Example bet:</h3>
<p>Look at the following situation:</p>
<p>
<img src="http://codechef.com/download/PREDICT.png" width="238" height="97" alt="june-codechef" /></p>
<p>
If chef  Datta bets <b>6,000</b> on <i>team A</i> and <b>4,000</b> on <i>team B</i>, the expected amount of money he will have after the bet is settled is <b>10,018</b>. Apparently that is not the best he can do <b>;)</b></p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/mkagenius">mkagenius</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/tuananh93">tuananh93</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-04-2013</td>
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