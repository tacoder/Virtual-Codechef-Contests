<?php require("../../includes/header.php"); ?><h1>The Grand Cook Off</h1><div class="content">

<p>Chef is planning a grand cooking tournament for aspiring chefs in the region.<br />
The competition progresses with a number of one-on-one elimination rounds until only one chef remains.<br />
For each round, two chefs are chosen at random for a cook-off.<br />
The loser of the cook-off is elimited, while the winner moves on.<br />
Additionally, each chef begins with a positive number of prize tokens<br />
(some chefs begin with more than others, based on their performance in a qualification round).<br />
The winner of each cook-off receives all of the loser's prize tokens, and the loser is<br />
awarded a prize based on the number of prize tokens he/she had accrued.</p>
<p>The final cook-off always receives the most publicity.<br />
Your task it to compute the expected difference between the number of prize tokens of the final two<br />
competitors before the final cook-off.<br />
You will be given the number of tokens each chef begins with.</p>
<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases (at most 50).<br />
Each test case consists of a single line, beginning with an integer C,<br />
the number of chefs in the competition, followed by C positive integers each describing the number<br />
of prize tokens a chef begins with.<br />
The total number of prize tokens among all chefs will be between 1 and 100, inclusive.</p>
<h3>Output</h3>
<p>For each test case, output the expected difference in prize tokens, rounded to 6 places<br />
after the decimal point.</p>
<h3>Sample Input</h3>
<pre>3
3 1 1 1
3 1 1 2
4 10 10 10 30
</pre><h3>Sample Output</h3>
<pre>1.000000
1.333333
26.666667
</pre>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/friggstad">friggstad</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-04-2011</td>
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