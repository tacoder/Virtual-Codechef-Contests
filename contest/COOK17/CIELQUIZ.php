<?php require("../../includes/header.php"); ?><h1>Ciel and Quiz Game</h1><div class="content">

<p>
Chef Ciel is going to organize a quiz game in her restaurant.<br />
Ciel has <strong>N</strong> problems, and she will choose <strong>K</strong> problems for the quiz game.<br />
Every participant has to answer all <strong>K</strong> problems.
</p>
<p>
Ciel thinks that if a participant solves all <strong>K</strong> problems correctly, the participant will get bored,<br />
and if a participant solves less problems correctly, the participant will feel sad.<br />
Therefore, Ciel decides to choose <strong>K</strong> problems maximizing the probability that participants will solve exactly <strong>K</strong>-1 problems correctly.
</p>
<p>
The <strong>N</strong> problems are numbered from 1 to <strong>N</strong>.<br />
Ciel assumes, the problem <strong>i</strong> will be solved correctly with probability <strong>P<sub>i</sub></strong>% for each <strong>i</strong>, and these are statistically independent of each other.
</p>
<p>
Can you tell what problems are chosen by Ciel?
</p>
<h3>Input</h3>
<p>
The first line contains an integer <strong>T</strong>, the number of test cases.<br />
Then <strong>T</strong> test cases follow.<br />
The first line for each test case has 2 integers <strong>N</strong> and <strong>K</strong>.<br />
The next line has <strong>N</strong> integers <strong>P</strong><sub>1</sub>, <strong>P</strong><sub>2</sub>, ..., <strong>P<sub>N</sub></strong>.
</p>
<h3>Output</h3>
<p>
For each test case, print <strong>K</strong> distinct integers denoting the numbers of chosen problems.<br />
If there are multiple sets of problems maximizing the probability, then anyone will do.
</p>
<h3>Constraints</h3>
<p>
1 ≤ <strong>T</strong> ≤ 20<br />
1 ≤ <strong>K</strong> ≤ <strong>N</strong> ≤ 36<br />
0 ≤ <strong>P<sub>i</sub></strong> ≤ 100
</p>
<h3>Sample Input</h3>
<pre>4
3 2
70 80 90
9 1
10 20 30 40 50 60 70 80 90
1 1
10
10 5
90 90 90 90 90 90 90 90 90 90</pre><h3>Sample Output</h3>
<pre>1 2
1
1
5 8 1 4 9</pre><h3>Output details</h3>
<p>
In the first case, all patterns choosing 2 problems are:<br />
  If problems 1 and 2 are chosen, the probability is 0.7 * (1 - 0.8) + (1 - 0.7) * 0.8 = 0.14 + 0.24 = 0.38<br />
  If problems 1 and 3 are chosen, the probability is 0.7 * (1 - 0.9) + (1 - 0.7) * 0.9 = 0.07 + 0.27 = 0.34<br />
  If problems 2 and 3 are chosen, the probability is 0.8 * (1 - 0.9) + (1 - 0.8) * 0.9 = 0.08 + 0.18 = 0.26<br />
Therefore, Ciel will choose problems 1 and 2.
</p>
<p>
In the fourth case, there are multiple solutions. Any 5 distinct intergers from 1 to 10 will be accepted.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/laycurse">laycurse</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/Shangjingbo">Shangjingbo</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>22-11-2011</td>
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