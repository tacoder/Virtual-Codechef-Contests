<?php require("../../includes/header.php"); ?><h1>Count K-Primes</h1><div class="content">
<p>Alice and Bob are studying for their class test together. The topic of the test is <i>Prime Numbers</i>. The preparation is getting too boring for their liking. To make it interesting, they turn it into a game. The winner will get an ice-cream treat from the other. </p>
<p>The game is called <i>Count K-Primes</i>. A number is a <b>k</b>-prime if it has exactly <b>k</b> <i>distinct</i> prime factors. The game is quite simple. Alice will give three numbers <b>A</b>, <b>B</b> &amp; <b>K</b> to Bob. Bob needs to tell Alice the number of <b>K</b>-prime numbers between <b>A</b> &amp; <b>B</b> (both inclusive). If Bob gives the correct answer, he gets a point. If not, Alice gets a point. They play this game <b>T</b> times.</p>
<p>Bob hasn't prepared so well. But he really wants to win the game. He wants you to tell him the correct answer.</p>
<h3>Input</h3>
<p>First line of input contains a single integer <b>T</b>, the number of times they play. Each game is described in a single line containing the three numbers <b>A</b>,<b>B</b> &amp; <b>K</b>.</p>
<h3>Output</h3>
<p>For each game, output on a separate line the number of <b>K</b>-primes between <b>A</b> &amp; <b>B</b>.</p>
<h3>Constraints:</h3>
<p><b>1 ≤ T ≤ 10000</b><br />
<b>2 ≤ A ≤ B ≤ 100000</b><br />
<b>1 ≤ K ≤ 5</b>
</p>
<h3>Example:</h3>
<pre>
<b>Input</b>
4
2 5 1
4 10 2
14 15 2
2 20 3

<b>Output</b>
4
2
2
0

</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vamsi_kavala">vamsi_kavala</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/gamabunta">gamabunta</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>3-06-2013</td>
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