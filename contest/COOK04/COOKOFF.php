<?php require("../../includes/header.php"); ?><h1>Choosing Cook Off Problems</h1><div class="content">

<p>Dave is having trouble choosing problems for the upcoming cook-off.<br />
The admins will be mad at him if he doesn't select problems with a gradually increasing level of difficulty.<br />
To make his task easier, Dave has assigned a difficulty rating to each problem he has written.<br />
A difficulty gap is defined as the absolute difference in difficulty rating between 2 problems,<br />
where there is no other problem with a difficulty rating between them.<br />
For example, if problems are chosen with difficulty ratings of 4, 7, 13, and 19, then the difficulty<br />
gaps are 3, 6, and 6.<br />
Dave has already chosen 2 problems for the cook-off,<br />
and wants to choose the remaining problems in a way that minimizes the largest difficulty gap.
</p>
<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases.<br />
Each test case begins with 4 integers N M C<sub>1</sub> C<sub>2</sub> on a line.<br />
N is the number of problems to choose from (not including the two already chosen problems).<br />
M is the number of problems that must be chosen (in addition to the two that have already been chosen).<br />
C<sub>1</sub> and C<sub>2</sub> are the difficulty ratings of the 2 problems that have already been chosen.<br />
Following this is a line with exactly N integers, giving the difficulty ratings of the remaining problems.<br />
Again, the 2 already chosen problems are not included in the values of N and M.<br />
A blank line separates each test case, including a blank line after the number of test cases.
</p>
<h3>Output</h3>
<p>For each test case, output on a single line the minimum possible value of the largest difficulty gap.</p>
<h3>Sample Input:</h3>
<pre>3

3 1 0 100
16 45 61

5 0 50 80
20 40 60 80 100

6 3 0 100
21 64 34 55 64 89
</pre><h3>Sample Output:</h3>
<pre>55
30
34
</pre><h3>Contsraints</h3>
<p>T≤250<br />
0≤M≤N≤1000<br />
All difficulty ratings are between 0 and 1000000, inclusive.</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
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
            <td>9-11-2010</td>
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
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TEXT, WSPC</td>
        </tr>
    </table> <?php require("../../includes/footer.php"); ?>