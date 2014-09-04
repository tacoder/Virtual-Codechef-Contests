<?php require("../../includes/header.php"); ?><h1>Levy Conjecture</h1><div class="content">

<h3>Problem Statement</h3>
<p style="text-align:justify"><b>Levy's conjecture</b>, named after <b>Hyman Levy</b>, states that all odd integers greater than <b>5</b> can be represented as the sum of an odd prime number and an even semiprime. To put it algebraically, <b>2n + 1 = p + 2q</b> always has a solution in primes <b>p</b> and <b>q</b> (not necessary to be distinct) for <b>n &gt; 2</b>. <i>(Source: <a href="http://en.wikipedia.org/wiki/Lemoine's_conjecture">Wikipedia</a>)</i></p>
<p style="text-align:justify">In this problem, given a positive integer <b>N</b> (not necessary to be odd integer greater than <b>5</b>). Your task is to calculate how many distinct ordered pairs <b>(p, q)</b> such that <b>N = p + 2q</b>, where <b>p</b> and <b>q</b> are primes.</p>
<h3>Input</h3>
<p style="text-align:justify">The first line of input contains an integer <b>T</b>, denoting the number of test cases. Then <b>T</b> test cases follow.</p>
<p style="text-align:justify">Each test case consists of exactly one line containing an integer <b>N</b>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100000 (10<sup>5</sup>)</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10000 (10<sup>4</sup>)</b></li>
</ul>
<h3>Output</h3>
<p style="text-align:justify">For each test case, output the number of ordered pairs <b>(p, q)</b> of primes such that <b>N = p + 2q</b>.</p>
<h3>Example</h3>
<pre><b>Input:</b>
3
2
7
11

<b>Output:</b>
0
1
2
</pre><h3>Explanation</h3>
<p><b>Case #1:</b> There are no ordered pairs <b>(p, q)</b> such that <b>p + 2q = 2</b>.</p>
<p><b>Case #2:</b> There is only one ordered pair <b>(p, q) = (3, 2)</b> such that <b>p + 2q = 7</b>.</p>
<p><b>Case #3:</b> There are two ordered pairs <b>(p, q) = (7, 2), (5, 3)</b> such that <b>p + 2q = 11</b>.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/kaushik_iska">kaushik_iska</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-03-2013</td>
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