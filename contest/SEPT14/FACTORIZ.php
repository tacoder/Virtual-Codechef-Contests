<?php require("../../includes/header.php"); ?><h1>Factorisation</h1><div class="content">
<h3> Read problems statements in <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/mandarin/FACTORIZ.pdf">Mandarin Chinese </a> and <a target="_blank" href="http://www.codechef.com/download/translated/SEPT14/russian/FACTORIZ.pdf">Russian</a>.</h3>
<p>The statement of this problem is as easy as never before.<br />
You are given an integer <b>N</b>, you need to find <b>M</b> positive integers <b>A<sub>1</sub>, A<sub>2</sub>, A<sub>3</sub>, ..., A<sub>M</sub></b>, so that <b>A<sub>1</sub>*A<sub>2</sub>*A<sub>3</sub>*...*A<sub>M</sub></b> would be equal to <b>N</b>. You should maximize the number <b>M</b>. </p>
<h3>Input</h3>
<p>
The first line of the input contains the integer <b>T</b>, denoting the number of the test cases.</p>
<p>Then <b>T</b> lines follow, each one is describing a single test case and contains a single positive integer <b>N</b>.
</p>
<h3>Output</h3>
<p>
For each test case, output the integer <b>M</b> on the first line of the testcases' output. Then, output <b>M</b> lines, where the <b>i</b>-th should contain the number <b>A<sub>i</sub></b>. <b>A<sub>i</sub></b> should be a positive integer, greater than <b>1</b>.</p>
<h3>Scoring</h3>
<p>
For each individual file, your score will be calculated as the sum of <b>M<sup>2</sup></b> over all the test cases in this file. Your score for the problem is the average of individual testcases' files scores. The number of points you'll get in the ranklist will be equal to <b>YourScore/BestScore</b>, where <b>YourScore</b> is naturally your score and <b>BestScore</b> is the best score, gained so far in this problem.
</p>
<p>
Please note that the score you get during the competition is the score on the 20% of the test data. The score on the complete test data will be available after the contest.
</p>
<h3>Constraints</h3>
<li><b>1</b> ≤ <b>T</b> ≤ <b>100</b></li>
<li><b>1</b> ≤ <b>N</b> ≤ <b>10<sup>1000</sup></b></li>
<p> </p>
<h3>Test cases generation</h3>
<p>
Each of <b>10</b> official test cases will have <b>T = 100</b>. Inside each test file, the cases will be divided in the following <b>4</b> groups:  </p>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>18</sup></b>, <b>N</b> is picked randomly and uniformly - 10% of all test data</li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>18</sup></b>,  <b>N</b> is picked not randomly - 15% of all test data</li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>1000</sup></b>, the length of <b>N</b> is chosen randomly. All the digits are generated randomly - 50% of all test data.</li>
<li><b>2</b> ≤ <b>N</b> ≤ <b>10<sup>1000</sup></b>, all the prime divisors of <b>N</b> don't exceed <b>10<sup>18</sup></b> - 25% of the test data. </li>
<h3>Example</h3>
<pre><b>Input:</b>
4
100
111
1000
48598496894

<b>Output:</b>
2
10
10
2
37
3
2
10
100
1
48598496894

</pre><p> </p>    </div><table cellspacing="0" cellpadding="0" align="left">
        <tr>
            <td width="14%">Author:</td>
            <td><a href="/users/sereja">sereja</a></td>
		</tr>
						<tr>
					<td width="14%">Tester:</td>
					<td><a href="/users/xcwgf666">xcwgf666</a></td>
				</tr>
								
		                
        		<tr>
            <td width="14%">Date Added:</td>
            <td>7-09-2013</td>
        </tr>
        <tr>
            <td width="14%">Time Limit:</td>
            <td>3 sec</td>
        </tr>
        <tr>
            <td width="14%">Source Limit:</td>
            <td>50000 Bytes</td>
        </tr>
        <tr>
            <td width="14%">Languages:</td>
            <td>ADA, ASM, BASH, BF, C, C99 strict, CAML, CLOJ, CLPS, CPP 4.3.2, CPP 4.8.1, CPP11, CS2, D, ERL, FORT, FS, GO, HASK, ICK, ICON, JAR, JAVA, JS, LISP clisp, LISP sbcl, LUA, NEM, NICE, NODEJS, PAS fpc, PAS gpc, PERL, PERL6, PHP, PIKE, PRLG, PYTH, PYTH 3.1.2, RUBY, SCALA, SCM guile, SCM qobi, ST, TCL, TEXT, WSPC</td>
        </tr>
    </table><?php require("../../includes/footer.php"); ?>