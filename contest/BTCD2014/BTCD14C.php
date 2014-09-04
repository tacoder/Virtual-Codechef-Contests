<?php require("../../includes/header.php"); ?><h1>Sherlock and DOTA</h1><div class="content">
<p>Sherlock has recently started playing DOTA - the most addictive strategy game of all time. His favorite attack in the game is the "LVL-Death" spell of a hero called Doom Bringer. </p>
<p>Every time he upgrades this spell the chance that it deals additional damage changes. Suppose <strong>K </strong>is the power of the spell, Sherlock noticed that the spell deals additional damage to enemy heroes whose level is <strong>NOT </strong>a <strong>K-Prime</strong>* number. An enemy hero's level can be between 1 and 10^7.</p>
<p><strong>*A K-Prime number is a positive integer that is not divisible by first K prime numbers. </strong></p>
<p>Sherlock wanted to know how effective his spell can be. He wants to know the probability(as an irreducible fraction) of the spell with a power level of <strong>K </strong>dealing additional damage to an enemy hero whose level could be between <strong>L</strong> and <strong>R</strong> (both inclusive).</p>
<h3>Input</h3>
<p>First line will contain a number Q. <br />Next Q lines will contain 3 space separated integers L, R and K</p>
<h3>Output</h3>
<p>Your output should contain exactly Q lines where i-th line is the answer to the i-th query. <br />For every query print the required probability as an irreducible fraction of the form numerator/denominator.</p>
<p> </p>
<h3>Constraints</h3>
<ul>
<li><strong>1</strong> &lt;=<strong> <strong>Q</strong> </strong>&lt;= <strong>10^5</strong></li>
<li><strong>1 &lt;=<strong>L, R</strong>&lt;=10^7 </strong></li>
<li><strong>1 &lt;=K &lt;=10^6</strong></li>
</ul>
<p> </p>
<h3>Example</h3>
<pre><strong>Input:</strong>
3
1 10 1
1 20 5
10 20 3

<strong>Output:</strong>
1/2
4/5
7/11</pre><h3>Explanation:</h3>
<p>For the first test case, the numbers {1,3,5,7,9} are not divisible by the first prime number(K=1) - 2 in the range between 1 and 10(L and R). Hence the probability is 5/10 = 1/2</p>
<p><strong>Warning: Large I/O, be careful with certain languages.</strong><span> </span></p>
<div><strong><br /></strong></div>
<p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/vshriram93">vshriram93</a></td>
		</tr>
				                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>6-03-2014</td>
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