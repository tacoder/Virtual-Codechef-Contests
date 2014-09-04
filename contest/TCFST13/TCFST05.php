<?php require("../../includes/header.php"); ?><h1>Lazer Tag</h1><div class="content">
<p> </p>
<p>
You always wanted to be a soldier and play it out at the battleground live. When you came at Techfest 2013, you encountered Lazer Tag, a game that satiated your innate hunger for taking aim and shooting enemies. </p>
<p>Lazer Tag consists of a group play, where you are assigned a fixed number of bullets (popularly known as Laser shots) during the whole game. Each right shoot on your target enemy, gives you one point. </p>
<p> Consider the series of your hits and misses which can be represented in the form of “x” and “o” where “o” represents a hit and “x” represents a miss. Suppose the series is of the form “xxxoooxxxxooxxo” Then your final score will be = 3^2 + 2^2 +1^2 i.e add up the squares of every maximal number of consecutive hits in the entire game play. </p>
<p> The probability of hitting the jth shot correctly (1≤j≤n) is P(j). In simpler terms, the probability of getting an “o” in the series at jth turn is P(j). You need to calculate the expected score at the end of your round.</p>
<p> </p>
<h3>Input</h3>
<p>The input consists of an integer n - number of shots. In the next line, n space-separated real numbers p(1) p(2) p(3) p(4) ...... p(n) </p>
<p> </p>
<h3>Output</h3>
<p>Print a single number - Expected score for the play. Answer will be correct if absolute or relative error doesn't exceed 10 <sup>-6</sup></p>
<p> </p>
<h3>Constraints</h3>
<p>1 ≤ n ≤ 10<sup>5</sup> <br />
0 ≤ p(j) ≤ 1 <br />
There will be atmost six digits after decimal point in given p(j).</p>
<p> </p>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 1 1

<b>Output:</b>
9.000000 

<b>Input:</b>
4
0.6 0.5 0.8 0.2
<b>Output:</b>
4.556000 


<p> </p>
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/divyambansal">divyambansal</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>25-10-2013</td>
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