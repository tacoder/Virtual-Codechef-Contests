<?php require("../../includes/header.php"); ?><h1>Guessing Game</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/mandarin/GUESS.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/JUNE14/russian/GUESS.pdf">Russian</a>.</h3>
<p>Alice and Bob, both have to drink water. But they both don't want to go, so they will play a game to decide who will fetch water for both of them. Alice will choose a number randomly between <b>1</b> and <b>N</b> (both inclusive) and Bob will choose a number randomly between <b>1</b> and <b>M</b> (both inclusive). Both will write their numbers on a slip of paper. If sum of numbers choosen by both is <b>odd</b>, then Alice will go, else Bob will go.<br /><br />
What is probability that Alice will go?
</p>
<h3>Input</h3>
<p>First line contains, <b>T</b>, the number of testcases. Each testcase consists of <b>N</b> and <b>M</b> in one line, separated by a space.</p>
<h3>Output</h3>
<p>For each test case, output a single line containing probability as an <a href="http://en.wikipedia.org/wiki/Irreducible_fraction">irreducible fraction</a>.</p>
<h3>Constraints</h3>
<ul>
<li><b>1</b> ≤ <b>T</b> ≤ <b>10<sup>5</sup></b></li>
<li><b>1</b> ≤ <b>N,M</b> ≤ <b>10<sup>9</sup></b></li>
</ul>
<h3>Example</h3>
<pre><b>Input:</b>
3
1 1
1 2
2 3
<b>Output:</b>
0/1
1/2
1/2
</pre><h3>Explanation</h3>
<p>#test1: The only way is when Alice and Bob both choose 1. So, Alice won't have to go because sum is even.<br /><br />
#test2: The different ways are (1,1) and (1,2), where first term denotes the number choosen by Alice. So of all possible cases (ie. 2) in only 1 case Alice has to go. Therefore, probability is 1/2.<br /><br />
#test3: The different ways are (1,1), (1,2), (1,3), (2,1), (2,2), (2,3) where first term denotes the number choosen by Alice. So of all possible cases (ie. 6) in only 3 cases Alice has to go. Therefore, probability is 1/2.</p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/darkshadows">darkshadows</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/shiplu">shiplu</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>20-04-2014</td>
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