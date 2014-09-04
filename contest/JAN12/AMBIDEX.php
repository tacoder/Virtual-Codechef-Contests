<?php require("../../includes/header.php"); ?><h1>Ambidextrous Chefs</h1><div class="content">

<p>
A recent spike in demand for competent chefs has caused the emergence of a highly specialized training program,<br />
in which chefs are trained to use 2 tools simultaneously (one in each hand).<br />
These chefs, called "ambidextrous chefs", can theoretically perform the same work as 2 ordinary chefs.<br />
The problem with these ambidextrous chefs is that their training is so specific that they cannot use any<br />
tools except for the 2 tools they can use simultaneously.
</p>
<p>
Head Chef wants to form chef teams of ambidextrous chefs.<br />
In order to form a complete team, for every tool present there must be at least one chef capable of operating it.<br />
Chef wants to create as many teams as possible, but at the same time hire as few chefs as possible.  See the scoring section for details.
</p>
<h3>Input</h3>
<p>Input begins with an integer T, the number of test cases.<br />
Each test case begins with 2 integers N and M.<br />
N is the number of different tools, and M the number of ambidextrous chefs.<br />
2 lines follow with exactly M integers each, each between 1 and N.<br />
The i-th integer of each line indicates a tool that the i-th chef can use.<br />
It is guaranteed that the i-th integer of the first line will be different from the i-th integer of the second line.<br />
It is further guaranteed that each tool will be usable by at least one chef.
</p>
<h3>Output</h3>
<p>For each test case, output M integers on a line, one per ambidextrous chef.<br />
The number should be 0 if the chef should not be hired.<br />
Otherwise, the number should be any positive number not exceeding 10000 to indicate the team to which that chef should be assigned.<br />
Chefs with the same team number will be assigned to the same team.
</p>
<h3>Scoring</h3>
<p>
Your score for each test case is (C*N-H)/M, where C is the number of complete chef teams formed, N is the number of tools, H is the total number of chefs hired, and M is the total number of chefs.<br />
If this value is non-positive for any test case, the submission will be judged "Wrong Answer" instead.<br />
Your score for each test file is the average of the scores for the individual test cases.<br />
Your overall score is the average of your scores on the individual test files.<br />
Note that optimal solutions are not required, but better solutions will earn more points.
</p>
<h3>Sample Input</h3>
<pre>2
5 9
5 1 5 5 1 3 4 4 1
3 2 2 3 5 1 2 2 4
8 12
6 6 8 7 1 1 6 5 3 8 7 6
2 8 1 5 8 2 7 7 1 3 4 4
</pre><h3>Sample Output</h3>
<pre>2 2 1 3 3 1 3 2 1
2 0 1 1 2 1 0 2 2 1 2 1

</pre><p>The score for the first test case is (3*5-9)/9 = 0.666667,<br />
and the score for the second test case is (2*8-10)/12 = 0.5.<br />
Hence the overall score is 0.583333.
</p>
<h3>Test case generation</h3>
<p>
For each official test file, T is 10.  For each test case, N is chosen<br />
randomly between 10 and 100, inclusive, and M between 200 and 1000,<br />
inclusive.  Then ceiling(2*M/(N-1)) of each type of tool is placed in<br />
a sack, and one by one each of the chefs will randomly remove 2<br />
different tools from the sack.  If after all chefs have selected tools<br />
there is a tool that none of the chefs selected, the process is<br />
restarted with the same values of N and M.
</p>
    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/pieguy">pieguy</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/laycurse">laycurse</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>11-10-2011</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>6 sec</td>
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